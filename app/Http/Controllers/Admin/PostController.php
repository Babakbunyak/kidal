<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PostController extends Controller
{
   
    public function index(): View
    {
        $posts = Post::get();

        return view('admin.post.index', compact('posts'));
    }

    public function create(): View
    {
        return view('admin.post.create');
    }

    public function store(PostRequest $request): RedirectResponse
    {
        if($request->validated()){
            $banner =$request->file('banner')->store('assets/post', 'public');
            $slug = Str::slug($request->title, '-');
        }
        Post::create($request->except('banner') + ['banner' => $banner, 'slug' => $slug]);

        return redirect()->route('posts.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function edit(Post $post): View
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post): RedirectResponse
    {   
        if($request->validated()){
            if($request->banner){
                file::delete('storage/. $post->banner');
                $banner =$request->file('banner')->store('assets/post', 'public');
                $slug = Str::slug($request->title, '-');
                $post->update($request->except('banner') + ['banner' => $banner, 'slug' => $slug]);
            } else {
                $post->update($request->validated() + ['slug' => $slug]);
            }
        }

        return redirect()->route('admin.posts.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Post $post): RedirectResponse
    {   
        File::delete('storage/'.$post->banner);
        $post->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}