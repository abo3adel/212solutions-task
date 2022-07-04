<?php

namespace Database\Seeders;

use App\Models\Company;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        Company::factory()->count(5)->create();

        DB::commit();
    }
}
