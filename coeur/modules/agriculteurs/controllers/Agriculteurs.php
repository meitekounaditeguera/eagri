<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agriculteurs extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        ini_set('allow_url_fopen',1);
        $this->load->model('agriculteurs_model');

    }

    
}