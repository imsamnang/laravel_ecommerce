<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      // $this->call(CreateLanguages::class);
      // $this->call(CountryStateCityTableSeeder::class);
      $this->call(ProvincesTableSeeder::class);
      $this->call(DistrictsTableSeeder::class); 
      $this->call(CommunesTableSeeder::class); 
    }
}
