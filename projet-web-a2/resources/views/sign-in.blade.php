@extends('layouts/layout')

@section('content')
<div class="m-5" style="width: 80%">
      <h2>Login</h2> 

      <fieldset class="p-2 border border-dark">
        <div class="bd-highlight">
          <div class="p-2 bd-highlight">
            Username : 
            <input type="text" class="form-control">
          </div>
          <div class="p-2 bd-highlight">
            Password :
            <input type="text" class="form-control">
          </div>
          <div class="p-2 bd-highlight">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>

        </div>
      </fieldset>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    @endsection