<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fileModel;
class FilesController extends Controller
{
    function FilesPage(){

        return view('Files');
    }

    function fileinsert(Request $req){
       $name= $req->input('title');
        $mobile=$req->input('link');
        $result=fileModel::insert([
            'name'=>$name,
            'mobile'=>$mobile
        ]);
        if($result==true){
            return "success";
        }
        else{
            return "fail";
        }
    }
}
