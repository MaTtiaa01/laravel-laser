<?php

namespace Database\Seeders;

use App\Models\LaserSaber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaserSaberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sabers = config('laser.sabers');

        foreach ($sabers as $saber) {
            $new_saber = new LaserSaber();
            $new_saber->name = $saber['name'];
            $new_saber->image = $saber['img'];
            $new_saber->description = $saber['description'];
            $new_saber->price = $saber['price'];
            $new_saber->save();
        }
    }
}
