@extends('layout.default')
@section('main')
    <div>
        <h1>Nom : {{ $post->name }}</h1>
        <h1>Article : {{ $post->content }}</h1>
        <a href='{{route('post.edit', $post->id)}}'><button>Modifier</button></a>
        <form action="{{ route('post.destroy', $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
    </div>
@endsection