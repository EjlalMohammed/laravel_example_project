<?php

namespace App\Http\Controllers;

use App\Http\Requests\offerRequest;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator ;

class OfferController extends Controller
{
    //
    public function showOffer(){
       $offer = Offer::select('id','name','price') -> get();
       return view('showOffers',compact('offer'));
    }
    public function create(){
        return view('index');
     }
     public function store(offerRequest $request){

        //validate
       // $ruls= $this -> getRule();
        //$messages = $this -> getMessages();
        //$validator =  Validator::make($request -> all(),$ruls,$messages
        //);

        //if($validator -> fails()){
          //  return redirect() -> back() ->withErrors($validator) -> withInputs($request -> all());
        //}
        Offer::create([
            'name' => $request -> name,
            'price' =>  $request -> price ,

        ]);

        return redirect() -> back() -> with(['success'=>'saved succesfully']);
     }

    /*protected function getMessages(){

        return $messages =[
            'name.required' => 'name is required ',
            'price.numeric' => 'most be number'
        ];
     }*/
     /* protected function getRule(){

        return $ruls =[
                'name'=> 'required',
                'price'=>'required|numeric'

        ];
     } */

     public function edit($offer_id){
        $offer = Offer::find($offer_id);

        if(!$offer){
            return redirect() -> back();
        }
        $offer = Offer::select('id','name','price') -> find($offer_id);
        return view('editOffer',compact('offer'));
     }

     public function update(offerRequest $request, $offer_id){
        $offer = Offer::find($offer_id);

        if(!$offer){
            return redirect() -> back();
        }

        $offer -> update($request -> all());

        return redirect()->back() -> with (['success'=>'update succesfully']);

     }

     public function delete( $offer_id){
        $offer = Offer::find($offer_id);

        if(!$offer){
            return redirect() -> back() -> with(['unsuccess'=>'not found']);
        }

        $offer -> delete();
        return redirect()-> route('offer.all') ->  with(['success'=>'delete succesfully']);

     }


}

