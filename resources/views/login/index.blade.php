
@extends('layout.main')

@section ('title', 'LOGIN')

@section ('container')
<div class="container">
<form class=" " action="{{url('login-proses')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">Password</label>
    <input name="password" type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
  </div>
  <div class="form-group">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
      <label class="form-check-label" for="dropdownCheck2">
        Remember me
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
<br> 
</div>
<br>
<div class="container">
<a  class="btn btn-primary btn-lg btn-block" href="{{url('/register')}}"> 
  <button type="button" class="btn btn-primary btn-lg btn-block" name="login1">Buat Akun</button>
</a>
</div>
@endsection

