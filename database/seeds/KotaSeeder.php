<?php

use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory('App\Kota', 5)->create();
    }
}