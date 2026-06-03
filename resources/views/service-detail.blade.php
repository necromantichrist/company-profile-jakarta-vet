@extends('layouts.main')

@section('content')

<div class="service-detail">

    <h1>{{ $service->title }}</h1>

    <p>{{ $service->description }}</p>

    <a href="/service">← Back</a>

</div>

@endsection