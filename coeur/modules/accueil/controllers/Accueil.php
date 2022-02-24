<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        ini_set('allow_url_fopen',1);
        $this->load->model('accueil_model');

    }


    public function index()
    {


        /*$data['banniere']=$this->accueil_model->sql_banniere_accueil();
        $data['mot']=$this->accueil_model->sql_mot_accueil();
        $data['actu_home']=$this->accueil_model->sql_actualite_accueil();
        $data['actu_une']=$this->accueil_model->sql_actualite_une_accueil();
        $data['pre']=$this->accueil_model->sql_pre();
        $data['mission']=$this->accueil_model->sql_mission();
        $data['video']=$this->accueil_model->sql_video();
        $data['album_home'] = $this->accueil_model->sql_album_accueil();

        $data['contact']=$this->accueil_model->sql_contact(); */

        $data['categorie']=$this->accueil_model->sql_categorie();
        $data['produit']=$this->accueil_model->sql_produit_accueil();
        $this->load->view('home',$data);
    }

}

/* End of file Accueil.php */
/* Location: .//D/project-host/webhost/metro/coeur/modules/accueil/controllers/Accueil.php */