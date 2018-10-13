<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\Driver;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\Team::all()->each(function (App\Team $team){
        $team->drivers()->saveMany(factory(App\Driver::class,3)->make());
    });
    }
}
