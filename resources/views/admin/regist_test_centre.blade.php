@extends('layouts.master')

@section('title')
    CTIS | Manage Test Centre
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Test Centre</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/save-centre" method="POST">
      {{csrf_field()}}
      <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Centre Name: </label>
            <input type="text" name="centreName" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Address: </label>
            <input type="text" name="address" class="form-control" id="recipient-name">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="row">
<div class="col-md-12">
  <div class="card" >
    <div class="card-header">
      <h4 class="card-title">Test Centre
      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>
      </h4>
      @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>
              ID
            </th>
            <th>
              Centre Name
            </th>
            <th>
              Address
            </th>
          </thead>
          <tbody>
          @foreach ($regist_test_centre as $data)
            <tr>
              <td>
                {{$data->centreID}}
              </td>
              <td>
                {{$data->centreName}}
              </td>
              <td>
                {{$data->address}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection


@section('script')

@endsection