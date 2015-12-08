<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\Store;

    class SessionTimeout {
    protected $session;
    protected $timeout=900;

    public function __construct(Store $session){
        $this->session=$session;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!$this->session->has('lastActivityTime'))
            $this->session->put('lastActivityTime',time());
        elseif(time() - $this->session->get('lastActivityTime') > $this->timeout){
            $this->session->forget('lastActivityTime');
            Auth::logout();
            return redirect('#login')->with(['warning' => 'Anda tidak aktif selama '.$this->timeout/60 .' menit. Silahkan login kembali.']);
        }
        $this->session->put('lastActivityTime',time());
        return $next($request);
    }

}
