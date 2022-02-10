@extends('layouts.main')

@section('main-content')
<h1>Halaman Blog</h1>

@foreach ($posts as $post)
    <article class="mb-5">
        <a href="/blog/{{ $post["slug"] }}">
            <h2>{{ $post["title"] }}</h2>
        </a>
        <h5>By : {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
@endforeach

@endsection