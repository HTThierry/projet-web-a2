@extends('layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Name Surname</p></br>
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
            Phone number :<br>>
            <strong>Phone</strong>
        </div>
    </div>
    <div class="p-2">
        <fieldset class="p-2 border border-primary">
            <legend>Address :</legend>
            <div class="d-flex bd-highlight">
                <div class="p-2 bd-highlight">
                    Country : <br>
                    <strong>Value</strong>
                </div>
                <div class="p-2 bd-highlight">
                    City : <br>
                    <strong>Value</strong>
                </div>
                <div class="p-2 flex-grow-1 bd-highlight">
                    Address : <br>
                    <strong>Value</strong>
                </div>
            </div>
        </fieldset>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Site :<br>
            <strong>value</strong>
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Class(es) taken care of :<br>>
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