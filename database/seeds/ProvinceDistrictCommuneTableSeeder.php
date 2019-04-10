<?php

use Illuminate\Database\Seeder;

class ProvinceDistrictCommuneTableSeeder extends Seeder
{

  public function run()
  {
  	// seeder table provinces
	  \DB::table('provinces')->insert(['name_en' => 'Phnom Penh','name_kh' => 'ភ្នំពេញ']);
	  \DB::table('provinces')->insert(['name_en' => '"Preah Sihanouk','name_kh' => 'ព្រះសីហនុ']);
	  \DB::table('provinces')->insert(['name_en' => 'Kampong Cham','name_kh' => 'កំពង់ចាម']);
	  \DB::table('provinces')->insert(['name_en' => 'Siem Reap','name_kh' => 'សៀមរាប']);
	  \DB::table('provinces')->insert(['name_en' => 'Battambang','name_kh' => 'បាត់ដំបង']);
	  \DB::table('provinces')->insert(['name_en' => 'Kandal','name_kh' => 'កណ្តាល']);
	  \DB::table('provinces')->insert(['name_en' => 'Banteay Meanchey','name_kh' => 'បន្ទាយមានជ័យ']);
	  \DB::table('provinces')->insert(['name_en' => 'Kampong Chhnang','name_kh' => 'កំពង់ឆ្នាំង']);
	  \DB::table('provinces')->insert(['name_en' => 'Kampong Speu','name_kh' => 'កំពង់ស្ពឺ']);
	  \DB::table('provinces')->insert(['name_en' => 'Kampong Thom','name_kh' => 'កំពង់ធំ']);
	  \DB::table('provinces')->insert(['name_en' => 'Kampot','name_kh' => 'កំពត']);
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

	// seeder table districts
	  // phnom penh
	  \DB::table('districts')->insert(['name_en' => 'Ruessei Kaev','name_kh' => 'ឫស្សីកែវ','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Saensokh','name_kh' => 'សែនសុខ','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Por Senchey','name_kh' => 'ពោធិសែនជ័យ','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Chrouy Changva','name_kh' => 'ជ្រោយចង្វារ','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Preaek Pnov','name_kh' => 'ព្រែកភ្នៅ','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Chbar Ampov','name_kh' => 'ច្បារអំពៅ','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Doun Penh','name_kh' => 'ដូនពេញ','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Prampir Meakkara','name_kh' => '៧មករា','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Toul Kouk','name_kh' => 'ទួលគោក','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Dangkao','name_kh' => 'ដង្កោ','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Mean Chey','name_kh' => 'មានជ័យ','provice_id'=>1]);
	  \DB::table('districts')->insert(['name_en' => 'Chamkar Mon','name_kh' => 'ចំការមន','provice_id'=>1]);
	  // Shihanouk Ville
	  \DB::table('districts')->insert(['name_en' => 'Krong Preah Sihanouk','name_kh' => 'ព្រះសីហនុ','provice_id'=>2]);
	  \DB::table('districts')->insert(['name_en' => 'Prey Nob','name_kh' => 'ព្រៃនប់','provice_id'=>2]);
	  \DB::table('districts')->insert(['name_en' => 'Stueng Hav Chey','name_kh' => 'ស្ទឹងហាវ','provice_id'=>2]);
	  \DB::table('districts')->insert(['name_en' => 'Kompong Seila','name_kh' => 'កំពង់សីលា','provice_id'=>2]);
	  // Kampong Cham
	  \DB::table('districts')->insert(['name_en' => 'Krong Kampong Cham','name_kh' => 'កំពង់ចាម','provice_id'=>3]);
	  \DB::table('districts')->insert(['name_en' => 'Kampong Siem','name_kh' => 'កំពង់សៀម','provice_id'=>3]);
	  \DB::table('districts')->insert(['name_en' => 'KangMeas','name_kh' => 'កងមាស','provice_id'=>3]);
	  \DB::table('districts')->insert(['name_en' => 'Kaoh Soutin','name_kh' => 'កោះសុទិន','provice_id'=>3]);
	  \DB::table('districts')->insert(['name_en' => 'Prey Chhor','name_kh' => 'ព្រៃឈរ','provice_id'=>3]);
	  \DB::table('districts')->insert(['name_en' => 'Srei Santhor','name_kh' => 'ស្រីសន្ធរ','provice_id'=>3]);
	  \DB::table('districts')->insert(['name_en' => 'Stueng Trang','name_kh' => 'ស្ទឹងត្រង់','provice_id'=>3]);
	  \DB::table('districts')->insert(['name_en' => 'Batheay','name_kh' => 'បាធាយ','provice_id'=>3]);
	  \DB::table('districts')->insert(['name_en' => 'Chamkar Leu','name_kh' => 'ចំការលើ','provice_id'=>3]);
	  \DB::table('districts')->insert(['name_en' => 'Cheung Prey','name_kh' => 'ជើាងព្រៃ','provice_id'=>3]);

	  // Siemreap
	  \DB::table('districts')->insert(['name_en' => 'Angkor Chum','name_kh' => 'អង្គរជុំ','provice_id'=>4]);	
	  \DB::table('districts')->insert(['name_en' => 'Angkor Thom','name_kh' => 'អង្គរធំ','provice_id'=>4]);	
	  \DB::table('districts')->insert(['name_en' => 'Banteay Srey','name_kh' => 'បន្ទាយស្រី','provice_id'=>4]);	
	  \DB::table('districts')->insert(['name_en' => 'Chi Kraeng','name_kh' => 'ជីក្រែង','provice_id'=>4]);	
	  \DB::table('districts')->insert(['name_en' => 'Kralanh','name_kh' => 'ក្រឡាញ់','provice_id'=>4]);	
	  \DB::table('districts')->insert(['name_en' => 'Pouk','name_kh' => 'ពួក','provice_id'=>4]);	
	  \DB::table('districts')->insert(['name_en' => 'Prasat Bakong','name_kh' => 'ប្រាសាទបាគង','provice_id'=>4]);	
	  \DB::table('districts')->insert(['name_en' => 'Krong Siem Reap','name_kh' => 'ក្រុងសៀមរាប','provice_id'=>4]);	
	  \DB::table('districts')->insert(['name_en' => 'Soutr Nikum','name_kh' => 'សុទ្រនិគមន៍','provice_id'=>4]);	
	  \DB::table('districts')->insert(['name_en' => 'Srei Snam','name_kh' => 'ស្រីស្នំ','provice_id'=>4]);	
	  \DB::table('districts')->insert(['name_en' => 'Svay Leu','name_kh' => 'ស្វាយលើ','provice_id'=>4]);	
	  \DB::table('districts')->insert(['name_en' => 'Varin','name_kh' => 'វ៉ារិន','provice_id'=>4]);		  
	  // Battambang
	  \DB::table('districts')->insert(['name_en' => 'Banan','name_kh' => 'បាណន់','provice_id'=>5]);	
	  \DB::table('districts')->insert(['name_en' => 'Thma Koul','name_kh' => 'ថ្មរគោល','provice_id'=>5]);	
	  \DB::table('districts')->insert(['name_en' => 'Krong Battambang','name_kh' => 'ក្រុងបាត់ដំបង','provice_id'=>5]);	
	  \DB::table('districts')->insert(['name_en' => 'Bavel','name_kh' => 'បវេល','provice_id'=>5]);
	  \DB::table('districts')->insert(['name_en' => 'Aek Phnum','name_kh' => 'ឯកភ្នំ','provice_id'=>5]);	
	  \DB::table('districts')->insert(['name_en' => 'Moung Ruessei','name_kh' => 'មោង រស្សី','provice_id'=>5]);	
	  \DB::table('districts')->insert(['name_en' => 'Rotonak Mondol','name_kh' => 'រតនាមណ្ឌល','provice_id'=>5]);	
	  \DB::table('districts')->insert(['name_en' => 'Sangkae','name_kh' => 'សង្កៃរ','provice_id'=>5]);	
	  \DB::table('districts')->insert(['name_en' => 'Samlout','name_kh' => 'សំឡូត','provice_id'=>5]);	
	  \DB::table('districts')->insert(['name_en' => 'Sampov Lun','name_kh' => 'សំពៅលូន','provice_id'=>5]);	
	  \DB::table('districts')->insert(['name_en' => 'Phnom Proek','name_kh' => 'ភ្នំព្រឹក','provice_id'=>5]);	
	  \DB::table('districts')->insert(['name_en' => 'Kamrieng','name_kh' => 'កំរៀង','provice_id'=>5]);		
	  \DB::table('districts')->insert(['name_en' => 'Koas Krala','name_kh' => 'គាស់ក្រឡ','provice_id'=>5]);	
	  \DB::table('districts')->insert(['name_en' => 'Rukhak Kiri','name_kh' => 'រុក្ខគីរី','provice_id'=>5]);	

	  // Kandal
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);		
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>6]);	

	  // Banteay Meanchey
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);		
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>7]);	

	  // Kompong Chhnang
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);		
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>8]);	

	  // Kompong Speu
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);		
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>9]);

	  // Kompong Thom
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);	
	  \DB::table('districts')->insert(['name_en' => '','name_kh' => 'ជើាងព្រៃ','provice_id'=>10]);



	// seeder table communes
	  \DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>1]);
	  \DB::table('communes')->insert(['name_en' => '','name_kh' => '','district_id'=>1]);
  }
}
