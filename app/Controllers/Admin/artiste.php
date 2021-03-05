<?php
    namespace App\Controllers\Admin;

    use App\Controllers\BaseController;
    use App\Models\ArtisteModel;

class artiste extends BaseController 
    {
        public $artisteModel = null;
        /* *************************************************************************************** */
        /* *************************************************************************************** */
        /* *************************************************************************************** */
        public function __construct()
        {
            $this->artisteModel = new ArtisteModel();
        }
        /* *************************************************************************************** */
        /* *************************************************************************************** */
        /* *************************************************************************************** */
        public function index()
        {
            $listeArtistes = $this->artisteModel->findAll();
            // dd($listeArtistes); // dd = var_dump

            // affiche dans la view
            $data = [
                'page_title'  => 'Connexion à www.site.com' ,
                'aff_menu'    => true,
                'tabArtistes' => $this->artisteModel->orderBy('id', 'desc')->paginate(50),
                'pager'       => $this->artisteModel->pager,
            ];
            // 
            echo view('common/HeaderAdmin' ,	    $data);
            echo view('Admin/Artiste/ArtisteListe', $data);
            echo view('common/FooterSite');
    
        }
        /* *************************************************************************************** */
        /* *************************************************************************************** */
        /* *************************************************************************************** */
        public function edit($id = null)
        {
            // je controle si SAVE existe - si oui quelqu'un a poster le form
            if (!empty($this->request->getVar('save'))) {
                $rules = [ //rules = regle d'enregistrement 
                    //nom - champ form  => champ requi |long min[3]|long max[20]
                    'nameForm'          => 'required|min_length[3]|max_length[20]',
                    'prenomForm'        => 'required|min_length[3]|max_length[20]',
                    'annee_naissance'   => 'required',
                ];

                // tretement de rules 
                if($this->validate($rules)){
                    $dataSave = [ //data = les chef corespond au cologne de la base de donnée
                        // nom - champ B-D =>  requette 
                        'nom'             => $this->request->getVar('nameForm'),
                        'prenom'          => $this->request->getVar('prenomForm'),
                        'annee_naissance' => $this->request->getVar('annee_naissance')
                    ];
                    if ($this->request->getVar('save') == 'update') {
                        // update sauvegade id
                        $this->artisteModel->where('id', $id)
                        ->set($dataSave)->update();
                    } else {
                        $this->artisteModel->sava($dataSave);
                    }
                    // 
                }else{
                    
                }
            }
            if ($id == null ){$artiste = [
                'id'        =>null,
                'nom'             => "",
                'prenom'          => "",
                'annee_naissance' => ""];
        } else {
            $artiste = $this->artisteModel->where('id', $id)
                                          ->first();
            }
            $data = [
                'page_title' => 'Connexion à www.site.com' ,
                'aff_menu'  => true,
                'soloArtiste' => $artiste
            ];
            echo view('common/HeaderAdmin' ,	$data);
            echo view('Admin/Artiste/ArtisteEdit',  $data);
            echo view('common/FooterSite');

        }
        public function delete($id=null)
        {
            /* SUPPRETION D'UNE LIGNE */
            $this->artisteModel->where('id', $id)->delete();
            /* REDIRECTION */
            return redirect()->to('/Admin/Artiste/');
            // header('Location: '.base_url('/Admin/Artiste/'));
        }
    }
?>