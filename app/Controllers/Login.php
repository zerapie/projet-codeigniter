<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends BaseController
{
	public function index()
	{	

		/** exemple de passage de variable a une vue */ 
		$data = [
			'page_title' => 'Connexion à wwww.site.com' ,
			'aff_menu'  => false
		];

		echo view('common/HeaderAdmin' , $data);
		echo view('Site/Login');
		echo view('common/FooterSite');
	}

	public function connection()
    {
        //include helper form - ne pas retirer
        helper('form');
        //set rules validation form
        $rules = [
            //'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email',
            'password'      => 'required|min_length[6]|max_length[200]',

        ];
         
        if($this->validate($rules)){
            $userModel = new UserModel();
            $users = $userModel->where('userEmail', $this->request->getVar('email'))
                              ->findAll();
            d($users);
            /* boucle de resulta pour mot de passe */
            foreach ($users as $key => $user){

                if (password_verify($db, $rules['password']) {
                    return $users['userID'];
                }
            }
            //return redirect()->to('/login');
        } else {
            
            $data = [
                'page_title' => 'Register à wwww.site.com' ,
                'aff_menu'  => false,
                'validation' => $this->validator
            ];
    
            echo view('common/HeaderAdmin', $data);
            echo view('Site/Login', $data);
            echo view('common/FooterSite');
        }
         
    }

}