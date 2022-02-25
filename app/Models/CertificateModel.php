<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateModel extends Model
{

public $table='certificate';
public $primaryKey='id';
public $incrementing=true;
public $keyType='int';
public  $timestamps=false;

}
