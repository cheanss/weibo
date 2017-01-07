<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        debug(['name'=>'chensuilong']);
        return view('users.create');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        var_dump($user);
    }
}
