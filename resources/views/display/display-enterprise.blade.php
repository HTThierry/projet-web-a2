@extends('layouts/layout')

@section('content')

<div class="text-center">
    <p class="h1">Company's name</p></br>
</div>

<div class="container">
    <div class="d-flex row">
        <div class="col">
            <div class="d-flex flex-row bd-highlight">
                <div class="p-2 bd-highlight flex-fill">
                    <u>Activity Sector :</u><br>
                    <strong>Company's Activity Sector</strong>
                </div>
            </div>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <u>Headquarters :</u><br>
                    <strong>Company's Headquarters</strong>
                </div>
            </div>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <u>Description :</u><br>
                    <strong>Company's Description</strong>
                </div>
            </div>
        </div>
        <div class="col justify-end">
            <div class="border border-primary p-2">
                Contact :
            </div>
            <div class="border border-primary p-2">
                Email : xxxxxxxxxxx@xxxxxx.com<br>
                +33X XX XX XX XX
            </div>
            <div class="border border-primary p-2">
                Rating :
            </div>
            <div class="border border-primary p-2">
                Rating from students :<br>
                X/5<br><br>
                Tutor's trust :<br>
                Trusted/Doubt<br><br>
                Number of already enrolled cesi students : X
            </div>
        </div>
    </div>
</div><br>

<div class="container p-2">
    <fieldset class="border border-primary">
        <legend class="border-primary">Our sites adresses :</legend>
    <div class="d-flex bd-highlight border border-primary">
        <div class="p-2 flex-grow-1 bd-highlight">Site name</div>
        <div class="p-2 bd-highlight">Picture</div>
    </div>
    </fieldset>
</div><br>

<div class="container p-2">
    <fieldset class="border border-primary">
        <legend class="border-primary">Our internship offers :</legend>
    <div class="d-flex bd-highlight border border-primary">
        <div class="p-2 flex-grow-1 bd-highlight">Offer title</div>
        <div class="p-2 bd-highlight"><button type="button" class="btn btn-secondary">See offer</button></div>
    </div>
    </fieldset>
</div>


@endsection