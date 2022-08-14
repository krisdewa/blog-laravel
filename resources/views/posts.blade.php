@extends('layouts.main')
 
@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    @if ($posts->count() > 0)
        <div class="card mb-3 text-center">
            <img src="https://source.unsplash.com/1200x400/{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title"><a class="text-decoration-none" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> on {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4"> <strong>No posts found</strong> </p>
    @endif


    @foreach ($posts as $post)    
        {{-- <div class="card mb-1 border-bottom">
            <div class="card-body shadow-sm p-4 bg-light rounded">
                <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
                <p>By KrisDewa in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                
                <p class="card-text"> {{ $post->excerpt }} </p>

                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more.....  </a>

                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div> --}}

        <article class="mb-3 border-bottom">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>

            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            
            <p>{{ $post->excerpt }}</p>
            <small>Created at {{ $post->created_at->diffForHumans() }}</small> <br>
            
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more.....  </a>
            <p></p>
        </article>
    @endforeach

@endsection