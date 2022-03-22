@extends('layout.default')
@section('main')
    @foreach($entreprises as $entreprise)
    <div>
        <h1>Nom : {{ $entreprise->nom }}</h1>
        <div>Rue : {{ $entreprise->rue }}</div>
        <div>Code postal : {{ $entreprise->code_postal }}</div>
        <div>Ville : {{ $entreprise->ville }}</div>
        <div>Numero de téléphone : {{ $entreprise->numero_de_telephone }}</div>
        <div>Email : {{ $entreprise->email }}</div>
        <a href='{{route('entreprise.show', $entreprise->id)}}'>Voir l'article</a>
        <br>
    </div>
    @endforeach
@endsection

