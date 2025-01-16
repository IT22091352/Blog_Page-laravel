<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $post;
    public function __construct()
    {
        $this->post = new Posts();
    }

    public function index()
    {
        $response['posts'] = $this->post->all();
        return view('pages.Home.index')->with($response);
    }
}
