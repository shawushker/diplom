<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Хэшируйте пароль перед сохранением
        $user->update(array_merge($request->all(), ['password' => bcrypt($request->password)]));
        return redirect()->route('users.index')->with('success', 'Пользователь успешно обновлен.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);}
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Пользователь успешно удален.');
    }
}

