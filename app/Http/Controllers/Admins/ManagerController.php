<?php namespace App\Http\Controllers\Admins;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ManagerController extends Controller {

	public function dashboard()
	{
		return view('admin.pages.manager_dashboard');
	}

}
