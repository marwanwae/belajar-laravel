
@extends('layout.main')

@section ('title', 'register')

@section ('container')
<div class="container">
    
<form class=" " action="{{url('register-proses')}}" method="POST">
  @csrf
  <h1 class="h3 mb-h3 font-weight-normal">DAFTAR AKUN BARU!</h1>
  <div class="form-group">
    <label for="inputName">Nama Lengkap</label>
  <input value="{{ old('name') }}" name="name" type="text" class="form-control {{ $errors->has('name') ? 'is in-valid' :''}}" id="inputName" placeholder="Nama Kamu">

        @error('name')
        <div class="invalid-feedback d-block"> 
          {{$message}}
        </div>
        @enderror

  </div>
  <div class="form-group">
    <label for="inputEmail">Email address</label>
    <input name="email" type="email" class="form-control {{ $errors->has('email') ? 'is in-valid' :''}}" id="inputEmail" placeholder="email@example.com">
    @error('email')
        <div class="invalid-feedback d-block"> 
          {{$message}}
        </div>
        @enderror
  </div>
  <div class="form-group">
    <label for="inputPassword">Password</label>
    <input name="password" type="password" class="form-control {{ $errors->has('password') ? 'is in-valid' :''}}" id="inpuPassword" placeholder="Password">
    @error('password')
    <div class="invalid-feedback d-block"> 
      {{$message}}
    </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="inputPasswordConfirmation">Password Confirmation</label>
    <input name="password_confirmation" type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is in-valid' :''}}" id="inputPasswordConfirmation" placeholder="Password Confirmation">
    @error('password')
    <div class="invalid-feedback d-block"> 
      {{$message}}
    </div>
    @enderror
  </div>
  <div class="form-group">
    
  </div>
  <button type="submit" class="btn btn-primary">buat akun</button>
</form>
</div>
@endsection

