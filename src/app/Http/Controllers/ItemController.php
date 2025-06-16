<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class ItemController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function user()
    {
        return view('auth/registration');
    }

    public function store()

    {
        return view('purpdicts');
    }

}
