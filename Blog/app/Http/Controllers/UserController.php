<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showForm(){
        return view('register.showform');
    }
    public function handleForm(RegisterRequest $request){

    Users::create($request->validated());

    return redirect()->route('register.showForm')->with('success','bien');
    }
}
