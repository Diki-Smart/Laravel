@extends('layout.default')
@section('main')
    <form   class="test" action="{{ route('collaborateur.store')}}" method="post">
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
        <h1>Créez votre collaborateur :</h1>
        <div>
            <div>Civilité</div>
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
        <input type="text" placeholder="Nom" name="nom">
        <br><br>
        <input type="text" placeholder="Prenom" name="prenom">
        <br><br>
        <input type="text" placeholder="Rue" name="rue">
        <br><br>
        <input type="text" placeholder="Code postal" name="code_postal">
        <br><br>
        <input type="text" placeholder="Ville" name="ville">
        <br><br>
        <input type="text" placeholder="Numéro de téléphone" name="numero_de_telephone">
        <br><br>
        <input type="text" placeholder="Email" name="email">
        <br><br>
        <div>Entreprise :</div>
        <select name="entreprise_id">
            <?php 
use App\Models\Entreprise;
$entreprises = Entreprise::all(); ?>
            @foreach($entreprises as $entreprise)
            <option name="entreprise_id" value="{{$entreprise->id}}">{{$entreprise->nom}}</option>
            @endforeach
          </select>
          <br><br>
        <button>Créer</button>
    </form>
@endsection

