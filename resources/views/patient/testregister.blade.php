@extends('layouts.patientmaster')

@section('title')
    CTIS | Patient Dashboard 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Registered Test Report</h4>
                <p>- Listed Patient Test Report -</p>
            </div>
            <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class=" text-primary">
            <th>
              Name
            </th>
            <th>
              Test Date
            </th>
            <th>
              Result Date
            </th>
            <th>
              Status
            </th>
            <th>
              Test Centre Name
            </th>
          </thead>
          <tbody>
          @foreach ($testreg as $row)
            <tr>
              <td>
                {{$row->patientName}}
              </td>
              <td>
                {{$row->testDate}}
              </td>
              <td>
              {{$row->dateResult}}
              </td>
              <td>
              {{$row->status}}
              </td>
              <td>
              {{$row->centreName}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
        </div>
    </div>
</div>
@endsection


@section('script')

@endsection