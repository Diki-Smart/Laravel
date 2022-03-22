@extends('layout.default')
@section('main')
    <form class="test" action="{{ route('entreprise.store')}}" method="post">
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
        <h1>Créez votre entreprise :</h1>
        <input type="text" placeholder="Nom" name="nom">
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
        <button>Créer</button>
    </form>
@endsection

