<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

class facebookcontroller extends Controller
{
    function add_data (){
        return Socialite::driver('facebook')->redirect();
    }

    function facebooklogin (){
        $userall = Socialite::driver('facebook')->stateless()->user();
        dd($userall);
        echo "<br>";
        echo $userall->email;
        
    }
}
