<?php

use App\Applicant;
use App\EducationLevel;
use App\JobType;
use App\PesantrenType;
use App\ProgramStudy;
use App\RangeSalary;
use app\SchoolType;
use App\Family;

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

		// $this->call('UserTableSeeder');
		$this->call('ApplicationTableSeeder');
		$this->call('EducationLevelSeeder');
		$this->call('JobTypeSeeder');
		$this->call('PesantrenTypeSeeder');
		$this->call('ProgramStudySeeder');
		$this->call('RangeSalarySeeder');
		$this->call('SchoolTypeSeeder');
		$this->call('FamilyTableSeeder');
	}

}

class ApplicationTableSeeder extends Seeder {
	public function run()
	{
		DB::table('applicants') ->delete();
		Applicant::create([
			'full_name' => 'The Name',
           	'email' => 'thename@email.com',
			'gender' => '1',
			'place_birth' => 'Jakarta',
			'date_birth' => '1998-10-10',
			'recitation' => 10,
			'color_blind' => 0,
			'mental_disorder' => 0,
			'illness' => '-',
			'blood_type' => 'O',
			'weight' => 90,
			'height' => 200,
			'contact' => '085648999',
			'marriage_status' => '0',
           	'address' => 'address applicant',
			'province_id' => 1,
			'kecamatan_id' => 1,
			'profile_photo' => 'url photo',
			'registration_number' => '1212121212'
		]);
	}
}

class FamilyTableSeeder extends Seeder {
	public function run()
	{
		DB::table('families')->delete();
		Family::create([
			'applicant_id'=>'1',
			'father_name'=>'Drajat sudrajat',
			'father_age'=>'30',
			'father_deceased'=>1,
			'father_education'=>4,
			'father_job_id'=>4,
			'father_salary_id'=>2,
			'mother_name'=>'Sumiati',
			'mother_age'=>'23',
			'mother_deceased'=>1,
			'mother_education'=>1,
			'mother_job_id'=>2,
			'mother_income_id'=>2,
			'address'=>'Alamat',
			'province_id'=>1,
			'kecamatan_id'=>2
		]);
	}
}

class EducationLevelSeeder extends Seeder {
	public function run()
	{
		DB::table('education_levels')->delete();

		$educations = [
			[ 'level_name' => 'Tidak Sekolah' ],
			[ 'level_name' => 'SD/MI' ],
			[ 'level_name' => 'SMP/MTS' ],
			[ 'level_name' => 'SMA/MA/SMK/SEDERAJAT' ],
			[ 'level_name' => 'D1/D2/D3' ],
			[ 'level_name' => 'D4/S1' ],
			[ 'level_name' => 'S2' ],
			[ 'level_name' => 'S3' ]
		];

		EducationLevel::insert($educations);
	}
}

class JobTypeSeeder extends Seeder{
	public function run()
	{
		DB::table('job_types')->delete();

		$jobs = [
			['job_name' => 'PNS[Non Guru dan Dosen]'],
			['job_name' => 'Pegawai Swasta/BUMN/BUMD'],
			['job_name' => 'Petani/Nelayan'],
			['job_name' => 'Penguasaha'],
			['job_name' => 'TNI/Polri'],
			['job_name' => 'Guru/Dosen'],
			['job_name' => 'Pensiunan'],
			['job_name' => 'Tidak Bekerja']
		];

		JobType::insert($jobs);
	}
}


class PesantrenTypeSeeder extends Seeder {
	public function run()
	{
		DB::table('pesantren_types')->delete();

		$types = [
			['type_name' => 'Muadalah'],
			['type_name' => 'SalafiyahMuadalah'],
			['type_name' => 'Kombinasi'],
			['type_name' => 'Lain-lain']
		];


		PesantrenType::insert($types);
	}
}


class ProgramStudySeeder extends Seeder {
	public function run()
	{
		DB::table('program_studies')->delete();

		$programs = [
			['program_name' => 'IPA', 'list_subject' 		=>  'Matematika; Bahasa Indonesia; Bahasa Inggris; Pendidikan Kewarganegaraan; Pendidikan Agama; Ranking\n'],
			['program_name' => 'IPS', 'list_subject' 		=> 'Matematika; Bahasa Indonesia; Bahasa Inggris; Pendidikan Kewarganegaraan; Pendidikan Agama; Ranking\n'],
			['program_name' => 'BAHASA', 'list_subject' 	=> 'Matematika; Bahasa Indonesia; Bahasa Inggris; Pendidikan Kewarganegaraan; Pendidikan Agama; Ranking\n'],
			['program_name' => 'AGAMA', 'list_subject' 	=> 'Matematika; Bahasa Indonesia; Bahasa Inggris; Pendidikan Kewarganegaraan; Pendidikan Agama; Ranking\n'],
			['program_name' => 'Paket C', 'list_subject' 	=> 'Matematika; Bahasa Indonesia; Bahasa Inggris; Pendidikan Kewarganegaraan; Pendidikan Agama; Ranking\r\n']
		];

		ProgramStudy::insert($programs);
	}
}

class RangeSalarySeeder extends Seeder {
	public function run()
	{
		DB::table('range_salaries')->delete();

		$salaries = [
			['range_name' => 'Kurang dari 500.000'],
			['range_name' => '500.000-1.000.000'],
			['range_name' => '1.000.000-2.000.000'],
			['range_name' => '1.000.000-3.000.000'],
			['range_name' => 'Lebih besar dari 3.000.000']
		];

		RangeSalary::insert($salaries);
	}
}

class SchoolTypeSeeder extends Seeder {
	public function run()
	{
		DB::table('school_types')->delete();

		$types = [
			['type_name' => 'MA'],
			['type_name' => 'SMA'],
			['type_name' => 'SMK'],
			['type_name' => 'PPM'],
			['type_name' => 'PPS'],
			['type_name' => 'Lain-lain']
		];
	}
}
