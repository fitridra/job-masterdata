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
    public function run(): void
    {
        $departmentsData = [
            // ['atribut1' => 'value1', 'atribut2' => 'value2']
        ];

        foreach ($departmentsData as $departmentData) {
            Department::create($departmentData);
        }
    }
}
