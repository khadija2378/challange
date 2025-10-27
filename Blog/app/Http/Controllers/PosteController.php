<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PosteController extends Controller
{
    public function index(){
       $posts= Post::all();
     return response()->json($posts);
    }

    public function store(Request $request){
        try{
        $posts= Post::create([
        "title" => $request->title,
        "author" => $request->author,
        "content" => $request->content,
        "status" => $request->status,
         ]);
         return response()->json($posts);
        }catch(Exception $e){
            return response()->json($e->getMessage());
        }
        
   
    
    }
    public function show(Post $post) {
    return view("post.show", compact("post"));
}
    public function update(Request $request, Post $posts){
        $posts->update([
            "title" => $request->title,
        "content" => $request->content,
        "status" => $request->status,
        ]);
       return redirect()->route('post.index'); 
    }
    public function destroy(Post $posts){
        $post->delete();
        return redirect()->route('post.index'); 
    }
}
