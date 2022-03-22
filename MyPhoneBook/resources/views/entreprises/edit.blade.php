@extends('layout.default')
@section('main')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form  class="test" action="{{ route('entreprise.update', $entreprise->id)}}" method="post">
        @csrf
        @method('PUT')
        <h1>Modifier l'entreprise :<h1>
        <input type="text" placeholder="Nom" name="nom" value="{{$entreprise->nom}}">
        <br>
        <br>
        <input type="text" placeholder="Rue" name="rue" value="{{$entreprise->rue}}">
        <br>
        <br>
        <input type="text" placeholder="Code postal" name="code_postal" value="{{$entreprise->code_postal}}">
        <br>
        <br>
        <input type="text" placeholder="Ville" name="ville" value="{{$entreprise->ville}}">
        <br>
        <br>
        <input type="text" placeholder="Numero de telephone" name="numero_de_telephone" value="{{$entreprise->numero_de_telephone}}">
        <br>
        <br>
        <input type="text" placeholder="Email" name="email" value="{{$entreprise->email}}">
        <br>
        <br>
      {{-- <button>  <input type="submit" value="Modifier"> </button> --}}
      <button> Modifier </button>
    </form>
@endsection
