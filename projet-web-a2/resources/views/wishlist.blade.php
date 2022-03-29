@extends('./layouts/layout')

@section('content')

<div class="text-center">
    <p class="h1">Wishlist</p></br>
</div>

<form>
    <div class="container p-2 text-align-center overflow-auto">
        <div class="row justify-content-around">
            <div class="col-1 border border-primary">
                ID
            </div>
            <div class="col-3 border border-primary">
                Offer title
            </div>
            <div class="col-7 border border-primary">
                Description
            </div>
            <div class="col-1 border border-primary">
                Delete
            </div>
        </div>

        <div class="row">
            <div class="col-1 border border-primary">
                x
            </div>
            <div class="col-3 border border-primary">
                x
            </div>
            <div class="col-7 border border-primary">
                x
            </div>
            <div class="col-1 border border-primary">
                <button type="submit" class="btn ">
                    <i class="fa-solid fa-trash-can fa-2xl"></i>
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-1 border border-primary">
                x
            </div>
            <div class="col-3 border border-primary">
                x
            </div>
            <div class="col-7 border border-primary">
                x
            </div>
            <div class="col-1 border border-primary">
                <button type="submit" class="btn ">
                    <i class="fa-solid fa-trash-can fa-2xl"></i>
                </button>
            </div>
        </div>

    </div>
</form>


@endsection