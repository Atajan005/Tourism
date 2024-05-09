<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $objects = [
            ['Asgabat saheri','',''],
            ['Ahal welayaty','',''],
            ['Mary welayaty','',''],
            ['Balkan welayaty','',''],
            ['Lebap welayaty','',''],
            ['Dasoguz welayaty','',''],
            ['Dasary yurt','',''],
        ];

        foreach ($objects as $object) {
            $obj = new Location();
            $obj->name_tm= $object[0];
            $obj->name_ru=$object[1];
            $obj->name_ru=$object[2];
            $obj->save();
        }
    }
}
