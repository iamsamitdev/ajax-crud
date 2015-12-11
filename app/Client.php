<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	protected $table = "clients";
	//protected $hidden = "xxxx";
	//protected $primaryKey = 'cus_id';
	protected $fillable = array('name','country','state','city','zip','address','contact','phone','email','website','bank','bank_account','description');
}
