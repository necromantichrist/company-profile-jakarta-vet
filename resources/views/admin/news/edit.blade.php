@extends('layouts.admin')

@section('content')

<div class="container mt-5">

    <h2>Edit Berita</h2>

    <form action="{{ route('news.update', $news->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Judul</label>

            <input type="text"
                   name="title"
                   value="{{ $news->title }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Tanggal Publish</label>

            <input type="date"
                   name="published_at"
                   value="{{ $news->published_at }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Isi Berita</label>

            <textarea
                name="content"
                rows="8"
                class="form-control">{{ $news->content }}</textarea>
        </div>

        <button class="btn btn-success">
            Update Berita
        </button>

    </form>

</div>

@endsection