<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('front_model');

    }
    public function index()
    {

      $this->load->view('accueil');
    }

}