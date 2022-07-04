<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employee;
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

        $companies = Company::factory()
            ->count(5)
            ->create();

        $companies->each(function (Company $company) {
            $company->employee()->saveMany(
                Employee::factory()
                    ->count(random_int(5, 10))
                    ->make()
            );
        });

        DB::commit();
    }
}
