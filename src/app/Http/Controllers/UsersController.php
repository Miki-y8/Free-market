<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class UsersController extends Controller
{
    public function storeUser()
    {
    return view('auth/registration');
    }

    public function LoginUser()
    {
    return view('products');
    }
}
