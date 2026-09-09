<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $dadosValidados = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:usera,email',
            'password' => 'required|min:6',
        ]);

        User:: create($dadosValidados);

        return redirect('/admin')->with('sucesso', 'Usuario cadastrado com sucesso.')
    }
}
