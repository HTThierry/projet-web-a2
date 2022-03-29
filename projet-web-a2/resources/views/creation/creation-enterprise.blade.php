@extends('layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Création d'entreprise</p></br>
</div>
<div class="p-2">
    <fieldset class="p-2 border border-primary">
        <legend>Informations de l'entreprise :</legend>
        <form>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight flex-fill">
                    Nom de l'entreprise :<br>
                    <input type="text" class="form-control">
                </div>
                <div class="p-2 bd-highlight flex-fill">
                    Secteur d'activité :<br>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="p-2">
                Description : <br>
                <textarea class="form-control" rows="5"></textarea>
            </div>
            <legend>Adresse du siège social :</legend>
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
            <div class="p-2">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    </fieldset>
</div>
<div class="p-2">
    <fieldset class="p-2 border border-primary">
        <legend>Contact :</legend>
        <form>
            <div class="d-flex flex-column bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    Numéro de téléphone :
                    <input type="tel" class="form-control">
                </div>
                <div class="p-2 bd-highlight">
                    Adresse email :<br>
                    <input type="email" class="form-control">
                </div>
            </div>
            <div class="p-2">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </fieldset>
</div>
<div class="p-2">
    <fieldset class="p-2 border border-primary">
        <legend>Sites :</legend>
        <form>
            <div class="d-flex flex-column bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    Adresse du site :
                    <input type="tel" class="form-control">
                </div>
                <div class="p-2 bd-highlight">
                    Photo du site :<br>
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
                <div class="p-2">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </form>
    </fieldset>
</div>
@endsection