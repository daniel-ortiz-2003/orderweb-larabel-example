<?php

namespace Database\Seeders;

use App\Models\Observation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Observation::insert([ 
            ['descrption'=>'Perro bravo'],
            ['descrption'=>'Contador con candado'],
            ['descrption'=>'Contador inaccesible'],
            ['descrption'=>'Predio en construcción'],
            ['descrption'=>'No existe contador'],
        ]);
    }
}
