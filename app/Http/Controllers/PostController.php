<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function showEditScreen(Post $post) {
        return view('edit-post', ['post' => $post]);

    }
    public function createPost(Request $request) {
        $incomingData = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        
        $incomingData['title'] = strip_tags($incomingData['title']);
        $incomingData['body'] = strip_tags($incomingData['body']);
        $incomingData['user_id'] = auth()->id();

        Post::create($incomingData);

        return redirect('/');
    }
}
