<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Excel;
use App\Applicant;

class ExportImportController extends Controller {

	public function exportapplicants()
	{
		Excel::create('biodata pendaftar', function($excel) {
	          // Set the title
	          $excel->setTitle('List Pendaftar PBSB');
	          // Chain the setters
	          $excel->setCreator('Agung Laksono')
	                ->setCompany('Kemenag');
	 
	          $excel->sheet('biodata pendaftar', function ($sheet) {
	 
	            $appl = Applicant::all();
	 
	            $column = array('Nama', 'Email');
	 
	            $sheet->appendRow($column);
	 
	            // getting last row number (the one we already filled and setting it to bold
	            $sheet->row($sheet->getHighestRow(), function ($row) {
	                $row->setFontWeight('bold');
	            });
	 
	            // putting customers data as next rows
	            foreach ($appl as $applicant) {
	                $sheet->appendRow(array($applicant->full_name,$applicant->appl));
	            }
	          });
	 
	        })->export('xls');
	}
}
