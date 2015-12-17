<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Contracts\Routing\ResponseFactory;

class Admins implements Middleware {

	protected $auth;
           	protected $response;

           	public function __construct(Guard $auth, ResponseFactory $response)
           	{
           		$this->auth = $auth;
                	$this->response = $response;
           	}

	public function handle($request, Closure $next)
	{
		// ตรวจสอบสิทธิ์ผ่าน
		 if ($this->auth->check()){
                    		 return $next($request);
               	}

               	//ตรวจสอบสิทธิ์ไม่ผ่าน
		return $this->response->redirectTo('admin');
	}

}
