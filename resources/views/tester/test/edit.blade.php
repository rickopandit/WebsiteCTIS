@extends('layouts.testermaster')

@section('title')
    CTIS | Update Test 
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Update Test Data</div>
                <form action="{{url('test-update/'. $newtest->id) }}" method= "POST">
                    {{csrf_field() }}
                    {{method_field ('PUT')}}
                    <div class="modal-body">
                        <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Patient Name:</label>
                        <input type="text" name="patientName" class="form-control" value="{{$newtest->patientName}}">
                        </div>
                        <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Test Date:</label>
                        <input type="text" name="testDate" class="form-control" value="{{$newtest->testDate}}">
                        </div>
                        <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Test Result:</label>
                        <input type="text" name="testResult" class="form-control" value="{{$newtest->testResult}}">
                        </div>
                        <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Test Result Date:</label>
                        <input type="text" name="dateResult" class="form-control" value="{{$newtest->dateResult}}">
                        </div>
                        <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Status:</label>
                        <input type="text" name="status" class="form-control" value="{{$newtest->status}}">
                        </div>
                        <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Test Centre Name:</label>
                        <input type="text" name="centreName" class="form-control" value="{{$newtest->centreName}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                    <a href="{{url('managetest') }}" class="btn btn-secondary" data-dismiss="modal">Back</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
</div>

@endsection