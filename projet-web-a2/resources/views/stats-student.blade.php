@extends('./layouts/layout')

@section('content')

<div class="text-center">
    <p class="h1">(Student's name)'s stats</p></br>
</div>
<div class="d-flex flex-row bd-highlight mb-3">
    <div class="p-2 bd-highlight flex-fill">
        Number of candidacies submitted :<br>
        <input type="number" class="form-control" disabled>
    </div>
</div>

<form>
    <table class="table table-bordered border-dark">
        <thead class="table-secondary border-dark">
            <tr>
                <th scope="col">Accepted candidacies :</th>
                <th scope="col">Pending candidacies :</th>
                <th scope="col">Declined candidacies :</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>a</td>
                <td>a</td>
                <td>a</td>
            </tr>
        </tbody>
    </table>
</form>

@endsection