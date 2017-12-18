<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Auth\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Modules\User\Entities\User;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response

     */
    public function getLogin()
    {
      if (Auth::check()) {
       return redirect(route('list.user'));
     }
     return view('auth::login');
   }


   public function postLogin(LoginRequest $request)
   {

    $username = $request->username; //the input field has name='username' in form

    if(filter_var($username, FILTER_VALIDATE_EMAIL)) {
        //user sent their email 
        Auth::attempt(['email' => $username, 'password' => $request->password]);
    } else {
        //they sent their username instead 
        Auth::attempt(['username' => $username, 'password' => $request->password]);
    }

    if (Auth::check()) {
      return redirect(route('list.user'));
    }
    else{
      $notification = array(
        'message' => 'Tài khoản hoặc mật khẩu sai',
        'alert-type' => 'error'
      );
      return redirect(route('login'))->with($notification);

    }
  }

}
