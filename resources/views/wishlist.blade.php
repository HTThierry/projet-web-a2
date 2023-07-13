@extends('./layouts/layout')

@section('content')

<div class="text-center">
    <p class="h1">Wishlist</p></br>
</div>

<form>
    <table class="table table-bordered border-dark">
        <thead class="table-secondary border-dark">
            <tr>
                <th scope="col" class="col-1">ID</th>
                <th scope="col" class="col-3">Offer Title</th>
                <th scope="col">Description</th>
                <th scope="col" class="col-1">Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>a</td>
                <td>a</td>
                <td>
                    <button type="submit" class="btn ">
                        <i class="fa-solid fa-trash-can fa-xl"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>a</td>
                <td>a</td>
                <td>
                    <button type="submit" class="btn ">
                        <i class="fa-solid fa-trash-can fa-xl"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</form>


@endsection