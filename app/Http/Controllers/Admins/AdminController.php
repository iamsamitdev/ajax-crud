<?php namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\LoginRequest;
use Auth; // ไว้ตรวจสถานะการล็อกอิน
use Hash; // เข้ารหัส
use App\User; // Model

class AdminController extends Controller {
	
	public function loginprocess(LoginRequest $request)
	{
		// รับค่าจากฟอร์ม login
		$username = $request->input('username');
		$password = $request->input('password');

		// if(Hash::check("$2y$10$aa.1su1Zov4lOCk2.imrfOr51VMgtYbMB3a1x4Daiv7ejsJ79XgNu") == 1234)
		// {
		// 	return "Correct";
		// }

		// เช็คสิทธิ์กับฐานข้อมูล
		if(Auth::attempt(['username' => $username,'password'=>$password])){
			if(Auth::user()->role_id == 2)
			{
			 	return redirect()->intended('/admin/dashboard');
			}else if(Auth::user()->role_id == 3){
			   	return redirect()->intended('/manager/dashboard');
			}
		}else{
			return redirect()->back()->with('message',"Error!! Username or Password Incorrect. \nPlease try again.");
		}
	}

	 // สำหรับทำการ Logout
	 public function logout(){
	      Auth::logout();
	      return redirect('admin');
	 }

	public function dashboard()
	{
		return view('admin.pages.admin_dashboard');
	}
}
