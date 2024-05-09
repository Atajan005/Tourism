<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $objects = [
            ['Dasary yurt syyahty','',''],
            ['Welayat syyahtlary','',''],
            ['Zyyratlar','',''],
            ['Awaza syyahatlary','',''],
            ['Asgabat saher syyahtlary','','']
        ];

        foreach ($objects as $object) {
            $obj = new Category();
            $obj->name_tm= $object[0];
            $obj->name_ru=$object[1];
            $obj->name_ru=$object[2];
            $obj->save();
        }
    }
}
