<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public  function getLogin()
    {
        return view('login');
    }

    public function postLogin(LoginRequest $request) {
        $email = $request->email;
        $password = $request->password;

        $user = DB::table('users')->where(['email' => $email])->get();
        if(!$user){
            dd('dntb');
        }else{
            if($user[0]->password == $password){
                dd('dntc');
            }
            dd('mks');
        }
    }

}
