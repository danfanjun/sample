<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\http\Requests;

class UsersController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function show(User $user){
        return view('users.show' , compact('user'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'      => 'required|max:50',
            'email'     => 'required|email|unque:users|max:255',
            'passoword' => 'required|confirmed|min:6'
        ]);
        return;
    }

}
