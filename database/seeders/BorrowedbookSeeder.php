<?php

namespace Database\Seeders;

use App\Models\Borrowedbook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BorrowedbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Borrowedbook::factory(0)->create();
    }
}
