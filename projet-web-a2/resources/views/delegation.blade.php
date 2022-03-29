@extends('./layouts/layout')

@section('content')

<div class="text-center">
    <p class="h1">Délégation</p></br>
</div>

<form>
    <div class="container p-2 text-align-center">
        <div class="row justify-content-around">
            <div class="col-1  border border-primary">
                ID
            </div>
            <div class="col  border border-primary">
                Description
            </div>
            <div class="col-md-auto  border border-primary">
                Autorisation
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                2
            </div>
            <div class="col  border border-primary">
                Rechercher une entreprise
            </div>
            <div class="col-md-auto  border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm2">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                3
            </div>
            <div class="col  border border-primary">
                Créer une entreprise
            </div>
            <div class="col-md-auto  border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm3">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                4
            </div>
            <div class="col  border border-primary">
                Modifier une entreprise
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm4">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                6
            </div>
            <div class="col  border border-primary">
                Supprimer une entreprise
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm6">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                9
            </div>
            <div class="col  border border-primary">
                Créer une offre
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm9">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                10
            </div>
            <div class="col  border border-primary">
                Modifier une offre
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm10">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                11
            </div>
            <div class="col  border border-primary">
                Supprimer une offre
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm11">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                13
            </div>
            <div class="col  border border-primary">
                Rechercher un compte pilote
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm13">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                14
            </div>
            <div class="col  border border-primary">
                Créer un compte pilote
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm14">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                15
            </div>
            <div class="col  border border-primary">
                Modifier un compte pilote
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm15">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                16
            </div>
            <div class="col  border border-primary">
                Supprimer un compte pilote
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm16">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                22
            </div>
            <div class="col  border border-primary">
                Rechercher un compte étudiant
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm22">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                23
            </div>
            <div class="col  border border-primary">
                Créer un compte étudiant
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm23">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                24
            </div>
            <div class="col  border border-primary">
                Modifier un compte étudiant
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm24">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                25
            </div>
            <div class="col  border border-primary">
                Supprimer un compte étudiant
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm25">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                26
            </div>
            <div class="col  border border-primary">
                Consulter les stats des étudiants
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm26">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                32
            </div>
            <div class="col  border border-primary">
                Informer le système de l'avancement de la candidature step 3
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm32">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1  border border-primary">
                33
            </div>
            <div class="col  border border-primary">
                Informer le système de l'avancement de la candidature step 4
            </div>
            <div class="col-md-auto border border-primary">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="perm33">
                </div>
            </div>
        </div>

    </div>

</form>

@endsection