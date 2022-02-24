<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');

    }


    public function index()
    {
        $this->login();
    }

    public function login()
    {
        $this->form_validation->set_rules('email','Identifiant','trim|required|valid_email');
        $this->form_validation->set_rules('password','Mot de passe','trim|required');

      if($this->session->userdata('idbackend'))
        {

           redirect('backend');
        }
        else
       {

         if($this->form_validation->run())
         {

          //echo $this->input->post('email');
             $username = $this->security->xss_clean($this->input->post('email')); // controle XSS
             $password = $this->security->xss_clean($this->input->post('password'));// controle XSS

             if($this->login_model->check_connection($username, $password))
             {

                 $data['admin_informations']=$this->login_model->getInfo_admin($this->input->post('email'),$this->input->post('password'));

                 foreach ($data['admin_informations'] as $lign) {
                    $data['idbackend'] = $lign->idbackend;
                    $data['libelle'] = $lign->libelle;
                    $data['email'] = $lign->email;
                    $data['niveau'] = $lign->niveau;

                }


                $store_data_inSession = array(
                  'idbackend'  => $data['idbackend'],
                  'libelle' => $data['libelle'],
                  'email' => $data['email'],
                  'niveau' => $data['niveau']
                );
                $this->session->set_userdata($store_data_inSession);
                redirect('backend');

            }
            else {

              $this->session->set_flashdata('login', 'error');
              redirect_back();
            }



        }
        else
        {

            $this->load->view('backend/login_view');
        }


        }
    }


    function logout()
    {
        //$this->session->unset_userdata('identifant_client');

        $this->session->unset_userdata('idbackend');
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }


}