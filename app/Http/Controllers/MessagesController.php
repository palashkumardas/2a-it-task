<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageModel;
class MessagesController extends Controller
{
    function MessagePage(){
        return view('Message');
    }
    function getmessage(){
       $result=json_encode(MessageModel::all());
       return $result;
    }
}
