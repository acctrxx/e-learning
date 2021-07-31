@extends('layouts.dash')
@section('title', 'Chapter')
@section('main_title', 'Chapter Create')
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
    <form action="{{-- route('chapter.store') --}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="helperText" style="color: #d30c55;">Title</label>
        <input value="{{ old('title') }}" type="text" id="helperText" name="title" class="form-control" placeholder="Title">
      </div>
      <button class="btn text-white" style="background: #d30c55; width: 100%;">Save Now</button>
    </form>
  </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'editor' );
    </script>
@endpush