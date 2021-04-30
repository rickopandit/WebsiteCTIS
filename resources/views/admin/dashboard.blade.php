@extends('layouts.master')

@section('title')
    CTIS | Test Center Manager Dashboard 
@endsection


@section('content')

<div class="row">
<div class="col-md-12">
  <div class="card" >
    <div class="card-header">
      <h3 class="card-title">Welcome to Test Centre Manager Dashboard</h3>
      <p>Always stay healthy, Manager!</p>
    </div>
    <div class="card-body">
    <div class="card" style="width: 18rem;">
      <img src="assets\img\hands.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Always wash your hands after do activity outdoor</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="assets\img\masker.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Always wear your mask when go outside.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="assets\img\space.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Remember to do social distancing with anyone.</p>
      </div>
    </div>
      <div class="table-responsive">
      </div>
    </div>
  </div>
</div>
@endsection


@section('script')

@endsection