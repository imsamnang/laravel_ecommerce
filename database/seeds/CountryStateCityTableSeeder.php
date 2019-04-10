<?php

use Illuminate\Database\Seeder;

class CountryStateCityTableSeeder extends Seeder
{
  public function run()
    {
	  \DB::table('countries')->insert(['name' => 'India']);
	  \DB::table('countries')->insert(['name' => 'Pakishtan']);
	  \DB::table('states')->insert(['name' => 'Uttar Pradesh','country_id'=>1]);
	  \DB::table('states')->insert(['name' => 'Delhi','country_id'=>1]);
	  \DB::table('states')->insert(['name' => 'Balochistan','country_id'=>2]);
	  \DB::table('states')->insert(['name' => 'Sindh','country_id'=>2]);
	  \DB::table('cities')->insert(['name' => 'Varanasi','state_id'=>1]);
	  \DB::table('cities')->insert(['name' => 'Kanpur','state_id'=>1]);
  }
}
