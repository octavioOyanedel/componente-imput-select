<?php

use Illuminate\Database\Seeder;

class CerroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Cerro::create(['nombre' => 'Cerro Playa Ancha', 'provincia_id' => 1, 'comuna_id' => 1]);
        App\Cerro::create(['nombre' => 'Cerro Concepción', 'provincia_id' => 1, 'comuna_id' => 1]);
        App\Cerro::create(['nombre' => 'Población Forestal', 'provincia_id' => 1, 'comuna_id' => 2]);
        App\Cerro::create(['nombre' => 'Población Glorias Navales', 'provincia_id' => 1, 'comuna_id' => 2]);
        App\Cerro::create(['nombre' => 'Villa La Estrella', 'provincia_id' => 2, 'comuna_id' => 3]);
        App\Cerro::create(['nombre' => 'Villa Juan Pablo II', 'provincia_id' => 2, 'comuna_id' => 3]);
        App\Cerro::create(['nombre' => 'Villa Cervantes', 'provincia_id' => 2, 'comuna_id' => 4]);
        App\Cerro::create(['nombre' => 'Villa Las Dalias', 'provincia_id' => 2, 'comuna_id' => 4]);
    }
}
