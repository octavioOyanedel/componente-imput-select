<?php

use Illuminate\Database\Seeder;

class ComunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Comuna::create(['nombre' => 'Valparaiso', 'provincia_id' => 1]);
        App\Comuna::create(['nombre' => 'Viña del Mar', 'provincia_id' => 1]);
        App\Comuna::create(['nombre' => 'San Esteban', 'provincia_id' => 2]);
        App\Comuna::create(['nombre' => 'Rinconada', 'provincia_id' => 2]);
    }
}
