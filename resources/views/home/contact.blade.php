@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead"><strong>Email:</strong> {{ $email }}</p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead"><strong>Address:</strong> {{ $address }}</p>
      <p class="lead"><strong>Phone:</strong> {{ $phone }}</p>
    </div>
  </div>
</div>
@endsection
