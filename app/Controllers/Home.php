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
	/* **************************************************************************************************** *
     * *                            creation d'un moteur de recherche                                     * *
     * **************************************************************************************************** */
		$maRecherche = $this->filmModel->findAll();
		if (!empty($type) && !empty($elementRechercher)) 
		{
			switch ($type) 
			{
				case 'realisateur':
					$maRecherche = $this->filmModel->where('id_realisateur', $elementRechercher)->findAll();
					break;

				case 'pays':
					$maRecherche = $this->filmModel->where('code_pays', $elementRechercher)->findAll();
					break;

				case 'genre': // recherche par 
					$maRecherche = $this->filmModel->where('genre', $elementRechercher)->findAll();
					break;

				case 'annee': // recherche par annee
					$maRecherche = $this->filmModel->where('annee', $elementRechercher)->findAll();
					break;

				case 'recherche':
					// LOWER() = convertion carracter en miniscule	// UPPER() = convertion carracter en majuscule
					$maRecherche = $this->filmModel->like('titre', $elementRechercher,'both',null,true)
												   ->orLike('resume', $elementRechercher,'both',null,true)
												   ->findAll();  
					// both = side = % avant et-ou apres la recherche 
					// null = escape = laisse passe les valeurs et indentifiants 
					// true = insensitiveSearch = insensible a la case
					break;
														
				default:
				// $maRecherche = $this->filmModel->like()->findAll();

					break;
			}
		}
	/* **************************************************************************************************** *
     * *                            fin creation d'un moteur de recherche                                 * *
     * **************************************************************************************************** */

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
