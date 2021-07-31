@extends('layouts.dash')
@section('title', 'Categories')
@section('main_title', 'Categories Edit')
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
    <form action="{{ route('category.update', $data->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="helperText">Categories</label>
        <input value="{{ old('name', $data->name) }}" type="text" id="helperText" name="name" class="form-control" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="helperText" style="color: #d30c55;">Image</label>
        <input value="{{ old('photo', $data->photo) }}" type="file" id="helperText" class="form-control" name="photo" placeholder="Image">
      </div>
      <button class="btn text-white" style="background: #d30c55;">Sumbit</button>
    </div>
  </form>
</div>
@endsection