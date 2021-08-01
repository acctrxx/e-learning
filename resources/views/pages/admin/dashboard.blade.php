@extends('layouts.dash')
@section('title', 'Dashboard')
@section('content')
<div id="app">
  <div class="page-heading">
      <h3 style="color: #d30c55;">Profile Statistics</h3>
  </div>
  <div class="page-content">
      <section class="row">
          <div class="col-12 col-lg-9">
              <div class="row">
                  <div class="col-6 col-lg-3 col-md-6">
                      <div class="card">
                          <div class="card-body px-3 py-4-5">
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="stats-icon purple">
                                          <i class="iconly-boldShow"></i>
                                      </div>
                                  </div>
                                  <div class="col-md-8">
                                      <h6 class="text-muted font-semibold">Profile Views</h6>
                                      <h6 style="color: #d30c55;" class="font-extrabold mb-0">112.000</h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-6 col-lg-3 col-md-6">
                      <div class="card">
                          <div class="card-body px-3 py-4-5">
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="stats-icon blue">
                                          <i class="iconly-boldProfile"></i>
                                      </div>
                                  </div>
                                  <div class="col-md-8">
                                      <h6 class="text-muted font-semibold">Followers</h6>
                                      <h6 style="color: #d30c55;" class="font-extrabold mb-0">183.000</h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-6 col-lg-3 col-md-6">
                      <div class="card">
                          <div class="card-body px-3 py-4-5">
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="stats-icon green">
                                          <i class="iconly-boldAdd-User"></i>
                                      </div>
                                  </div>
                                  <div class="col-md-8">
                                      <h6 class="text-muted font-semibold">Following</h6>
                                      <h6 style="color: #d30c55;" class="font-extrabold mb-0">80.000</h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-6 col-lg-3 col-md-6">
                      <div class="card">
                          <div class="card-body px-3 py-4-5">
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="stats-icon red">
                                          <i class="iconly-boldBookmark"></i>
                                      </div>
                                  </div>
                                  <div class="col-md-8">
                                      <h6 class="text-muted font-semibold">Saved Post</h6>
                                      <h6 style="color: #d30c55;" class="font-extrabold mb-0">112</h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 style="color: #d30c55;">Profile Visit</h4>
                          </div>
                          <div class="card-body">
                              <div id="chart-profile-visit"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-lg-3">
              <div class="card">
                  <div class="card-body py-4 px-5">
                      <div class="d-flex align-items-center">
                          <div class="avatar avatar-xl">
                              <img src="/storage/{{ Auth::user()->image }}" alt="Face 1">
                          </div>
                          <div class="ms-3 name">
                              <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                              <h6 class="text-muted mb-0">Ceo Belajar Koding</h6>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card">
                  <div class="card-header">
                      <h4 style="color: #d30c55;">Popular Developer</h4>
                  </div>
                  <div class="card-content pb-4">
                      <div class="recent-message d-flex px-4 py-3">
                          <div class="avatar avatar-lg">
                              <img src="{{ asset('/dist/assets/images/faces/4.jpg') }}">
                          </div>
                          <div class="name ms-4">
                              <h5 style="color: #d30c55;" class="mb-1">Hank Schrader</h5>
                              <h6 class="text-muted mb-0">@johnducky</h6>
                          </div>
                      </div>
                      <div class="recent-message d-flex px-4 py-3">
                          <div class="avatar avatar-lg">
                              <img src="{{ asset('dist/assets/images/faces/5.jpg') }}">
                          </div>
                          <div class="name ms-4">
                              <h5 style="color: #d30c55;" class="mb-1">Dean Winchester</h5>
                              <h6 class="text-muted mb-0">@imdean</h6>
                          </div>
                      </div>
                      <div class="recent-message d-flex px-4 py-3">
                          <div class="avatar avatar-lg">
                              <img src="{{ asset('dist/assets/images/faces/1.jpg') }}">
                          </div>
                          <div class="name ms-4">
                              <h5 style="color: #d30c55;" class="mb-1">John Dodol</h5>
                              <h6 class="text-muted mb-0">@dodoljohn</h6>
                          </div>
                      </div>
                      <div class="px-4">
                          <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                              Conversation</button>
                      </div>
                  </div>
              </div>
              {{-- Lastest Reviews Table --}}
          </div>
      </section>
  </div>
</div>
@endsection