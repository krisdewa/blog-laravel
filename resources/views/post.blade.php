@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By <a href="/blog?author={{ $post->author->username }}"
                        class="text-decoration-none text-warning">{{ $post->author->name }}</a> in <a
                        href="/blog?category/{{ $post->category->slug }}"
                        class="text-decoration-none text-warning">{{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid"
                    alt="{{ $post->category->name }}">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>


                <a href="/blog" class="text-decoration-none d-block mt-3 text-warning">Back to Posts</a>

            </div>
        </div>
    </div>
@endsection
