<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function login(){

        return view('admin.public.login');
    }

    public function check(Request $request){

        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
        ]);

    }
}
