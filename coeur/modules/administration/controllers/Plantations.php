<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Plantations extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('plantations_model');

      if(!$this->session->userdata('idadmin')){
            redirect('connexion');
        }

    }



    public function plantation()
    {

        $donne['abc']=$this->plantations_model->liste_plantation();

        $this->load->view('plantation_views',$donne);

    }



    public function ajouter_plantation()
    {


        
        $this->form_validation->set_rules('culture', 'La culture', 'trim|required');
        $this->form_validation->set_rules('type_culture', 'Le type de culture', 'trim|required');
        $this->form_validation->set_rules('superficie', 'La superficie de la plantation', 'trim|required');
        $this->form_validation->set_rules('latitude', 'La latitude', 'trim|required');
        $this->form_validation->set_rules('longitude', 'La longitude', 'trim|required');
        $this->form_validation->set_rules('idagri', 'ID', 'trim|required');
        $this->form_validation->set_rules('departement', 'ID', 'trim|required');



        if ($this->form_validation->run()) {

                  $data = array(
                      'culture' => $this->security->xss_clean($this->input->post('culture')),
                      'type_culture' => $this->security->xss_clean($this->input->post('type_culture')),
                      'superficie' => $this->security->xss_clean($this->input->post('superficie')),
                      'latitude' => $this->security->xss_clean($this->input->post('latitude')),
                      'longitude' => $this->security->xss_clean($this->input->post('longitude')),
                      'idagri' => $this->security->xss_clean($this->input->post('idagri')),
                      'iddep' => $this->security->xss_clean($this->input->post('departement'))

                  );



                   $this->plantations_model->ajout_plantation($data);
                  $this->session->set_flashdata('ajout', '1');
                  redirect_back();

                  //redirect('administraton/agriculteurs/agriculteur_detail/'.$this->input->post('idagri'));
                  //$donne['abc']=$this->plantations_model->get_agriculteur($this->input->post('idagri'));
                  //$this->load->view('agriculteur_views',$donne);



                  /* $this->plantations_model->ajout_plantation($data);
                  $this->session->set_flashdata('ajout', '1');
                  $donne['abc']=$this->plantations_model->liste_plantation();
                  $this->load->view('plantations_view',$donne);*/


                  /*$this->plantations_model->ajout_plantation($data);
                  $this->session->set_flashdata('ajout', '1');
                  $donne['get'] = $this->plantations_model->get_agriculteur($id);
                  $data['liste_plantation'] = $this->agriculteurs_model->get_liste_plantation_agriculteur($id);
                  $this->load->view('administration/detail_agriculteur_view', $donne);*/

                


        }else{

           $donne['dep']=$this->plantations_model->liste_dep();
           $this->load->view('ajouter_plantation_view',$donne);

        }



}






    public function modifier_plantation($idplant)
    {

        $this->form_validation->set_rules('culture', 'La culture', 'trim|required');
        $this->form_validation->set_rules('type_culture', 'Le type de culture', 'trim|required');
        $this->form_validation->set_rules('superficie', 'La superficie de la plantation', 'trim|required');
        $this->form_validation->set_rules('latitude', 'La latitude', 'trim|required');
        $this->form_validation->set_rules('longitude', 'La longitude', 'trim|required');
        $this->form_validation->set_rules('idplant', 'ID', 'trim|required');
        $this->form_validation->set_rules('departement', 'ID', 'trim|required');


        if ($this->form_validation->run()) {

                  $data = array(
                      'culture' => $this->security->xss_clean($this->input->post('culture')),
                      'type_culture' => $this->security->xss_clean($this->input->post('type_culture')),
                      'superficie' => $this->security->xss_clean($this->input->post('superficie')),
                      'latitude' => $this->security->xss_clean($this->input->post('latitude')),
                      'longitude' => $this->security->xss_clean($this->input->post('longitude')),
                      'iddep' => $this->security->xss_clean($this->input->post('departement'))

                  ); 


                 // $iDplant=$this->security->xss_clean($this->input->post('idplant'));
                  $this->plantations_model->update_plantation($data,$idplant);
                  $this->session->set_flashdata('mod', '1');
                  redirect_back();


        }else{


          
             redirect_back();


        }

    }



      // recuperation d'une plantation
      public function plantation_recup($id)
      {
          if ($id) {
              $data['get'] = $this->plantations_model->get_plantation($id);
              $data['dep']=$this->plantations_model->liste_dep();
              $this->load->view('administration/modifier_plantation_view', $data);
          }else{
             redirect_back();
          }

      }



    // suppression d'une plantation 
    public function plantation_supp($idplant)
    {

        $this->plantations_model->sup_plantation($idplant);
        $this->session->set_flashdata('del', '1');
        redirect_back();
    }





}


/* End of file connexion.php */
/* Location: ./application/modules/login/controllers/connexion.php */ ?>