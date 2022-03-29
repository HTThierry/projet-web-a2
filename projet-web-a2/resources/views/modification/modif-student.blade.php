@extends('layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Student account modification :</p></br>
</div>
<form>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Name :<br>
            <input type="text" class="form-control" placeholder="oldValue">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Surname :<br>
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
            Old password :<br>>
            <input type="password" class="form-control">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            New password :<br>
            <input type="password" class="form-control">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            Phone number :<br>
            <input type="tel" class="form-control" placeholder="oldValue">
        </div>
    </div>
    <div class="p-2">
        <fieldset class="p-2 border border-primary">
            <legend>Address :</legend>
            <div class="d-flex bd-highlight">
                <div class="p-2 bd-highlight">
                    Country : <br>
                    <input type="text" class="form-control" placeholder="oldValue">
                </div>
                <div class="p-2 bd-highlight">
                    City : <br>
                    <input type="text" class="form-control" placeholder="oldValue">
                </div>
                <div class="p-2 flex-grow-1 bd-highlight">
                    Address : <br>
                    <input type="text" class="form-control" placeholder="oldValue">
                </div>
            </div>
        </fieldset>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Site : (currently oldValue)<br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Choose :</option>
                <option value="1">Pau</option>
                <option value="2">Reims</option>
                <option value="3">Paris</option>
            </select>
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Class : (currently oldValue)<br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Choose :</option>
                <option value="1">A1</option>
                <option value="2">A2 generalist</option>
                <option value="3">A2 IT</option>
            </select>
        </div>
    </div>
    <div class="p-2">
        <button type="submit" class="btn btn-primary">Modify</button>
        <button type="button" class="btn btn-danger">Delete</button> <!-- confirmer la suppression avec une popup peut être à voir -->
    </div>
</form>

@endsection