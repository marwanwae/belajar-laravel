
@extends('layout.main')

@section ('title', 'WELCOME!')

@section ('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Hello, world!</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
<a  class="btn btn-primary btn-lg btn-block" href="{{url('/login')}}"> 
    <button type="button" class="btn btn-primary btn-lg btn-block" name="login1">Login</button>
  </a>
</div>
@endsection

