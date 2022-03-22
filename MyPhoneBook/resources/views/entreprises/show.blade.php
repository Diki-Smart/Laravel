@extends('layout.default')
@section('main')
    <div>
        <h1>Nom : {{ $entreprise->nom }}</h1>
        <div>Rue : {{ $entreprise->rue }}</div>
        <div>Code postal : {{ $entreprise->code_postal }}</div>
        <div>Ville : {{ $entreprise->ville }}</div>
        <div>Numero de téléphone : {{ $entreprise->numero_de_telephone }}</div>
        <div>Email : {{ $entreprise->email }}</div>
        <br>
        <div class= "test">
        <a href='{{route('entreprise.edit', $entreprise->id)}}'><button>Modifier</button></a>
        <form action="{{ route('entreprise.destroy', $entreprise->id) }}" method="post">
        @csrf
        @method('DELETE')
        <br>
        <button type="submit">Supprimer</button>
    </form>
</div>
    </div>
@endsection