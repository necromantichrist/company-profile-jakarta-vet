@extends('layouts.admin')

@section('content')

@vite('css/admin-dashboard.css')

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Daftar Berita</h2>

        <a href="{{ route('news.create') }}"
           class="btn btn-primary">
            + Tambah Berita
        </a>

    </div>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach($news as $item)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->title }}</td>

                <td>{{ $item->published_at }}</td>

                <td>

                    <a href="{{ route('news.edit',$item->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('news.destroy',$item->id) }}"
                          method="POST"
                          style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection