<?php

namespace Modules\App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Mail;
use Session;
class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function addFeedback(Request $request)
    {
        $input = $request->all();
        $email=$input["email"];
        Mail::send('app::mailtemp', array('name'=>$input["name"],'content'=>$input['comment']), function($message) use ($email){
            $message->to($email, 'Visitor')->subject('Visitor Feedback!');
        });
        Session::flash('flash_message', 'Send message successfully!');

        return view('form');
    }
}
