<?php
namespace App\Controllers;

class Home extends BaseController
{
	// public function __construct() {
	// 	parent::__construct();
	// 	$db = \Config\Database::connect();
	// 	$db = db_connect();
	// }

	public function index()
	{
		$db = \Config\Database::connect();
		$data['title']	 = 'Home';
		$data['content'] = 'frontend/home';
		$data['data']	 = $db->query("SELECT * FROM app_list_property")->getResult();
		return view('index', $data);
	}

	public function detail($id){
		$db = \Config\Database::connect();
		$data['data'] = $db->query("SELECT * FROM app_list_property WHERE id='".$id."'")->getRow();
		return view('frontend/detail', $data);
	}
}
