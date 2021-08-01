@extends('layouts.dash')
@section('title', 'Users')
@section('main_title', 'Users Create')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
  <div class="card-header">
    <h4 style="color: #d30c55;">Input Data</h4>
  </div>
  <div class="card-body">
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="helperText" style="color: #d30c55;">Name</label>
        <input value="{{ old('name') }}" type="text" id="helperText" name="name" class="form-control" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="helperText" style="color: #d30c55;">Email</label>
        <input value="{{ old('email') }}" type="email" id="helperText" name="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="helperText" style="color: #d30c55;">Password</label>
        <input value="{{ old('password') }}" type="password" id="helperText" class="form-control" name="password" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="helperText" style="color: #d30c55;">Retype Password</label>
        <input value="{{ old('password') }}" type="password" id="helperText" class="form-control" name="password_confirmation" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="helperText" style="color: #d30c55;">Image</label>
        <input value="{{ old('image') }}" type="file" id="helperText" class="form-control" name="image" placeholder="Image">
      </div>
      <button class="btn text-white" style="background: #d30c55;">Sumbit</button>
    </div>
  </form>
</div>
@endsection