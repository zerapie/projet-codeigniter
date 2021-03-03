<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;
use App\Controllers\BaseController;

class Accueil extends BaseController
{
	
	
	public function index()
	{	
		// si pas connecter rediriger -> accueil public
		//if () {
			//$_session['userId'] = $userId;
			//return redirect()->to('/login');
		//}

		/** exemple de passage de variable a une vue */ 
		$data = [
			'page_title' => 'Connexion à wwww.site.com' ,
			'aff_menu'  => true
		];

		//echo $this->session->get('userId');

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Accueil');
		echo view('common/FooterSite');
	}

}
