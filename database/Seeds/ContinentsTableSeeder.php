<?php

namespace Wuyu\World\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->truncate();

        DB::table('continents')->insert([
            [
                'id' => 1,
                'code' => 'AS',
                'name' => 'Asia',
                'zh_name' => '亚洲',
            ],
            [
                'id' => 2,
                'code' => 'EU',
                'name' => 'Europe',
                'zh_name' => '欧洲',
            ],
            [
                'id' => 3,
                'code' => 'AF',
                'name' => 'Africa',
                'zh_name' => '非洲',
            ],
            [
                'id' => 4,
                'code' => 'OC',
                'name' => 'Oceania',
                'zh_name' => '大洋洲',
            ],
            [
                'id' => 5,
                'code' => 'AN',
                'name' => 'Antarctica',
                'zh_name' => '南极洲',
            ],
            [
                'id' => 6,
                'code' => 'NA',
                'name' => 'North America',
                'zh_name' => '北美洲',
            ],
            [
                'id' => 7,
                'code' => 'SA',
                'name' => 'South America',
                'zh_name' => '南美洲',
            ],
        ]);
    }
}