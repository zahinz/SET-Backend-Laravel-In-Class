<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
  
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            // record 1
            DB::table('companies')->insert([
                'name' => $faker->name,
            ]);
            
            // record 2
            $company = new Company();
            $company->name = $faker->name;
            $company->save();
        }
    }
}