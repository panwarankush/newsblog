<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = NewsPost::all();
        return view('news.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'mimes:png,jpg'
        ]);

        $image = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $image);

        $newPost = NewsPost::create([

            'title' => $request->title,
            'category' => $request->category,
            'body' => $request->body,
            'user_id' => Auth::user()->name,
            'file_path' => $image
        ]);

        $newPost->save();

        return redirect ('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsPost $newsPost)
    {
        return view('news.view', [
            'post' => $newsPost,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsPost $newsPost)
    {
        return view('news.edit', [
            'post' => $newsPost,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsPost $newsPost)
    {
        $newsPost->update([
            'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category,
            'user_id' => Auth::user()->name,

        ]);
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsPost $newsPost)
    {
        $newsPost->delete();
        return redirect('dashboard');
    }
}
