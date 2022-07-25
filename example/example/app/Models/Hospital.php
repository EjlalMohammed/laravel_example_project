<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable=['name','address','create_at','updated_at'];
    protected $hidden=['create_at','updated-at'];
    public $timestamps=true;


    public function doctors(){
       return $this -> hasMany('App\models\Doctor','hospital_id');

    }
}
