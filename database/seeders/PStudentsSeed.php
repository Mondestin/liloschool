<?php

namespace Database\Seeders;

use App\Models\PrimaryStudent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PStudentsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrimaryStudent::factory()->count(250)->create();
    }
}
