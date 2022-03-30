@extends('./layouts/layout')

@section('content')
    <h1 class="text-center"> Student List </h1>
    @foreach ($students as $student) 
    <div class="font-size-4 h4 text-center">
        <a href="{{ route('student.update', ['id' => $student->id_user ]) }}" class="text-decoration-none">{{ $student->last_name }} {{$student->first_name }}</a> 
        | created the {{$student->created_at->format('d/m/Y')}}
    </div>
    @endforeach
@endsection