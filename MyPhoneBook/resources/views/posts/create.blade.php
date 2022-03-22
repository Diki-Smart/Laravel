@extends('layout.default')
@section('main')
    <form action="{{ route('post.store')}}" method="POST">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        @csrf
        <input type="text" placeholder="nom" name="name">
        <textarea name="content"></textarea>
        <button>Créer</button>
    </form>
@endsection

