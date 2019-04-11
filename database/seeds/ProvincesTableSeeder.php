<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

  public function run()
  {
	// seeder table provinces
		\DB::table('provinces')->truncate();
	  \DB::table('provinces')->insert(['name_en' => 'Phnom Penh','name_kh' => 'ភ្នំពេញ']);
	  \DB::table('provinces')->insert(['name_en' => 'Preah Sihanouk','name_kh' => 'ព្រះសីហនុ']);
	  \DB::table('provinces')->insert(['name_en' => 'Kampong Cham','name_kh' => 'កំពង់ចាម']);
	  \DB::table('provinces')->insert(['name_en' => 'Siem Reap','name_kh' => 'សៀមរាប']);
	  \DB::table('provinces')->insert(['name_en' => 'Battambang','name_kh' => 'បាត់ដំបង']);
	  \DB::table('provinces')->insert(['name_en' => 'Kandal','name_kh' => 'កណ្តាល']);
	  \DB::table('provinces')->insert(['name_en' => 'Banteay Meanchey','name_kh' => 'បន្ទាយមានជ័យ']);
	  \DB::table('provinces')->insert(['name_en' => 'Kampong Chhnang','name_kh' => 'កំពង់ឆ្នាំង']);
	  \DB::table('provinces')->insert(['name_en' => 'Kampong Speu','name_kh' => 'កំពង់ស្ពឺ']);
	  \DB::table('provinces')->insert(['name_en' => 'Kampong Thom','name_kh' => 'កំពង់ធំ']);
	  \DB::table('provinces')->insert(['name_en' => 'Kampot','name_kh' => 'កំពត']);
	  \DB::table('provinces')->insert(['name_en' => 'Kep','name_kh' => 'កែប']);
	  \DB::table('provinces')->insert(['name_en' => 'Koh Kong','name_kh' => 'កោះកុង']);
	  \DB::table('provinces')->insert(['name_en' => 'Kratie','name_kh' => 'ក្រចេះ']);
	  \DB::table('provinces')->insert(['name_en' => 'Mondulkiri','name_kh' => 'មណ្ឌលគិរី']);
	  \DB::table('provinces')->insert(['name_en' => 'Oddar Meanchey','name_kh' => 'ឧត្តរមានជ័យ']);
	  \DB::table('provinces')->insert(['name_en' => 'Pailin','name_kh' => 'ប៉ៃលិន']);
	  \DB::table('provinces')->insert(['name_en' => 'Preah Vihear','name_kh' => 'ព្រះវិហារ']);
	  \DB::table('provinces')->insert(['name_en' => 'Prey Veng','name_kh' => 'ព្រៃវែង']);
	  \DB::table('provinces')->insert(['name_en' => 'Pursat','name_kh' => 'ពោធ៌សាត់']);
	  \DB::table('provinces')->insert(['name_en' => 'Ratanakiri','name_kh' => 'រតនគីរី']);
	  \DB::table('provinces')->insert(['name_en' => 'Stung Treng','name_kh' => 'ស្ទឹងត្រែង']);
	  \DB::table('provinces')->insert(['name_en' => 'Svay Rieng','name_kh' => 'ស្វាយរៀង']);
	  \DB::table('provinces')->insert(['name_en' => 'Takeo','name_kh' => 'តាកែវ']);
	  \DB::table('provinces')->insert(['name_en' => 'Tboung Khmum','name_kh' => 'ត្បូងឃ្មុំ']);
  }
}
