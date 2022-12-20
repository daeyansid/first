<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterationControler extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'pass' => 'required',
                'ConPass' => 'required|same:pass',
            ]
        );
        echo "<pre>";
        print_r($request->all());
    }

    public function ViewData(){
        return view('ViewData');
    }
}
