@extends('layout.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Update Job Title</h5>

            <div class="card mt-3">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputCode1" class="form-label">Job Code</label>
                            <input type="text" class="form-control" value="J0001" id="exampleInputCode1" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputTitle1" class="form-label">Job Title</label>
                            <input type="text" class="form-control" id="exampleInputTitle1" aria-describedby="titleHelp"
                                maxlength="20" required>
                            <div id="titleHelp" class="form-text">Job Title Field must be less than equal to 20
                                characters long.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Department Name</label>
                            <select class="form-select" id="exampleInputName1">
                                <option value="" selected>Select a Department</option>
                                <option value="department1">Department 1</option>
                                <option value="department2">Department 2</option>
                                <option value="department3">Department 3</option>
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