<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TutorialsController extends Controller
{
    function TutorialPage(){
        return view('Tutorial');
    }
}
