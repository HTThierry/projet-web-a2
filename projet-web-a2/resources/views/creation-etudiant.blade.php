@extends('layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Création de compte étudiant :</p></br>
</div>
<form>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Nom :<br>
            <input type="text" class="form-control">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Prénom :<br>
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Username :<br>
            <input type="text" class="form-control">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Email :<br>
            <input type="email" class="form-control">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Mot de passe :<br>
            <input type="password" class="form-control">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Confirmer :<br>
            <input type="password" class="form-control">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            Numéro de téléphone :<br>
            <input type="tel" class="form-control">
        </div>
    </div>
    <div class="p-2">
        <fieldset class="p-2 border border-primary">
            <legend>Adresse :</legend>
            <div class="d-flex bd-highlight">
                <div class="p-2 bd-highlight">
                    Pays : <br>
                    <input type="text" class="form-control">
                </div>
                <div class="p-2 bd-highlight">
                    Ville : <br>
                    <input type="text" class="form-control">
                </div>
                <div class="p-2 flex-grow-1 bd-highlight">
                    Adresse : <br>
                    <input type="text" class="form-control">
                </div>
            </div>
        </fieldset>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Centre :<br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Choisir :</option>
                <option value="1">Pau</option>
                <option value="2">Reims</option>
                <option value="3">Paris</option>
            </select>
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Promotion :<br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Choisir :</option>
                <option value="1">A1</option>
                <option value="2">A2 généraliste</option>
                <option value="3">A2 informatique</option>
            </select>
        </div>
    </div>
    <div class="p-2">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</form>

@endsection