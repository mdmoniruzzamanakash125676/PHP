<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Home(){
       return view('HomePage');
    }

    function About(){
        return view('AboutPage');
    }

    function Contact(){
        return view('ContactPage');  
      }

      function Country(){
        return view ('country');
      }


      public function store(Request $request)
      {

        $validated = $request->validate([
          'name' => 'required|max:55',
          'email' => 'required|max:80',
          'password' => 'required|min:6|max:12',
      ]);

       dd($request->all()); 
   
         
      }



}
