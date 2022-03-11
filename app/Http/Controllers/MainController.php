<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MainController extends Controller
{
   public function Index(){
      $posts = DB::table('blog')->get();
    return view('index', compact('posts'));
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
   public function View_post($id){
      $post = DB::table('blog')->where('id', $id)->first();
      return view('detailsPost', compact('post'));
   }
}
