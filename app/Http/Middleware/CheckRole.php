<?php namespace App\Http\Middleware;

use Closure;

class CheckRole {

	public function handle($request, Closure $next)
	{
		// Get the required roles from the route
		$roles = $this->getRequiredRoleForRoute($request->route());

		// Role ตรงกับที่ล็อกอินมา
		if($request->user()->hasRole($roles) || !$roles)
		{
			return $next($request);
		}

		// ไม่พบ Role
		//return view('admin.pages.permission_denie');
		App::abort(404);

	}

	private function getRequiredRoleForRoute($route)
	{
		$actions = $route->getAction();
		return isset($actions['roles']) ? $actions['roles'] : $actions;
	}
}