<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends BaseController
{
	public function index()
	{	
        /* **************************************************************************************************** * 
         * *                             2 - Affiche une variable a une vue                                   * *
         * **************************************************************************************************** */
        $this->afficheLogin('Register à wwww.site.com', false);
    }

	public function connection()
    {
        //include helper form - modifier dans BaseController.php 
        //helper('form');
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

            /* verrification de mot de passe */
                foreach ($users as $user){
                    // echo $user['userPassword'];
                    // echo $this->request->getVar('email');
                    if (password_verify($this->request->getVar('password'), $user['userPassword'])) {
                        // verrification MDP vs MDP databasse
                        $this->session->set(['userId' => $user['userId']]);
                        // si ces bon redirection -> Accueil
                        return redirect()->to('/Admin/Accueil');
                    }
                }
                //var_dump($this->session->get('connection'));
        } else {

            /* ****************************************************************************************************
             * *                            2 - Affiche une variable a une vue                                  * *
             * ************************************************************************************************** */
            $this->afficheLogin('Register à wwww.site.com', false, $this->validator) ;
        }
    }

    /* *************************************************************************************************** *
     * *                                                                                                 * *
     * *                            1 - Affiche une variable a une vue                                   * *
     * *                                                                                                 * *
     * *************************************************************************************************** */
    private function afficheLogin($page_title = 'Register à wwww.site.com', $aff_menu = false, $validation = 'validator')
    {
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