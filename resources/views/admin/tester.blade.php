@extends('layouts.master')

@section('title')
    CTIS | Record Tester 
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Record new Tester</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/new-tester" method="POST">
      {{csrf_field() }}
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Tester name:</label>
            <input type="text" name="testername" class="form-control" id="recipient-name">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="card" >
    <div class="card-header">
      <h4 class="card-title">Record Tester</h4>
      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">New Tester</button>
      @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
      @endif
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <table class="table">
        <thead class="text-primary">
            <th>ID</th>
            <th>Tester Name</th>
            <th>Action</th>
        </thead>
        <tbody>
        @foreach ($tester as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->testerName}}</td>
                <td>
                  <form action="{{ url('tester-delete/'. $data->id)}}" method="POST">
                   {{csrf_field() }}
                   {{method_field('DELETE')}}
                   <button type="submit" class="btn btn-danger">DELETE</a>
                  </form>
                </td>
            </tr>
            @endforeach
      </table>
      </div>
    </div>
  </div>
</div>
@endsection


@section('script')

@endsection