<?php

use App\Applicant;
use App\EducationLevel;
use App\JobType;
use App\PesantrenType;
use App\ProgramStudy;
use App\RangeSalary;
use App\SchoolType;
use App\Family;
use App\Province;
use App\Kabupaten;
use App\Kecamatan;
use App\User;
use App\Setting;
use App\University;
use App\Departement;


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('EducationLevelSeeder');
		$this->call('JobTypeSeeder');
		$this->call('PesantrenTypeSeeder');
		$this->call('ProgramStudySeeder');
		$this->call('RangeSalarySeeder');
		$this->call('SchoolTypeSeeder');
		$this->call('ProvinceSeeder');
		$this->call('UserSeeder');
		$this->call('SettingSeeder');
		$this->call('UniversitySeeder');
		$this->call('DepartementSeeder');
		//$this->call('KabupatenSeeder');
		//$this->call('KecamatanSeeder');

	}


}

class SettingSeeder extends Seeder {
	public function run()
	{
		DB::table('settings')->delete();

		$settings = [
			['id'=>1, 'nomor_registrasi' => 0001, 'tanggal_tutup' => '2016-01-01']
		];

		Setting::insert($settings);
	}
}


class UserSeeder extends Seeder {
	public function run()
	{
		DB::table('users')->delete();

		$users = [
			['id'=>1, 'username' => 'mahasantri', 'email' => 'mahasantri@gmail.com', 'password' => '$2y$10$FvCQF4.RhYvmCOtscWHLauD4ugpCeelWfphaVRp20R4vz8huE/Mba', 'role' => '255'],
			['id'=>2, 'username' => 'santricerdas', 'email' => 'agung.smarts@gmail.com', 'password' => '$2y$10$//GQ5CINIAXyrhKWk8nWlu2vzZ1ZvQiQL8M1KbhoS5F3mUuHGxmlm', 'role' => '255']
		];

		User::insert($users);
	}
}

class EducationLevelSeeder extends Seeder {
	public function run()
	{
		DB::table('education_levels')->delete();

		$educations = [
			['id'=>1, 'level_name' => 'Tidak Sekolah' ],
			['id'=>2, 'level_name' => 'SD/MI' ],
			['id'=>3, 'level_name' => 'SMP/MTS' ],
			['id'=>4, 'level_name' => 'SMA/MA/SMK/SEDERAJAT' ],
			['id'=>5, 'level_name' => 'D1/D2/D3' ],
			['id'=>6, 'level_name' => 'D4/S1' ],
			['id'=>7, 'level_name' => 'S2' ],
			['id'=>8, 'level_name' => 'S3' ]
		];

		EducationLevel::insert($educations);
	}
}

class JobTypeSeeder extends Seeder{
	public function run()
	{
		DB::table('job_types')->delete();

		$jobs = [
			['id'=>1,'job_name' => 'PNS[Non Guru dan Dosen]'],
			['id'=>2,'job_name' => 'Pegawai Swasta/BUMN/BUMD'],
			['id'=>3,'job_name' => 'Petani/Nelayan'],
			['id'=>4,'job_name' => 'Pengusaha'],
			['id'=>5,'job_name' => 'TNI/Polri'],
			['id'=>6,'job_name' => 'Guru/Dosen'],
			['id'=>7,'job_name' => 'Pensiunan'],
			['id'=>8,'job_name' => 'Tidak Bekerja']
		];

		JobType::insert($jobs);
	}
}

class UniversitySeeder extends Seeder{
	public function run()
	{
		DB::table('universities')->delete();

		$universities = [
			['id'=>1,'university_code'  => '11', 'status' => '1','university_name' => 'UIN Syarif Hidayatullah Jakarta'],
			['id'=>2,'university_code'  => '12', 'status' => '1','university_name' => 'UIN Sunan Gunung Djati Bandung'],
			['id'=>3,'university_code'  => '13', 'status' => '1','university_name' => 'UIN Walisongo Semarang'],
			['id'=>4,'university_code'  => '14', 'status' => '1','university_name' => 'UIN Sunan Kalijaga Yogyakarta'],
			['id'=>5,'university_code'  => '15', 'status' => '1','university_name' => 'UIN Sunan Ampel Surabaya'],
			['id'=>6,'university_code'  => '16', 'status' => '1','university_name' => 'UIN Maulana Malik Ibrahim Malang'],
			['id'=>7,'university_code'  => '17', 'status' => '1','university_name' => 'UIN Alauddin Makassar'],
			['id'=>8,'university_code'  => '21', 'status' => '1','university_name' => 'Institut Pertanian Bogor (IPB)'],
			['id'=>9,'university_code'  => '22', 'status' => '1','university_name' => 'Universitas Pendidikan Indonesia (UPI) Bandung'],
			['id'=>10,'university_code' => '23', 'status' => '1','university_name' => 'Universitas Gadjah Mada (UGM) Yogyakarta'],
			['id'=>11,'university_code' => '24', 'status' => '1','university_name' => 'Institut Teknologi 10 Nopember (ITS) Surabaya'],
			['id'=>12,'university_code' => '25', 'status' => '1','university_name' => 'Universitas Airlangga Surabaya'],
			['id'=>13,'university_code' => '26', 'status' => '1','university_name' => 'Universitas Cendrawasih'],
		];

		University::insert($universities);
	}
}

class DepartementSeeder extends Seeder{
	public function run()
	{
		DB::table('departements')->delete();
		$departements = [
			// uin syarif
			['id'=>1,'university_id'  => '1', 'departement_name' => 'PENDIDIKAN DOKTER', 'departement_code' =>'', 'status' => '1'],
			['id'=>2,'university_id'  => '1', 'departement_name' => 'KESEHATAN MASYARAKAT', 'departement_code' =>'', 'status' => '1'],
			['id'=>3,'university_id'  => '1', 'departement_name' => 'FARMASI', 'departement_code' =>'', 'status' => '1'],
			['id'=>4,'university_id'  => '1', 'departement_name' => 'KEPERAWATAN', 'departement_code' =>'', 'status' => '1'],
			// UIN bandung
			['id'=>5,'university_id'  => '2', 'departement_name' => 'TASAWUF PSIKOTERAPI', 'departement_code' =>'', 'status' => '1'],
			// UIN semarang
			['id'=>6,'university_id'  => '3', 'departement_name' => 'ILMU FALAK', 'departement_code' =>'', 'status' => '1'],
			// UIN jogja
			['id'=>7,'university_id'  => '4', 'departement_name' => 'ILMU ALQURAN DAN TAFSIR', 'departement_code' =>'', 'status' => '1'],
			['id'=>8,'university_id'  => '4', 'departement_name' => 'ILMU HADITS', 'departement_code' =>'', 'status' => '1'],
			//uin sby
			['id'=>9,'university_id'  => '5', 'departement_name' => 'BIMBINGAN DAN KONSELING ISLAM', 'departement_code' =>'', 'status' => '1'],
			['id'=>10,'university_id'  => '5', 'departement_name' => 'PENGEMBANGAN MASYARAKAT ISLAM', 'departement_code' =>'', 'status' => '1'],
			// UIN malang
			['id'=>11,'university_id'  => '6', 'departement_name' => 'TEKNIK INFORMATIKA', 'departement_code' =>'', 'status' => '1'],
			['id'=>12,'university_id'  => '6', 'departement_name' => 'PERBANKAN SYARIAH', 'departement_code' =>'', 'status' => '1'],
			['id'=>13,'university_id'  => '6', 'departement_name' => 'HUKUM BISNIS SYARIAH', 'departement_code' =>'', 'status' => '1'],
			['id'=>14,'university_id'  => '6', 'departement_name' => 'BAHASA DAN SASTRA ARAB', 'departement_code' =>'', 'status' => '1'],
			// uin makasar
			['id'=>15,'university_id'  => '7', 'departement_name' => 'KEPERAWATAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>16,'university_id'  => '7', 'departement_name' => 'FARMASI', 'departement_code' =>'', 'status' => '1'],
			['id'=>17,'university_id'  => '7', 'departement_name' => 'KESEHATAN MASYARAKATAN', 'departement_code' =>'', 'status' => '1'],
			// IPB
			['id'=>18,'university_id'  => '8', 'departement_name' => 'MANAJEMEN SUMBER DAYA LAHAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>19,'university_id'  => '8', 'departement_name' => 'AGRONOMI DAN HORTIKULTURA', 'departement_code' =>'', 'status' => '1'],
			['id'=>20,'university_id'  => '8', 'departement_name' => 'PROTEKSI TANAMAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>21,'university_id'  => '8', 'departement_name' => 'TEKNOLOGI DAN MANAJMEN PERIKANAN DAN BUDIDAYA', 'departement_code' =>'', 'status' => '1'],
			['id'=>22,'university_id'  => '8', 'departement_name' => 'MANAJEMEN SUMBER DAYA PERAIRAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>23,'university_id'  => '8', 'departement_name' => 'TEKNOLOGI HASIL PERAIRAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>24,'university_id'  => '8', 'departement_name' => 'ILMU DAN TEKNOLOGI KELAUTAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>25,'university_id'  => '8', 'departement_name' => 'ILMU TEKNOLOGI PETERNAKAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>26,'university_id'  => '8', 'departement_name' => 'NUTRISI DAN TEKNOLOGI PAKAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>27,'university_id'  => '8', 'departement_name' => 'TEKNIK MESIN DAN BIOSISTEM', 'departement_code' =>'', 'status' => '1'],
			['id'=>28,'university_id'  => '8', 'departement_name' => 'TEKNOLOGI PANGAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>29,'university_id'  => '8', 'departement_name' => 'TEKNOLOGI INDUSTRI PERTANIAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>30,'university_id'  => '8', 'departement_name' => 'TEKNIK SIPIL DAN LINGKUNGAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>31,'university_id'  => '8', 'departement_name' => 'ILMU GIZI', 'departement_code' =>'', 'status' => '1'],
			['id'=>32,'university_id'  => '8', 'departement_name' => 'ILMU KELUARGA DAN KONSUMEN', 'departement_code' =>'', 'status' => '1'],
			//UPI
			['id'=>33,'university_id'  => '9', 'departement_name' => 'BIMBINGAN DAN KONSELING', 'departement_code' =>'', 'status' => '1'],
			['id'=>34,'university_id'  => '9', 'departement_name' => 'TEKNOLOGI PENDIDIKAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>35,'university_id'  => '9', 'departement_name' => 'ADMINISTRASI PENDIDIKAN', 'departement_code' =>'', 'status' => '1'],
			// UGM
			['id'=>36,'university_id'  => '10', 'departement_name' => 'PENDIDIKAN DOKTER', 'departement_code' =>'', 'status' => '1'],
			['id'=>37,'university_id'  => '10', 'departement_name' => 'ILMU KEPERAWATAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>38,'university_id'  => '10', 'departement_name' => 'PENDIDIKAN DOKTER HEWAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>39,'university_id'  => '10', 'departement_name' => 'FARMASI', 'departement_code' =>'', 'status' => '1'],
			['id'=>40,'university_id'  => '10', 'departement_name' => 'MANAJEMEN SUMBER DAYA PERIKANAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>41,'university_id'  => '10', 'departement_name' => 'TEKNOLOGI PENGOLAHAN HASIL PANGAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>42,'university_id'  => '10', 'departement_name' => 'TEKNOLOGI INDUSTRI PERTANIAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>43,'university_id'  => '10', 'departement_name' => 'AKUNTANSI', 'departement_code' =>'', 'status' => '1'],
			['id'=>44,'university_id'  => '10', 'departement_name' => 'ILMU EKONOMI', 'departement_code' =>'', 'status' => '1'],
			['id'=>45,'university_id'  => '10', 'departement_name' => 'PSIKOLOGI', 'departement_code' =>'', 'status' => '1'],
			['id'=>46,'university_id'  => '10', 'departement_name' => 'ILMU KOMUNIKASI', 'departement_code' =>'', 'status' => '1'],
			// ITS			 
			['id'=>47,'university_id'  => '11', 'departement_name' => 'TEKNIK INFORMATIKA', 'departement_code' =>'', 'status' => '1'],
			['id'=>48,'university_id'  => '11', 'departement_name' => 'SISTEM INFORMASI', 'departement_code' =>'', 'status' => '1'],
			['id'=>49,'university_id'  => '11', 'departement_name' => 'TEKNIK ELEKTRO', 'departement_code' =>'', 'status' => '1'],
			['id'=>50,'university_id'  => '11', 'departement_name' => 'TEKNIK INDUSTRI', 'departement_code' =>'', 'status' => '1'],
			['id'=>51,'university_id'  => '11', 'departement_name' => 'STATISTIKA', 'departement_code' =>'', 'status' => '1'],
			['id'=>52,'university_id'  => '11', 'departement_name' => 'MATEMATIKA', 'departement_code' =>'', 'status' => '1'],
			// unair
			['id'=>53,'university_id'  => '12', 'departement_name' => 'PENDIDIKAN DOKTER', 'departement_code' =>'', 'status' => '1'],
			['id'=>54,'university_id'  => '12', 'departement_name' => 'PENDIDIKAN BIDAN', 'departement_code' =>'', 'status' => '1'],
			['id'=>55,'university_id'  => '12', 'departement_name' => 'PENDIDIKAN DOKTER GIGI', 'departement_code' =>'', 'status' => '1'],
			['id'=>56,'university_id'  => '12', 'departement_name' => 'PENDIDIKAN APOTEKER', 'departement_code' =>'', 'status' => '1'],
			['id'=>57,'university_id'  => '12', 'departement_name' => 'PENDIDIKAN KESEHATAN MASYARAKAT', 'departement_code' =>'', 'status' => '1'],
			['id'=>58,'university_id'  => '12', 'departement_name' => 'ILMU GIZI', 'departement_code' =>'', 'status' => '1'],
			['id'=>59,'university_id'  => '12', 'departement_name' => 'PENDIDIKAN ILMU KEPERAWATAN', 'departement_code' =>'', 'status' => '1'],
			// uncen
			['id'=>60,'university_id'  => '13', 'departement_name' => 'PENDIDIKAN DOKTER', 'departement_code' =>'', 'status' => '1'],
			['id'=>61,'university_id'  => '13', 'departement_name' => 'TEKNIK SIPIL', 'departement_code' =>'', 'status' => '1']			
		];
		Departement::insert($departements);
	}
}


class departementProgramStudies extends Seeder{
	public function run()
	{
		DB::table('departements_program_studies')->delete();

		$dep_prodi = [
			// uin syarif
			['departement_id' =>1 , 'program_study_id' => 1],
			['departement_id' =>2 , 'program_study_id' => 1],
			['departement_id' =>3 , 'program_study_id' => 1],
			['departement_id' =>4 , 'program_study_id' => 1],
			// uin bandung
			['departement_id' =>5 , 'program_study_id' => 1],
			['departement_id' =>5 , 'program_study_id' => 2],
			['departement_id' =>5 , 'program_study_id' => 3],
			['departement_id' =>5 , 'program_study_id' => 4],
			// UIN semarang
			['departement_id' =>6 , 'program_study_id' => 1],
			['departement_id' =>6 , 'program_study_id' => 2],
			['departement_id' =>6 , 'program_study_id' => 3],
			['departement_id' =>6 , 'program_study_id' => 4],
			// UIN Jogja
			['departement_id' =>7 , 'program_study_id' => 4],
			['departement_id' =>8 , 'program_study_id' => 4],
			// uin sby
			['departement_id' =>9 , 'program_study_id' => 1],
			['departement_id' =>9 , 'program_study_id' => 2],
			['departement_id' =>9 , 'program_study_id' => 3],
			['departement_id' =>9 , 'program_study_id' => 4],
			['departement_id' =>10 , 'program_study_id' => 1],
			['departement_id' =>10 , 'program_study_id' => 2],
			['departement_id' =>10 , 'program_study_id' => 3],
			['departement_id' =>10 , 'program_study_id' => 4],

			// UIN Malang


			// UIN makasar
			['departement_id' =>15 , 'program_study_id' => 1],
			['departement_id' =>16 , 'program_study_id' => 1],
			['departement_id' =>17 , 'program_study_id' => 1],
			// ipb
			['departement_id' =>18 , 'program_study_id' => 1],
			['departement_id' =>19 , 'program_study_id' => 1],
			['departement_id' =>20 , 'program_study_id' => 1],
			['departement_id' =>21 , 'program_study_id' => 1],
			['departement_id' =>22 , 'program_study_id' => 1],
			['departement_id' =>23 , 'program_study_id' => 1],
			['departement_id' =>24 , 'program_study_id' => 1],
			['departement_id' =>25 , 'program_study_id' => 1],
			['departement_id' =>26 , 'program_study_id' => 1],
			['departement_id' =>27 , 'program_study_id' => 1],
			['departement_id' =>28 , 'program_study_id' => 1],
			['departement_id' =>29 , 'program_study_id' => 1],
			['departement_id' =>30 , 'program_study_id' => 1],
			['departement_id' =>31 , 'program_study_id' => 1],
			['departement_id' =>32 , 'program_study_id' => 1],

			// UPI
			['departement_id' =>33 , 'program_study_id' => 1],
			['departement_id' =>34 , 'program_study_id' => 1],
			['departement_id' =>35 , 'program_study_id' => 1],
			['departement_id' =>34 , 'program_study_id' => 2],
			['departement_id' =>33 , 'program_study_id' => 2],
			['departement_id' =>35 , 'program_study_id' => 2],

			// UGM
			['departement_id' =>36 , 'program_study_id' => 1],
			['departement_id' =>36 , 'program_study_id' => 1],
			['departement_id' =>38 , 'program_study_id' => 1],
			['departement_id' =>39 , 'program_study_id' => 1],
			['departement_id' =>40 , 'program_study_id' => 1],
			['departement_id' =>41 , 'program_study_id' => 1],
			['departement_id' =>42 , 'program_study_id' => 1],
			['departement_id' =>43 , 'program_study_id' => 1],
			['departement_id' =>44 , 'program_study_id' => 1],
			['departement_id' =>45 , 'program_study_id' => 1],
			['departement_id' =>46 , 'program_study_id' => 1],

			['departement_id' =>43 , 'program_study_id' => 2],
			['departement_id' =>44 , 'program_study_id' => 2],
			['departement_id' =>45 , 'program_study_id' => 2],
			['departement_id' =>46 , 'program_study_id' => 2],

			// ITS
			['departement_id' =>47 , 'program_study_id' => 1],
			['departement_id' =>48 , 'program_study_id' => 1],
			['departement_id' =>49 , 'program_study_id' => 1],
			['departement_id' =>50 , 'program_study_id' => 1],
			['departement_id' =>51 , 'program_study_id' => 1],
			['departement_id' =>52 , 'program_study_id' => 1],

			// UNAIR
			['departement_id' =>53 , 'program_study_id' => 1],
			['departement_id' =>54 , 'program_study_id' => 1],
			['departement_id' =>55 , 'program_study_id' => 1],
			['departement_id' =>56 , 'program_study_id' => 1],
			['departement_id' =>57 , 'program_study_id' => 1],
			['departement_id' =>58 , 'program_study_id' => 1],
			['departement_id' =>50 , 'program_study_id' => 1],

			['departement_id' =>53 , 'program_study_id' => 2],
			['departement_id' =>54 , 'program_study_id' => 2],
			['departement_id' =>55 , 'program_study_id' => 2],
			['departement_id' =>56 , 'program_study_id' => 2],
			['departement_id' =>57 , 'program_study_id' => 2],
			['departement_id' =>58 , 'program_study_id' => 2],
			['departement_id' =>50 , 'program_study_id' => 2],

			// uncen
			['departement_id' =>60 , 'program_study_id' => 1],
			['departement_id' =>61 , 'program_study_id' => 1],

		];
	}
}

class PesantrenTypeSeeder extends Seeder {
	public function run()
	{
		DB::table('pesantren_types')->delete();

		$types = [
			['id'=>1,'type_name' => 'Muadalah'],
			['id'=>2,'type_name' => 'Salafiyah Muadalah'],
			['id'=>3,'type_name' => 'Kombinasi'],
			['id'=>4,'type_name' => 'Lain-lain']
		];


		PesantrenType::insert($types);
	}
}


class ProgramStudySeeder extends Seeder {
	public function run()
	{
		DB::table('program_studies')->delete();

		$programs = [
			['id'=>1, 'program_name' => 'IPA', 		'prodi_code'=> '1', 	'list_subject'	=>  'Matematika; Bahasa Indonesia; Bahasa Inggris; Pendidikan Kewarganegaraan; Pendidikan Agama; Ranking'],
			['id'=>2, 'program_name' => 'IPS', 		'prodi_code'=> '2', 	'list_subject'	=> 'Matematika; Bahasa Indonesia; Bahasa Inggris; Pendidikan Kewarganegaraan; Pendidikan Agama; Ranking'],
			['id'=>3, 'program_name' => 'BAHASA', 	'prodi_code'=> '3', 	'list_subject' 	=> 'Matematika; Bahasa Indonesia; Bahasa Inggris; Pendidikan Kewarganegaraan; Pendidikan Agama; Ranking'],
			['id'=>4, 'program_name' => 'AGAMA', 	'prodi_code'=> '4', 	'list_subject' 	=> 'Matematika; Bahasa Indonesia; Bahasa Inggris; Pendidikan Kewarganegaraan; Pendidikan Agama; Ranking'],
			['id'=>5,'program_name'  => 'DLL', 		'prodi_code'=> '9',	'list_subject' 	=> 'Matematika; Bahasa Indonesia; Bahasa Inggris; Pendidikan Kewarganegaraan; Pendidikan Agama; Ranking']
		];

		ProgramStudy::insert($programs);
	}
}

class RangeSalarySeeder extends Seeder {
	public function run()
	{
		DB::table('range_salaries')->delete();

		$salaries = [
			['id'=>1, 'range_name' => 'Kurang dari 500.000'],
			['id'=>2, 'range_name' => '500.000-1.000.000'],
			['id'=>3, 'range_name' => '1.000.000-2.000.000'],
			['id'=>4, 'range_name' => '1.000.000-3.000.000'],
			['id'=>5, 'range_name' => 'Lebih besar dari 3.000.000']
		];

		RangeSalary::insert($salaries);
	}
}

class SchoolTypeSeeder extends Seeder {
	public function run()
	{
		DB::table('school_types')->delete();

		$types = [
			['id'=>1, 'type_code'=>'1', 'type_name' => 'Madrasah Aliyah(MA)', 'max_age' => 19, 'max_graduate'=> 2015],
			// ['id'=>2, 'type_code'=>'2', 'type_name' => 'Sekolah mengenah Atas(SMA)', 'max_age' => 19, 'max_graduate'=> 2016],
			// ['id'=>3, 'type_code'=>'3','type_name' => 'Sekolah Menengah Kejujuran(SMK)', 'max_age' => 19, 'max_graduate'=> 2016],
			['id'=>4, 'type_code'=>'4', 'type_name' => 'Pondok Pesantren Muadalah(PPM)', 'max_age' => 19, 'max_graduate'=> 2016],
			['id'=>5, 'type_code'=>'5', 'type_name' => 'pondok pesantren salafiyah(PPS)/Paket C', 'max_age' => 19, 'max_graduate'=> 2016]
			// ['id'=>6, 'type_name' => 'Lain-lain']
		];

		SchoolType::insert($types);
	}
}

class ProvinceSeeder extends Seeder {
	public function run()
	{
		DB::table('provinces')->delete();

		$prov = [
			['id'=>1, 'province_name'=>'Nanggroe Aceh Darussalam', 'province_code'=> '11'],
			['id'=>2, 'province_name'=>'Sumatera Utara', 'province_code'=>'12'],
			['id'=>3, 'province_name'=>'Sumatera Barat', 'province_code'=>'13'],
			['id'=>4, 'province_name'=>'Riau', 'province_code'=>'14'],
			['id'=>5, 'province_name'=>'Jambi', 'province_code'=>'15'],
			['id'=>6, 'province_name'=>'Sumatera Selatan', 'province_code'=>'16'],
			['id'=>7, 'province_name'=>'Bengkulu', 'province_code'=>'17'],
			['id'=>8, 'province_name'=>'Lampung', 'province_code'=>'18'],
			['id'=>9, 'province_name'=>'Kepulauan Bangka-Belitung', 'province_code'=>'19'],
			['id'=>10, 'province_name'=>'Kepulauan Riau', 'province_code'=>'21'],
			['id'=>11, 'province_name'=>'DKI Jakarta', 'province_code'=>'31'],
			['id'=>12, 'province_name'=>'Jawa Barat', 'province_code'=>'32'],
			['id'=>13, 'province_name'=>'Jawa Tengah', 'province_code'=>'33'],
			['id'=>14, 'province_name'=>'Daerah Istimewa Yogyakarta  ', 'province_code'=>'34'],
			['id'=>15, 'province_name'=>'Jawa Timur', 'province_code'=>'35'],
			['id'=>16, 'province_name'=>'Banten', 'province_code'=>'36'],
			['id'=>17, 'province_name'=>'Bali', 'province_code'=>'51'],
			['id'=>18, 'province_name'=>'Nusa Tenggara Barat', 'province_code'=>'52'],
			['id'=>19, 'province_name'=>'Nusa Tenggara Timur', 'province_code'=>'53'],
			['id'=>20, 'province_name'=>'Kalimantan Barat', 'province_code'=>'61'],
			['id'=>21, 'province_name'=>'Kalimantan Tengah', 'province_code'=>'62'],
			['id'=>22, 'province_name'=>'Kalimantan Selatan', 'province_code'=>'63'],
			['id'=>23, 'province_name'=>'Kalimantan Timur', 'province_code'=>'64'],
			['id'=>24, 'province_name'=>'Kalimantan Utara', 'province_code'=>'65'],
			['id'=>25, 'province_name'=>'Sulawesi Utara', 'province_code'=>'71'], //timur
			['id'=>26, 'province_name'=>'Sulawesi Tengah', 'province_code'=>'72'], //timur
			['id'=>27, 'province_name'=>'Sulawesi Selatan', 'province_code'=>'73'], //timur
			['id'=>28, 'province_name'=>'Sulawesi Tenggara', 'province_code'=>'74'], //timur
			['id'=>29, 'province_name'=>'Gorontalo', 'province_code'=>'75'], //timur
			['id'=>30, 'province_name'=>'Sulawesi Barat', 'province_code'=>'76'], //timur
			['id'=>31, 'province_name'=>'Maluku', 'province_code'=>'81'], //timur
			['id'=>32, 'province_name'=>'Maluku Utara', 'province_code'=>'82'], //timur
			['id'=>33, 'province_name'=>'Papua', 'province_code'=>'91'], //timur
			['id'=>34, 'province_name'=>'Papua Barat', 'province_code'=>'92'], //timur
		];

		Province::insert($prov);
	}
}

// class ApplicationTableSeeder extends Seeder {
// 	public function run()
// 	{
// 		DB::table('applicants') ->delete();
// 		Applicant::create([
// 			'id' => 1,
// 			'full_name' => 'The Name',
//            	'email' => 'thename@email.com',
// 			'gender' => '1',
// 			'place_birth' => 'Jakarta',
// 			'date_birth' => '1998-10-10',
// 			'recitation' => 10,
// 			'color_blind' => 0,
// 			'mental_disorder' => 0,
// 			'illness' => '-',
// 			'blood_type' => 'O',
// 			'weight' => 90,
// 			'height' => 200,
// 			'contact' => '085648999',
// 			'marriage_status' => '0',
//            	'address' => 'address applicant',
// 			'province_id' => 1,
// 			'kecamatan_id' => 1,
// 			'profile_photo' => 'url photo',
// 			'registration_number' => '1212121212'
// 		]);
// 	}
// }

// class FamilyTableSeeder extends Seeder {
// 	public function run()
// 	{
// 		DB::table('families')->delete();
// 		Family::create([
// 			'id' => 1
// 			'applicant_id'=>'1',
// 			'father_name'=>'Drajat sudrajat',
// 			'father_age'=>'30',
// 			'father_deceased'=>1,
// 			'father_education'=>4,
// 			'father_job_id'=>4,
// 			'father_salary_id'=>2,
// 			'mother_name'=>'Sumiati',
// 			'mother_age'=>'23',
// 			'mother_deceased'=>1,
// 			'mother_education'=>1,
// 			'mother_job_id'=>2,
// 			'mother_income_id'=>2,
// 			'address'=>'Alamat',
// 			'province_id'=>1,
// 			'kecamatan_id'=>2
// 		]);
// 	}
// }
