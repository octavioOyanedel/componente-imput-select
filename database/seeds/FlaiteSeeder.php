<?php

use Illuminate\Database\Seeder;

class FlaiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Flaite::class, 1000)->create();
    }
}
