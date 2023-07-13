@extends('layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Sector update :</p></br>
</div>
<form method="post" action="{{ route('sector.update', $id)}}">
    @csrf
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Already existing sectors :<br>
            <select class="form-select" aria-label="Default select example">
                <option selected value=>Choose :</option>
                @foreach($sectors as $sector)
                    <option value="{{$sector->title}}">{{$sector->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Update your sector here :<br>
            <input type="text" class="form-control" placeholder="{{$sectorTitle->title}}" value="{{$sectorTitle->title}}" name="title">
        </div>
    </div>
    <div class="p-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection