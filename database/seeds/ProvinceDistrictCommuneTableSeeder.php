<?php

use Illuminate\Database\Seeder;

class ProvinceDistrictCommuneTableSeeder extends Seeder
{

  public function run()
  {
  	// seeder table provinces
	  \DB::table('provinces')->insert(['name_en' => 'India','name_kh' => '']);
	  \DB::table('provinces')->insert(['name_en' => 'Pakishtan','name_kh' => '']);

	  // seeder table districts
	  \DB::table('districts')->insert(['name_en' => 'Uttar Pradesh','name_kh' => '','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Delhi','name_kh' => '','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Balochistan','name_kh' => '','provice_id'=>2]);
	  \DB::table('districts')->insert(['name_en' => 'Sindh','name_kh' => '','provice_id'=>2]);

	  // seeder table communes
	  \DB::table('communes')->insert(['name_en' => 'Varanasi','name_kh' => '','district_id'=>1]);
	  \DB::table('communes')->insert(['name_en' => 'Kanpur','name_kh' => '','district_id'=>1]);
  }
}
