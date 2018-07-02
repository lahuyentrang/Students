@extends('Layouts.layouts')
@section('content')
<div class="container">
  <h2>Profile</h2>

  <div class="card" style="width:400px">
    <img class="card-img-top" src="{{ asset('upload/'.$model ->photo) }}" alt="Card image" width="300px" height="300px">
    <div class="card-body">
      <h4 class="card-title">{{$model ->name}}</h4>
      <p class="card-text"><b>Class:</b> {{$model ->class}}</p>
      <p class="card-text"><b>Ma Sv: </b>{{$model ->masv}}</p>
      <p class="card-text"><b> Ngay sinh:</b> {{$model ->dob}}</p>
      <a href="/" class="btn btn-primary">Return</a>

    </div>
  </div>
</div>
@endsection