@extends('layouts.dash')
@section('title', 'Chapter')
@section('main_title', 'Chapter Page')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center" style="color: #d30c55;">5 Menit Fullstack Javascript & Vue Developer</h1>
                </div>
            </div>
        </div>
    </div>
    
    <h3 style="color: #d30c55; margin-bottom: 25px;">List Video</h3>

    <div class="row">
      <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('chapter-video-create') }}" class="btn text-white" style="background: #d30c55;">Add New Video</a>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr style="color: #d30c55;">
                                    <th>TITLE</th>
                                    <th>SLUG</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                              {{-- @foreach ($data as $item)
                                <tr style="color: #8f3f5c;">
                                    <td class="text-bold-500">{{ $item->name }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('class.detail', $item->id) }}"><i class="bi bi-class" style="font-size: 25px;"></i></a>
                                            <div class="mx-2">|</div>
                                            <a href="{{ route('class.edit', $item->id) }}"><i class="bi bi-pencil-square" style="font-size: 25px;"></i></a>
                                            <div class="mx-2">|</div>
                                            <a href="{{ route('class.delete', $item->id) }}"><i class="bi bi-trash-fill" style="font-size: 25px; color: red;"></i></a>
                                         </div>
                                    </td>
                                </tr>
                              @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection