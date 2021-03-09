<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PaysModel;

class Pays extends BaseController
{
	public $PaysModel = null;

	public function __construct()
	{
		$this->PaysModel = new PaysModel();
	}
/* **************************************************************************************************** *
 * *                                                                                                  * *
 * *                                            INDEX                                                 * *
 * *                                                                                                  * *
 * **************************************************************************************************** */
public function index(){

			/** exemple de passage de variable a une vue */ 
			$data = [
				'page_title' => 'Connexion à www.site.com' ,
				'aff_menu'   => true,
				'tabPays'	 => $this->PaysModel->findAll()
			];
	

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Pays/PaysListe',    $data);
		echo view('common/FooterSite');

	}

}