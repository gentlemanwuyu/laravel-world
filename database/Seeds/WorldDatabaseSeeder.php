<?php

namespace Wuyu\World\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class WorldDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(ContinentsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(ChineseRegionsTableSeeder::class);
    }

}