<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Administrateurs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('administrateurs_model');

      if(!$this->session->userdata('idadmin')){
            redirect('connexion');
        }

    }



    public function administrateur()
    {

        $donne['abc']=$this->administrateurs_model->liste_administrateur();

        $this->load->view('administrateur_views',$donne);

    }



    public function ajouter_administrateur()
    {



        $this->form_validation->set_rules('nom', 'Nom administrateur', 'trim|required');
        $this->form_validation->set_rules('prenom', 'Prenom administrateur', 'trim|required');
        $this->form_validation->set_rules('email', "Email de l'administrateur dans la base de données", 'trim|required|valid_email|is_unique[administrateur.email]');
        $this->form_validation->set_rules('mot_de_passe', 'mot de passe administrateur', 'trim|required');
        $this->form_validation->set_rules('numero_telephone', "Telephone de l'administrateur", 'trim|required|max_length[10]');
         $this->form_validation->set_rules('privilege', 'privilege administrateur', 'trim|required');


        if ($this->form_validation->run()) {

                  $data = array(
                      'nom' => $this->security->xss_clean($this->input->post('nom')),
                      'prenom' => $this->security->xss_clean($this->input->post('prenom')),
                      'email' => $this->security->xss_clean($this->input->post('email')),
                      'mot_de_passe' => $this->security->xss_clean($this->input->post('mot_de_passe')),
                      'numero_telephone' => $this->security->xss_clean($this->input->post('numero_telephone')),
                      'privilege' => $this->security->xss_clean($this->input->post('privilege')),
                     
                  );


                  $this->administrateurs_model->ajout_administrateur($data);
                  $this->session->set_flashdata('ajout', '1');
                  redirect_back();


        }else{

           $this->load->view('ajouter_administrateur_view');

        }



}












    public function modifier_administrateur()
    {


        $this->form_validation->set_rules('nom', 'Nom administrateur', 'trim|required');
        $this->form_validation->set_rules('prenom', 'Prenom administrateur', 'trim|required');
        $this->form_validation->set_rules('email', "Email de l'administrateur dans la base de données", 'trim|required|valid_email|is_unique[administrateur.email]');
        //$this->form_validation->set_rules('mot_de_passe', 'mot de passe administrateur', 'trim|required');
        //$this->form_validation->set_rules('numero_telephone', "Telephone de l'administrateur", 'trim|required|max_length[10]');
        $this->form_validation->set_rules('privilege', 'privilege administrateur', 'trim|required');

  

        if ($this->form_validation->run()) {

                  $data = array(
                      'nom' => $this->security->xss_clean($this->input->post('nom')),
                      'prenom' => $this->security->xss_clean($this->input->post('prenom')),
                      'email' => $this->security->xss_clean($this->input->post('email')),
                      'mot_de_passe' => $this->security->xss_clean($this->input->post('mot_de_passe')),
                      'numero_telephone' => $this->security->xss_clean($this->input->post('numero_telephone')),
                      'privilege' => $this->security->xss_clean($this->input->post('privilege')),
                      
                  );

                  
                  $idadmin=$this->uri->segment(4);
                  $this->administrateurs_model->update_administrateur($data,$idadmin);
                  $this->session->set_flashdata('mod', '1');
                  redirect_back();


        }else{



        
              redirect_back();

          

        }

    }


    // recuperation d'un administrateur
      public function administrateur_recup($id)
      {
          if ($id) {
              $data['get'] = $this->administrateurs_model->get_administrateur($id);
              $this->load->view('administration/modifier_administrateur_view', $data);
          }else{
             redirect_back();
          }

      }



    // suppression d'un  admin
    public function administrateur_supp($idadmin)
    {

        $this->administrateurs_model->sup_administrateur($idadmin);
        $this->session->set_flashdata('del', '1');
        redirect_back();
    }





}


/* End of file connexion.php */
/* Location: ./application/modules/login/controllers/connexion.php */ ?>