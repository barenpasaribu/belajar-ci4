<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data =['title' => 'belajar CI4'];
		return view('welcome_message', $data);
	}

	//--------------------------------------------------------------------

}
