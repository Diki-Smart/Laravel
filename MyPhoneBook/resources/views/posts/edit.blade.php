@extends('layout.default')
@section('main')
    <form action="{{ route('post.update', $post->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" placeholder="nom" name="name" value="{{$post->name}}">
        <textarea name="content">{{$post->content}}</textarea>
        <button>Modifier</button>
    </form>
@endsection
