<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=['name','title','hospital_id','create_at','update_at'];
    protected $hidden=['created-at','updated_at'];
    public $timestamps=true;



}
