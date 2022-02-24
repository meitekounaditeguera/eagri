<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Evenement extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('evenement_model');

      if(!$this->session->userdata('idbackend')){
            redirect('login');
        }

    }




    // DEBUT evenementS----------------------------------------------------------------------------------------------
    // -----------------------------------------------------------------------------------------------------------
    // -----------------------------------------------------------------------------------------------------------



    // debut contenu----------------------------------------------------------------------------------------------

     public function evenement_ajout()
     {
        $this->form_validation->set_rules('titre_actu', 'titre', 'trim|required');
        $this->form_validation->set_rules('texte_actu', 'titre', 'trim|required');
        $this->form_validation->set_rules('date_actu', 'titre', 'trim|required');
        $this->form_validation->set_rules('type_actu', 'texte', 'trim|required');


        if ($this->form_validation->run()) {


           if ($_FILES['userfile']['name'] == NULL) { // si  fichier null

                  $data = array(
                      'titre_actu' => $this->security->xss_clean($this->input->post('titre_actu')),
                      'type' => $this->security->xss_clean($this->input->post('type_actu')),
                      'date_actu' => $this->security->xss_clean($this->input->post('date_actu')),
                      'texte_actu' =>  $this->security->xss_clean($this->input->post('texte_actu')),
                      'alias' => $this->alias($this->input->post('titre_actu'))
                  );



                  $this->evenement_model->sql_evenement_ajout($data);
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
                      'titre_actu' => $this->security->xss_clean($this->input->post('titre_actu')),
                      'type' => $this->security->xss_clean($this->input->post('type_actu')),
                      'date_actu' => $this->security->xss_clean($this->input->post('date_actu')),
                      'texte_actu' =>  $this->security->xss_clean($this->input->post('texte_actu')),
                      'alias' => $this->alias($this->input->post('titre_actu')),
                      'format' => substr($fichier['file_ext'], 1),
                      'fichier' => $fichier['file_name']
                  );


                  $this->evenement_model->sql_evenement_ajout($data);
                  $this->session->set_flashdata('add', 'success');
                  redirect_back();
              }

          }
        }else{

            $this->load->view('backend/evenement_ajout_view');

        }


     }

     // modification d'une contenu
     public function evenement_modif()
     {

        $this->form_validation->set_rules('titre_actu', 'titre', 'trim|required');
        $this->form_validation->set_rules('texte_actu', 'texte', 'trim|required');
        $this->form_validation->set_rules('date_actu', 'date', 'trim|required');
        $this->form_validation->set_rules('type_actu', 'type', 'trim|required');
        $this->form_validation->set_rules('idevenement', 'ID ', 'trim|required');

        if ($this->form_validation->run()) {

           if ($_FILES['userfile']['name'] == NULL) { // si  fichier null


                   $data = array(
                      'titre_actu' => $this->security->xss_clean($this->input->post('titre_actu')),
                      'type' => $this->security->xss_clean($this->input->post('type_actu')),
                      'date_actu' => $this->security->xss_clean($this->input->post('date_actu')),
                      'texte_actu' =>  $this->security->xss_clean($this->input->post('texte_actu')),
                      'alias' => $this->alias($this->input->post('titre_actu'))
                  );



                  //$idjournal=$this->security->xss_clean($this->input->post('idjournal');// le id du jeux auquel est lié la contenu
                  $this->evenement_model->sql_update_evenement($data,$this->security->xss_clean($this->input->post('idevenement')));
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
                              'titre_actu' => $this->security->xss_clean($this->input->post('titre_actu')),
                              'type' => $this->security->xss_clean($this->input->post('type_actu')),
                              'date_actu' => $this->security->xss_clean($this->input->post('date_actu')),
                              'texte_actu' =>  $this->security->xss_clean($this->input->post('texte_actu')),
                              'alias' => $this->alias($this->input->post('titre_actu')),
                              'format' => substr($fichier['file_ext'], 1),
                              'fichier' => $fichier['file_name']

                          );





                      }

                  //$idjournal=$this->security->xss_clean($this->input->post('idjournal');// le id du jeux auquel est lié la contenu
                  $this->evenement_model->sql_update_evenement($data,$this->security->xss_clean($this->input->post('idevenement')));
                  $this->session->set_flashdata('modif', 'success');
                  redirect_back();

              }

        }else{
          redirect_back();
        }


     }



    // jeux modif
     public function evenement_liste()
      {

              $data['liste_evenement']=$this->evenement_model->sql_evenement_liste();
              $this->load->view('backend/evenement_liste_view', $data);



      }


    // suppression d une contenu
    public function evenement_supp($id)
    {
        $this->evenement_model->delete_evenement($id);
        $this->session->set_flashdata('del', 'success');
        redirect_back();
    }


    // recuperation de id  la contenu  a modifier
    public function evenement_recup($idevenement)
    {
        if ($idevenement) {
            $data['get'] = $this->evenement_model->get_evenement($idevenement);

            $this->load->view('backend/evenement_recup_view', $data);
        }else{
            redirect_back();
        }
    }
    // debut contenu----------------------------------------------------------------------------------------------





























    // debut contenu----------------------------------------------------------------------------------------------

     public function date_evenement_ajout()
     {
        $this->form_validation->set_rules('titre_actu', 'titre', 'trim|required');
        $this->form_validation->set_rules('date_actu', 'titre', 'trim|required');
        $this->form_validation->set_rules('lien_actu', 'lien', 'trim|required');


        if ($this->form_validation->run()) {

                  $data = array(
                      'titre_actu' => $this->security->xss_clean($this->input->post('titre_actu')),
                      'lien_actu' => $this->security->xss_clean($this->input->post('lien_actu')),
                      'date_actu' => $this->security->xss_clean($this->input->post('date_actu')),
                  );


                  $this->evenement_model->sql_date_evenement_ajout($data);
                  $this->session->set_flashdata('add', 'success');
                  redirect_back();


        }else{

            $this->load->view('backend/date_evenement_ajout_view');

        }


     }

     // modification d'une contenu
     public function date_evenement_modif()
     {

        $this->form_validation->set_rules('titre_actu', 'titre', 'trim|required');
        $this->form_validation->set_rules('date_actu', 'titre', 'trim|required');
        $this->form_validation->set_rules('lien_actu', 'lien', 'trim|required');
        $this->form_validation->set_rules('iddate_evenement', 'ID ', 'trim|required');

        if ($this->form_validation->run()) {


                   $data = array(
                      'titre_actu' => $this->security->xss_clean($this->input->post('titre_actu')),
                      'lien_actu' => $this->security->xss_clean($this->input->post('lien_actu')),
                      'date_actu' => $this->security->xss_clean($this->input->post('date_actu')),
                  );



                  //$idjournal=$this->security->xss_clean($this->input->post('idjournal');// le id du jeux auquel est lié la contenu
                  $this->evenement_model->sql_update_date_evenement($data,$this->security->xss_clean($this->input->post('iddate_evenement')));
                  $this->session->set_flashdata('modif', 'success');
                  redirect_back();



        }else{
          redirect_back();
        }


     }



    // jeux modif
     public function date_evenement_liste()
      {

              $data['liste_date_evenement']=$this->evenement_model->sql_date_evenement_liste();
              $this->load->view('backend/date_evenement_liste_view', $data);



      }


    // suppression d une contenu
    public function date_evenement_supp($id)
    {
        $this->evenement_model->delete_date_evenement($id);
        $this->session->set_flashdata('del', 'success');
        redirect_back();
    }


    // recuperation de id  la contenu  a modifier
    public function date_evenement_recup($iddate_evenement)
    {
        if ($iddate_evenement) {
            $data['get'] = $this->evenement_model->get_date_evenement($iddate_evenement);

            $this->load->view('backend/date_evenement_recup_view', $data);
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