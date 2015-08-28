<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\RaportRequest;
use App\Raport;
use App\ProgramStudy;
use App\School;
use Auth;


class RaportsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$getProgramStudyId = School::where('user_id', Auth::user()->id)->pluck('program_study_id');

		//dd($getProgramStudyId);
		$getListSubjects = ProgramStudy::where('id', $getProgramStudyId)->pluck('list_subject');
		dd($getListSubjects);

		$listSubjects = explode("; ",$getListSubjects);
		//dd($list);

		$raports = Raport::where('user_id', '=', Auth::user()->id)->firstOrFail();

		$subject_1 = explode(";",$raports['subject_1']);
		$subject_2 = explode(";",$raports['subject_2']);
		$subject_3 = explode(";",$raports['subject_3']);
		$subject_4 = explode(";",$raports['subject_4']);
		$subject_5 = explode(";",$raports['subject_5']);
		$ranking = explode(";",$raports['ranking']);


		//dd($subject_1);
		if(empty($subject_1[1])){
			$subject_1 = ["#","#","#","#","#","#"];
		}
		if(empty($subject_2[1])){
			$subject_2 = ["","","","","",""];
		}
		if(empty($subject_3[1])){
			$subject_3 = ["","","","","",""];
		}
		if(empty($subject_4[1])){
			$subject_4 = ["","","","","",""];
		}
		if(empty($subject_5[1])){
			$subject_5 = ["","","","","",""];
		}
		if(empty($subject_6[1])){
			$subject_6 = ["","","","","",""];
		}
		if(empty($ranking[1])){
			$ranking = ["0","0","0","0","0","0"];
		}

		return view('raport.edit', compact('raports','listSubjects','subject_1','subject_2','subject_3','subject_4','subject_5','ranking'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(RaportRequest $request)
	{
		//dd($request->all());
		$raport = Raport::where('user_id', '=', Auth::user()->id)->firstOrFail();

		$subject1 = [$request->p1s1,$request->p1s2,$request->p1s3,$request->p1s4,$request->p1s5,$request->p1s6];
		$subject_1 = implode(";",$subject1);

		$subject2 = [$request->p2s1,$request->p2s2,$request->p2s3,$request->p2s4,$request->p2s5,$request->p2s6];
		$subject_2 = implode(";",$subject2);

		$subject3 = [$request->p3s1,$request->p3s2,$request->p3s3,$request->p3s4,$request->p3s5,$request->p3s6];
		$subject_3 = implode(";",$subject3);

		$subject4 = [$request->p4s1,$request->p4s2,$request->p4s3,$request->p4s4,$request->p4s5,$request->p4s6];
		$subject_4 = implode(";",$subject4);

		$subject5 = [$request->p5s1,$request->p5s2,$request->p5s3,$request->p5s4,$request->p5s5,$request->p5s6];
		$subject_5 = implode(";",$subject5);

		$ranking = [$request->r1,$request->r2,$request->r3,$request->r4,$request->r5,$request->r6];
		$ranking = implode(";",$ranking);

		//dd($request->subject_2);

		$raport->subject_1 = $subject_1;
		$raport->subject_2 = $subject_2;
		$raport->subject_3 = $subject_3;
		$raport->subject_4 = $subject_4;
		$raport->subject_5 = $subject_5;
		$raport->ranking = $ranking;

		//Save record to the database
		$raport->save();
		//dd($request->all());
		//Return to universities controller
		return redirect('applications');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
