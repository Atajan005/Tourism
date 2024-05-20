<?php

namespace Database\Seeders;

use App\Models\Tourism;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourismSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $objects = [
            ['1','5','2','1','Arcabil sayoly','','15:00','1000','Atajan','699036','Dync alys','','','Mizan otelinda 3 gunlik dync alys ozimiz oyunizden alyp gidyaris janlasyn','',''],
//            ['Ahal welayaty','',''],
//            ['Mary welayaty','',''],
//            ['Balkan welayaty','',''],
//            ['Lebap welayaty','',''],
//            ['Dasoguz welayaty','',''],
//            ['Dasayurt','','']
        ];

        foreach ($objects as $object) {
            $obj = new Tourism();
            $obj->location_id= $object[0];
            $obj->category_id=$object[1];
            $obj->user_id=$object[2];
            $obj->hotel_id=$object[3];
            $obj->address=$object[4];
            $obj->image=$object[5];
            $obj->time=$object[6];
            $obj->price=$object[7];
            $obj->author=$object[8];
            $obj->phone=$object[9];
            $obj->name_tm=$object[10];
            $obj->name_ru=$object[11];
            $obj->name_en=$object[12];
            $obj->description_tm=$object[13];
            $obj->description_ru=$object[14];
            $obj->description_en=$object[15];
            $obj->save();
        }
    }
}
