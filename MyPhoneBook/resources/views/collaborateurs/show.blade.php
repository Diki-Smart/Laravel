@extends('layout.default')
@section('main')
<?php 
use App\Models\Entreprise;
$entreprises = Entreprise::all();
$id = $collaborateur->entreprise_id;
    ?>
    <div>
        
        <h1>Informations du collaborateur :</h1>
        <div>Nom : {{ $collaborateur->nom }}</div>
        <div>Prenom : {{ $collaborateur->prenom}}</div>
        <div>Rue : {{ $collaborateur->rue }}</div>
        <div>Code postal : {{ $collaborateur->code_postal }}</div>
        <div>Ville : {{ $collaborateur->ville }}</div>
        <div>Numero de téléphone : {{ $collaborateur->numero_de_telephone }}</div>
        <div>Email : {{ $collaborateur->email }}</div>

        <div>Entreprise : {{ Entreprise::find($id)->nom}}<div>
        <br>
        <a href='{{route('collaborateur.edit', $collaborateur->id)}}'><button>Modifier</button></a>
        <form action="{{ route('collaborateur.destroy', $collaborateur->id) }}" method="post">
        @csrf
        @method('DELETE')
        <br>
        <button type="submit">Supprimer</button>
    </form>
    </div>
@endsection