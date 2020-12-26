<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$id = null)
    {
        return $this->find_onepost($id);
        // return $this->all_post();
    }


    public function all_post()
    {
        return Post::all();
    }

    public function find_onepost($id)
    {
        return $id == null ? Post::first() : Post::findOrFail($id);
    }
}
