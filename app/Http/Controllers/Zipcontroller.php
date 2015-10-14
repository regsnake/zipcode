<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Zipcontroller extends Controller
{
  
   function getIndex(){
     $zip_codes=\App\ZipCode::all();
     return view('zip_codes',['zip_codes'=> $zip_codes]);
   }
}
     
     function getCreate()
     {
        return view('create_zip_code');
     }
     
     function getview(){
         //return view('create_zip_code');
     }