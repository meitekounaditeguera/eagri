<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        ini_set('allow_url_fopen',1);
        $this->load->model('contact_model');

    }






public function index()
    {



        $this->form_validation->set_rules('nom', 'Nom', 'trim|required');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|valid_email|required');
        $this->form_validation->set_rules('objet', 'Objet', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');


        if ($this->form_validation->run()) {

/*
          $recaptcha = $this->input->post('g-recaptcha-response');
          if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {*/




                  // CONFIGURATION D'ENVOI DE E-MAIL
                    // ------------------------------
                        $config = array (
                        'protocol' => 'smtp',
                        'mailtype' => 'html',
                        'charset' => 'utf-8',
                        'crlf' => 'rn',
                        'priority' => 3,
                        'smtp_host' => 'mail46.lwspanel.com',
                        'smtp_port' => '587',
                        'smtp_crypto' => 'tls',
                        'smtp_user' => 'info@delissa-ci.com',
                        'smtp_pass' =>'eE3@KHvqQG',
                        'smtp_timeout' => 5
                        );

                        $this->email->initialize($config);
                        $this->load->library('email', $config);
                        $this->email->set_newline("\r\n");

                    //  FIN --------------------------
                    // --------------------------------



                       $this->email->set_mailtype('html');
                       $this->email->from('info@delissa-ci.com', $this->security->xss_clean($this->input->post('nom')));
                       $this->email->to('info@delissa-ci.com');
                       $this->email->cc('akniamien@gmail.com');
                       $this->email->subject('CONTACT-WEB DELISSA:'.$this->security->xss_clean($this->input->post('objet')));
                       $this->email->message('Email du client :'.$this->security->xss_clean($this->input->post('email')).'<br>'.$this->security->xss_clean($this->input->post('message')));

                      if($this->email->send()) {
                        $this->session->set_flashdata('add', 'success');
                        redirect_back();

                      }else {
                        $this->session->set_flashdata('add', 'nosuccess');
                        echo $this->email->print_debugger();
                        redirect_back();
                        }


               // }


              /*}else{ // capctha pas bon
                  $this->session->set_flashdata('captcha', 'empty');
                  redirect_back();
              }*/



        }else{



        $data['categorie']=$this->contact_model->sql_categorie();


        /*Variables pour Recaptcha*/
        //$data['widget'] = $this->recaptcha->getWidget();
        //$data['script'] = $this->recaptcha->getScriptTag();
        $data['conta']=$this->contact_model->sql_contact();

        $this->load->view('contact',$data);

        }
    }










}

/* End of file Accueil.php */
/* Location: .//D/project-host/webhost/metro/coeur/modules/accueil/controllers/Accueil.php */