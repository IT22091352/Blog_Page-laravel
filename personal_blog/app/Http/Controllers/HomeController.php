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


    //search function created
    public function index(Request $request)
    {
        $query = $request->input('query');
        if ($query) {
            $posts = $this->post->where('title', 'LIKE', "%{$query}%")
                                ->orWhere('content', 'LIKE', "%{$query}%")
                                ->orWhere('author', 'LIKE', "%{$query}%")
                                ->get();
        } else {
            $posts = $this->post->all();
        }
        $response['posts'] = $posts;
        return view('pages.Home.index')->with($response);
    }
}
