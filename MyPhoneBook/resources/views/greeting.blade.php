@extends('layout.default')


@section ('main')

<div class="test">
    <h3 style="text-decoration:underline">Please chose what you want to do :</h3>
    <br>
        <a href="http://127.0.0.1:8000/entreprise/create">
            <input type="submit" value="Ajouter une entreprise"/>
        </a>
        <br><br>
        <a href="http://127.0.0.1:8000/collaborateur/create">
            <input type="submit" value="Ajouter un/une collaborateur"/>
        </a>
        <br><br>
        <a href="http://127.0.0.1:8000/entreprise">
            <input type="submit" value="Afficher la liste des entreprises"/>
        </a>
        <br><br>
        <a href="http://127.0.0.1:8000/collaborateur">
            <input type="submit" value="Afficher la liste des collaborateurs"/>
        </a>
    </div>
@endsection