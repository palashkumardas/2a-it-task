<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fileModel extends Model
{
public $table='files';
public $primaryKey='id';
public $incrementing=true;
public $keyType='int';
public  $timestamps=false;
}
