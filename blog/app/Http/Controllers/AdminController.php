<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Existing methods...

    public function post_page()
    {
        return view('admin.post_page');
    }

    public function add_post(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->post_status = 'active';
        $post->user_id = $user_id;
        $post->name = $name;
        $post->usertype = $usertype;

        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
        }

        $post->save();

        return redirect()->back()->with('message', 'Post added successfully');
    }

    public function show_post()
    {
        $post = Post::all();
        return view('admin.show_post', compact('post'));
    }

    public function delete_post($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('message', 'Post deleted successfully');
    }

    public function edit_page($id)
    {
        $post = Post::find($id);
        return view('admin.edit_page', compact('post'));
    }

    public function update_post(Request $request, $id)
    {
        $data = Post::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back()->with('message', 'Post updated successfully');
    }

    public function adminPromote()
    {
        $users = User::all();
        return view('admin.adminpromote', compact('users'));
    }

    public function promoteUser($id)
    {
        // Check if the authenticated user is an admin
        if (Auth::user()->usertype != 'admin') {
            return redirect()->back()->with('error', 'You do not have permission to perform this action.');
        }

        // Find the user by ID
        $user = User::find($id);

        if ($user) {
            // Promote the user to admin
            $user->usertype = 'admin';
            $user->save();

            return redirect()->back()->with('success', 'User promoted to administrator successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }
}
