<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;

class Genre extends BaseController
{

	public function index(){

			/** exemple de passage de variable a une vue */ 
			$data = [
				'page_title' => 'Connexion à www.site.com' ,
				'aff_menu'   => true
			];
	

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Genre/GenreListe',    $data);
		echo view('common/FooterSite');

	}

}