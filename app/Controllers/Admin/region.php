<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;

class Region extends BaseController
{

	public function index(){

			/** exemple de passage de variable a une vue */ 
			$data = [
				'page_title' => 'Connexion à www.site.com' ,
				'aff_menu'   => true
			];
	

		echo view('common/HeaderAdmin' ,        $data);
		echo view('Admin/Region/RegionListe',   $data);
		echo view('common/FooterSite');

	}

}