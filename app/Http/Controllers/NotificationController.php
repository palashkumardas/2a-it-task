<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    function NotificationPage(){
        return view('Notification');
    }
}
