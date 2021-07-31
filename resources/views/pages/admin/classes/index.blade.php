@extends('layouts.dash')
@section('title', 'Class')
@section('main_title', 'Class Page')
@section('content')
    <div class="row">
      <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="color: #d30c55;">List Class</h4>
                </div>
                <div class="card-content">
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr style="color: #d30c55;">
                                    <th>NAME</th>
                                    <th>CATEGORY</th>
                                    <th>SLUG</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                
                              @foreach ($data as $item)
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
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection