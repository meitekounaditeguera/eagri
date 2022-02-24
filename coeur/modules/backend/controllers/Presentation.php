<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Presentation extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('presentation_model');

      if(!$this->session->userdata('idbackend')){
            redirect('login');
        }

    }




    // DEBUT PresentationS----------------------------------------------------------------------------------------------
    // -----------------------------------------------------------------------------------------------------------
    // -----------------------------------------------------------------------------------------------------------



    // debut contenu----------------------------------------------------------------------------------------------

     public function presentation_ajout()
     {
        $this->form_validation->set_rules('titre', 'titre', 'trim|required');
        $this->form_validation->set_rules('texte', 'titre', 'trim|required');



        if ($this->form_validation->run()) {


           if ($_FILES['userfile']['name'] == NULL) { // si  fichier null

                  $data = array(
                      'titre' => $this->security->xss_clean($this->input->post('titre')),
                      'texte' =>  $this->security->xss_clean($this->input->post('texte')),
                      'alias' => $this->alias($this->input->post('titre'))
                  );



                  $this->presentation_model->sql_Presentation_ajout($data);
                  $this->session->set_flashdata('add', 'success');
                  redirect_back();

                 } else{


              $config['upload_path'] = './uploads/fichier/';
              $config['allowed_types'] = '*';
              $config['max_size']  = 100*1024;
              $config['file_ext_tolower']  = TRUE;
              $config['encrypt_name'] = false;

              $this->load->library('upload', $config);

              if ( ! $this->upload->do_upload()){
                  $this->session->set_flashdata('img_error', $this->upload->display_errors());
                  redirect_back();
                  return FALSE;
              }
              else{
                  $fichier = $this->upload->data();
                  $data = array(
                      'titre' => $this->security->xss_clean($this->input->post('titre')),
                      'texte' =>  $this->security->xss_clean($this->input->post('texte')),
                      'alias' => $this->alias($this->input->post('titre')),
                      'fichier' => $fichier['file_name']
                  );


                  $this->presentation_model->sql_Presentation_ajout($data);
                  $this->session->set_flashdata('add', 'success');
                  redirect_back();
              }

          }
        }else{

            $this->load->view('backend/presentation_ajout_view');

        }


     }

     // modification d'une contenu
     public function presentation_modif()
     {

        $this->form_validation->set_rules('titre', 'titre', 'trim|required');
        $this->form_validation->set_rules('texte', 'texte', 'trim|required');
        $this->form_validation->set_rules('idpresentation', 'ID ', 'trim|required');

        if ($this->form_validation->run()) {

           if ($_FILES['userfile']['name'] == NULL) { // si  fichier null


                   $data = array(
                      'titre' => $this->security->xss_clean($this->input->post('titre')),
                      'texte' =>  $this->security->xss_clean($this->input->post('texte')),
                      'alias' => $this->alias($this->input->post('titre'))
                  );



                  //$idjournal=$this->security->xss_clean($this->input->post('idjournal');// le id du jeux auquel est lié la contenu
                  $this->presentation_model->sql_update_Presentation($data,$this->security->xss_clean($this->input->post('idpresentation')));
                  $this->session->set_flashdata('modif', 'success');
                  redirect_back();



           }else{ // si  fichier non  null

                      $config['upload_path'] = './uploads/fichier/';
                      $config['allowed_types'] = '*';
                      $config['max_size']  = 100*1024;
                      $config['file_ext_tolower']  = TRUE;

                      $this->load->library('upload', $config);

                      if ( ! $this->upload->do_upload()){
                          $this->session->set_flashdata('img_error', $this->upload->display_errors());
                          redirect_back();
                          return FALSE;
                      }
                      else{
                          $fichier = $this->upload->data();


                          $data = array(
                              'titre' => $this->security->xss_clean($this->input->post('titre')),
                              'texte' =>  $this->security->xss_clean($this->input->post('texte')),
                              'alias' => $this->alias($this->input->post('titre')),
                              'fichier' => $fichier['file_name']

                          );





                      }

                  //$idjournal=$this->security->xss_clean($this->input->post('idjournal');// le id du jeux auquel est lié la contenu
                  $this->presentation_model->sql_update_Presentation($data,$this->security->xss_clean($this->input->post('idpresentation')));
                  $this->session->set_flashdata('modif', 'success');
                  redirect_back();

              }

        }else{
          redirect_back();
        }


     }



    // jeux modif
     public function presentation_liste()
      {

              $data['liste_presentation']=$this->presentation_model->sql_Presentation_liste();
              $this->load->view('backend/presentation_liste_view', $data);



      }


    // suppression d une contenu
    public function presentation_supp($id)
    {
        $this->presentation_model->delete_Presentation($id);
        $this->session->set_flashdata('del', 'success');
        redirect_back();
    }


    // recuperation de id  la contenu  a modifier
    public function presentation_recup($idpresentation)
    {
        if ($idpresentation) {
            $data['get'] = $this->presentation_model->get_Presentation($idpresentation);

            $this->load->view('backend/presentation_recup_view', $data);
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