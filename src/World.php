<?php

namespace Wuyu\World;

use Illuminate\Support\Facades\DB;

class World
{
    /**
     * World constructor.
     */
    public function __construct()
    {

    }

    /**
     * Recursively get sub regions
     *
     * @param int $parent_id
     * @return array
     */
    public function chineseTree($parent_id = 0)
    {
        $regions = DB::table('chinese_regions')->where('parent_id', $parent_id)->get();
        $regions = array_column($regions, null, 'id');
        foreach ($regions as $id => $region) {
            $region = (array)$region;
            $children = $this->chineseTree($region['id']);
            if ($children) {
                $region['children'] = $children;
            }
            $regions[$id] = $region;
        }

        return $regions;
    }
}