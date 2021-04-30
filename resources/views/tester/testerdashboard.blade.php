@extends('layouts.testermaster')

@section('title')
    CTIS | Tester Dashboard 
@endsection


@section('content')

<div class="row">
<div class="col-md-12">
  <div class="card" >
    <div class="card-header">
      <h4 class="card-title"> Welcome to Tester Dashboard</h4>
      <p>Always stay healthy, Tester!</p>
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