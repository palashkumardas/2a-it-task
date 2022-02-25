<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CertificateModel;
class CertificateController extends Controller
{

    function CertificatePage(){
        return view('Certificate');
    }

    // get data
    function getCertificateinfo(){
       $result=json_encode(CertificateModel::all());
       return $result;
    }
    // data add
    function AddCertificate(Request $req){
        $name= $req->input('title');
        $email=$req->input('email');
        $mobile=$req->input('mobile');
        $enroll=$req->input('course');
        $duration=$req->input('duration');
        $ref=rand();
        $status="pending";
        $result=CertificateModel::insert([
            'name'=>$name,
            'email'=>$email,
            'mobile'=>$mobile,
            'enroll_course'=>$enroll,
            'duration'=>$duration,
            'serial_cert'=>$ref,
            'status'=>$status

        ]);
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

}
