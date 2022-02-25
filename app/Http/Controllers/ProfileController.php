<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function ProfilePage(){
        return view('Profile');
    }
}
