<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Controllers\Admin\Film;
use App\Models\FilmModel;
use App\Models\ArtisteModel;


class Home extends BaseController
{
	public $filmModel = null;
	public $artisteModel = null;

	

	public function __construct()
	{
		$this->filmModel = new filmModel();
		$this->artisteModel = new ArtisteModel();

	}
	/* **************************************************************************************************** *
     * *                                                                                                  * *
     * *                                            INDEX                                                 * *
     * *                                                                                                  * *
     * **************************************************************************************************** */
	public function index($type=null, $elementRechercher=null)
	{
		// creation d'un moteur de recherche	
		$maRecherche = $this->filmModel->findAll();
		if (!empty($type) && !empty($elementRechercher)) {
			$maRecherche = $this->filmModel->where('id_realisateur', $elementRechercher)->findAll();
		}

		/** exemple de passage de variable a une vue */ 
		$data = [
			'page_title'	=> 'Connexion à www.site.com' ,
			'aff_menu'  	=> true,
			'tabFilm'		=> $maRecherche,
			'artisteModel'  => $this->artisteModel,
		];
			
		echo view('/common/HeaderSite');
		echo view('/Site/index', $data);
		echo view('/common/FooterSite');
	}

}
