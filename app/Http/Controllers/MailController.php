<?php

namespace App\Http\Controllers;

use App\Application;
use App\Mail\Wellcome;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function saveData(){

        $data = request()->all();
        
        $user = Application::create($data);

//        send mail
        \Mail::to($user->email)->send(new Wellcome($user));

        return redirect()->back();
    }
}
