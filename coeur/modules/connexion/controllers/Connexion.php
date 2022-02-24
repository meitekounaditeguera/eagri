<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('connexion_model');

    }


    public function index()
    {
        $this->login();
    }





    public function login()
    {
        $this->form_validation->set_rules('email','Identifiant','trim|required|valid_email');
        $this->form_validation->set_rules('password','Mot de passe','trim|required');

      if($this->session->userdata('idadmin'))
        {
           redirect('administration');
        }else{

             if($this->form_validation->run())
             {

              //echo $this->input->post('email');
                 $username = $this->security->xss_clean($this->input->post('email')); // controle XSS
                 $password = $this->security->xss_clean($this->input->post('password'));// controle XSS

                 if($this->connexion_model->check_connection($username, $password))
                 {

                         $data['info']=$this->connexion_model->getInfo_admin($username, $password);

                         foreach ($data['info'] as $lign) {
                            $data['idadmin'] = $lign->idadmin;
                            $data['email'] = $lign->email;

                        }


                        $donnee_session = array(
                          'idadmin'  => $data['idadmin'],
                          'email' => $data['email'],
                        );
                        $this->session->set_userdata($donnee_session);
                        redirect('administration');

                } else {

              $this->session->set_flashdata('login', 'error');
              redirect_back();
            }



        }else {

            $this->load->view('connexion_view');
        }


        }
    }


    function logout()
    {
        //$this->session->unset_userdata('identifant_client');

        $this->session->unset_userdata('idadmin');
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();
        redirect('connexion', 'refresh');
    }


}