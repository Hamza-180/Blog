<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function post_page()
    {
        return view('admin.post_page');
    }

    public function add_post(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->usertype;

        $post = new Post();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->post_status = 'pending'; // Assurez-vous que cette valeur est valide selon votre migration
        $post->user_id = $user_id;
        $post->name = $name;
        $post->usertype = $usertype;

        $image = $request->file('image');

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('postimage'), $imagename);
            $post->image = $imagename;
        } else {
            $post->image = 'default_image.png'; // Définissez une valeur par défaut appropriée ou laissez NULL si permis
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
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = Post::find($id);
        $data->title = $request->input('title');
        $data->description = $request->input('description');

        $image = $request->file('image');
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('postimage'), $imagename);
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
        if (Auth::user()->usertype != 'admin') {
            return redirect()->back()->with('error', 'You do not have permission to perform this action.');
        }

        $user = User::find($id);

        if ($user) {
            $user->usertype = 'admin';
            $user->save();

            return redirect()->back()->with('success', 'User promoted to administrator successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }
}
