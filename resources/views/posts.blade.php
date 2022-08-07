@extends('layouts.main')
 
@section('container')

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            <p>By KrisDewa in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            {{-- <h5>By: {{ $post["author"] }}</h5> --}}
            <p>{{ $post->excerpt }}</p>

            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
        </article>
    @endforeach

@endsection