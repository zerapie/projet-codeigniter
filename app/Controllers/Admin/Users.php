<?php

namespace App\Controllers\Admin;
use CodeIgniter\Controller;

class Users extends Controller
{

	public function index(){

			/** exemple de passage de variable a une vue */ 
			$data = [
				'page_title' => 'Connexion à www.site.com' ,
				'aff_menu'   => true
			];
	

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Users');
		echo view('common/FooterSite');

	}

}
