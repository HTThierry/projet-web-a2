@extends('./layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Company creation</p></br>
</div>
<div class="p-2">
    <fieldset class="p-2 border border-primary">
        <legend>Company info :</legend>
        <form method="post" action="{{ route('enterprise.store')}}">
            @csrf
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight flex-fill">
                    Company name :<br>
                    <input type="text" class="form-control">
                </div>
                <div class="p-2 bd-highlight flex-fill">
                    Activity sector :<br>
                    <select class="form-select" aria-label="Default select example" name="center">
                        <option selected value=>Choose :</option>
                        @foreach($sectors as $sector)
                            <option value="{{$sector->title}}">{{$sector->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="p-2">
                Description : <br>
                <textarea class="form-control" rows="5"></textarea>
            </div>
            <div class="p-2">
                Number of Cesi student already in the company : <br>
                <input type="text" class="form-control">
            </div>
            <div class="p-2 bd-highlight">
                Company's photo :<br>
                <input type="file" class="form-control" id="inputGroupFile01">
            </div>
            <div class="p-2 bd-highlight">
                Company's headquarter name :<br>
                <input type="text" class="form-control">
            </div>
            <div class="p-2">
                Company's sites (if you want to add one to this list see below):<br>
                <select class="form-select" aria-label="Default select example">
                    <option selected value=>Choose :</option>
                    @foreach($sites as $site)
                    <option value="{{$site->title}}">{{$site->title}}</option>
                    @endforeach
                </select>
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
            @csrf
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
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
    <fieldset class="p-2 pb-5 border border-primary">
        <legend>Sites :</legend>
        <form>
            @csrf
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            <div class="d-flex flex-column bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    Site's name :<br>
                    <input type="text" class="form-control">
                </div>
                <div class="p-2 bd-highlight">
                    Site's description : <br>
                    <textarea class="form-control" rows="5"></textarea>
                </div>
                <<div class="d-flex bd-highlight">
                    <div class="p-2 bd-highlight">
                        Site's country : <br>
                        <input type="text" class="form-control">
                    </div>
                    <div class="p-2 bd-highlight">
                        Site's city : <br>
                        <input type="text" class="form-control">
                    </div>
                    <div class="p-2 flex-grow-1 bd-highlight">
                        Site's address : <br>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="p-2 bd-highlight">
                    Site's photo :<br>
                    <input type="file" class="form-control" id="inputGroupFile02">
                </div>
                <div class="p-2">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </fieldset>
</div>
<div class="p-5"></div>
@endsection