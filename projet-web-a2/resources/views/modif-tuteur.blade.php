@extends('layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Modification de compte pilote de promotion :</p></br>
</div>
<form>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Nom :<br>
            <input type="text" class="form-control" placeholder="oldValue">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Prénom :<br>
            <input type="text" class="form-control" placeholder="oldValue">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Username :<br>
            <input type="text" class="form-control" placeholder="oldValue">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Email :<br>
            <input type="email" class="form-control" placeholder="oldValue">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Ancien mot de passe :<br>
            <input type="password" class="form-control">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Nouveau mot de passe :<br>
            <input type="password" class="form-control">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            Numéro de téléphone :<br>
            <input type="tel" class="form-control" placeholder="oldValue">
        </div>
    </div>
    <div class="p-2">
        <fieldset class="p-2 border border-primary">
            <legend>Adresse :</legend>
            <div class="d-flex bd-highlight">
                <div class="p-2 bd-highlight">
                    Pays : <br>
                    <input type="text" class="form-control" placeholder="oldValue">
                </div>
                <div class="p-2 bd-highlight">
                    Ville : <br>
                    <input type="text" class="form-control" placeholder="oldValue">
                </div>
                <div class="p-2 flex-grow-1 bd-highlight">
                    Adresse : <br>
                    <input type="text" class="form-control" placeholder="oldValue">
                </div>
            </div>
        </fieldset>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Centre : (actuellement oldValue)<br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Choisir :</option>
                <option value="1">Pau</option>
                <option value="2">Reims</option>
                <option value="3">Paris</option>
            </select>
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Promotion(s) à charge :<br>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchA1">
                <label class="form-check-label" for="switchA1">A1</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchA2">
                <label class="form-check-label" for="switchA2">A2 informatique</label>
            </div>
        </div>
    </div>
    <div class="p-2">
        <button type="submit" class="btn btn-primary">Modifier</button>
        <button type="button" class="btn btn-danger">Supprimer</button> <!-- confirmer la suppression avec une popup peut être à voir -->
    </div>
</form>

@endsection