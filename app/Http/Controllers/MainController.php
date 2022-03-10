<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   public function Index(){
    return view('index');
   }

   public function About(){
    return view('about');
   }

   public function WritePost(){
    return view('post');
   }

   public function Contact(){
    return view('contact');
   }
}
