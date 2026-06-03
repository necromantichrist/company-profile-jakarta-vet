<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $news = News::latest()->get();

    return view('admin.news.index', compact('news'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('admin.news.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'published_at' => 'required'
    ]);

    $image = null;

    if($request->hasFile('image'))
    {
        $image = $request->file('image')
                         ->store('news','public');
    }

    News::create([

        'title' => $request->title,

        'slug' => Str::slug($request->title),

        'image' => $image,

        'content' => $request->content,

        'published_at' => $request->published_at

    ]);

    return redirect()
            ->route('news.index')
            ->with('success','Berita berhasil ditambahkan');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
{
    return view('admin.news.edit', compact('news'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required'
    ]);

    $news->update([
        'title' => $request->title,
        'content' => $request->content,
        'published_at' => $request->published_at
    ]);

    return redirect()
            ->route('news.index')
            ->with('success','Berita berhasil diupdate');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
{
    $news->delete();

    return redirect()
            ->route('news.index')
            ->with('success','Berita berhasil dihapus');
}

public function publicIndex()
{
    $news = News::latest()->get();

    return view('news.index', compact('news'));
}

public function showPublic($slug)
{
    $news = News::where('slug', $slug)->firstOrFail();

    return view('news.show', compact('news'));
}

}
