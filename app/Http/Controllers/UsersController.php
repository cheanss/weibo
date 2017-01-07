<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        debug(['name'=>'chensuilong']);
        return view('users.create');
    }
}
