<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome', [
            'welcome' => Post::all(),
        ]);
    }

    public function form()
    {
        return view('post');
    }

    public function list()
    {
        return view('list',[
            'list' => Post::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insert(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:1',
            'paragraf' => 'required|min:1'
        ]);
        
        Post::create($request->all());
        return redirect('/')->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Post::findOrFail($id);
        return view('edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        $post->update([
            'title'     => $request->title,
            'paragraf'   => $request->paragraf
        ]);

        return redirect()->route('post.list')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect()->route('post.list')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
