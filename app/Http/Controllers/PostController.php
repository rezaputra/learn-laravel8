<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $id = 1;
        // $post = DB::select('select * from posts where posts.id = :id', ['id' => 1]);
        
        
         $post = DB::table('posts')->where('id', $id)->get();

        // $post = DB::table('posts')->select('description', 'title')->get();

        // $post = DB::table('posts')->where('created_at', '>' , now()->subDay())
        // ->orWhere('title', 'Prof.')
        // ->get();

        dd($post);
    }
}
