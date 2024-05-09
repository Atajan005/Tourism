<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objects = [
            ['Terjimec','Atajan','Atajan123'],
            ['Terjimeci','Atamyrat','Atamyrat54'],
            ['Alyp baryjy','Musa','Musa90'],
            ['Suruji','Nurjan','Nurjan65'],
            ['Mugallym','Meret','Meret48'],
            ['Alyp baryjy','Abdy','Abdy76'],
        ];

        foreach ($objects as $object) {
            $obj = new User();
            $obj->role = $object[0];
            $obj->username=$object[1];
            $obj->password=$object[2];
            $obj->save();
        }
    }
}
