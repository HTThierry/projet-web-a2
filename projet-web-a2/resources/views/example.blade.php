@extends('layouts/layout')

@section('content')
<h2>Trouver une ville grâce à un code postal</h2>

<form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Code Postal</label>
        <input type="number" class="form-control" id="codePostal" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label class="form-label">Ville</label>
        <select class="form-select" id="ville"></select>
    </div>
</form>
@endsection
