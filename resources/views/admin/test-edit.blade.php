@extends('layouts.master')

@section('title')
    CTIS | Edit Test Kit 
@endsection
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                 <h3>Manage Test Kit</h3>
                 @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <form action="/kit-update/{{$manage_kit->id}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label>Test Name</label>
                        <input type="text" name="testname" value="{{$manage_kit->testName}}" class="form-control">
                    </div>
                    <div class="from-group">
                        <label>Update Status</label>
                        <select name="status" class="form-control">
                            <option value="available">Available</option>
                            <option value="unavailable">Unvailable</option>
                        </select>            
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/manage_kit" class="btn btn-danger">Cancel</a>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection

@section('script')
@endsection