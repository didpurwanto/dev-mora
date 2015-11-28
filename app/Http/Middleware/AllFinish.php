<?php namespace App\Http\Middleware;

use Closure;

class AllFinish {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$user = $request->user();

		if ($user && $user->isAllFinish())
		{
			return $next($request);
		}
		return redirect('/applicants')->with('pesan', 'Anda harus mengisi semua data yang diperlukan terlebih dahulu. Mohon cek kembali data yang anda masukan, pastikan data sudah tersimpan.');
	}

}
