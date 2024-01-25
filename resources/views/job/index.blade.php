@extends('layout.master')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Job Title Master Data</h5>
            <p class="mb-3">Berisi data-data tentang master data job.</p>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif

            <div class="card w-100 mt-3">
                <div class="card-body p-4">
                    <h6>Search By</h6>
                    <form class="row g-3" method="GET" action="{{route('job')}}">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Job Title" name="cari_job"
                                aria-label="Job Title">
                        </div>
                        <div class="col">
                            <select class="form-select" id="exampleInputName1" name="cari_department">
                                <option value="" selected>Department Name</option>
                                @foreach($data_department as $dep)
                                <option value="{{$dep->id}}">{{$dep->DepartmentName}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                    <a href="/create" class="btn btn-primary my-3"><i class="ti ti-plus"></i> Add New Data</a>
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0 sortable">
                                        <h6 class="fw-semibold mb-0">Job Code <i class="ti ti-arrows-sort"></i></h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Job Title</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Department Name</h6>
                                    </th>
                                    <th class="border-bottom-0" span="2">
                                        <h6 class="fw-semibold mb-0">Action</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_job as $job)
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">{{$job->JobCode}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-1">{{$job->JobTitleName}}</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal">{{$job->department?->DepartmentName}}</p>
                                    </td>
                                    @csrf
                                    <td class="border-bottom-0">
                                        <a href="{{route('edit', $job->id)}}" class="btn btn-warning"><i
                                                class="ti ti-edit"></i>
                                            Edit</a>
                                    </td>
                                    @method('delete')
                                    @csrf
                                    <td class="border-bottom-0">
                                        <a href="{{route('destroy', $job->id)}}" class="btn btn-danger"
                                            onclick="return confirm('Apakah Ingin Menghapus Data ini ?')"><i
                                                class="ti ti-trash"></i>
                                            Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagging text-center mt-3">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    {{ $data_job->links() }}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection