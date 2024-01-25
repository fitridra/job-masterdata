@extends('layout.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Update Job Title</h5>

            <div class="card mt-3">
                <div class="card-body">
                    <form action="{{route('update',$job->id)}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputCode1" class="form-label">Job Code</label>
                            <input type="text" class="form-control" name="JobCode" value="{{$job->JobCode}}"
                                id="exampleInputCode1" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputTitle1" class="form-label">Job Title</label>
                            <input type="text" class="form-control" name="JobTitleName" id="exampleInputTitle1"
                                value="{{$job->JobTitleName}}" aria-describedby="titleHelp" maxlength="20" required>
                            <div id="titleHelp" class="form-text">Job Title Field must be less than equal to 20
                                characters long.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Department Name</label>
                            <select class="form-select" id="exampleInputName1" name="DepartmentID">
                                <option value="" selected>Select a Department</option>
                                @foreach($data_department as $dep)
                                <option value="{{$dep->id}}" @if($dep->id == $job->DepartmentID) selected @endif>
                                    {{$dep->DepartmentName}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary m-1">Save</button>
                        <a href="/" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection