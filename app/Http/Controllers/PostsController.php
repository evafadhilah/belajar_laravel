<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\barangs;

class PostsController extends Controller
{
      public function menampilkan(){
        $post = post:: all();
        return view('tampil_post',compact('post'));
      }

      public function menampilkan2(){
        $barangs = barangs:: all();
        return view('tampil_barangs',compact('barangs'));
      }
}
