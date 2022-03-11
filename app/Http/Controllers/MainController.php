<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MainController extends Controller
{
   public function Index(){
      $posts = DB::table('blog')->paginate(5);
      return view('index', compact(['posts'=> 'posts']));
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
   public function Upload_Post(Request $request){
      $validation_data = $request->validate([
         'title'=>'required|max:255',
         'category'=>'required|max:255',
         'author'=>'required|max:255',
         'details'=>'required',
      ]);

      $data = array();
      $data['title'] = $request->title;
      $data['category'] = $request->category;
      $data['author'] = $request->author;
      $data['details'] = $request->details;
      $post = DB::table('blog')->insert($data);
      return redirect('/');
   }
}
