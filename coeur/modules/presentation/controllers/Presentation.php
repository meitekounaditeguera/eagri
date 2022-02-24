<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presentation extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        ini_set('allow_url_fopen',1);
        $this->load->model('presentation_model');

    }




    public function pre($id)
    {


        $data['categorie']=$this->presentation_model->sql_categorie();


        $data['pre']=$this->presentation_model->detail_presentation($id);
        $this->load->view('presentation',$data);

    }















}

/* End of file Accueil.php */
/* Location: .//D/project-host/webhost/metro/coeur/modules/accueil/controllers/Accueil.php */