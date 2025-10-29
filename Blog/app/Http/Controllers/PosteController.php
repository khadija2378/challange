<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PosteController extends Controller
{
    public function index(){
       $posts= Post::all();
     return response()->json($posts);
     $users = User::with(['profile', 'posts.tags'])->get();

    }

    public function store(Request $request){

        $posts= Post::create([
        "title" => $request->title,
        "author" => $request->author,
        "content" => $request->content,
        "status" => $request->status,
         ]);
         return response()->json($posts);
    }
    public function filter()
{
    $posts = Post::where('status', 'published')->get();
    return response()->json($posts);
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
       return response()->json($posts);
    }
    public function destroy(Post $post){
        $post->delete();
        return response()->json($post);
    }
}
