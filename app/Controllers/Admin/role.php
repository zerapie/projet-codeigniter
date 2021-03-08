<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RoleModel;
use App\Models\filmModel; // 1
use App\Models\ArtisteModel;

class role extends BaseController
{
    public $roleModel    = null;
    public $filmModel    = null; // 2
    public $artisteModel = null;

    public function __construct()
        {
            $this->roleModel = new RoleModel();
            $this->filmModel = new filmModel(); // 3
            $this->artisteModel = new ArtisteModel();
        }
    /* **************************************************************************************************** *
     * *
     * *                                            INDEX                                                 * *
     * *
     * **************************************************************************************************** */
	public function index()
    {
		$data = [
            //affiche la page
			'page_title'    => 'Connexion à www.site.com' ,
			'aff_menu'      => true,
            'tabRoles'      => $this->roleModel->findAll(),
            'artisteModel'  => $this->artisteModel,
            'filmModel'     => $this->filmModel,
		];
        

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Role/RoleListe',   $data);
		echo view('common/FooterSite');

	}

    /* **************************************************************************************************** *
     * *
     * *                                            INDEX                                                 * *
     * *
     * **************************************************************************************************** */
    public function edit($id_film=null, $id_acteur=null)
    {
        if (!empty($this->request->getVar('save'))) {
            $rules = [ //rules = regle d'enregistrement 
                //nom - champ form  => champ requi |long min[3]|long max[20] // un selecte = require selment
                'selectFilm'    => 'required',
                'selectActeur'  => 'required',
                'nomRole'       => 'required|min_length[3]|max_length[20]',
            ];
            // trètement de rules 
            if($this->validate($rules)){
                $dataSave = [ //data = les chef corespond au cologne de la base de donnée 
                    // nom - champ B-D =>  requette (nameForm)
                    'id_film'   => $this->request->getVar('selectFilm'),
                    'id_acteur' => $this->request->getVar('selectActeur'),
                    'nom_role'  => $this->request->getVar('nomRole')
                ];
                // dd($dataSave);
                if ($this->request->getVar('save') == 'update') {
                    // update sauvegade id
                    $this->roleModel->where('id_film', $id_film)
                                    ->where('id_acteur', $id_acteur)
                                    ->set($dataSave)->update();
                    return redirect()->to('/Admin/role/');
                } else {
                    $this->roleModel->save($dataSave);
                }
                // 
            }
        }
        if ($id_film == null ){$role = [ // role = DB // ici role vide
            'id_film'   => "",
            'id_acteur' => "",
            'nom_role'  => ""];
        } else { // ici role nest pas vide
            $role = $this->roleModel->where('id_film', $id_film)
                                    ->where('id_acteur', $id_acteur)
                                    ->first();
        }
        // dd($id_acteur);

		$data = [
            //affiche la page
			'page_title'        => 'Connexion à www.site.com' ,
			'aff_menu'          => true,
            'role'              => $role, // role = $role
            'tabListeFilm'      => $this->filmModel->findAll(), // 4 requette liste film
            'tabListeArtiste'   => $this->artisteModel->findAll(),
		];
        

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Role/RoleEdit',   $data);
		echo view('common/FooterSite');

	}

}