<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\InternauteModel;

class Internaute extends BaseController
{

	public function index(){

			/** exemple de passage de variable a une vue */ 
			$data = [
				'page_title' => 'Connexion à www.site.com' ,
				'aff_menu'   => true
			];
	

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Internaute/InternauteListe',    $data);
		echo view('common/FooterSite');

	}

}