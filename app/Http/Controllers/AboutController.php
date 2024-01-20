<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AboutController extends Controller
{
    
    public function index()
    {
        return view('about');
    }

    public function showAbout()
    {
        // Fetch all registered users
        $users = User::all();

        // Pass the users data to the view
        return view('about', ['users' => $users]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('about.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('about')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('about')->with('success', 'User deleted successfully');
    }

}
