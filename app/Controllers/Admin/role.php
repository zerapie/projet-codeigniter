<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\RoleModel;
use App\Models\ArtisteModel;

class role extends BaseController
{
    public $roleModel = null;
    public $artisteModel = null;

    public function __construct()
        {
            $this->roleModel = new RoleModel();
            $this->artisteModel = new ArtisteModel();
        }

	public function index()
    {
		$data = [
            //affiche la page
			'page_title' => 'Connexion à www.site.com' ,
			'aff_menu'  => true,
            'tabRoles'   => $this->roleModel->findAll(),
            'artisteModel'=>$this->artisteModel
		];
        

		echo view('common/HeaderAdmin' , 	$data);
		echo view('Admin/Role/RoleListe',   $data);
		echo view('common/FooterSite');

	}

}