<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $departmentsData = [
            ['DepartmentName' => 'Information Technology', 'Abbreviation' => 'IT'],
            ['DepartmentName' => 'Finance & Accounting', 'Abbreviation' => 'FA'],
            ['DepartmentName' => 'Human Resources Development', 'Abbreviation' => 'HRD']
        ];

        foreach ($departmentsData as $departmentData) {
            Department::create($departmentData);
        }
    }
}
