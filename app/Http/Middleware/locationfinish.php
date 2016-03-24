<?php namespace App\Http\Middleware;

use Closure;

class locationfinish {

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

		if ($user && !$user->application->isFinishLocation())
		{
			return $next($request);
		}
		return redirect('/summary')->with('pesan','Anda sudah melakukan pengisian Lokasi Tes.');
	}

}
