@extends('./layouts/layout')

@section('content')
    <h1 class="text-center"> Entreprise list </h1>
    @foreach ($enterprises as $enterprise) 
    <div class="font-size-4 h4 text-center">
        <a href="{{ route('enterprise.update', ['id' => $enterprise->id_enterprise ]) }}" class="text-decoration-none">{{ $enterprise->title }}</a> 
        | created the {{$enterprise->created_at->format('d/m/Y')}}
    </div>
    @endforeach
@endsection