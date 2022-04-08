<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class SemesterSeeder extends Seeder
{
    public function run()
    {
        Semester::factory(10)->create();
    }
}
