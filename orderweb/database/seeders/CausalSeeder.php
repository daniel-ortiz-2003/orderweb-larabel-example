<?php

namespace Database\Seeders;

use App\Models\Causal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CausalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Causal::insert([ 
            ['descrption'=>'Reparación contador'],
            ['descrption'=>'Suspención servicio'],
            ['descrption'=>'Reconexión servicio'],
            ['descrption'=>'Instalación contador'],
            ['descrption'=>'Cambio del contador'],
        ]);
    }
}
