
@extends('layouts.main')

@section('container')

    <h2 class="mb-3">{{ $post->title }}</h2>

    <p>By <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    
    {!! $post->body !!}

    <a href="/blog" class="text-decoration-none d-block mt-3">Back to Posts</a>

@endsection


{{-- Post::create([
    'title' => 'Judul Ketiga',
    'category_id' => 1,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia incidunt laudantium cons',
    'body' => '<p>Lorem Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia incidunt laudantium consectetur similique alias? Ea nobis hic sit nam itaque error corporis rerum aut et ipsum. Accusantium delectus impedit aliquam. ipsum, dolor sit amet consectetur adipisicing elit. Quia incidunt laudantium consectetur</p> <p> similique alias? Ea nobis hic sit nam itaque error corporis rerum aut et ipsum. Accusantium delectus impedit aliquam.</p>'
]) --}}