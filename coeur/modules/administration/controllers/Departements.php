<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Departements extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('departements_model');

      if(!$this->session->userdata('idadmin')){
            redirect('connexion');
        }

    }



    public function departement()
    {

        $donne['abc']=$this->departements_model->liste_departement();
        $this->load->view('departement_views',$donne);

    }



    public function ajouter_departement()
    {



        $this->form_validation->set_rules('nomdep', 'Nom departement', 'trim|required');
        $this->form_validation->set_rules('superficie', 'superficie departement', 'trim|required');
      

        if ($this->form_validation->run()) {

                  $data = array(
                      'nomdep' => $this->security->xss_clean($this->input->post('nom')),
                      'superficie' => $this->security->xss_clean($this->input->post('superficie')),
                
                  );


                  $this->departements_model->ajout_departement($data);
                  $this->session->set_flashdata('ajout', '1');
                  redirect_back();


        }else{

           $this->load->view('ajouter_departement_view');

        }



}












    public function modifier_departement()
    {


        $this->form_validation->set_rules('nomdep', 'Nom departement', 'trim|required');
        $this->form_validation->set_rules('superficie', 'superficie departement', 'trim|required');
        $this->form_validation->set_rules('iddep', 'ID', 'trim|required');

        if ($this->form_validation->run()) {

                  $data = array(
                      
                        'nomdep' => $this->security->xss_clean($this->input->post('nom')),
                        'superficie' => $this->security->xss_clean($this->input->post('superficie')),

                  );

                  
                  $iddep=$this->uri->segment(4);
                  $this->departements_model->update_departement($data,$iddep);
                  $this->session->set_flashdata('mod', '1');
                  redirect_back();


        }else{



        
              redirect_back();

          

        }

    }


    // recuperation d'un departement
      public function departement_recup($id)
      {
          if ($id) {
              $data['get'] = $this->departements_model->get_departement($id);
              $this->load->view('administration/modifier_departement_view', $data);
          }else{
             redirect_back();
          }

      }



    // suppression d'un  dep
    public function departement_supp($iddep)
    {

        $this->departements_model->sup_departement($iddep);
        $this->session->set_flashdata('del', '1');
        redirect_back();
    }





}


/* End of file connexion.php */
/* Location: ./application/modules/login/controllers/connexion.php */ ?>