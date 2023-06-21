<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('auth.profile', ['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|confirmed|min:8',
            'address' => 'required|string|max:255',
        ]);
        $user->name = $validatedData['name'];
        $user->password = Hash::make($validatedData['password']);
        $user->address = $validatedData['address'];
        $user->save();

        return back()->with('success', 'Данные успешно обновлены');
    }
}
