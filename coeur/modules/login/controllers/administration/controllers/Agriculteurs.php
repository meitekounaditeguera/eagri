<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agriculteurs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('agriculteurs_model');

      if(!$this->session->userdata('id_admin')){
            redirect('connexion');
        }

    }



    public function agriculteur()
    {

        $donne['abc']=$this->agriculteurs_model->liste_agriculteur();

        $this->load->view('agriculteur_views',$donne);

    }



    public function ajouter_agriculteur()
    {


        $this->form_validation->set_rules('nom', 'Nom agriculteur', 'trim|required');
        $this->form_validation->set_rules('prenom', 'Prenom agriculteur', 'trim|required');
        $this->form_validation->set_rules('email', "Email de l'agriculteur dans la base de données", 'trim|required|valid_email|is_unique[agriculteur.email]');
        $this->form_validation->set_rules('date_naissance', 'Date de naiss', 'trim|required');
        $this->form_validation->set_rules('lieu_naissance', 'Lieu de naiss', 'trim|required');
        $this->form_validation->set_rules('telephone', "Telephone de l'agriculteur", 'trim|required|max_length[10]');
        $this->form_validation->set_rules('genre', 'Genre', 'trim|required');
        $this->form_validation->set_rules('boite_postale','Boite postale', 'trim|required');
        $this->form_validation->set_rules('nombre_annee', "Nombre d'annee", 'trim|required');
        $this->form_validation->set_rules('biographie', 'La biographie', 'trim|required');


        if ($this->form_validation->run()) {

                  $data = array(
                      'nom' => $this->security->xss_clean($this->input->post('nom')),
                      'prenom' => $this->security->xss_clean($this->input->post('prenom')),
                      'email' => $this->security->xss_clean($this->input->post('email')),
                      'date_naissance' => $this->security->xss_clean($this->input->post('date_naissance')),
                      'lieu_naissance' => $this->security->xss_clean($this->input->post('lieu_naissance')),
                      'telephone' => $this->security->xss_clean($this->input->post('telephone')),
                      'genre' => $this->security->xss_clean($this->input->post('genre')),
                      'boite_postale' => $this->security->xss_clean($this->input->post('boite_postale')),
                      'nombre_annee' => $this->security->xss_clean($this->input->post('nombre_annee')),
                      'biographie' => $this->security->xss_clean($this->input->post('biographie')),
                  );


                  $this->agriculteurs_model->ajout_agriculteur($data);
                  $this->session->set_flashdata('ajout', '1');
                  redirect_back();


        }else{

           $this->load->view('ajouter_agriculteur_view');

        }



}












    public function modifier_agriculteur($id_agri)
    {


        $this->form_validation->set_rules('nom', 'Nom agriculteur', 'trim|required');
       $this->form_validation->set_rules('prenom', 'Prenom agriculteur', 'trim|required');
        $this->form_validation->set_rules('email', "Email de l'agriculteur dans la base de données", 'trim|required|valid_email');
        $this->form_validation->set_rules('date_naissance', 'Date de naiss', 'trim|required');
        $this->form_validation->set_rules('lieu_naissance', 'Lieu de naiss', 'trim|required');
        $this->form_validation->set_rules('telephone', "Telephone de l'agriculteur", 'trim|required');
        $this->form_validation->set_rules('genre', 'Genre', 'trim|required');
        $this->form_validation->set_rules('boite_postale','Boite postale', 'trim|required');
        $this->form_validation->set_rules('nombre_annee', "Nombre d'annee", 'trim|required');
        $this->form_validation->set_rules('biographie', 'La biographie', 'trim|required');
        $this->form_validation->set_rules('idagri', 'ID', 'trim|required');


        if ($this->form_validation->run()) {

                  $data = array(
                      'nom' => $this->security->xss_clean($this->input->post('nom')),
                      'prenom' => $this->security->xss_clean($this->input->post('prenom')),
                      'email' => $this->security->xss_clean($this->input->post('email')),
                      'date_naissance' => $this->security->xss_clean($this->input->post('date_naissance')),
                      'lieu_naissance' => $this->security->xss_clean($this->input->post('lieu_naissance')),
                      'telephone' => $this->security->xss_clean($this->input->post('telephone')),
                      'genre' => $this->security->xss_clean($this->input->post('genre')),
                      'boite_postale' => $this->security->xss_clean($this->input->post('boite_postale')),
                      'nombre_annee' => $this->security->xss_clean($this->input->post('nombre_annee')),
                      'biographie' => $this->security->xss_clean($this->input->post('biographie')),
                  );

                  $iDagri=$this->security->xss_clean($this->input->post('idagri'));
                  $this->agriculteurs_model->update_agriculteur($data,$iDagri);
                  $this->session->set_flashdata('mod', '1');
                  redirect_back();


        }else{





           $donne['agri']=$this->agriculteurs_model->select_agriculteur($id_agri);
           $this->load->view('modifier_agriculteur_view',$donne);

        }

    }



    // suppression d'un  admin
    public function agriculteur_supp($idagri)
    {

        $this->agriculteurs_model->sup_agriculteur($idagri);
        $this->session->set_flashdata('del', '1');
        redirect_back();
    }





}


/* End of file connexion.php */
/* Location: ./application/modules/login/controllers/connexion.php */ ?>