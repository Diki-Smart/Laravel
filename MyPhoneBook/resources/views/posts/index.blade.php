@extends('layout.default')
@section('main')
    @foreach($posts as $post)
    <div>
        <h1>Nom : {{ $post->name }}</h1>
        <h1>Auteur : {{$post->user_id }}</h1>
        <a href='{{route('post.show', $post->id)}}'>Voir l'article</a>
        <br>
    </div>
    @endforeach
@endsection

