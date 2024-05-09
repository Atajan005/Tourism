<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objects = [
            ['1', 'a','Mizan'],
            ['1','a','Arkadag'],
            ['4','b','Gami'],
            ['4','a','Yelken'],
            ['1','a','Yyldyz'],
            ['4','a','Ahal'],
            ['2','a','Bilemok'],
        ];

        foreach ($objects as $object) {
            $obj = new Hotel();
            $obj->location_id = $object[0];
            $obj->image = $object[1];
            $obj->name_tm = $object[2];
            $obj->save();
      }
    }
}
