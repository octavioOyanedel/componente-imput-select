<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvinciaSeeder::class);
        $this->call(ComunaSeeder::class);
        $this->call(CerroSeeder::class);
        $this->call(FlaiteSeeder::class);
    }
}
