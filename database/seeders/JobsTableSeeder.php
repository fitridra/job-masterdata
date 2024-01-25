<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobsData = [
            ['JobCode' => 'J0001', 'JobTitleName' => 'Software Developer', 'DepartmentID' => '1'],
            ['JobCode' => 'J0002', 'JobTitleName' => 'System Analyst', 'DepartmentID' => '1'],
            ['JobCode' => 'J0003', 'JobTitleName' => 'Internal Audit', 'DepartmentID' => '2'],
            ['JobCode' => 'J0004', 'JobTitleName' => 'SoftDev Manager', 'DepartmentID' => '1'],
            ['JobCode' => 'J0005', 'JobTitleName' => 'HR Recruiter', 'DepartmentID' => '3']
        ];

        foreach ($jobsData as $jobData) {
            Job::create($jobData);
        }
    }
}
