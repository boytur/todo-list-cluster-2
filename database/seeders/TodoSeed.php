<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create([
            'td_name' => 'ทำ ข้อสอบ BCG',
            'td_des' => 'lorem',
            'td_status' => false
        ]);
    }
}
