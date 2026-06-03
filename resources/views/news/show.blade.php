@extends('layouts.main')

@section('content')

@vite('public/css/news.css')

<section class="detail-news">

<div class="container">

    <h1 class="detail-title">

        {{ $news->title }}

    </h1>

    <div class="detail-date">

        {{ \Carbon\Carbon::parse($news->published_at)->format('d F Y') }}

    </div>

    @if($news->image)

    <img
        src="{{ asset('storage/'.$news->image) }}"
        class="detail-image"
        alt="{{ $news->title }}">

    @endif

    <div class="detail-content">

        {!! nl2br(e($news->content)) !!}

    </div>

</div>

</section>

@endsection