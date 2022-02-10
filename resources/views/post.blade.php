@extends('layouts.main')

@section('main-content')
    <article>
        <article>
            <h2>{{ $post["title"] }}</h2>
            <h5>{{ $post["author"] }}</h5>
            <p>{{ $post["body"] }}</p>
        </article>
    </article>

    <a href="/blog" class="btn btn-danger">back</a>
@endsection