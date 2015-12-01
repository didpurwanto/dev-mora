<?php namespace App\Http\Middleware;

use Closure;

class finish {

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

		if ($user && !$user->isFinish())
		{
			return $next($request);
		}
		return redirect('/prints')->with('pesan','Anda sudah melakukan FINALISASI data, silahkan cetak data anda.');
	}

}
