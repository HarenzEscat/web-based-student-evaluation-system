<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        Teacher::create(['name' => 'John Doe']);
        Teacher::create(['name' => 'Jane Smith']);
        Teacher::create(['name' => 'Alice Johnson']);
    }
}
