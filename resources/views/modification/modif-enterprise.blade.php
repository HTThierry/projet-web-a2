@extends('./layouts/layout')

@section('content')
<div class="text-center">
    <p class="h1">Company creation</p></br>
</div>
<div class="p-2">
    <fieldset class="p-2 border border-primary">
        <legend>Company info :</legend>
        <form method="post" action="{{ route('enterprise.update', $id)}}" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight flex-fill">
                    Company name :<br>
                    <input type="text" class="form-control" name="title" placeholder="{{$enterpriseChoice[0]->title}}" value="{{$enterpriseChoice[0]->title}}">
                </div>
                <div class="p-2 bd-highlight flex-fill">
                    Business sector :<br>
                    <select class="form-select" aria-label="Default select example" name="business_sector">
                        <option selected value="{{$sectorChoice[0]->title}}">{{$sectorChoice[0]->title}}</option>
                        @foreach($sectors as $sector)
                            <option value="{{$sector->title}}">{{$sector->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="p-2">
                Description : <br>
                <textarea class="form-control" rows="5" name="description" placeholder="{{$enterpriseChoice[0]->description}}">{{$enterpriseChoice[0]->description}}</textarea>
            </div>
            <div class="p-2">
                Number of Cesi student already in the company : <br>
                <input type="text" class="form-control" name="number_of_cesi_students" placeholder="{{$enterpriseChoice[0]->number_of_cesi_students}}" value="{{$enterpriseChoice[0]->number_of_cesi_students}}">
            </div>
            <div class="p-2 bd-highlight">
                Company's logo :<br>
                <img src="{{Storage::url($enterpriseChoice[0]->logo)}}" alt="Logo company">
            </div>
            <div class="p-2 bd-highlight">
                Company's headquarter name :<br>
                <input type="text" class="form-control" name="headquarter" placeholder="{{$enterpriseChoice[0]->headquarter}}" value="{{$enterpriseChoice[0]->headquarter}}">
            </div>
            <div class="p-2">
                Pilot confidence / 5 :<br>
                <select class="form-select" aria-label="Default select example" name="pilot_confidence">
                    <option value="{{$enterpriseChoice[0]->pilot_confidence}}" selected>{{$enterpriseChoice[0]->pilot_confidence}}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="p-2">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </fieldset>
</div>
<div class="p-2">
    @foreach($contacts as $contact)
    <fieldset class="p-2 border border-primary">
        <legend>Contact :</legend>
        <form method="post" action="{{ route('contact.update', $id)}}">
            @csrf
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            <div class="d-flex flex-column bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    Phone number :
                    <input type="tel" class="form-control" name="numero" placeholder="{{$contact->numero}}" value="{{$contact->numero}}">
                </div>
                <div class="p-2 bd-highlight">
                    Email address :<br>
                    <input type="email" class="form-control" name="email" placeholder="{{$contact->email}}" value="{{$contact->email}}">
                </div>
            </div>
            <div class="p-2">
                Company :<br>
                <select class="form-select" aria-label="Default select example" name="enterprise">
                    <option selected value="{{$enterpriseChoice[0]->title}}">{{$enterpriseChoice[0]->title}}</option>
                    @foreach($enterprises as $enterprise)
                    <option value="{{$enterprise->title}}">{{$enterprise->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="p-2">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </fieldset>
    @endforeach
</div>
<div class="p-2">
    @foreach($sites as $site)
    <fieldset class="p-2 pb-5 border border-primary">
        <legend>Sites :</legend>
        <form method="post" action="{{ route('site.update', $id)}}" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            <div class="d-flex flex-column bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    Site's name :<br>
                    <input type="text" class="form-control" name='title' placeholder="{{$site->title}}" value="{{$site->title}}">
                </div>
                <div class="p-2 bd-highlight">
                    Site's description : <br>
                    <textarea class="form-control" rows="5" name='description' placeholder="{{$site->description}}" value="{{$site->description}}"></textarea>
                </div>
                <div class="p-2 bd-highlight">
                    Site phone number : <br>
                    <input type="tel" class="form-control" name='phone_number'></input>
                </div>
                <div class="d-flex bd-highlight">
                    <div class="p-2 bd-highlight">
                        Site's country : <br>
                        <select class="form-select" aria-label="Default select example" name="country">
                            <option selected value=>Choose :</option>
                            @foreach($countries as $country)
                            <option value="{{$country->title}}">{{$country->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="p-2 bd-highlight">
                        Site's city : <br>
                        <input type="text" class="form-control" name='city' placeholder="{{$site->city}}" value="{{$site->city}}">
                    </div>
                    <div class="p-2 flex-grow-1 bd-highlight">
                        Site's address : <br>
                        <input type="text" class="form-control" name='address' placeholder="{{$site->address}}" value="{{$site->address}}">
                    </div>
                </div>
                <div class="p-2 bd-highlight">
                    Site's photo :<br>
                    <img src="{{Storage::url($site->picture)}}" alt="Site photo">
                </div>
                <div class="p-2">
                    Company :<br>
                    <select class="form-select" aria-label="Default select example" name="enterprise">
                        <option selected value="{{$enterpriseChoice[0]->title}}">{{$enterpriseChoice[0]->title}}</option>
                        @foreach($enterprises as $enterprise)
                        <option value="{{$enterprise->title}}">{{$enterprise->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="p-2">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </form>
    </fieldset>
    @endforeach
</div>
<div class="p-5"></div>
@endsection