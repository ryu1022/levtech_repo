<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Post;

class PostController extends Controller
{
    public function index(Post $post)
{
    return $post->get();
}

}
