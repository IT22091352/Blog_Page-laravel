<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $data['image'] = $path;
        }
        $this->post->create($data);
        return redirect()->route('home');
    }
    public function delete($post_id)
    {
        $post = $this->post->find($post_id);
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete();
        return redirect()->back();
    }
    public function update(Request $request, $post_id)
    {
        $data = $request->all();
        $post = $this->post->find($post_id);
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $path = $request->file('image')->store('images', 'public');
            $data['image'] = $path;
        }
        $post->update($data);
        return redirect()->back();
    }
}
