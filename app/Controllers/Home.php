<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = 'Home - November Salon';
		echo view('layouts/header', $data);
		echo view('pages/home');
		echo view('layouts/footer');
	}

	public function showme($page = 'home')
	{
		if(! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
		{
			//Whoops, We don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException();
		}
		$data['title'] = ucfirst($page); //Captitalize the first letter
		echo view('layouts/header', $data);
		echo view('pages/'.$page, $data);
		echo view('layouts/footer', $data);
	}

}
