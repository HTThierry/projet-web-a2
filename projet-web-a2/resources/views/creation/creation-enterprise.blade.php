@extends('./layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Company creation</p></br>
</div>
<div class="p-2">
    <fieldset class="p-2 border border-primary">
        <legend>Company info :</legend>
        <form>
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight flex-fill">
                    Company name :<br>
                    <input type="text" class="form-control">
                </div>
                <div class="p-2 bd-highlight flex-fill">
                    Activity sector :<br>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="p-2">
                Description : <br>
                <textarea class="form-control" rows="5"></textarea>
            </div>
            <legend>Headquarters address :</legend>
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
            <div class="p-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </fieldset>
</div>
<div class="p-2">
    <fieldset class="p-2 border border-primary">
        <legend>Contact :</legend>
        <form>
            <div class="d-flex flex-column bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    Phone number :
                    <input type="tel" class="form-control">
                </div>
                <div class="p-2 bd-highlight">
                    Email address :<br>
                    <input type="email" class="form-control">
                </div>
            </div>
            <div class="p-2">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </fieldset>
</div>
<div class="p-2">
    <fieldset class="p-2 border border-primary">
        <legend>Sites :</legend>
        <form>
            <div class="d-flex flex-column bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    Site's address :
                    <input type="tel" class="form-control">
                </div>
                <div class="p-2 bd-highlight">
                    Site's photo :<br>
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
                <div class="p-2">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
        <legend>Existing sites display :</legend>
        <select class="form-select" aria-label="Default select example">
            <option selected>Site 1</option>
            <option value="1">Site 2</option>
            <option value="2">Site 3</option>
        </select>
    </fieldset>
</div>
@endsection