@extends('layouts.testermaster')

@section('title')
    CTIS | Manage Test 
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Test</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/save-test" method= "POST">
        {{csrf_field() }}
        <div class="modal-body">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Patient Name:</label>
              <input type="text" name="patientName" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Test Date:</label>
              <input type="text" name="testDate" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Test Result:</label>
              <input type="text" name="testResult" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Test Result Date:</label>
              <input type="text" name="resultDate" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Status:</label>
              <input type="text" name="status" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Test Centre Name:</label>
              <input type="text" name="centreName" class="form-control" id="recipient-name">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit Test</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="card" >
    <div class="card-header">
      <h4 class="card-title"> Manage Test </h4>
      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{session('status')}}
      </div>
      @endif
      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add New Test</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
      <table class ="table">
        <thead class="text-primary">
            <th>Test ID</th>
            <th>Patient Name</th>
            <th>Test Date</th>
            <th>Test Result</th>
            <th>Test Result Date</th>
            <th>Status</th>
            <th>Test Centre Name</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
          @foreach($newtest as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->patientName}}</td>
                <td>{{$data->testDate}}</td>
                <td>{{$data->testResult}}</td>
                <td>{{$data->dateResult}}</td>
                <td>{{$data->status}}</td>
                <td>{{$data->centreName}}</td>
                <td>
                    <a href="{{url('manage-test/' .$data->id) }}" class="btn btn-success">Update</a>
                </td>
                <td>
                  <form action="{{url('test-delete/'. $data->id) }}" method="POST">
                    {{csrf_field() }}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">Delete</a>
                  </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </div>
    </div>
  </div>
</div>
@endsection


@section('script')

@endsection