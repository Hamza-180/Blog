<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::all();
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('home.homepage', compact('post'));
            } elseif ($usertype == 'admin') {
                return view('admin.adminhome');
            } else {
                return redirect()->back();
            }
        }
    }

    public function post()
    {
        return view('post');
    }

    public function homepage()
    {
        $post = Post::all();
        return view('home.homepage', compact('post'));
    }

    public function post_details($id)
    {
        $post = Post::find($id);
        return view('home.post_details', compact('post'));
    }

    public function create_post()
    {
        return view('home.create_post');
    }

    public function user_post(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user = Auth::user();
    $userid = $user->id;
    $username = $user->name;
    $usertype = $user->usertype;

    $post = new Post();
    $post->title = $request->input('title');
    $post->description = $request->input('description');
    $post->user_id = $userid;
    $post->name = $username;
    $post->usertype = $usertype;
    $post->post_status = 'pending';
    $image = $request->file('image');

    if ($image) {
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('postimage'), $imagename);
        $post->image = $imagename;
    } else {
        $post->image = 'default_image.png';
    }

    $post->save();
    return redirect()->back()->with('success', 'Post created successfully!');
}


    public function contact()
    {
        return view('home.contact');
    }

    public function readme()
    {
        return view('home.readme');
    }

    public function FAQ()
    {
        return view('home.faq');
    }
}
