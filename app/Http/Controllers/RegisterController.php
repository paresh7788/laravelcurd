<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    //
    public function index()
   {
    return view('register');
   } 
   public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
    
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'contact_no' => 'required|numeric',
            'password' => 'required|min:6',
        ]);

        // Hash the password before storing it
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Store the user in the database
        User::create($validatedData);

        // Redirect or return a response as needed
        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}
