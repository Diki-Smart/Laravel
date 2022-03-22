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
<h1>Modifier le collaborateur :</h1>
    <form class="test" action="{{ route('collaborateur.update', $collaborateur->id)}}" method="post">
        @csrf
        @method('PUT')
        <div><div>Civilité</div>
        <input type="radio" id="contactChoice1" 
        name="civilite" value="homme">
       <label for="contactChoice1">Homme</label>
   
       <input type="radio" id="contactChoice2"
       name="civilite" value="femme">
       <label for="contactChoice2">Femme</label>

       <input type="radio" id="contactChoice2"
       name="civilite" value="non_binaire">
       <label for="contactChoice3">Non-binaire</label>
    </div>
    <br>
        <input type="text" placeholder="Nom" name="nom" value="{{$collaborateur->nom}}">
        <br><br>
        <input type="text" placeholder="Prenom" name="prenom" value="{{$collaborateur->prenom}}">
        <br><br>
        <input type="text" placeholder="Rue" name="rue" value="{{$collaborateur->rue}}">
        <br><br>
        <input type="text" placeholder="Code postal" name="code_postal" value="{{$collaborateur->code_postal}}">
        <br><br>
        <input type="text" placeholder="Ville" name="ville" value="{{$collaborateur->ville}}">
        <br><br>
        <input type="text" placeholder="Numero de telephone" name="numero_de_telephone" value="{{$collaborateur->numero_de_telephone}}">
        <br><br>
        <input type="text" placeholder="Email" name="email" value="{{$collaborateur->email}}">
        <br><br>
        <select name="entreprise_id">
<?php 
use App\Models\Entreprise;
$entreprises = Entreprise::all(); 
$id = $collaborateur->entreprise_id;?>
            <option value="{{ Entreprise::find($id)->id}}">{{ Entreprise::find($id)->nom}}</option>
            @foreach($entreprises as $entreprise)
            <option name="entreprise_id" value="{{$entreprise->id}}">{{$entreprise->nom}}</option>
            @endforeach
          </select>
          <br><br>
        {{-- <input type="submit" value="Modifier"> --}}
        <button> Modifier </button>
    </form>
@endsection
