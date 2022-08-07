
@extends('layouts.main')

@section('container')
    <article class="">
        <h2 class="mb-3">{{ $post->title }}</h2>
        <h5>{{ $post->author }}</h5>

        <p>By KrisDewa in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
        {!! $post->body !!}
    </article>

    <a href="/blog">Back to Posts</a>
@endsection


{{-- Post::create([
    'title' => 'Judul Ketiga',
    'category_id' => 1,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia incidunt laudantium cons',
    'body' => '<p>Lorem Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia incidunt laudantium consectetur similique alias? Ea nobis hic sit nam itaque error corporis rerum aut et ipsum. Accusantium delectus impedit aliquam. ipsum, dolor sit amet consectetur adipisicing elit. Quia incidunt laudantium consectetur</p> <p> similique alias? Ea nobis hic sit nam itaque error corporis rerum aut et ipsum. Accusantium delectus impedit aliquam.</p>'
]) --}}