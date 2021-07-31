@extends('layouts.dash')
@section('title', 'Class')
@section('main_title', 'Class Detail Page')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column justify-content-center">
                        <img src="{{ asset('/images/banner-1.svg') }}" style="max-height: 400px;">
                        <div class="d-flex mt-10">
                            <img src="{{ asset('dist/assets/images/faces/3.jpg') }}" style="max-height: 70px; border-radius: 50%; margin-right: 20px;">
                            <div class="d-flex flex-column items-center">
                                <h5 style="margin-bottom: -1px; color: #d30c55;">Fajar Merah</h5>
                                <p class="text-muted" style="margin-bottom: -1px;">Machine Learning</p>
                                <small class="text-muted">Created at : 12 - 20 - 2021</small>
                            </div>
                        </div>
                        <h1 class="mt-10" style="color: #d30c55;">5 Menit Fullstack Javascript & Vue Developer</h1>
                        <h5 class="lh-lg mt-3" style="color: #f17ba7;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 style="color: #d30c55; margin-bottom: 25px;">List Chapter</h3>

    <div class="row">
      <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('chapter-create') }}" class="btn text-white" style="background: #d30c55;">Add New Chapter</a>
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