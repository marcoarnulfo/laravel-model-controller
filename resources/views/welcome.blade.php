@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Welcome to Lara-Library</h1>
      <p class="col-md-8 fs-4">Find out our amazing books colletion</p>
      <button class="btn btn-primary btn-lg" type="button">Find out more</button>
    </div>
  </div>
  <div class="container">
    <div class="row">
      @foreach($movies as $movie)
      <div class="col">
        <div class="card">
          <div class="card-body">
            <p>{{$movie->title}}</p>
            <p>{{$movie->original_title}}</p>
            <p>{{$movie->date}}</p>
            <p>{{$movie->vote}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection