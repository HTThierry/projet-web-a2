@extends('layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Tutor accout creation :</p></br>
</div>
<form>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Name :<br>
            <input type="text" class="form-control">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Surname :<br>
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
            Password :<br>
            <input type="password" class="form-control">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Confirm :<br>
            <input type="password" class="form-control">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            Phone number :<br>
            <input type="tel" class="form-control">
        </div>
    </div>
    <div class="p-2">
        <fieldset class="p-2 border border-primary">
            <legend>Address :</legend>
            <div class="d-flex bd-highlight">
                <div class="p-2 bd-highlight">
                    Country : <br>
                    <input type="text" class="form-control">
                </div>
                <div class="p-2 bd-highlight">
                    City : <br>
                    <input type="text" class="form-control">
                </div>
                <div class="p-2 flex-grow-1 bd-highlight">
                    Address : <br>
                    <input type="text" class="form-control">
                </div>
            </div>
        </fieldset>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Site :<br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Choose :</option>
                <option value="1">Pau</option>
                <option value="2">Reims</option>
                <option value="3">Paris</option>
            </select>
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Class(es) taken care of :<br>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchA1">
                <label class="form-check-label" for="switchA1">A1</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchA2">
                <label class="form-check-label" for="switchA2">A2 IT</label>
            </div>
        </div>
    </div>
    <div class="p-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection