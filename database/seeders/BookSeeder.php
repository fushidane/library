<?php

namespace Database\Seeders;

use App\Models\Borrowedbook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Borrowedbook::factory(10)->create();
    }
}
