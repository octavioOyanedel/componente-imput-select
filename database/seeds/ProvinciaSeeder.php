<?php

use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Provincia::create(['nombre' => 'Valparaíso']);
        App\Provincia::create(['nombre' => 'Los Andes']);
    }
}
