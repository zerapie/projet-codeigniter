<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\FilmModel;

class Film extends BaseController
{
	public $filmModel = null;

	public function __construct()
	{
		$this->filmModel = new filmModel();
	}
    /* **************************************************************************************************** *
     * *                                                                                                  * *
     * *                                            INDEX                                                 * *
     * *                                                                                                  * *
     * **************************************************************************************************** */
	public function index()
	{
			/** exemple de passage de variable a une vue */ 
			$data = [
				'page_title'=> 'Connexion à www.site.com' ,
				'aff_menu'  => true,
				'tabFilm'	=> $this->filmModel->findAll()
			];
	

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Film/FilmListe',    $data);
		echo view('common/FooterSite');

	}

}