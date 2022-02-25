<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fileModel;
class FilesController extends Controller
{
    function FilesPage(){

        return view('Files');
    }
    // get file
    function getfileinfo(){
        $result=json_encode(fileModel::all());
        return $result;
     }
}
