<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function getLogin()
    {
        return view('login');
    }

    public function postLogin(LoginRequest $request) {

    }

}
