@extends('./layouts/layout')

@section('content')
    <h1 class="text-center"> Tutor List </h1>
    @foreach ($tutors as $tutor) 
    <div class="font-size-4 h4 text-center">
        <a href="{{ route('tutor.update', ['id' => $tutor->id_user ]) }}" class="text-decoration-none">{{ $tutor->last_name }} {{$tutor->first_name }}</a> 
        | created the {{$tutor->created_at->format('d/m/Y')}}
    </div>
    @endforeach
@endsection