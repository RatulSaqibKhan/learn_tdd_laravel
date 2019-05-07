<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();

        return view('pages.users', [
            'users' => $users
        ]);
    }

    public function create()
    {
        $user = null;
        return view('forms.user', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,id',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('users');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('forms.user', [
            'user' => $user
        ]);
    }

    public function update($id, Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,id',
            'password' => 'required|min:6',
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('users');

    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('users');

    }
}
