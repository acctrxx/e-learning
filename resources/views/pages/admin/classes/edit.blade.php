@extends('layouts.dash')
@section('title', 'Class')
@section('main_title', 'Class Edit')
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
    <form action="{{ route('class.update') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="helperText" style="color: #d30c55;">Name</label>
        <input value="{{ old('name', $data->name) }}" type="text" id="helperText" name="name" class="form-control" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="helperText" style="color: #d30c55;">Description</label>
        <textarea name="description" id="editor">{{ old('description', $data->description) }}</textarea>
      </div>
      <div class="form-group">
        <label for="" style="color: #d30c55;">Class Owner</label>
        <select name="user_id" class="form-control">
          @foreach ($users as $user)
              <option value="{{ $user->id }}">{{ $user->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="" style="color: #d30c55;">Category</label>
        <select name="categories_id" class="form-control">
          @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="helperText" style="color: #d30c55;">Thumbnail</label>
        <input value="{{ old('photo', $data->photo) }}" type="file" id="helperText" class="form-control" name="photo" placeholder="Image">
      </div>
      <button class="btn text-white" style="background: #d30c55;">Sumbit</button>
    </form>
  </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'editor' );
    </script>
@endpush