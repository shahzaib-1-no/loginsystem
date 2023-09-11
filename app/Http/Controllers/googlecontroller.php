<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class googlecontroller extends Controller
{
    function newuser (){
        return Socialite::driver('google')->redirect();
    }
    function googlelogin (){
        $userall = Socialite::driver('google')->stateless()->user();
        dd($userall);
        echo "<br>";
        echo $userall->email;
        
    }
    function googlelogindata (){
        
    }
}
