@extends('./layouts/layout')

@section('content')

<div class="text-center">
    <p class="h1">(Offer title) :</p></br>
</div>
<form>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Company :<br>
            <input type="text" class="form-control" disabled>
        </div>
    </div>

    <div class="p-2">
        Description : <br>
        <textarea class="form-control" disabled></textarea>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Offer duration :<br>
            <input type="text" class="form-control" disabled>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Number of possible candidacies :<br>
            <input type="number" class="form-control" disabled>
        </div>
    </div>

    <div class="p-2">
        <button type="submit" class="btn btn-primary">Modify</button>
        <button type="submit" class="btn">
            <i class="fa-solid fa-trash-can fa-2xl"></i>
        </button>
        <button type="submit" class="btn">
            <i class="fa-solid fa-square-check fa-2xl"></i>
        </button>
    </div>
</form>

@endsection