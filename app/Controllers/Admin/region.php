<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RegionModel; // 1

class region extends BaseController
	{
		public $RegionModel = null;

		public function __construct()
		{
			$this->RegionModel = new RegionModel();
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
					'tabRegion'	 => $this->RegionModel->findAll(),
				];
			

			echo view('common/HeaderAdmin' ,        $data);
			echo view('Admin/Region/RegionListe',   $data);
			echo view('common/FooterSite');

		}

	}
?>