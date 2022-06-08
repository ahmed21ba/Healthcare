<?php

namespace App\Http\Controllers;

use App\register;
use Illuminate\Http\Request;

class registController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->except('_token');
       $register = new register();
       $register->name=$data['name'];
       $register->username=$data['username'];
       $register->email=$data['email'];
       $register->password=$data['password'];
       $register->save();
return dd($register);
        // register::create($request->all());
        return redirect()->to('auth.login')->with('msg','done');

    }
}
