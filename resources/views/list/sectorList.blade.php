@extends('./layouts/layout')

@section('content')
    <h1 class="text-center"> Business sector list </h1>
    @foreach ($sectors as $sector) 
    <div class="font-size-4 h4 text-center">
        <a href="{{ route('sector.update', ['id' => $sector->id_business_sector ]) }}" class="text-decoration-none">{{ $sector->title }}</a> 
        | created the {{$sector->created_at->format('d/m/Y')}}
    </div>
    @endforeach
@endsection