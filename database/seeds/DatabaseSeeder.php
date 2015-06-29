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
		$this->call('ProvinceSeeder');
		$this->call('kabupatenSeeder');
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

		SchoolType::insert($types);
	}
}

class ProvinceSeeder extends Seeder {
	public function run()
	{
		DB::table('provinces')->delete();

		$prov = [
			['id'=>1, 'province_name'=>'Nanggroe Aceh Darussalam'],
			['id'=>2, 'province_name'=>'Sumatera Utara'],
			['id'=>3, 'province_name'=>'Sumatera Barat'],
			['id'=>4, 'province_name'=>'Riau'],
			['id'=>5, 'province_name'=>'Kepulauan Riau'],
			['id'=>6, 'province_name'=>'Kepulauan Bangka-Belitung'],
			['id'=>7, 'province_name'=>'Jambi'],
			['id'=>8, 'province_name'=>'Bengkulu'],
			['id'=>9, 'province_name'=>'Sumatera Selatan'],
			['id'=>10, 'province_name'=>'Lampung'],
			['id'=>11, 'province_name'=>'Banten'],
			['id'=>12, 'province_name'=>'DKI Jakarta'],
			['id'=>13, 'province_name'=>'Jawa Barat'],
			['id'=>14, 'province_name'=>'Jawa Tengah'],
			['id'=>15, 'province_name'=>'Daerah Istimewa Yogyakarta  '],
			['id'=>16, 'province_name'=>'Jawa Timur'],
			['id'=>17, 'province_name'=>'Bali'],
			['id'=>18, 'province_name'=>'Nusa Tenggara Barat'],
			['id'=>19, 'province_name'=>'Nusa Tenggara Timur'],
			['id'=>20, 'province_name'=>'Kalimantan Barat'],
			['id'=>21, 'province_name'=>'Kalimantan Tengah'],
			['id'=>22, 'province_name'=>'Kalimantan Selatan'],
			['id'=>23, 'province_name'=>'Kalimantan Timur'],
			['id'=>24, 'province_name'=>'Gorontalo'],
			['id'=>25, 'province_name'=>'Sulawesi Selatan'],
			['id'=>26, 'province_name'=>'Sulawesi Tenggara'],
			['id'=>27, 'province_name'=>'Sulawesi Tengah'],
			['id'=>28, 'province_name'=>'Sulawesi Utara'],
			['id'=>29, 'province_name'=>'Sulawesi Barat'],
			['id'=>30, 'province_name'=>'Maluku'],
			['id'=>31, 'province_name'=>'Maluku Utara'],
			['id'=>32, 'province_name'=>'Papua Barat'],
			['id'=>33, 'province_name'=>'Papua'],
			['id'=>34, 'province_name'=>'Kalimantan Utara']
		];

		Province::insert($prov);
	}
}
class KabupatenSeeder extends Seeder {
	public function run()
	{
		DB::table('kabupatens')->delete();

		$kab = [
			['id'=>1,'kabupaten_name' => 'Kabupaten Aceh Barat', 'province_id' =>'1'],
			['id'=>2,'kabupaten_name' => 'Kabupaten Aceh Barat Daya', 'province_id' =>'1'],
			['id'=>3,'kabupaten_name' => 'Kabupaten Aceh Besar', 'province_id' =>'1'],
			['id'=>4,'kabupaten_name' => 'Kabupaten Aceh Jaya', 'province_id' =>'1'],
			['id'=>5,'kabupaten_name' => 'Kabupaten Aceh Selatan', 'province_id' =>'1'],
			['id'=>6,'kabupaten_name' => 'Kabupaten Aceh Singkil', 'province_id' =>'1'],
			['id'=>7,'kabupaten_name' => 'Kabupaten Aceh Tamiang', 'province_id' =>'1'],
			['id'=>8,'kabupaten_name' => 'Kabupaten Aceh Tengah', 'province_id' =>'1'],
			['id'=>9,'kabupaten_name' => 'Kabupaten Aceh Tenggara', 'province_id' =>'1'],
			['id'=>10,'kabupaten_name' => 'Kabupaten Aceh Timur', 'province_id' =>'1'],
			['id'=>11,'kabupaten_name' => 'Kabupaten Aceh Utara', 'province_id' =>'1'],
			['id'=>12,'kabupaten_name' => 'Kabupaten Bener Meriah', 'province_id' =>'1'],
			['id'=>13,'kabupaten_name' => 'Kabupaten Bireuen', 'province_id' =>'1'],
			['id'=>14,'kabupaten_name' => 'Kabupaten Gayo Luwes', 'province_id' =>'1'],
			['id'=>15,'kabupaten_name' => 'Kabupaten Nagan Raya', 'province_id' =>'1'],
			['id'=>16,'kabupaten_name' => 'Kabupaten Pidie', 'province_id' =>'1'],
			['id'=>17,'kabupaten_name' => 'Kabupaten Pidie Jaya', 'province_id' =>'1'],
			['id'=>18,'kabupaten_name' => 'Kabupaten Simeulue', 'province_id' =>'1'],
			['id'=>19,'kabupaten_name' => 'Kota Banda Aceh', 'province_id' =>'1'],
			['id'=>20,'kabupaten_name' => 'Kota Langsa', 'province_id' =>'1'],
			['id'=>21,'kabupaten_name' => 'Kota Lhokseumawe', 'province_id' =>'1'],
			['id'=>22,'kabupaten_name' => 'Kota Sabang', 'province_id' =>'1'],
			['id'=>23,'kabupaten_name' => 'Kota Subulussalam', 'province_id' =>'1'],
			['id'=>24,'kabupaten_name' => 'Kabupaten Asahan', 'province_id' =>'2'],
			['id'=>25,'kabupaten_name' => 'Kabupaten Batubara', 'province_id' =>'2'],
			['id'=>26,'kabupaten_name' => 'Kabupaten Dairi', 'province_id' =>'2'],
			['id'=>27,'kabupaten_name' => 'Kabupaten Deli Serdang', 'province_id' =>'2'],
			['id'=>28,'kabupaten_name' => 'Kabupaten Humbang Hasundutan', 'province_id' =>'2'],
			['id'=>29,'kabupaten_name' => 'Kabupaten Karo', 'province_id' =>'2'],
			['id'=>30,'kabupaten_name' => 'Kabupaten Labuhan Batu', 'province_id' =>'2'],
			['id'=>31,'kabupaten_name' => 'Kabupaten Labuhanbatu Selatan', 'province_id' =>'2'],
			['id'=>32,'kabupaten_name' => 'Kabupaten Labuhanbatu Utara', 'province_id' =>'2'],
			['id'=>33,'kabupaten_name' => 'Kabupaten Langkat', 'province_id' =>'2'],
			['id'=>34,'kabupaten_name' => 'Kabupaten Mandailing Natal', 'province_id' =>'2'],
			['id'=>35,'kabupaten_name' => 'Kabupaten Nias', 'province_id' =>'2'],
			['id'=>36,'kabupaten_name' => 'Kabupaten Nias Barat', 'province_id' =>'2'],
			['id'=>37,'kabupaten_name' => 'Kabupaten Nias Selatan', 'province_id' =>'2'],
			['id'=>38,'kabupaten_name' => 'Kabupaten Nias Utara', 'province_id' =>'2'],
			['id'=>39,'kabupaten_name' => 'Kabupaten Padang Lawas', 'province_id' =>'2'],
			['id'=>40,'kabupaten_name' => 'Kabupaten Padang Lawas Utara', 'province_id' =>'2'],
			['id'=>41,'kabupaten_name' => 'Kabupaten Pakpak Barat', 'province_id' =>'2'],
			['id'=>42,'kabupaten_name' => 'Kabupaten Samosir', 'province_id' =>'2'],
			['id'=>43,'kabupaten_name' => 'Kabupaten Serdang Bedagai', 'province_id' =>'2'],
			['id'=>44,'kabupaten_name' => 'Kabupaten Simalungun', 'province_id' =>'2'],
			['id'=>45,'kabupaten_name' => 'Kabupaten Tapanuli Selatan', 'province_id' =>'2'],
			['id'=>46,'kabupaten_name' => 'Kabupaten Tapanuli Tengah', 'province_id' =>'2'],
			['id'=>47,'kabupaten_name' => 'Kabupaten Tapanuli Utara', 'province_id' =>'2'],
			['id'=>48,'kabupaten_name' => 'Kabupaten Toba Samosir', 'province_id' =>'2'],
			['id'=>49,'kabupaten_name' => 'Kota Binjai', 'province_id' =>'2'],
			['id'=>50,'kabupaten_name' => 'Kota Gunung Sitoli', 'province_id' =>'2'],
			['id'=>51,'kabupaten_name' => 'Kota Medan', 'province_id' =>'2'],
			['id'=>52,'kabupaten_name' => 'Kota Padangsidempuan', 'province_id' =>'2'],
			['id'=>53,'kabupaten_name' => 'Kota Pematang Siantar', 'province_id' =>'2'],
			['id'=>54,'kabupaten_name' => 'Kota Sibolga', 'province_id' =>'2'],
			['id'=>55,'kabupaten_name' => 'Kota Tanjung Balai', 'province_id' =>'2'],
			['id'=>56,'kabupaten_name' => 'Kota Tebing Tinggi', 'province_id' =>'2'],
			['id'=>57,'kabupaten_name' => 'Kabupaten Agam', 'province_id' =>'3'],
			['id'=>58,'kabupaten_name' => 'Kabupaten Dharmas Raya', 'province_id' =>'3'],
			['id'=>59,'kabupaten_name' => 'Kabupaten Kepulauan Mentawai', 'province_id' =>'3'],
			['id'=>60,'kabupaten_name' => 'Kabupaten Lima Puluh Kota', 'province_id' =>'3'],
			['id'=>61,'kabupaten_name' => 'Kabupaten Padang Pariaman', 'province_id' =>'3'],
			['id'=>62,'kabupaten_name' => 'Kabupaten Pasaman', 'province_id' =>'3'],
			['id'=>63,'kabupaten_name' => 'Kabupaten Pasaman Barat', 'province_id' =>'3'],
			['id'=>64,'kabupaten_name' => 'Kabupaten Pesisir Selatan', 'province_id' =>'3'],
			['id'=>65,'kabupaten_name' => 'Kabupaten Sijunjung', 'province_id' =>'3'],
			['id'=>66,'kabupaten_name' => 'Kabupaten Solok', 'province_id' =>'3'],
			['id'=>67,'kabupaten_name' => 'Kabupaten Solok Selatan', 'province_id' =>'3'],
			['id'=>68,'kabupaten_name' => 'Kabupaten Tanah Datar', 'province_id' =>'3'],
			['id'=>69,'kabupaten_name' => 'Kota Bukittinggi', 'province_id' =>'3'],
			['id'=>70,'kabupaten_name' => 'Kota Padang', 'province_id' =>'3'],
			['id'=>71,'kabupaten_name' => 'Kota Padang Panjang', 'province_id' =>'3'],
			['id'=>72,'kabupaten_name' => 'Kota Pariaman', 'province_id' =>'3'],
			['id'=>73,'kabupaten_name' => 'Kota Payakumbuh', 'province_id' =>'3'],
			['id'=>74,'kabupaten_name' => 'Kota Sawah Lunto', 'province_id' =>'3'],
			['id'=>75,'kabupaten_name' => 'Kota Solok', 'province_id' =>'3'],
			['id'=>76,'kabupaten_name' => 'Kabupaten Bengkalis', 'province_id' =>'4'],
			['id'=>77,'kabupaten_name' => 'Kabupaten Indragiri Hilir', 'province_id' =>'4'],
			['id'=>78,'kabupaten_name' => 'Kabupaten Indragiri Hulu', 'province_id' =>'4'],
			['id'=>79,'kabupaten_name' => 'Kabupaten Kampar', 'province_id' =>'4'],
			['id'=>80,'kabupaten_name' => 'Kabupaten Kuantan Singingi', 'province_id' =>'4'],
			['id'=>81,'kabupaten_name' => 'Kabupaten Meranti', 'province_id' =>'4'],
			['id'=>82,'kabupaten_name' => 'Kabupaten Pelalawan', 'province_id' =>'4'],
			['id'=>83,'kabupaten_name' => 'Kabupaten Rokan Hilir', 'province_id' =>'4'],
			['id'=>84,'kabupaten_name' => 'Kabupaten Rokan Hulu', 'province_id' =>'4'],
			['id'=>85,'kabupaten_name' => 'Kabupaten Siak', 'province_id' =>'4'],
			['id'=>86,'kabupaten_name' => 'Kota Dumai', 'province_id' =>'4'],
			['id'=>87,'kabupaten_name' => 'Kota Pekanbaru', 'province_id' =>'4'],
			['id'=>88,'kabupaten_name' => 'Kabupaten Bintan', 'province_id' =>'5'],
			['id'=>89,'kabupaten_name' => 'Kabupaten Karimun', 'province_id' =>'5'],
			['id'=>90,'kabupaten_name' => 'Kabupaten Kepulauan Anambas', 'province_id' =>'5'],
			['id'=>91,'kabupaten_name' => 'Kabupaten Lingga', 'province_id' =>'5'],
			['id'=>92,'kabupaten_name' => 'Kabupaten Natuna', 'province_id' =>'5'],
			['id'=>93,'kabupaten_name' => 'Kota Batam', 'province_id' =>'5'],
			['id'=>94,'kabupaten_name' => 'Kota Tanjung Pinang', 'province_id' =>'5'],
			['id'=>95,'kabupaten_name' => 'Kabupaten Bangka', 'province_id' =>'6'],
			['id'=>96,'kabupaten_name' => 'Kabupaten Bangka Barat', 'province_id' =>'6'],
			['id'=>97,'kabupaten_name' => 'Kabupaten Bangka Selatan', 'province_id' =>'6'],
			['id'=>98,'kabupaten_name' => 'Kabupaten Bangka Tengah', 'province_id' =>'6'],
			['id'=>99,'kabupaten_name' => 'Kabupaten Belitung', 'province_id' =>'6'],
			['id'=>100,'kabupaten_name' => 'Kabupaten Belitung Timur', 'province_id' =>'6'],
			['id'=>101,'kabupaten_name' => 'Kota Pangkal Pinang', 'province_id' =>'6'],
			['id'=>102,'kabupaten_name' => 'Kabupaten Kerinci', 'province_id' =>'7'],
			['id'=>103,'kabupaten_name' => 'Kabupaten Merangin', 'province_id' =>'7'],
			['id'=>104,'kabupaten_name' => 'Kabupaten Sarolangun', 'province_id' =>'7'],
			['id'=>105,'kabupaten_name' => 'Kabupaten Batang Hari', 'province_id' =>'7'],
			['id'=>106,'kabupaten_name' => 'Kabupaten Muaro Jambi', 'province_id' =>'7'],
			['id'=>107,'kabupaten_name' => 'Kabupaten Tanjung Jabung Timur', 'province_id' =>'7'],
			['id'=>108,'kabupaten_name' => 'Kabupaten Tanjung Jabung Barat', 'province_id' =>'7'],
			['id'=>109,'kabupaten_name' => 'Kabupaten Tebo', 'province_id' =>'7'],
			['id'=>110,'kabupaten_name' => 'Kabupaten Bungo', 'province_id' =>'7'],
			['id'=>111,'kabupaten_name' => 'Kota Jambi', 'province_id' =>'7'],
			['id'=>112,'kabupaten_name' => 'Kota Sungai Penuh', 'province_id' =>'7'],
			['id'=>113,'kabupaten_name' => 'Kabupaten Bengkulu Selatan', 'province_id' =>'8'],
			['id'=>114,'kabupaten_name' => 'Kabupaten Bengkulu Tengah', 'province_id' =>'8'],
			['id'=>115,'kabupaten_name' => 'Kabupaten Bengkulu Utara', 'province_id' =>'8'],
			['id'=>116,'kabupaten_name' => 'Kabupaten Kaur', 'province_id' =>'8'],
			['id'=>117,'kabupaten_name' => 'Kabupaten Kepahiang', 'province_id' =>'8'],
			['id'=>118,'kabupaten_name' => 'Kabupaten Lebong', 'province_id' =>'8'],
			['id'=>119,'kabupaten_name' => 'Kabupaten Mukomuko', 'province_id' =>'8'],
			['id'=>120,'kabupaten_name' => 'Kabupaten Rejang Lebong', 'province_id' =>'8'],
			['id'=>121,'kabupaten_name' => 'Kabupaten Seluma', 'province_id' =>'8'],
			['id'=>122,'kabupaten_name' => 'Kota Bengkulu', 'province_id' =>'8'],
			['id'=>123,'kabupaten_name' => 'Kabupaten Banyuasin', 'province_id' =>'9'],
			['id'=>124,'kabupaten_name' => 'Kabupaten Empat Lawang', 'province_id' =>'9'],
			['id'=>125,'kabupaten_name' => 'Kabupaten Lahat', 'province_id' =>'9'],
			['id'=>126,'kabupaten_name' => 'Kabupaten Muara Enim', 'province_id' =>'9'],
			['id'=>127,'kabupaten_name' => 'Kabupaten Musi Banyu Asin', 'province_id' =>'9'],
			['id'=>128,'kabupaten_name' => 'Kabupaten Musi Rawas', 'province_id' =>'9'],
			['id'=>129,'kabupaten_name' => 'Kabupaten Ogan Ilir', 'province_id' =>'9'],
			['id'=>130,'kabupaten_name' => 'Kabupaten Ogan Komering Ilir', 'province_id' =>'9'],
			['id'=>131,'kabupaten_name' => 'Kabupaten Ogan Komering Ulu', 'province_id' =>'9'],
			['id'=>132,'kabupaten_name' => 'Kabupaten Ogan Komering Ulu Se', 'province_id' =>'9'],
			['id'=>133,'kabupaten_name' => 'Kabupaten Ogan Komering Ulu Ti', 'province_id' =>'9'],
			['id'=>134,'kabupaten_name' => 'Kota Lubuklinggau', 'province_id' =>'9'],
			['id'=>135,'kabupaten_name' => 'Kota Pagar Alam', 'province_id' =>'9'],
			['id'=>136,'kabupaten_name' => 'Kota Palembang', 'province_id' =>'9'],
			['id'=>137,'kabupaten_name' => 'Kota Prabumulih', 'province_id' =>'9'],
			['id'=>138,'kabupaten_name' => 'Kabupaten Lampung Barat', 'province_id' =>'10'],
			['id'=>139,'kabupaten_name' => 'Kabupaten Lampung Selatan', 'province_id' =>'10'],
			['id'=>140,'kabupaten_name' => 'Kabupaten Lampung Tengah', 'province_id' =>'10'],
			['id'=>141,'kabupaten_name' => 'Kabupaten Lampung Timur', 'province_id' =>'10'],
			['id'=>142,'kabupaten_name' => 'Kabupaten Lampung Utara', 'province_id' =>'10'],
			['id'=>143,'kabupaten_name' => 'Kabupaten Mesuji', 'province_id' =>'10'],
			['id'=>144,'kabupaten_name' => 'Kabupaten Pesawaran', 'province_id' =>'10'],
			['id'=>145,'kabupaten_name' => 'Kabupaten Pringsewu', 'province_id' =>'10'],
			['id'=>146,'kabupaten_name' => 'Kabupaten Tanggamus', 'province_id' =>'10'],
			['id'=>147,'kabupaten_name' => 'Kabupaten Tulang Bawang', 'province_id' =>'10'],
			['id'=>148,'kabupaten_name' => 'Kabupaten Tulang Bawang Barat', 'province_id' =>'10'],
			['id'=>149,'kabupaten_name' => 'Kabupaten Way Kanan', 'province_id' =>'10'],
			['id'=>150,'kabupaten_name' => 'Kota Bandar Lampung', 'province_id' =>'10'],
			['id'=>151,'kabupaten_name' => 'Kota Metro', 'province_id' =>'10'],
			['id'=>152,'kabupaten_name' => 'Kabupaten Lebak', 'province_id' =>'11'],
			['id'=>153,'kabupaten_name' => 'Kabupaten Pandeglang', 'province_id' =>'11'],
			['id'=>154,'kabupaten_name' => 'Kabupaten Serang', 'province_id' =>'11'],
			['id'=>155,'kabupaten_name' => 'Kabupaten Tangerang', 'province_id' =>'11'],
			['id'=>156,'kabupaten_name' => 'Kota Cilegon', 'province_id' =>'11'],
			['id'=>157,'kabupaten_name' => 'Kota Serang', 'province_id' =>'11'],
			['id'=>158,'kabupaten_name' => 'Kota Tangerang', 'province_id' =>'11'],
			['id'=>159,'kabupaten_name' => 'Kota Tangerang Selatan', 'province_id' =>'11'],
			['id'=>160,'kabupaten_name' => 'Kabupaten Adm. Kepulauan Serib', 'province_id' =>'12'],
			['id'=>161,'kabupaten_name' => 'Kota Jakarta Barat', 'province_id' =>'12'],
			['id'=>162,'kabupaten_name' => 'Kota Jakarta Pusat', 'province_id' =>'12'],
			['id'=>163,'kabupaten_name' => 'Kota Jakarta Selatan', 'province_id' =>'12'],
			['id'=>164,'kabupaten_name' => 'Kota Jakarta Timur', 'province_id' =>'12'],
			['id'=>165,'kabupaten_name' => 'Kota Jakarta Utara', 'province_id' =>'12'],
			['id'=>166,'kabupaten_name' => 'Kabupaten Bandung', 'province_id' =>'13'],
			['id'=>167,'kabupaten_name' => 'Kabupaten Bandung Barat', 'province_id' =>'13'],
			['id'=>168,'kabupaten_name' => 'Kabupaten Bekasi', 'province_id' =>'13'],
			['id'=>169,'kabupaten_name' => 'Kabupaten Bogor', 'province_id' =>'13'],
			['id'=>170,'kabupaten_name' => 'Kabupaten Ciamis', 'province_id' =>'13'],
			['id'=>171,'kabupaten_name' => 'Kabupaten Cianjur', 'province_id' =>'13'],
			['id'=>172,'kabupaten_name' => 'Kabupaten Cirebon', 'province_id' =>'13'],
			['id'=>173,'kabupaten_name' => 'Kabupaten Garut', 'province_id' =>'13'],
			['id'=>174,'kabupaten_name' => 'Kabupaten Indramayu', 'province_id' =>'13'],
			['id'=>175,'kabupaten_name' => 'Kabupaten Karawang', 'province_id' =>'13'],
			['id'=>176,'kabupaten_name' => 'Kabupaten Kuningan', 'province_id' =>'13'],
			['id'=>177,'kabupaten_name' => 'Kabupaten Majalengka', 'province_id' =>'13'],
			['id'=>178,'kabupaten_name' => 'Kabupaten Purwakarta', 'province_id' =>'13'],
			['id'=>179,'kabupaten_name' => 'Kabupaten Subang', 'province_id' =>'13'],
			['id'=>180,'kabupaten_name' => 'Kabupaten Sukabumi', 'province_id' =>'13'],
			['id'=>181,'kabupaten_name' => 'Kabupaten Sumedang', 'province_id' =>'13'],
			['id'=>182,'kabupaten_name' => 'Kabupaten Tasikmalaya', 'province_id' =>'13'],
			['id'=>183,'kabupaten_name' => 'Kota Bandung', 'province_id' =>'13'],
			['id'=>184,'kabupaten_name' => 'Kota Banjar', 'province_id' =>'13'],
			['id'=>185,'kabupaten_name' => 'Kota Bekasi', 'province_id' =>'13'],
			['id'=>186,'kabupaten_name' => 'Kota Bogor', 'province_id' =>'13'],
			['id'=>187,'kabupaten_name' => 'Kota Cimahi', 'province_id' =>'13'],
			['id'=>188,'kabupaten_name' => 'Kota Cirebon', 'province_id' =>'13'],
			['id'=>189,'kabupaten_name' => 'Kota Depok', 'province_id' =>'13'],
			['id'=>190,'kabupaten_name' => 'Kota Sukabumi', 'province_id' =>'13'],
			['id'=>191,'kabupaten_name' => 'Kota Tasikmalaya', 'province_id' =>'13'],
			['id'=>192,'kabupaten_name' => 'Kabupaten Banjarnegara', 'province_id' =>'14'],
			['id'=>193,'kabupaten_name' => 'Kabupaten Banyumas', 'province_id' =>'14'],
			['id'=>194,'kabupaten_name' => 'Kabupaten Batang', 'province_id' =>'14'],
			['id'=>195,'kabupaten_name' => 'Kabupaten Blora', 'province_id' =>'14'],
			['id'=>196,'kabupaten_name' => 'Kabupaten Boyolali', 'province_id' =>'14'],
			['id'=>197,'kabupaten_name' => 'Kabupaten Brebes', 'province_id' =>'14'],
			['id'=>198,'kabupaten_name' => 'Kabupaten Cilacap', 'province_id' =>'14'],
			['id'=>199,'kabupaten_name' => 'Kabupaten Demak', 'province_id' =>'14'],
			['id'=>200,'kabupaten_name' => 'Kabupaten Grobogan', 'province_id' =>'14'],
			['id'=>201,'kabupaten_name' => 'Kabupaten Jepara', 'province_id' =>'14'],
			['id'=>202,'kabupaten_name' => 'Kabupaten Karanganyar', 'province_id' =>'14'],
			['id'=>203,'kabupaten_name' => 'Kabupaten Kebumen', 'province_id' =>'14'],
			['id'=>204,'kabupaten_name' => 'Kabupaten Kendal', 'province_id' =>'14'],
			['id'=>205,'kabupaten_name' => 'Kabupaten Klaten', 'province_id' =>'14'],
			['id'=>206,'kabupaten_name' => 'Kabupaten Kota Tegal', 'province_id' =>'14'],
			['id'=>207,'kabupaten_name' => 'Kabupaten Kudus', 'province_id' =>'14'],
			['id'=>208,'kabupaten_name' => 'Kabupaten Magelang', 'province_id' =>'14'],
			['id'=>209,'kabupaten_name' => 'Kabupaten Pati', 'province_id' =>'14'],
			['id'=>210,'kabupaten_name' => 'Kabupaten Pekalongan', 'province_id' =>'14'],
			['id'=>211,'kabupaten_name' => 'Kabupaten Pemalang', 'province_id' =>'14'],
			['id'=>212,'kabupaten_name' => 'Kabupaten Purbalingga', 'province_id' =>'14'],
			['id'=>213,'kabupaten_name' => 'Kabupaten Purworejo', 'province_id' =>'14'],
			['id'=>214,'kabupaten_name' => 'Kabupaten Rembang', 'province_id' =>'14'],
			['id'=>215,'kabupaten_name' => 'Kabupaten Semarang', 'province_id' =>'14'],
			['id'=>216,'kabupaten_name' => 'Kabupaten Sragen', 'province_id' =>'14'],
			['id'=>217,'kabupaten_name' => 'Kabupaten Sukoharjo', 'province_id' =>'14'],
			['id'=>218,'kabupaten_name' => 'Kabupaten Temanggung', 'province_id' =>'14'],
			['id'=>219,'kabupaten_name' => 'Kabupaten Wonogiri', 'province_id' =>'14'],
			['id'=>220,'kabupaten_name' => 'Kabupaten Wonosobo', 'province_id' =>'14'],
			['id'=>221,'kabupaten_name' => 'Kota Magelang', 'province_id' =>'14'],
			['id'=>222,'kabupaten_name' => 'Kota Pekalongan', 'province_id' =>'14'],
			['id'=>223,'kabupaten_name' => 'Kota Salatiga', 'province_id' =>'14'],
			['id'=>224,'kabupaten_name' => 'Kota Semarang', 'province_id' =>'14'],
			['id'=>225,'kabupaten_name' => 'Kota Surakarta', 'province_id' =>'14'],
			['id'=>226,'kabupaten_name' => 'Kota Tegal', 'province_id' =>'14'],
			['id'=>227,'kabupaten_name' => 'Kabupaten Bantul', 'province_id' =>'15'],
			['id'=>228,'kabupaten_name' => 'Kabupaten Gunung Kidul', 'province_id' =>'15'],
			['id'=>229,'kabupaten_name' => 'Kabupaten Kulon Progo', 'province_id' =>'15'],
			['id'=>230,'kabupaten_name' => 'Kabupaten Sleman', 'province_id' =>'15'],
			['id'=>231,'kabupaten_name' => 'Kota Yogyakarta', 'province_id' =>'15'],
			['id'=>232,'kabupaten_name' => 'Kabupaten Bangkalan', 'province_id' =>'16'],
			['id'=>233,'kabupaten_name' => 'Kabupaten Banyuwangi', 'province_id' =>'16'],
			['id'=>234,'kabupaten_name' => 'Kabupaten Blitar', 'province_id' =>'16'],
			['id'=>235,'kabupaten_name' => 'Kabupaten Bojonegoro', 'province_id' =>'16'],
			['id'=>236,'kabupaten_name' => 'Kabupaten Bondowoso', 'province_id' =>'16'],
			['id'=>237,'kabupaten_name' => 'Kabupaten Gresik', 'province_id' =>'16'],
			['id'=>238,'kabupaten_name' => 'Kabupaten Jember', 'province_id' =>'16'],
			['id'=>239,'kabupaten_name' => 'Kabupaten Jombang', 'province_id' =>'16'],
			['id'=>240,'kabupaten_name' => 'Kabupaten Kediri', 'province_id' =>'16'],
			['id'=>241,'kabupaten_name' => 'Kabupaten Lamongan', 'province_id' =>'16'],
			['id'=>242,'kabupaten_name' => 'Kabupaten Lumajang', 'province_id' =>'16'],
			['id'=>243,'kabupaten_name' => 'Kabupaten Madiun', 'province_id' =>'16'],
			['id'=>244,'kabupaten_name' => 'Kabupaten Magetan', 'province_id' =>'16'],
			['id'=>245,'kabupaten_name' => 'Kabupaten Malang', 'province_id' =>'16'],
			['id'=>246,'kabupaten_name' => 'Kabupaten Mojokerto', 'province_id' =>'16'],
			['id'=>247,'kabupaten_name' => 'Kabupaten Nganjuk', 'province_id' =>'16'],
			['id'=>248,'kabupaten_name' => 'Kabupaten Ngawi', 'province_id' =>'16'],
			['id'=>249,'kabupaten_name' => 'Kabupaten Pacitan', 'province_id' =>'16'],
			['id'=>250,'kabupaten_name' => 'Kabupaten Pamekasan', 'province_id' =>'16'],
			['id'=>251,'kabupaten_name' => 'Kabupaten Pasuruan', 'province_id' =>'16'],
			['id'=>252,'kabupaten_name' => 'Kabupaten Ponorogo', 'province_id' =>'16'],
			['id'=>253,'kabupaten_name' => 'Kabupaten Probolinggo', 'province_id' =>'16'],
			['id'=>254,'kabupaten_name' => 'Kabupaten Sampang', 'province_id' =>'16'],
			['id'=>255,'kabupaten_name' => 'Kabupaten Sidoarjo', 'province_id' =>'16'],
			['id'=>256,'kabupaten_name' => 'Kabupaten Situbondo', 'province_id' =>'16'],
			['id'=>257,'kabupaten_name' => 'Kabupaten Sumenep', 'province_id' =>'16'],
			['id'=>258,'kabupaten_name' => 'Kabupaten Trenggalek', 'province_id' =>'16'],
			['id'=>259,'kabupaten_name' => 'Kabupaten Tuban', 'province_id' =>'16'],
			['id'=>260,'kabupaten_name' => 'Kabupaten Tulungagung', 'province_id' =>'16'],
			['id'=>261,'kabupaten_name' => 'Kota Batu', 'province_id' =>'16'],
			['id'=>262,'kabupaten_name' => 'Kota Blitar', 'province_id' =>'16'],
			['id'=>263,'kabupaten_name' => 'Kota Kediri', 'province_id' =>'16'],
			['id'=>264,'kabupaten_name' => 'Kota Madiun', 'province_id' =>'16'],
			['id'=>265,'kabupaten_name' => 'Kota Malang', 'province_id' =>'16'],
			['id'=>266,'kabupaten_name' => 'Kota Mojokerto', 'province_id' =>'16'],
			['id'=>267,'kabupaten_name' => 'Kota Pasuruan', 'province_id' =>'16'],
			['id'=>268,'kabupaten_name' => 'Kota Probolinggo', 'province_id' =>'16'],
			['id'=>269,'kabupaten_name' => 'Kota Surabaya', 'province_id' =>'16'],
			['id'=>270,'kabupaten_name' => 'Kabupaten Badung', 'province_id' =>'17'],
			['id'=>271,'kabupaten_name' => 'Kabupaten Bangli', 'province_id' =>'17'],
			['id'=>272,'kabupaten_name' => 'Kabupaten Buleleng', 'province_id' =>'17'],
			['id'=>273,'kabupaten_name' => 'Kabupaten Gianyar', 'province_id' =>'17'],
			['id'=>274,'kabupaten_name' => 'Kabupaten Jembrana', 'province_id' =>'17'],
			['id'=>275,'kabupaten_name' => 'Kabupaten Karang Asem', 'province_id' =>'17'],
			['id'=>276,'kabupaten_name' => 'Kabupaten Klungkung', 'province_id' =>'17'],
			['id'=>277,'kabupaten_name' => 'Kabupaten Tabanan', 'province_id' =>'17'],
			['id'=>278,'kabupaten_name' => 'Kota Denpasar', 'province_id' =>'17'],
			['id'=>279,'kabupaten_name' => 'Kabupaten Bima', 'province_id' =>'18'],
			['id'=>280,'kabupaten_name' => 'Kabupaten Dompu', 'province_id' =>'18'],
			['id'=>281,'kabupaten_name' => 'Kabupaten Lombok Barat', 'province_id' =>'18'],
			['id'=>282,'kabupaten_name' => 'Kabupaten Lombok Tengah', 'province_id' =>'18'],
			['id'=>283,'kabupaten_name' => 'Kabupaten Lombok Timur', 'province_id' =>'18'],
			['id'=>284,'kabupaten_name' => 'Kabupaten Lombok Utara', 'province_id' =>'18'],
			['id'=>285,'kabupaten_name' => 'Kabupaten Sumbawa', 'province_id' =>'18'],
			['id'=>286,'kabupaten_name' => 'Kabupaten Sumbawa Barat', 'province_id' =>'18'],
			['id'=>287,'kabupaten_name' => 'Kota Bima', 'province_id' =>'18'],
			['id'=>288,'kabupaten_name' => 'Kota Mataram', 'province_id' =>'18'],
			['id'=>289,'kabupaten_name' => 'Kabupaten Alor', 'province_id' =>'19'],
			['id'=>290,'kabupaten_name' => 'Kabupaten Belu', 'province_id' =>'19'],
			['id'=>291,'kabupaten_name' => 'Kabupaten Ende', 'province_id' =>'19'],
			['id'=>292,'kabupaten_name' => 'Kabupaten Flores Timur', 'province_id' =>'19'],
			['id'=>293,'kabupaten_name' => 'Kabupaten Kupang', 'province_id' =>'19'],
			['id'=>294,'kabupaten_name' => 'Kabupaten Lembata', 'province_id' =>'19'],
			['id'=>295,'kabupaten_name' => 'Kabupaten Manggarai', 'province_id' =>'19'],
			['id'=>296,'kabupaten_name' => 'Kabupaten Manggarai Barat', 'province_id' =>'19'],
			['id'=>297,'kabupaten_name' => 'Kabupaten Manggarai Timur', 'province_id' =>'19'],
			['id'=>298,'kabupaten_name' => 'Kabupaten Nagekeo', 'province_id' =>'19'],
			['id'=>299,'kabupaten_name' => 'Kabupaten Ngada', 'province_id' =>'19'],
			['id'=>300,'kabupaten_name' => 'Kabupaten Rote Ndao', 'province_id' =>'19'],
			['id'=>301,'kabupaten_name' => 'Kabupaten Sabu Raijua', 'province_id' =>'19'],
			['id'=>302,'kabupaten_name' => 'Kabupaten Sikka', 'province_id' =>'19'],
			['id'=>303,'kabupaten_name' => 'Kabupaten Sumba Barat', 'province_id' =>'19'],
			['id'=>304,'kabupaten_name' => 'Kabupaten Sumba Barat Daya', 'province_id' =>'19'],
			['id'=>305,'kabupaten_name' => 'Kabupaten Sumba Tengah', 'province_id' =>'19'],
			['id'=>306,'kabupaten_name' => 'Kabupaten Sumba Timur', 'province_id' =>'19'],
			['id'=>307,'kabupaten_name' => 'Kabupaten Timor Tengah Selatan', 'province_id' =>'19'],
			['id'=>308,'kabupaten_name' => 'Kabupaten Timor Tengah Utara', 'province_id' =>'19'],
			['id'=>309,'kabupaten_name' => 'Kota Kupang', 'province_id' =>'19'],
			['id'=>310,'kabupaten_name' => 'Kabupaten Bengkayang', 'province_id' =>'20'],
			['id'=>311,'kabupaten_name' => 'Kabupaten Kapuas Hulu', 'province_id' =>'20'],
			['id'=>312,'kabupaten_name' => 'Kabupaten Kayong Utara', 'province_id' =>'20'],
			['id'=>313,'kabupaten_name' => 'Kabupaten Ketapang', 'province_id' =>'20'],
			['id'=>314,'kabupaten_name' => 'Kabupaten Kubu Raya', 'province_id' =>'20'],
			['id'=>315,'kabupaten_name' => 'Kabupaten Landak', 'province_id' =>'20'],
			['id'=>316,'kabupaten_name' => 'Kabupaten Melawi', 'province_id' =>'20'],
			['id'=>317,'kabupaten_name' => 'Kabupaten Pontianak', 'province_id' =>'20'],
			['id'=>318,'kabupaten_name' => 'Kabupaten Sambas', 'province_id' =>'20'],
			['id'=>319,'kabupaten_name' => 'Kabupaten Sanggau', 'province_id' =>'20'],
			['id'=>320,'kabupaten_name' => 'Kabupaten Sekadau', 'province_id' =>'20'],
			['id'=>321,'kabupaten_name' => 'Kabupaten Sintang', 'province_id' =>'20'],
			['id'=>322,'kabupaten_name' => 'Kota Pontianak', 'province_id' =>'20'],
			['id'=>323,'kabupaten_name' => 'Kota Singkawang', 'province_id' =>'20'],
			['id'=>324,'kabupaten_name' => 'Kabupaten Barito Selatan', 'province_id' =>'21'],
			['id'=>325,'kabupaten_name' => 'Kabupaten Barito Timur', 'province_id' =>'21'],
			['id'=>326,'kabupaten_name' => 'Kabupaten Barito Utara', 'province_id' =>'21'],
			['id'=>327,'kabupaten_name' => 'Kabupaten Gunung Mas', 'province_id' =>'21'],
			['id'=>328,'kabupaten_name' => 'Kabupaten Kapuas', 'province_id' =>'21'],
			['id'=>329,'kabupaten_name' => 'Kabupaten Katingan', 'province_id' =>'21'],
			['id'=>330,'kabupaten_name' => 'Kabupaten Kotawaringin Barat', 'province_id' =>'21'],
			['id'=>331,'kabupaten_name' => 'Kabupaten Kotawaringin Timur', 'province_id' =>'21'],
			['id'=>332,'kabupaten_name' => 'Kabupaten Lamandau', 'province_id' =>'21'],
			['id'=>333,'kabupaten_name' => 'Kabupaten Murung Raya', 'province_id' =>'21'],
			['id'=>334,'kabupaten_name' => 'Kabupaten Pulang Pisau', 'province_id' =>'21'],
			['id'=>335,'kabupaten_name' => 'Kabupaten Seruyan', 'province_id' =>'21'],
			['id'=>336,'kabupaten_name' => 'Kabupaten Sukamara', 'province_id' =>'21'],
			['id'=>337,'kabupaten_name' => 'Kota Palangkaraya', 'province_id' =>'21'],
			['id'=>338,'kabupaten_name' => 'Kabupaten Balangan', 'province_id' =>'22'],
			['id'=>339,'kabupaten_name' => 'Kabupaten Banjar', 'province_id' =>'22'],
			['id'=>340,'kabupaten_name' => 'Kabupaten Barito Kuala', 'province_id' =>'22'],
			['id'=>341,'kabupaten_name' => 'Kabupaten Hulu Sungai Selatan', 'province_id' =>'22'],
			['id'=>342,'kabupaten_name' => 'Kabupaten Hulu Sungai Tengah', 'province_id' =>'22'],
			['id'=>343,'kabupaten_name' => 'Kabupaten Hulu Sungai Utara', 'province_id' =>'22'],
			['id'=>344,'kabupaten_name' => 'Kabupaten Kota Baru', 'province_id' =>'22'],
			['id'=>345,'kabupaten_name' => 'Kabupaten Tabalong', 'province_id' =>'22'],
			['id'=>346,'kabupaten_name' => 'Kabupaten Tanah Bumbu', 'province_id' =>'22'],
			['id'=>347,'kabupaten_name' => 'Kabupaten Tanah Laut', 'province_id' =>'22'],
			['id'=>348,'kabupaten_name' => 'Kabupaten Tapin', 'province_id' =>'22'],
			['id'=>349,'kabupaten_name' => 'Kota Banjar Baru', 'province_id' =>'22'],
			['id'=>350,'kabupaten_name' => 'Kota Banjarmasin', 'province_id' =>'22'],
			['id'=>351,'kabupaten_name' => 'Kabupaten Berau', 'province_id' =>'23'],
			['id'=>352,'kabupaten_name' => 'Kabupaten Bulongan', 'province_id' =>'23'],
			['id'=>353,'kabupaten_name' => 'Kabupaten Kutai Barat', 'province_id' =>'23'],
			['id'=>354,'kabupaten_name' => 'Kabupaten Kutai Kartanegara', 'province_id' =>'23'],
			['id'=>355,'kabupaten_name' => 'Kabupaten Kutai Timur', 'province_id' =>'23'],
			['id'=>356,'kabupaten_name' => 'Kabupaten Malinau', 'province_id' =>'23'],
			['id'=>357,'kabupaten_name' => 'Kabupaten Nunukan', 'province_id' =>'23'],
			['id'=>358,'kabupaten_name' => 'Kabupaten Paser', 'province_id' =>'23'],
			['id'=>359,'kabupaten_name' => 'Kabupaten Penajam Paser Utara', 'province_id' =>'23'],
			['id'=>360,'kabupaten_name' => 'Kabupaten Tana Tidung', 'province_id' =>'23'],
			['id'=>361,'kabupaten_name' => 'Kota Balikpapan', 'province_id' =>'23'],
			['id'=>362,'kabupaten_name' => 'Kota Bontang', 'province_id' =>'23'],
			['id'=>363,'kabupaten_name' => 'Kota Samarinda', 'province_id' =>'23'],
			['id'=>364,'kabupaten_name' => 'Kota Tarakan', 'province_id' =>'23'],
			['id'=>365,'kabupaten_name' => 'Kabupaten Boalemo', 'province_id' =>'24'],
			['id'=>366,'kabupaten_name' => 'Kabupaten Bone Bolango', 'province_id' =>'24'],
			['id'=>367,'kabupaten_name' => 'Kabupaten Gorontalo', 'province_id' =>'24'],
			['id'=>368,'kabupaten_name' => 'Kabupaten Gorontalo Utara', 'province_id' =>'24'],
			['id'=>369,'kabupaten_name' => 'Kabupaten Pohuwato', 'province_id' =>'24'],
			['id'=>370,'kabupaten_name' => 'Kota Gorontalo', 'province_id' =>'24'],
			['id'=>371,'kabupaten_name' => 'Kabupaten Bantaeng', 'province_id' =>'25'],
			['id'=>372,'kabupaten_name' => 'Kabupaten Barru', 'province_id' =>'25'],
			['id'=>373,'kabupaten_name' => 'Kabupaten Bone', 'province_id' =>'25'],
			['id'=>374,'kabupaten_name' => 'Kabupaten Bulukumba', 'province_id' =>'25'],
			['id'=>375,'kabupaten_name' => 'Kabupaten Enrekang', 'province_id' =>'25'],
			['id'=>376,'kabupaten_name' => 'Kabupaten Gowa', 'province_id' =>'25'],
			['id'=>377,'kabupaten_name' => 'Kabupaten Jeneponto', 'province_id' =>'25'],
			['id'=>378,'kabupaten_name' => 'Kabupaten Luwu', 'province_id' =>'25'],
			['id'=>379,'kabupaten_name' => 'Kabupaten Luwu Timur', 'province_id' =>'25'],
			['id'=>380,'kabupaten_name' => 'Kabupaten Luwu Utara', 'province_id' =>'25'],
			['id'=>381,'kabupaten_name' => 'Kabupaten Maros', 'province_id' =>'25'],
			['id'=>382,'kabupaten_name' => 'Kabupaten Pangkajene Kepulauan', 'province_id' =>'25'],
			['id'=>383,'kabupaten_name' => 'Kabupaten Pinrang', 'province_id' =>'25'],
			['id'=>384,'kabupaten_name' => 'Kabupaten Selayar', 'province_id' =>'25'],
			['id'=>385,'kabupaten_name' => 'Kabupaten Sidenreng Rappang', 'province_id' =>'25'],
			['id'=>386,'kabupaten_name' => 'Kabupaten Sinjai', 'province_id' =>'25'],
			['id'=>387,'kabupaten_name' => 'Kabupaten Soppeng', 'province_id' =>'25'],
			['id'=>388,'kabupaten_name' => 'Kabupaten Takalar', 'province_id' =>'25'],
			['id'=>389,'kabupaten_name' => 'Kabupaten Tana Toraja', 'province_id' =>'25'],
			['id'=>390,'kabupaten_name' => 'Kabupaten Toraja Utara', 'province_id' =>'25'],
			['id'=>391,'kabupaten_name' => 'Kabupaten Wajo', 'province_id' =>'25'],
			['id'=>392,'kabupaten_name' => 'Kota Makassar', 'province_id' =>'25'],
			['id'=>393,'kabupaten_name' => 'Kota Palopo', 'province_id' =>'25'],
			['id'=>394,'kabupaten_name' => 'Kota Pare-pare', 'province_id' =>'25'],
			['id'=>395,'kabupaten_name' => 'Kabupaten Bombana', 'province_id' =>'26'],
			['id'=>396,'kabupaten_name' => 'Kabupaten Buton', 'province_id' =>'26'],
			['id'=>397,'kabupaten_name' => 'Kabupaten Buton Utara', 'province_id' =>'26'],
			['id'=>398,'kabupaten_name' => 'Kabupaten Kolaka', 'province_id' =>'26'],
			['id'=>399,'kabupaten_name' => 'Kabupaten Kolaka Utara', 'province_id' =>'26'],
			['id'=>400,'kabupaten_name' => 'Kabupaten Konawe', 'province_id' =>'26'],
			['id'=>401,'kabupaten_name' => 'Kabupaten Konawe Selatan', 'province_id' =>'26'],
			['id'=>402,'kabupaten_name' => 'Kabupaten Konawe Utara', 'province_id' =>'26'],
			['id'=>403,'kabupaten_name' => 'Kabupaten Muna', 'province_id' =>'26'],
			['id'=>404,'kabupaten_name' => 'Kabupaten Wakatobi', 'province_id' =>'26'],
			['id'=>405,'kabupaten_name' => 'Kota Bau-bau', 'province_id' =>'26'],
			['id'=>406,'kabupaten_name' => 'Kota Kendari', 'province_id' =>'26'],
			['id'=>407,'kabupaten_name' => 'Kabupaten Banggai', 'province_id' =>'27'],
			['id'=>408,'kabupaten_name' => 'Kabupaten Banggai Kepulauan', 'province_id' =>'27'],
			['id'=>409,'kabupaten_name' => 'Kabupaten Buol', 'province_id' =>'27'],
			['id'=>410,'kabupaten_name' => 'Kabupaten Donggala', 'province_id' =>'27'],
			['id'=>411,'kabupaten_name' => 'Kabupaten Morowali', 'province_id' =>'27'],
			['id'=>412,'kabupaten_name' => 'Kabupaten Parigi Moutong', 'province_id' =>'27'],
			['id'=>413,'kabupaten_name' => 'Kabupaten Poso', 'province_id' =>'27'],
			['id'=>414,'kabupaten_name' => 'Kabupaten Sigi', 'province_id' =>'27'],
			['id'=>415,'kabupaten_name' => 'Kabupaten Tojo Una-Una', 'province_id' =>'27'],
			['id'=>416,'kabupaten_name' => 'Kabupaten Toli Toli', 'province_id' =>'27'],
			['id'=>417,'kabupaten_name' => 'Kota Palu', 'province_id' =>'27'],
			['id'=>418,'kabupaten_name' => 'Kabupaten Bolaang Mangondow', 'province_id' =>'28'],
			['id'=>419,'kabupaten_name' => 'Kabupaten Bolaang Mangondow Se', 'province_id' =>'28'],
			['id'=>420,'kabupaten_name' => 'Kabupaten Bolaang Mangondow Ti', 'province_id' =>'28'],
			['id'=>421,'kabupaten_name' => 'Kabupaten Bolaang Mangondow Ut', 'province_id' =>'28'],
			['id'=>422,'kabupaten_name' => 'Kabupaten Kepulauan Sangihe', 'province_id' =>'28'],
			['id'=>423,'kabupaten_name' => 'Kabupaten Kepulauan Siau Tagul', 'province_id' =>'28'],
			['id'=>424,'kabupaten_name' => 'Kabupaten Kepulauan Talaud', 'province_id' =>'28'],
			['id'=>425,'kabupaten_name' => 'Kabupaten Minahasa', 'province_id' =>'28'],
			['id'=>426,'kabupaten_name' => 'Kabupaten Minahasa Selatan', 'province_id' =>'28'],
			['id'=>427,'kabupaten_name' => 'Kabupaten Minahasa Tenggara', 'province_id' =>'28'],
			['id'=>428,'kabupaten_name' => 'Kabupaten Minahasa Utara', 'province_id' =>'28'],
			['id'=>429,'kabupaten_name' => 'Kota Bitung', 'province_id' =>'28'],
			['id'=>430,'kabupaten_name' => 'Kota Kotamobagu', 'province_id' =>'28'],
			['id'=>431,'kabupaten_name' => 'Kota Manado', 'province_id' =>'28'],
			['id'=>432,'kabupaten_name' => 'Kota Tomohon', 'province_id' =>'28'],
			['id'=>433,'kabupaten_name' => 'Kabupaten Majene', 'province_id' =>'29'],
			['id'=>434,'kabupaten_name' => 'Kabupaten Mamasa', 'province_id' =>'29'],
			['id'=>435,'kabupaten_name' => 'Kabupaten Mamuju', 'province_id' =>'29'],
			['id'=>436,'kabupaten_name' => 'Kabupaten Mamuju Utara', 'province_id' =>'29'],
			['id'=>437,'kabupaten_name' => 'Kabupaten Polewali Mandar', 'province_id' =>'29'],
			['id'=>438,'kabupaten_name' => 'Kabupaten Buru', 'province_id' =>'30'],
			['id'=>439,'kabupaten_name' => 'Kabupaten Buru Selatan', 'province_id' =>'30'],
			['id'=>440,'kabupaten_name' => 'Kabupaten Kepulauan Aru', 'province_id' =>'30'],
			['id'=>441,'kabupaten_name' => 'Kabupaten Maluku Barat Daya', 'province_id' =>'30'],
			['id'=>442,'kabupaten_name' => 'Kabupaten Maluku Tengah', 'province_id' =>'30'],
			['id'=>443,'kabupaten_name' => 'Kabupaten Maluku Tenggara', 'province_id' =>'30'],
			['id'=>444,'kabupaten_name' => 'Kabupaten Maluku Tenggara Bara', 'province_id' =>'30'],
			['id'=>445,'kabupaten_name' => 'Kabupaten Seram Bagian Barat', 'province_id' =>'30'],
			['id'=>446,'kabupaten_name' => 'Kabupaten Seram Bagian Timur', 'province_id' =>'30'],
			['id'=>447,'kabupaten_name' => 'Kota Ambon', 'province_id' =>'30'],
			['id'=>448,'kabupaten_name' => 'Kota Tual', 'province_id' =>'30'],
			['id'=>449,'kabupaten_name' => 'Kabupaten Halmahera Barat', 'province_id' =>'31'],
			['id'=>450,'kabupaten_name' => 'Kabupaten Halmahera Selatan', 'province_id' =>'31'],
			['id'=>451,'kabupaten_name' => 'Kabupaten Halmahera Tengah', 'province_id' =>'31'],
			['id'=>452,'kabupaten_name' => 'Kabupaten Halmahera Timur', 'province_id' =>'31'],
			['id'=>453,'kabupaten_name' => 'Kabupaten Halmahera Utara', 'province_id' =>'31'],
			['id'=>454,'kabupaten_name' => 'Kabupaten Kepulauan Sula', 'province_id' =>'31'],
			['id'=>455,'kabupaten_name' => 'Kabupaten Pulau Morotai', 'province_id' =>'31'],
			['id'=>456,'kabupaten_name' => 'Kota Ternate', 'province_id' =>'31'],
			['id'=>457,'kabupaten_name' => 'Kota Tidore Kepulauan', 'province_id' =>'31'],
			['id'=>458,'kabupaten_name' => 'Kabupaten Fakfak', 'province_id' =>'32'],
			['id'=>459,'kabupaten_name' => 'Kabupaten Kaimana', 'province_id' =>'32'],
			['id'=>460,'kabupaten_name' => 'Kabupaten Manokwari', 'province_id' =>'32'],
			['id'=>461,'kabupaten_name' => 'Kabupaten Maybrat', 'province_id' =>'32'],
			['id'=>462,'kabupaten_name' => 'Kabupaten Raja Ampat', 'province_id' =>'32'],
			['id'=>463,'kabupaten_name' => 'Kabupaten Sorong', 'province_id' =>'32'],
			['id'=>464,'kabupaten_name' => 'Kabupaten Sorong Selatan', 'province_id' =>'32'],
			['id'=>465,'kabupaten_name' => 'Kabupaten Tambrauw', 'province_id' =>'32'],
			['id'=>466,'kabupaten_name' => 'Kabupaten Teluk Bintuni', 'province_id' =>'32'],
			['id'=>467,'kabupaten_name' => 'Kabupaten Teluk Wondama', 'province_id' =>'32'],
			['id'=>468,'kabupaten_name' => 'Kota Sorong', 'province_id' =>'32'],
			['id'=>469,'kabupaten_name' => 'Kabupaten Merauke', 'province_id' =>'33'],
			['id'=>470,'kabupaten_name' => 'Kabupaten Jayawijaya', 'province_id' =>'33'],
			['id'=>471,'kabupaten_name' => 'Kabupaten Nabire', 'province_id' =>'33'],
			['id'=>472,'kabupaten_name' => 'Kabupaten Kepulauan Yapen', 'province_id' =>'33'],
			['id'=>473,'kabupaten_name' => 'Kabupaten Biak Numfor', 'province_id' =>'33'],
			['id'=>474,'kabupaten_name' => 'Kabupaten Paniai', 'province_id' =>'33'],
			['id'=>475,'kabupaten_name' => 'Kabupaten Puncak Jaya', 'province_id' =>'33'],
			['id'=>476,'kabupaten_name' => 'Kabupaten Mimika', 'province_id' =>'33'],
			['id'=>477,'kabupaten_name' => 'Kabupaten Boven Digoel', 'province_id' =>'33'],
			['id'=>478,'kabupaten_name' => 'Kabupaten Mappi', 'province_id' =>'33'],
			['id'=>479,'kabupaten_name' => 'Kabupaten Asmat', 'province_id' =>'33'],
			['id'=>480,'kabupaten_name' => 'Kabupaten Yahukimo', 'province_id' =>'33'],
			['id'=>481,'kabupaten_name' => 'Kabupaten Pegunungan Bintang', 'province_id' =>'33'],
			['id'=>482,'kabupaten_name' => 'Kabupaten Tolikara', 'province_id' =>'33'],
			['id'=>483,'kabupaten_name' => 'Kabupaten Sarmi', 'province_id' =>'33'],
			['id'=>484,'kabupaten_name' => 'Kabupaten Keerom', 'province_id' =>'33'],
			['id'=>485,'kabupaten_name' => 'Kabupaten Waropen', 'province_id' =>'33'],
			['id'=>486,'kabupaten_name' => 'Kabupaten Jayapura', 'province_id' =>'33'],
			['id'=>487,'kabupaten_name' => 'Kabupaten Deiyai', 'province_id' =>'33'],
			['id'=>488,'kabupaten_name' => 'Kabupaten Dogiyai', 'province_id' =>'33'],
			['id'=>489,'kabupaten_name' => 'Kabupaten Intan Jaya', 'province_id' =>'33'],
			['id'=>490,'kabupaten_name' => 'Kabupaten Lanny Jaya', 'province_id' =>'33'],
			['id'=>491,'kabupaten_name' => 'Kabupaten Mamberamo Raya', 'province_id' =>'33'],
			['id'=>492,'kabupaten_name' => 'Kabupaten Mamberamo Tengah', 'province_id' =>'33'],
			['id'=>493,'kabupaten_name' => 'Kabupaten Nduga', 'province_id' =>'33'],
			['id'=>494,'kabupaten_name' => 'Kabupaten Puncak', 'province_id' =>'33'],
			['id'=>495,'kabupaten_name' => 'Kabupaten Supiori', 'province_id' =>'33'],
			['id'=>496,'kabupaten_name' => 'Kabupaten Yalimo', 'province_id' =>'33'],
			['id'=>497,'kabupaten_name' => 'Kota Jayapura', 'province_id' =>'33'],
			['id'=>498,'kabupaten_name' => 'Kabupaten Bulungan', 'province_id' =>'34'],
			['id'=>499,'kabupaten_name' => 'Kabupaten Malinau', 'province_id' =>'34'],
			['id'=>500,'kabupaten_name' => 'Kabupaten Nunukan', 'province_id' =>'34'],
			['id'=>501,'kabupaten_name' => 'Kabupaten Tana Tidung', 'province_id' =>'34'],
			['id'=>502,'kabupaten_name' => 'Kota Tarakan', 'province_id' =>'34']
		];

		Kabupaten::insert($kab);
	}
}
