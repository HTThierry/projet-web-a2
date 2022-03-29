@extends('./layouts/layout')

@section('content')

<div class="text-center">
    <p class="h1">Creation of an internship offer :</p></br>
</div>
<form>
    <div class="p-2 bd-highlight flex-fill">
        Company :<br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Choose :</option>
            <option value="1">Safran</option>
            <option value="2">Total</option>
            <option value="3">Thales</option>
        </select>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Offer title :<br>
            <input type="text" class="form-control">
        </div>
    </div>

    <div class="p-2">
        Description : <br>
        <textarea class="form-control" rows="5"></textarea>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Offer duration :<br>
            <input type="text" class="form-control">
        </div>
    </div>

    <div class="p-2 bd-highlight flex-fill">
        <label for="exampleInputEmail1" class="form-label">Number of possible candidacies :</label>
        <input type="number" class="form-control">
    </div>

    <div class="p-2">
        <button type="submit" class="btn btn-primary">Confirm</button>
    </div>
</form>

@endsection