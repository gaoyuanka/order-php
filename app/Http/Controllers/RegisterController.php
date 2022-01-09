<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.register');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $restaurant = Restaurant::create([
            'user_id' => $user->id,
        ]);
        $user->restaurant = $restaurant;
        return view('register.complete',compact('user'));
    }
}
