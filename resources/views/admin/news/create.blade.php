@extends('layouts.admin')

@section('content')

<div class="container mt-5">

    <h2>Tambah Berita</h2>

    <form action="{{ route('news.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">

            <label>Judul</label>

            <input type="text"
                   name="title"
                   class="form-control">

        </div>

        <div class="mb-3">

            <label>Tanggal Publish</label>

            <input type="date"
                   name="published_at"
                   class="form-control">

        </div>

        <div class="mb-3">

            <label>Gambar</label>

            <input type="file"
                   name="image"
                   class="form-control">

        </div>

        <div class="mb-3">

            <label>Isi Berita</label>

            <textarea
                name="content"
                rows="8"
                class="form-control"></textarea>

        </div>

        <button class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

@endsection