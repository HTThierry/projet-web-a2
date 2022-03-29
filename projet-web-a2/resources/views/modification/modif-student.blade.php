@extends('layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Modification de compte étudiant :</p></br>
</div>
<form method="post" action="{{ route('student.update', $id)}}">
    @csrf
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif
    @foreach($users as $user)
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Nom :<br>
            <input type="text" class="form-control" placeholder="{{$user->last_name}}" value="{{$user->last_name}}" name="last_name">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Prénom :<br>
            <input type="text" class="form-control" placeholder="{{$user->first_name}}" value="{{$user->first_name}}" name="first_name">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Username :<br>
            <input type="text" class="form-control" placeholder="{{$user->login}}" value="{{$user->login}}" name="login">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Email :<br>
            <input type="email" class="form-control" placeholder="{{$user->email}}" value="{{$user->email}}" name="email">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Ancien mot de passe :<br>
            <input type="password" class="form-control" placeholder="{{$user->password}}" value="{{$user->password}}" name="password">
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Nouveau mot de passe :<br>
            <input type="password" class="form-control" placeholder="confirmez le nouveau mot de passe ou l'ancien si inchangé" name="passwordControl">
        </div>
    </div>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            Numéro de téléphone :<br>
            <input type="tel" class="form-control" placeholder="{{$user->phone_number}}" value="{{$user->phone_number}}" name="phone_number">
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight flex-fill">
            Centre : (actuellement oldValue)<br>
            <select class="form-select" aria-label="Default select example" name="center">
                <option value="{{$center}}" selected>{{$center}}</option>
                @foreach($centers as $center)
                    <option value="{{$center->title}}">{{$center->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="p-2 bd-highlight flex-fill">
            Promotion : (actuellement oldValue)<br>
            <select class="form-select" aria-label="Default select example" name="class_promotion">
                <option value="{{$class_promotion}}" selected>{{$class_promotion}}</option>
                @foreach($class_promotions as $class_promotion)
                    <option value="{{$class_promotion->title}}">{{$class_promotion->title}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="p-2">
        <button type="submit" class="btn btn-primary">Modifier</button>
    </div>
    @endforeach
</form>
<div class="p-2">
    <form action="{{route('student.delete', $id)}}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Supprimer</button> <!-- confirmer la suppression avec une popup peut être à voir -->
    </form>
</div>

@endsection