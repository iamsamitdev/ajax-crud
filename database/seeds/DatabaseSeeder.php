<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('UserTableSeeder');
		$this->call('RoleTableSeeder');
		$this->command->info('Add data success');
	}

}

class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		DB::table('users')->insert([
			'username'	=> 'admin',
			'email'		=> 'admin@gmail.com',
			'password'	=> Hash::make('1234'),
			'fullname'	=> 'Samit Koyom',
			'tel'		=> '0893898202',
			'role_id'	=> '2',
			'created_at'	=> date('Y-m-d H:i:s')
		]);
	}
}

class RoleTableSeeder extends Seeder
{
	public function run()
	{
		
		DB::table('roles')->delete();
		
		DB::table('roles')->insert([
			'name'		=> 'Root',
			'description'	=> 'สิทธิ์นี้สามารถทำการแก้ไขข้อมูลได้ทั้งหมดในระบบ',
			'created_at'	=> date('Y-m-d H:i:s')
		]);

		DB::table('roles')->insert([
			'name'		=> 'Administrator',
			'description'	=> 'สิทธิ์นี้เป็นผู้ดูแลระบบ',
			'created_at'	=> date('Y-m-d H:i:s')
		]);

		DB::table('roles')->insert([
			'name'		=> 'Manager',
			'description'	=> 'สิทธิ์นี้เป็น manager ของระบบ',
			'created_at'	=> date('Y-m-d H:i:s')
		]);

		DB::table('roles')->insert([
			'name'		=> 'User',
			'description'	=> 'สิทธิ์ผู้ใช้งานทั่วไป',
			'created_at'	=> date('Y-m-d H:i:s')
		]);
	}
}
