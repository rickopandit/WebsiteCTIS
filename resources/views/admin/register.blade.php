@extends('layouts.master')

@section('title')
    CTIS | Test Center Manager Dashboard 
@endsection


@section('content')

<div class="row">
<div class="col-md-12">
  <div class="card" >
    <div class="card-header">
      <h4 class="card-title"> Registered User</h4>
      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{session('status')}}
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
              Name
            </th>
            <th>
              Phone
            </th>
            <th>
              Email
            </th>
            <th>
              User Type
            </th>
            <th>
              Edit
            </th>
          </thead>
          <tbody>
              @foreach ($users as $row)

            <tr>
              <td>
                {{$row->id}}
              </td>
              <td>
                {{$row->name}}
              </td>
              <td>
                {{$row->phone}}
              </td>
              <td>
                {{$row->email}}
              </td>
              <td>
                {{$row->usertype}}
              </td>
              <td>
                <a href="/role-edit/{{$row->id}}" class="btn btn-success">Edit</a>
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