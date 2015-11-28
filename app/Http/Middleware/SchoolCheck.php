<?php namespace App\Http\Middleware;

use Closure;

class SchoolCheck {

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

		if ($user && $user->isSchoolFinish())
		{
			return $next($request);
		}
		return redirect('/schools')->with('pesan', 'Anda harus mengisi data SEKOLAH terlebih dahulu');
	}

}
