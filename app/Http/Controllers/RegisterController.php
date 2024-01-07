<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facade\Hash;


class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' =>'Register'
        ]);
    }

    public function store(Request $request){
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'user_name' => ['required','min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);



        User::create($validatedData);

        return redirect('/login');
    }

}
