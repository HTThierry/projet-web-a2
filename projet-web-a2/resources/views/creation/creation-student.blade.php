@extends('layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Student account creation :</p></br>
</div>
<form method="post" action="{{ route('student.store')}}">
    @csrf
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Name :<br>
            <input type="text" class="form-control" name="first_name">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Surname :<br>
            <input type="text" class="form-control" name="last_name">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Username :<br>
            <input type="text" class="form-control" name="login">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Email :<br>
            <input type="email" class="form-control" name="email">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Password :<br>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Confirm :<br>
            <input type="password" class="form-control" name="passwordControl">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            Phone number :<br>
            <input type="tel" class="form-control" name="phone_number">
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Site :<br>
            <select class="form-select" aria-label="Default select example" name="center">
                <option selected value=>Choose :</option>
                @foreach($centers as $center)
                    <option value="{{$center->title}}">{{$center->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Class :<br>
            <select class="form-select" aria-label="Default select example" name="class_promotion">
                <option selected value=>Choose :</option>
                @foreach($class_promotions as $class_promotion)
                    <option value="{{$class_promotion->title}}">{{$class_promotion->title}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="p-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection