<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\User\Entities\User_Social;
use Modules\User\Entities\User;
use Auth;
use Socialite;

class SocialController extends Controller {
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider() {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback() {
        $user = Socialite::driver('facebook')->user();
        //tim trong database xem nguoi nay da dang nhap chua
        $social = User_Social::where('social_id', $user->id)->where('type_social', 'facebook')->first();
        // neu co thi cho login
        if ($social) {
            $u = User::where('id', $social->user_id)->first();
            Auth::loginUsingId($u->id);
        } else { // neu chua thi them moi vao 2 bang
            $new = new User_Social();
            $new->social_id = $user->id;
            $new->type_social = 'facebook';
            //dong thoi them vao bang user
            $u = User::where('email', $user->email)->first();
            if (!$u) {
                $u = User::create([
                    'fullname' => $user->name,
                    'email' => $user->email,
                ]);
            }
            $new->user_id = $u->id;
            $new->save();

            Auth::loginUsingId($u->id);
            return redirect(route('home'));
        }
        return redirect(route('home'));
    }
}
