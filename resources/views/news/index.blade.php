@extends('layouts.main')

@section('content')

@vite('public/css/news.css')

<section class="news-hero">

    <div class="container">

        <h1>Company News</h1>

        <p>
            Latest updates, events, promotions and information from our veterinary clinic.
        </p>

    </div>

</section>

<section class="news-section">

    <div class="container">

        <div class="news-grid">

            @forelse($news as $item)

            <div class="news-card">

                @if($item->image)

                <img src="{{ asset('storage/'.$item->image) }}"
                     alt="{{ $item->title }}">

                @endif

                <div class="news-content">

                    <span class="news-date">

                        {{ \Carbon\Carbon::parse($item->published_at)->format('d F Y') }}

                    </span>

                    <h3>

                        {{ $item->title }}

                    </h3>

                    <p>

                        {{ Str::limit(strip_tags($item->content),120) }}

                    </p>

                    <a href="{{ route('news.detail',$item->slug) }}"
                       class="read-more">

                        Read More →

                    </a>

                </div>

            </div>

            @empty

            <div class="alert alert-info">

                Belum ada berita.

            </div>

            @endforelse

        </div>

    </div>

</section>

@endsection