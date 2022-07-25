<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    //
    public function gethospital(){
        //return hospital for id 1
        $hospital = Hospital::find(1);

        //return all doctors that work in hospital 1
       $doctors= $hospital -> doctors;

       /**foreach ($doctors as $doctor){
           echo $doctor -> name.'<br>';

       }*/

         return $hospital = Hospital::with('doctors') -> find(1);
         // $hospital -> name ;
    }

    public function hospitals(){

      $hosp =  Hospital::select('id','name','address') -> get();
        return view('doctors.hospitals',compact('hosp'));
    }

    public function doctors($hospital_id){
      $hospital =  Hospital::find($hospital_id);
      $doctors = $hospital -> doctors;
      return view('doctors.doctors',compact('doctors'));
    }

    public function create(){
        return view('doctors.hospital');
     }


    public function store(Request $request){
        Hospital::create([
            'name' => $request -> name,
            'address' =>  $request -> address ,
        ]);
        return (['success'=>'saved succesfully']);

    }


    //عرض كل المستشفيات الي فيها اطباء
    public function gethospitalHasDoctore(){
      return $hospital=  Hospital::whereHas('doctors') -> get();
    }
    //عرض كل المستشفيات الي فيها اطباء male
    public function gethospitalHasDoctoreMale(){
        return $hospital=  Hospital::whereHas('doctors' , function($q){
        $q -> where ('gender',1);}) -> get();
    }
}
