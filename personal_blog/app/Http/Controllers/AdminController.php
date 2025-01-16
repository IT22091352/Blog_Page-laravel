<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $post;
    public function __construct()
    {
        $this->post = new Posts();
    }
    public function index()
    {
        $response['posts'] = $this->post->all();
        return view('pages/Admin/index')->with($response);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        // Remove base64 decoding for image URL
        $this->post->create($data);
        return redirect()->route('home');
    }
    public function delete($post_id)
    {
        $post = $this->post->find($post_id);
        $post->delete();
        return redirect()->back();
    }
    public function update(Request $request, $post_id)
    {
        $data = $request->all();
        $post = $this->post->find($post_id);
        $post->update($data);
        return redirect()->back();
    }
}
