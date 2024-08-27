<?php

namespace App\Http\Services;

use App\Models\Post;

class PostService{
    public function getAllPosts(){
        return Post::all();
    }

    public function getPostById($id){
        return Post::find($id);
    }

    public function createPost($request){
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return $post;
    }

    public function updatePost($id,$request){
        $post = $this->getPostById($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return $post;
    }

    public function deletePost($id){
        $post = $this->getPostById($id);
        $post->delete();
        return $post;
    }
}