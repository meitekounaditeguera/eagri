<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');

      if(!$this->session->userdata('idbackend')){
            redirect('login');
        }

    }





    // debut contenu----------------------------------------------------------------------------------------------

     public function contact_ajout()
     {
        $this->form_validation->set_rules('tel', 'tel', 'trim|required');
        $this->form_validation->set_rules('fax', 'fax', 'trim|required');
        $this->form_validation->set_rules('bp', 'bp', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('adresse', 'adresse', 'trim|required');


        if ($this->form_validation->run()) {

                  $data = array(
                      'tel' => $this->security->xss_clean($this->input->post('tel')),
                      'fax' => $this->security->xss_clean($this->input->post('fax')),
                      'bp' => $this->security->xss_clean($this->input->post('bp')),
                      'email' => $this->security->xss_clean($this->input->post('email')),
                      'adresse' => $this->security->xss_clean($this->input->post('adresse'))
                  );


                  $this->contact_model->sql_contact_ajout($data);
                  $this->session->set_flashdata('add', 'success');
                  redirect_back();


        }else{

            $this->load->view('backend/contact_ajout_view');

        }


     }

     // modification d'une contenu
     public function contact_modif()
     {
        $this->form_validation->set_rules('tel', 'tel', 'trim|required');
        $this->form_validation->set_rules('fax', 'fax', 'trim|required');
        $this->form_validation->set_rules('bp', 'bp', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('adresse', 'adresse', 'trim|required');

        $this->form_validation->set_rules('idcontact', 'ID ', 'trim|required');

        if ($this->form_validation->run()) {


                   $data = array(
                      'tel' => $this->security->xss_clean($this->input->post('tel')),
                      'fax' => $this->security->xss_clean($this->input->post('fax')),
                      'bp' => $this->security->xss_clean($this->input->post('bp')),
                      'email' => $this->security->xss_clean($this->input->post('email')),
                      'adresse' => $this->security->xss_clean($this->input->post('adresse'))
                  );



                  //$idjournal=$this->security->xss_clean($this->input->post('idjournal');// le id du jeux auquel est lié la contenu
                  $this->contact_model->sql_update_contact($data,$this->security->xss_clean($this->input->post('idcontact')));
                  $this->session->set_flashdata('modif', 'success');
                  redirect_back();



        }else{
          redirect_back();
        }


     }



    // jeux modif
     public function contact_liste()
      {

              $data['liste_contact']=$this->contact_model->sql_contact_liste();
              $this->load->view('backend/contact_liste_view', $data);



      }


    // suppression d une contenu
    public function contact_supp($id)
    {
        $this->contact_model->delete_contact($id);
        $this->session->set_flashdata('del', 'success');
        redirect_back();
    }


    // recuperation de id  la contenu  a modifier
    public function contact_recup($idcontact)
    {
        if ($idcontact) {
            $data['get'] = $this->contact_model->get_contact($idcontact);

            $this->load->view('backend/contact_recup_view', $data);
        }else{
            redirect_back();
        }
    }
    // debut contenu----------------------------------------------------------------------------------------------
























   public function alias($text)
    {

    // creation de valeur ajoute a alias
     $idalias = substr(time(), -3);
      // replace non letter or digits by -
      $text = preg_replace('~[^\pL\d]+~u', '-', $text);
      // transliterate
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);
      // trim
      $text = trim($text, '-');
      // remove duplicate -
      $text = preg_replace('~-+~', '-', $text);
      // lowercase
      $text = strtolower($text);

      if (empty($text)) {
        return 'n-a';
      }

      return $text.$idalias;
    }





}


/* End of file connexion.php */
/* Location: ./application/modules/login/controllers/connexion.php */ ?>