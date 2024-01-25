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
            // ['atribut1' => 'value1', 'atribut2' => 'value2']
        ];

        foreach ($jobsData as $jobsData) {
            Job::create($jobsData);
        }
    }
}
