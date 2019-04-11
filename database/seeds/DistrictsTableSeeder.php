<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

  public function run()
  {
  	
	// seeder table districts
	  // phnom penh
  		\DB::table('districts')->truncate();
  		
		  \DB::table('districts')->insert(['name_en' => 'Ruessei Kaev','name_kh' => 'ឫស្សីកែវ','province_id'=>1]);
		  \DB::table('districts')->insert(['name_en' => 'Saensokh','name_kh' => 'សែនសុខ','province_id'=>1]);
		  \DB::table('districts')->insert(['name_en' => 'Por Senchey','name_kh' => 'ពោធិសែនជ័យ','province_id'=>1]);
		  \DB::table('districts')->insert(['name_en' => 'Chrouy Changva','name_kh' => 'ជ្រោយចង្វារ','province_id'=>1]);
		  \DB::table('districts')->insert(['name_en' => 'Preaek Pnov','name_kh' => 'ព្រែកភ្នៅ','province_id'=>1]);
		  \DB::table('districts')->insert(['name_en' => 'Chbar Ampov','name_kh' => 'ច្បារអំពៅ','province_id'=>1]);
		  \DB::table('districts')->insert(['name_en' => 'Doun Penh','name_kh' => 'ដូនពេញ','province_id'=>1]);
		  \DB::table('districts')->insert(['name_en' => 'Prampir Meakkara','name_kh' => '៧មករា','province_id'=>1]);
		  \DB::table('districts')->insert(['name_en' => 'Toul Kouk','name_kh' => 'ទួលគោក','province_id'=>1]);
		  \DB::table('districts')->insert(['name_en' => 'Dangkao','name_kh' => 'ដង្កោ','province_id'=>1]);
		  \DB::table('districts')->insert(['name_en' => 'Mean Chey','name_kh' => 'មានជ័យ','province_id'=>1]);
		  \DB::table('districts')->insert(['name_en' => 'Chamkar Mon','name_kh' => 'ចំការមន','province_id'=>1]);

	  // Shihanouk Ville
		  \DB::table('districts')->insert(['name_en' => 'Krong Preah Sihanouk','name_kh' => 'ព្រះសីហនុ','province_id'=>2]);
		  \DB::table('districts')->insert(['name_en' => 'Prey Nob','name_kh' => 'ព្រៃនប់','province_id'=>2]);
		  \DB::table('districts')->insert(['name_en' => 'Stueng Hav Chey','name_kh' => 'ស្ទឹងហាវ','province_id'=>2]);
		  \DB::table('districts')->insert(['name_en' => 'Kompong Seila','name_kh' => 'កំពង់សីលា','province_id'=>2]);

	  // Kampong Cham
		  \DB::table('districts')->insert(['name_en' => 'Krong Kampong Cham','name_kh' => 'កំពង់ចាម','province_id'=>3]);
		  \DB::table('districts')->insert(['name_en' => 'Kampong Siem','name_kh' => 'កំពង់សៀម','province_id'=>3]);
		  \DB::table('districts')->insert(['name_en' => 'KangMeas','name_kh' => 'កងមាស','province_id'=>3]);
		  \DB::table('districts')->insert(['name_en' => 'Kaoh Soutin','name_kh' => 'កោះសុទិន','province_id'=>3]);
		  \DB::table('districts')->insert(['name_en' => 'Prey Chhor','name_kh' => 'ព្រៃឈរ','province_id'=>3]);
		  \DB::table('districts')->insert(['name_en' => 'Srei Santhor','name_kh' => 'ស្រីសន្ធរ','province_id'=>3]);
		  \DB::table('districts')->insert(['name_en' => 'Stueng Trang','name_kh' => 'ស្ទឹងត្រង់','province_id'=>3]);
		  \DB::table('districts')->insert(['name_en' => 'Batheay','name_kh' => 'បាធាយ','province_id'=>3]);
		  \DB::table('districts')->insert(['name_en' => 'Chamkar Leu','name_kh' => 'ចំការលើ','province_id'=>3]);
		  \DB::table('districts')->insert(['name_en' => 'Cheung Prey','name_kh' => 'ជើងព្រៃ','province_id'=>3]);

	  // Siemreap
		  \DB::table('districts')->insert(['name_en' => 'Angkor Chum','name_kh' => 'អង្គរជុំ','province_id'=>4]);	
		  \DB::table('districts')->insert(['name_en' => 'Angkor Thom','name_kh' => 'អង្គរធំ','province_id'=>4]);	
		  \DB::table('districts')->insert(['name_en' => 'Banteay Srey','name_kh' => 'បន្ទាយស្រី','province_id'=>4]);	
		  \DB::table('districts')->insert(['name_en' => 'Chi Kraeng','name_kh' => 'ជីក្រែង','province_id'=>4]);	
		  \DB::table('districts')->insert(['name_en' => 'Kralanh','name_kh' => 'ក្រឡាញ់','province_id'=>4]);	
		  \DB::table('districts')->insert(['name_en' => 'Pouk','name_kh' => 'ពួក','province_id'=>4]);	
		  \DB::table('districts')->insert(['name_en' => 'Prasat Bakong','name_kh' => 'ប្រាសាទបាគង','province_id'=>4]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Siem Reap','name_kh' => 'ក្រុងសៀមរាប','province_id'=>4]);	
		  \DB::table('districts')->insert(['name_en' => 'Soutr Nikum','name_kh' => 'សុទ្រនិគមន៍','province_id'=>4]);	
		  \DB::table('districts')->insert(['name_en' => 'Srei Snam','name_kh' => 'ស្រីស្នំ','province_id'=>4]);	
		  \DB::table('districts')->insert(['name_en' => 'Svay Leu','name_kh' => 'ស្វាយលើ','province_id'=>4]);	
		  \DB::table('districts')->insert(['name_en' => 'Varin','name_kh' => 'វ៉ារិន','province_id'=>4]);

	  // Battambang
		  \DB::table('districts')->insert(['name_en' => 'Banan','name_kh' => 'បាណន់','province_id'=>5]);	
		  \DB::table('districts')->insert(['name_en' => 'Thma Koul','name_kh' => 'ថ្មរគោល','province_id'=>5]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Battambang','name_kh' => 'ក្រុងបាត់ដំបង','province_id'=>5]);	
		  \DB::table('districts')->insert(['name_en' => 'Bavel','name_kh' => 'បវេល','province_id'=>5]);
		  \DB::table('districts')->insert(['name_en' => 'Aek Phnum','name_kh' => 'ឯកភ្នំ','province_id'=>5]);	
		  \DB::table('districts')->insert(['name_en' => 'Moung Ruessei','name_kh' => 'មោង រស្សី','province_id'=>5]);	
		  \DB::table('districts')->insert(['name_en' => 'Rotonak Mondol','name_kh' => 'រតនាមណ្ឌល','province_id'=>5]);	
		  \DB::table('districts')->insert(['name_en' => 'Sangkae','name_kh' => 'សង្កៃរ','province_id'=>5]);	
		  \DB::table('districts')->insert(['name_en' => 'Samlout','name_kh' => 'សំឡូត','province_id'=>5]);	
		  \DB::table('districts')->insert(['name_en' => 'Sampov Lun','name_kh' => 'សំពៅលូន','province_id'=>5]);	
		  \DB::table('districts')->insert(['name_en' => 'Phnom Proek','name_kh' => 'ភ្នំព្រឹក','province_id'=>5]);	
		  \DB::table('districts')->insert(['name_en' => 'Kamrieng','name_kh' => 'កំរៀង','province_id'=>5]);		
		  \DB::table('districts')->insert(['name_en' => 'Koas Krala','name_kh' => 'គាស់ក្រឡ','province_id'=>5]);	
		  \DB::table('districts')->insert(['name_en' => 'Rukhak Kiri','name_kh' => 'រុក្ខគីរី','province_id'=>5]);	

	  // Kandal
		  \DB::table('districts')->insert(['name_en' => 'Kandal Stueng','name_kh' => '','province_id'=>6]);	
		  \DB::table('districts')->insert(['name_en' => 'Koh Thum','name_kh' => '','province_id'=>6]);	
		  \DB::table('districts')->insert(['name_en' => 'Mukh Kamphool','name_kh' => '','province_id'=>6]);	
		  \DB::table('districts')->insert(['name_en' => 'Sa Ang','name_kh' => '','province_id'=>6]);	
		  \DB::table('districts')->insert(['name_en' => 'Leuk Daek','name_kh' => '','province_id'=>6]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Ta Khmau','name_kh' => '','province_id'=>6]);	
		  \DB::table('districts')->insert(['name_en' => 'Kien Svay','name_kh' => '','province_id'=>6]);	
		  \DB::table('districts')->insert(['name_en' => 'Ponhea Leu','name_kh' => '','province_id'=>6]);	
		  \DB::table('districts')->insert(['name_en' => 'Lvea Aem','name_kh' => '','province_id'=>6]);	
		  \DB::table('districts')->insert(['name_en' => 'Khsach Kandal','name_kh' => '','province_id'=>6]);	

	  // Banteay Meanchey
		  \DB::table('districts')->insert(['name_en' => 'Mongkol Borei','name_kh' => '','province_id'=>7]);	
		  \DB::table('districts')->insert(['name_en' => 'Preah Netr Preah','name_kh' => '','province_id'=>7]);	
		  \DB::table('districts')->insert(['name_en' => 'Serei Saophoan','name_kh' => '','province_id'=>7]);	
		  \DB::table('districts')->insert(['name_en' => 'Svay Chek','name_kh' => '','province_id'=>7]);	
		  \DB::table('districts')->insert(['name_en' => 'Ou Chrov','name_kh' => '','province_id'=>7]);	
		  \DB::table('districts')->insert(['name_en' => 'Thma Puok','name_kh' => '','province_id'=>7]);	
		  \DB::table('districts')->insert(['name_en' => 'Malai','name_kh' => '','province_id'=>7]);	
		  \DB::table('districts')->insert(['name_en' => 'Ou Chrov','name_kh' => '','province_id'=>7]);	
		  \DB::table('districts')->insert(['name_en' => 'Phnum Srok','name_kh' => '','province_id'=>7]);	

	  // Kompong Chhnang
		  \DB::table('districts')->insert(['name_en' => 'Baribour','name_kh' => '','province_id'=>8]);	
		  \DB::table('districts')->insert(['name_en' => 'Kampong Chhnang','name_kh' => '','province_id'=>8]);	
		  \DB::table('districts')->insert(['name_en' => 'Kampong Tralach','name_kh' => '','province_id'=>8]);	
		  \DB::table('districts')->insert(['name_en' => 'Sameakki','name_kh' => '','province_id'=>8]);	
		  \DB::table('districts')->insert(['name_en' => 'Kampong Leaeng','name_kh' => '','province_id'=>8]);	
		  \DB::table('districts')->insert(['name_en' => 'Chol Kiri','name_kh' => '','province_id'=>8]);	
		  \DB::table('districts')->insert(['name_en' => "Rolea B'ier",'name_kh' => '','province_id'=>8]);	
		  \DB::table('districts')->insert(['name_en' => 'Tuek Phos','name_kh' => '','province_id'=>8]);	

	  // Kompong Speu
		  \DB::table('districts')->insert(['name_en' => 'Basedth','name_kh' => '','province_id'=>9]);	
		  \DB::table('districts')->insert(['name_en' => 'Kong Pisei','name_kh' => '','province_id'=>9]);	
		  \DB::table('districts')->insert(['name_en' => 'Odongk','name_kh' => '','province_id'=>9]);	
		  \DB::table('districts')->insert(['name_en' => 'Samraong Tong','name_kh' => '','province_id'=>9]);	
		  \DB::table('districts')->insert(['name_en' => 'Aoral','name_kh' => '','province_id'=>9]);	
		  \DB::table('districts')->insert(['name_en' => 'Phnom Sruoch','name_kh' => '','province_id'=>9]);	
		  \DB::table('districts')->insert(['name_en' => 'Chbar Mon','name_kh' => '','province_id'=>9]);	
		  \DB::table('districts')->insert(['name_en' => 'Thpong','name_kh' => '','province_id'=>9]);	

	  // Kompong Thom
		  \DB::table('districts')->insert(['name_en' => 'Baray','name_kh' => '','province_id'=>10]);	
		  \DB::table('districts')->insert(['name_en' => 'Stueng Saen','name_kh' => '','province_id'=>10]);	
		  \DB::table('districts')->insert(['name_en' => 'Sandaan','name_kh' => '','province_id'=>10]);	
		  \DB::table('districts')->insert(['name_en' => 'Stoung','name_kh' => '','province_id'=>10]);	
		  \DB::table('districts')->insert(['name_en' => 'Prasat Balangk','name_kh' => '','province_id'=>10]);	
		  \DB::table('districts')->insert(['name_en' => 'Santuk','name_kh' => '','province_id'=>10]);	
		  \DB::table('districts')->insert(['name_en' => 'Prasat Sambour','name_kh' => '','province_id'=>10]);	
		  \DB::table('districts')->insert(['name_en' => 'Kampong Svay','name_kh' => '','province_id'=>10]);

		  	// Kampot Province  	
	  	\DB::table('districts')->insert(['name_en' => 'Angkor Chey','name_kh' => '','province_id'=>11]);
	  	\DB::table('districts')->insert(['name_en' => 'Chhuk','name_kh' => '','province_id'=>11]);
	  	\DB::table('districts')->insert(['name_en' => 'Dorng Tong','name_kh' => '','province_id'=>11]);
	  	\DB::table('districts')->insert(['name_en' => 'Teouk Chhou','name_kh' => '','province_id'=>11]);
	  	\DB::table('districts')->insert(['name_en' => 'Banteay Meas','name_kh' => '','province_id'=>11]);
	  	\DB::table('districts')->insert(['name_en' => 'Kampong Trach','name_kh' => '','province_id'=>11]);
	  	\DB::table('districts')->insert(['name_en' => 'Chum Kiri','name_kh' => '','province_id'=>11]);
	  	\DB::table('districts')->insert(['name_en' => 'Kampot','name_kh' => '','province_id'=>11]);

	// Kep Province
	  	\DB::table('districts')->insert(['name_en' => 'Krong Kep','name_kh' => '','province_id'=>12]);
	  	\DB::table('districts')->insert(['name_en' => 'Damnak Chang aeur','name_kh' => '','province_id'=>12]);
	  	\DB::table('districts')->insert(['name_en' => 'Krong Kep','name_kh' => '','province_id'=>12]);

		// Koh Kong Province
		  \DB::table('districts')->insert(['name_en' => 'Botum Sakor','name_kh' => '','province_id'=>13]);	
		  \DB::table('districts')->insert(['name_en' => 'Koh Kong','name_kh' => '','province_id'=>13]);	
		  \DB::table('districts')->insert(['name_en' => 'Mondol Seima','name_kh' => '','province_id'=>13]);		
		  \DB::table('districts')->insert(['name_en' => 'Thma Bang','name_kh' => '','province_id'=>13]);	
		  \DB::table('districts')->insert(['name_en' => 'Kiri Sakor','name_kh' => '','province_id'=>13]);	
		  \DB::table('districts')->insert(['name_en' => 'Khemara Phoumin','name_kh' => '','province_id'=>13]);
		  \DB::table('districts')->insert(['name_en' => 'Srae Ambel','name_kh' => '','province_id'=>13]);	

		// Kratié Province
		  \DB::table('districts')->insert(['name_en' => 'Chhlong','name_kh' => '','province_id'=>14]);		
		  \DB::table('districts')->insert(['name_en' => 'Chitr Borei','name_kh' => '','province_id'=>14]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Kratie','name_kh' => '','province_id'=>14]);	
		  \DB::table('districts')->insert(['name_en' => 'Sombo','name_kh' => '','province_id'=>14]);
		  \DB::table('districts')->insert(['name_en' => 'Preaek Prasob','name_kh' => '','province_id'=>14]);	
		  \DB::table('districts')->insert(['name_en' => 'Snoul','name_kh' => '','province_id'=>14]);	

		// Mondulkiri Province
		  \DB::table('districts')->insert(['name_en' => 'Kaev Seima','name_kh' => '','province_id'=>15]);	
		  \DB::table('districts')->insert(['name_en' => 'Ou Reang','name_kh' => '','province_id'=>15]);		
		  \DB::table('districts')->insert(['name_en' => 'Krong Saen','name_kh' => '','province_id'=>15]);	
		  \DB::table('districts')->insert(['name_en' => 'Pech Chreada','name_kh' => '','province_id'=>15]);	
		  \DB::table('districts')->insert(['name_en' => 'Kaoh Nheaek','name_kh' => '','province_id'=>15]);	

	  // Oddar Meancheay Province
		  \DB::table('districts')->insert(['name_en' => 'Anlong Veaeng','name_kh' => '','province_id'=>16]);	
		  \DB::table('districts')->insert(['name_en' => 'Banteay Ampil','name_kh' => '','province_id'=>16]);	
		  \DB::table('districts')->insert(['name_en' => 'Chong Kal','name_kh' => '','province_id'=>16]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Samraong','name_kh' => '','province_id'=>16]);		
		  \DB::table('districts')->insert(['name_en' => 'Trapeang Prasat','name_kh' => '','province_id'=>16]);	

	  // Pailin Province
		  \DB::table('districts')->insert(['name_en' => 'Krong Pailin','name_kh' => '','province_id'=>17]);	
		  \DB::table('districts')->insert(['name_en' => 'Sala Krau','name_kh' => '','province_id'=>17]);	
		  \DB::table('districts')->insert(['name_en' => 'Chong Kal','name_kh' => '','province_id'=>17]);	

		// Preah Vihear Province
		  \DB::table('districts')->insert(['name_en' => 'Chey Saen','name_kh' => '','province_id'=>18]);	
		  \DB::table('districts')->insert(['name_en' => 'Choam Khsant','name_kh' => '','province_id'=>18]);	
		  \DB::table('districts')->insert(['name_en' => 'Rovieng','name_kh' => '','province_id'=>18]);	
		  \DB::table('districts')->insert(['name_en' => 'Sangkom Thmei','name_kh' => '','province_id'=>18]);	
		  \DB::table('districts')->insert(['name_en' => 'Chhaeb','name_kh' => '','province_id'=>18]);	
		  \DB::table('districts')->insert(['name_en' => 'Kulen','name_kh' => '','province_id'=>18]);		
		  \DB::table('districts')->insert(['name_en' => 'Tbaeng Mean Chey','name_kh' => '','province_id'=>18]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Preah Vihear','name_kh' => '','province_id'=>18]);	

	  // Prey Veng Province
		  \DB::table('districts')->insert(['name_en' => 'Ba Phnum','name_kh' => '','province_id'=>19]);
		  \DB::table('districts')->insert(['name_en' => 'Kanhchriech','name_kh' => '','province_id'=>19]);	
		  \DB::table('districts')->insert(['name_en' => 'Peam Ro','name_kh' => '','province_id'=>19]);	
		  \DB::table('districts')->insert(['name_en' => 'Preah Sdach','name_kh' => '','province_id'=>19]);	
		  \DB::table('districts')->insert(['name_en' => 'Me Sang','name_kh' => '','province_id'=>19]);		
		  \DB::table('districts')->insert(['name_en' => 'Pea Reang','name_kh' => '','province_id'=>19]);	
		  \DB::table('districts')->insert(['name_en' => 'Kamchay Mear','name_kh' => '','province_id'=>19]);	
		  \DB::table('districts')->insert(['name_en' => 'Prey Veaeng','name_kh' => '','province_id'=>19]);	
		  \DB::table('districts')->insert(['name_en' => 'Peam Chor','name_kh' => '','province_id'=>19]);	
		  \DB::table('districts')->insert(['name_en' => 'Kampong Trabaek','name_kh' => '','province_id'=>19]);	
		  \DB::table('districts')->insert(['name_en' => 'Por Reang','name_kh' => '','province_id'=>19]);	
		  \DB::table('districts')->insert(['name_en' => 'Svay Ontor','name_kh' => '','province_id'=>19]);

	  // Pursat Province
		  \DB::table('districts')->insert(['name_en' => 'Bakan','name_kh' => '','province_id'=>20]);	
		  \DB::table('districts')->insert(['name_en' => 'Krakor','name_kh' => '','province_id'=>20]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Pursat','name_kh' => '','province_id'=>20]);		
		  \DB::table('districts')->insert(['name_en' => 'Kandieng','name_kh' => '','province_id'=>20]);	
		  \DB::table('districts')->insert(['name_en' => 'Phnum Kravanh','name_kh' => '','province_id'=>20]);	
		  \DB::table('districts')->insert(['name_en' => 'Veal Veaeng','name_kh' => '','province_id'=>20]);	

	  // Ratanakiri
		  \DB::table('districts')->insert(['name_en' => 'Andoung Meas','name_kh' => '','province_id'=>21]);		
		  \DB::table('districts')->insert(['name_en' => 'Koun Mom','name_kh' => '','province_id'=>21]);	
		  \DB::table('districts')->insert(['name_en' => 'Ou Chum','name_kh' => '','province_id'=>21]);	
		  \DB::table('districts')->insert(['name_en' => 'Ta Veaeng','name_kh' => '','province_id'=>21]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Banlung','name_kh' => '','province_id'=>21]);	
		  \DB::table('districts')->insert(['name_en' => 'Lumphat','name_kh' => '','province_id'=>21]);	
		  \DB::table('districts')->insert(['name_en' => 'Ou Ya Dav','name_kh' => '','province_id'=>21]);	
		  \DB::table('districts')->insert(['name_en' => 'Bar Kaev','name_kh' => '','province_id'=>21]);

		// Stung Treng Province
		  \DB::table('districts')->insert(['name_en' => 'Sesan','name_kh' => '','province_id'=>22]);	
		  \DB::table('districts')->insert(['name_en' => 'Siem Bouk','name_kh' => '','province_id'=>22]);	
		  \DB::table('districts')->insert(['name_en' => 'Siem Pang','name_kh' => '','province_id'=>22]);		
		  \DB::table('districts')->insert(['name_en' => 'Thala Barivat','name_kh' => '','province_id'=>22]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Stung Treng','name_kh' => '','province_id'=>22]);	

	  // Svay Rieng Province
		  \DB::table('districts')->insert(['name_en' => 'Chantrea','name_kh' => '','province_id'=>23]);		
		  \DB::table('districts')->insert(['name_en' => 'Rumduol','name_kh' => '','province_id'=>23]);	
		  \DB::table('districts')->insert(['name_en' => 'Svay Chrum','name_kh' => '','province_id'=>23]);	
		  \DB::table('districts')->insert(['name_en' => 'Svay Teab','name_kh' => '','province_id'=>23]);	
		  \DB::table('districts')->insert(['name_en' => 'Kampong Rou','name_kh' => '','province_id'=>23]);		
		  \DB::table('districts')->insert(['name_en' => 'Romeas Haek','name_kh' => '','province_id'=>23]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Bavet','name_kh' => '','province_id'=>23]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Svay Rieng','name_kh' => '','province_id'=>23]);	

	  // Takéo Province
		  \DB::table('districts')->insert(['name_en' => 'Angkor Borei','name_kh' => '','province_id'=>24]);	
		  \DB::table('districts')->insert(['name_en' => 'Kiri Vong','name_kh' => '','province_id'=>24]);	
		  \DB::table('districts')->insert(['name_en' => 'Samraong','name_kh' => '','province_id'=>24]);	
		  \DB::table('districts')->insert(['name_en' => 'Treang','name_kh' => '','province_id'=>24]);		
		  \DB::table('districts')->insert(['name_en' => 'Bati','name_kh' => '','province_id'=>24]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Doun Kaev','name_kh' => '','province_id'=>24]);	
		  \DB::table('districts')->insert(['name_en' => 'Kaoh Andaet','name_kh' => '','province_id'=>24]);
		  \DB::table('districts')->insert(['name_en' => 'Krong Doun Kaev','name_kh' => '','province_id'=>24]);	
		  \DB::table('districts')->insert(['name_en' => 'Tram Kak','name_kh' => '','province_id'=>24]);	
		  \DB::table('districts')->insert(['name_en' => 'Prey Kabbas','name_kh' => '','province_id'=>24]);		
		  \DB::table('districts')->insert(['name_en' => 'Bourei Cholsar','name_kh' => '','province_id'=>24]);	

	  // Tbong Khmum Province
		  \DB::table('districts')->insert(['name_en' => 'Dombae','name_kh' => '','province_id'=>25]);	
		  \DB::table('districts')->insert(['name_en' => 'Memot','name_kh' => '','province_id'=>25]);	
		  \DB::table('districts')->insert(['name_en' => 'Ponhea Kraek','name_kh' => '','province_id'=>25]);		
		  \DB::table('districts')->insert(['name_en' => 'Krouch Chhma','name_kh' => '','province_id'=>25]);	
		  \DB::table('districts')->insert(['name_en' => 'Tboung Khmum','name_kh' => '','province_id'=>25]);	
		  \DB::table('districts')->insert(['name_en' => 'Ou Reang Ov','name_kh' => '','province_id'=>25]);	
		  \DB::table('districts')->insert(['name_en' => 'Krong Suong','name_kh' => '','province_id'=>25]);		
  }
}
