@extends('layouts.master')

@section('title')
    CTIS | Edit-Register 
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Manage User</h3>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status') }}
                    </div>
                </div>
                    @endif
                <div class="card-body">
                    <form action="/role-register-update/{{$users->id}}" method="POST">                    
                        {{csrf_field() }}
                        {{method_field('PUT') }}

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="username" value="{{$users->name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Edit Role</label>
                        <select name="usertype" class="form-control">
                            <option value="tester">Tester</option>
                            <option value="officer">Test Centre Officer</option>
                            <option value="patient">Patient</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/role-register" class="btn btn-danger">Cancel</a>      
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
@endsection