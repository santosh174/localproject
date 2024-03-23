<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;

class registrationcontroller extends Controller
{
   public function index(){
    return view('form');
   } //
   public function register(Request $request){
      $request->validate(
         [
            '$name'=>'required',


         ]
      );
    print_r($request->all());

    
   }
}
