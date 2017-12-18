<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Auth\Http\Requests\RegisterRequest;
use Auth;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function getRegister()
    {
        if (Auth::check()) {
           return 0;
        }
        return view('auth::register');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function postRegister(RegisterRequest $request)
    {
        
    }
    public function activateUser()
    {
        # code...
    }
}
