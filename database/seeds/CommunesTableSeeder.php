<?php

use Illuminate\Database\Seeder;

class CommunesTableSeeder extends Seeder
{
	public function run()
	{
		// seeder table communes
			// phnom penh communes
				\DB::table('communes')->truncate();
				
			  \DB::table('communes')->insert(['name_en' => 'Svay Pak','name_kh' => '','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Russey Keo','name_kh' => '','district_id'=>1]);
			  \DB::table('communes')->insert(['name_en' => 'Krang Thnong','name_kh' => '','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Khmuonh','name_kh' => '','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Phnom Penh Thmei','name_kh' => '','district_id'=>2]);
			  \DB::table('communes')->insert(['name_en' => 'Ovlaok','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Kamboul','name_kh' => '','district_id'=>3]);
			  \DB::table('communes')->insert(['name_en' => 'Bak Kheng','name_kh' => '','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Leab','name_kh' => '','district_id'=>4]);
			  \DB::table('communes')->insert(['name_en' => 'Ponsang','name_kh' => '','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Kouk Roka','name_kh' => '','district_id'=>5]);
			  \DB::table('communes')->insert(['name_en' => 'Veal Sbov','name_kh' => '','district_id'=>6]);
			  \DB::table('communes')->insert(['name_en' => 'Praek Aeng','name_kh' => '','district_id'=>6]);

			 // Siem Reap communes
			  \DB::table('communes')->insert(['name_en' => 'Char Chhouk','name_kh' => '','district_id'=>27]);
				\DB::table('communes')->insert(['name_en' => 'Daun Peng','name_kh' => '','district_id'=>27]);
				\DB::table('communes')->insert(['name_en' => 'Chub Tatrav','name_kh' => '','district_id'=>28]);
				\DB::table('communes')->insert(['name_en' => 'Leang Dai','name_kh' => '','district_id'=>28]);	
				\DB::table('communes')->insert(['name_en' => 'Khnar Sanday','name_kh' => '','district_id'=>29]);
				\DB::table('communes')->insert(['name_en' => 'Khun Ream','name_kh' => '','district_id'=>29]);	
				\DB::table('communes')->insert(['name_en' => 'Anlong Samnor','name_kh' => '','district_id'=>30]);
				\DB::table('communes')->insert(['name_en' => 'Chi Kraeng','name_kh' => '','district_id'=>30]);	
				\DB::table('communes')->insert(['name_en' => 'Chonleas Dai','name_kh' => '','district_id'=>31]);
				\DB::table('communes')->insert(['name_en' => 'Kampong Thkov','name_kh' => '','district_id'=>31]);
	}
}
