<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Department;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data_department = Department::all();
        $data_job = Job::when($request->cari_job, function ($query) use ($request) {
			$query->where('JobTitleName', 'LIKE', "%{$request->cari_job}%");
		})->when($request->cari_department, function ($query) use ($request) {
			$query->where('DepartmentID', 'LIKE', "%{$request->cari_department}%");
		})->paginate(3);

        $data_job->appends([
            'cari_job' => $request->cari_job,
            'cari_department' => $request->cari_department,
        ]);
        return view('job/index', compact('data_job','data_department'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data_department = Department::all();
        $lastJob = Job::latest('JobCode')->first();
        $lastJobNumber = (int)substr($lastJob->JobCode, 1);
        $newJobNumber = $lastJobNumber + 1;
        $newJobCode = 'J' . str_pad($newJobNumber, 4, '0', STR_PAD_LEFT);

        return view('job/add', compact('data_department','newJobCode'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'JobCode' => 'required',
            'JobTitleName' => 'required',
            'DepartmentID' => 'required'
        ]);  
        Job::create($request->all());

        return redirect()->route('job')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data_department = Department::all();
        $job = Job::where('id', $id)->first();
        return view('job/edit', compact('job', 'data_department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data_job = Job::where('id', $id)->first();
          $data_job->where('id', $data_job->id)
              ->update([
                  'JobTitleName' => $request->input('JobTitleName'),
                  'DepartmentID' => $request->input('DepartmentID')
              ]);
          return redirect()->route('job')->with('sukses', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Job::where('id', $id)->delete();
        return redirect()->route('job')->with('sukses', 'Data Berhasil Dihapus');
    }
}