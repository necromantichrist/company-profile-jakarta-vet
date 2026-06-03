<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();

        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function edit(News $news)
{
    return view('admin.news.edit', compact('news'));
}

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

    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required|max:255',

            'content' => 'required',

            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $imageName = null;

        if($request->hasFile('image')){

            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('uploads'), $imageName);
        }

        News::create([

            'title' => $request->title,

            'content' => $request->content,

            'image' => $imageName
        ]);

        return redirect()->route('news.index')
            ->with('success', 'Berita berhasil ditambahkan');
    }

public function destroy(News $news)
{
    $news->delete();

    return redirect()
            ->route('news.index')
            ->with('success','Berita berhasil dihapus');
}

}