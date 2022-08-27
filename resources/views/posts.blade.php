@extends('layouts.main')

@section('container')
    <h2 class="mb-3 text-center">{{ $title }}</h2>

    {{-- FORM PENCARIAN --}}
    <div class="row justify-content-center mb-3">
        <div class="col-md-9">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-warning" type="submit">SEARCH</button>
                </div>
            </form>
        </div>
    </div>
    {{-- END FORM PENCARIAN --}}

    {{-- TABLE DATA POST --}}
    @if ($posts->count() > 0)
        <div class="card mb-3 text-center">
            <img src="https://source.unsplash.com/1200x200?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="">
            <div class="card-body">
                <h3 class="card-title"><a class="text-decoration-none text-warning"
                        href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By. <a href="/blog?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none text-warning">{{ $posts[0]->author->name }}</a> in <a
                            href="/blog?category={{ $posts[0]->category->slug }}"
                            class="text-decoration-none text-warning">{{ $posts[0]->category->name }}</a> on
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-warning">Read more</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white"
                                style="background-color: rgba(0, 0, 0, 0.3); border-radius: 2px;"><a
                                    href="/blog?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">
                                    {{ $post->category->name }} </a>
                            </div>
                            <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top"
                                alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                    <small class="text-muted">
                                        By. <a href="/blog?author={{ $post->author->username }}"
                                            class="text-decoration-none text-warning">{{ $post->author->name }}</a> in <a
                                            href="/blog?category={{ $post->category->slug }}"
                                            class="text-decoration-none text-warning">{{ $post->category->name }}</a> on
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-warning">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4"> <strong>No posts found</strong> </p>
    @endif

    {{-- PAGINATION --}}
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

    {{-- END PAGINATION --}}

    {{-- END TABLE DATA POST --}}
@endsection
