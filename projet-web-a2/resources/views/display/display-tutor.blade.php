@extends('layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Nom Prénom</p></br>
</div>
<form>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Email :<br>
            <strong>Email</strong>
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            Numéro de téléphone :<br>
            <strong>Téléphone</strong>
        </div>
    </div>
    <div class="p-2">
        <fieldset class="p-2 border border-primary">
            <legend>Adresse :</legend>
            <div class="d-flex bd-highlight">
                <div class="p-2 bd-highlight">
                    Pays : <br>
                    <strong>Value</strong>
                </div>
                <div class="p-2 bd-highlight">
                    Ville : <br>
                    <strong>Value</strong>
                </div>
                <div class="p-2 flex-grow-1 bd-highlight">
                    Adresse : <br>
                    <strong>Value</strong>
                </div>
            </div>
        </fieldset>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Centre :<br>
            <strong>value</strong>
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Promotion(s) à charge :<br>
            <select class="form-select">
                <option selected>Value 1</option>
                <option value="1">Value 2</option>
                <option value="2">Value 3</option>
            </select>
        </div>
    </div>
    <div class="p-2">
    </div>
</form>

@endsection