<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Galerie extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galerie_model');

      if(!$this->session->userdata('idbackend')){
            redirect('login');
        }

    }




    // DEBUT ACTUALITES----------------------------------------------------------------------------------------------
    // -----------------------------------------------------------------------------------------------------------
    // -----------------------------------------------------------------------------------------------------------



     public function galerieevent_ajout()
     {
        $this->form_validation->set_rules('titre_actu', 'titre', 'trim|required');



        if ($this->form_validation->run()) {


           if ($_FILES['userfile']['name'] == NULL) { // si  fichier null

                  $data = array(
                      'titre_actu' => $this->security->xss_clean($this->input->post('titre_actu'))
                  );



                  $this->galerie_model->sql_galerieevent_ajout($data);
                  $this->session->set_flashdata('add', 'success');
                  redirect_back();

                 } else{


              $config['upload_path'] = './uploads/galerie/';
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
                      'date_actu' => $this->security->xss_clean($this->input->post('date_actu')),
                      'fichier' => $fichier['file_name']
                  );


                  $this->galerie_model->sql_galerieevent_ajout($data);
                  $this->session->set_flashdata('add', 'success');
                  redirect_back();
              }

          }
        }else{

            $this->load->view('backend/galerieevent_ajout_view');

        }


     }

     // modification d'une contenu
     public function galerieevent_modif()
     {

        $this->form_validation->set_rules('titre_actu', 'titre', 'trim|required');
        $this->form_validation->set_rules('idevent', 'ID ', 'trim|required');

        if ($this->form_validation->run()) {

           if ($_FILES['userfile']['name'] == NULL) { // si  fichier null


                   $data = array(
                      'titre_actu' => $this->security->xss_clean($this->input->post('titre_actu'))
                  );



                  //$idjournal=$this->security->xss_clean($this->input->post('idjournal');// le id du jeux auquel est lié la contenu
                  $this->galerie_model->sql_update_galerieevent($data,$this->security->xss_clean($this->input->post('idevent')));
                  $this->session->set_flashdata('modif', 'success');
                  redirect_back();



           }else{ // si  fichier non  null

                      $config['upload_path'] = './uploads/galerie/';
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
                              'fichier' => $fichier['file_name']

                          );





                      }

                  //$idjournal=$this->security->xss_clean($this->input->post('idjournal');// le id du jeux auquel est lié la contenu
                  $this->galerie_model->sql_update_galerieevent($data,$this->security->xss_clean($this->input->post('idevent')));
                  $this->session->set_flashdata('modif', 'success');
                  redirect_back();

              }

        }else{
          redirect_back();
        }


     }



    // jeux modif
     public function galerieevent_liste()
      {

              $data['liste_galerieevent']=$this->galerie_model->sql_galerieevent_liste();
              $this->load->view('backend/galerieevent_liste_view', $data);



      }


    // suppression d une contenu
    public function galerieevent_supp($id)
    {
        $this->galerie_model->delete_galerieevent($id);
        $this->session->set_flashdata('del', 'success');
        redirect_back();
    }


    // recuperation de id  la contenu  a modifier
    public function galerieevent_recup($idevent)
    {
        if ($idevent) {
            $data['get'] = $this->galerie_model->get_galerieevent($idevent);

            $this->load->view('backend/galerieevent_recup_view', $data);
        }else{
            redirect_back();
        }
    }
    // debut contenu----------------------------------------------------------------------------------------------











    ///PHOTO/////////

     public function galeriephoto_ajout()
     {
        $this->form_validation->set_rules('titre_actu', 'titre', 'trim|required');
        $this->form_validation->set_rules('detail', 'detail', 'trim');
        $this->form_validation->set_rules('conditionnement', 'conditionnement', 'trim|required');
        $this->form_validation->set_rules('prix', 'prix', 'trim');
        $this->form_validation->set_rules('idevent', 'idevent', 'trim|required');


        if ($this->form_validation->run()) {


           if ($_FILES['userfile']['name'] == NULL) { // si  fichier null


                  redirect_back();

                 } else{


              $config['upload_path'] = './uploads/galerie/';
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
                      'conditionnement' => $this->security->xss_clean($this->input->post('conditionnement')),
                      'prix' => $this->security->xss_clean($this->input->post('prix')),
                      'detail' => $this->security->xss_clean($this->input->post('detail')),
                      'id_event' => $this->security->xss_clean($this->input->post('idevent')),
                      'fichier' => $fichier['file_name']
                  );


                  $this->galerie_model->sql_galeriephoto_ajout($data);
                  $this->session->set_flashdata('add', 'success');
                  redirect_back();
              }

          }
        }else{

            $this->load->view('backend/galeriephoto_ajout_view');

        }


     }

     // modification d'une contenu
     public function galeriephoto_modif()
     {

        $this->form_validation->set_rules('titre_actu', 'titre', 'trim|required');
        $this->form_validation->set_rules('detail', 'detail', 'trim');
        $this->form_validation->set_rules('conditionnement', 'conditionnement', 'trim|required');
        $this->form_validation->set_rules('prix', 'prix', 'trim');

        $this->form_validation->set_rules('idphoto', 'ID ', 'trim|required');

        if ($this->form_validation->run()) {

           if ($_FILES['userfile']['name'] == NULL) { // si  fichier null


                   $data = array(
                      'titre_actu' => $this->security->xss_clean($this->input->post('titre_actu')),
                      'conditionnement' => $this->security->xss_clean($this->input->post('conditionnement')),
                      'prix' => $this->security->xss_clean($this->input->post('prix')),
                      'detail' => $this->security->xss_clean($this->input->post('detail'))
                  );



                  //$idjournal=$this->security->xss_clean($this->input->post('idjournal');// le id du jeux auquel est lié la contenu
                  $this->galerie_model->sql_update_galeriephoto($data,$this->security->xss_clean($this->input->post('idphoto')));
                  $this->session->set_flashdata('modif', 'success');
                  redirect_back();



           }else{


                      $config['upload_path'] = './uploads/galerie/';
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
                      'conditionnement' => $this->security->xss_clean($this->input->post('conditionnement')),
                      'prix' => $this->security->xss_clean($this->input->post('prix')),
                      'detail' => $this->security->xss_clean($this->input->post('detail')),
                              'fichier' => $fichier['file_name']

                          );




                  //$idjournal=$this->security->xss_clean($this->input->post('idjournal');// le id du jeux auquel est lié la contenu
                  $this->galerie_model->sql_update_galeriephoto($data,$this->security->xss_clean($this->input->post('idphoto')));
                  $this->session->set_flashdata('modif', 'success');
                  redirect_back();

                      }


              }

        }else{
          redirect_back();
        }


     }



    // jeux modif
     public function galeriephoto_liste($idevent)
      {

              $data['get'] = $this->galerie_model->get_galerieevent($idevent);
              $data['liste_galeriephoto']=$this->galerie_model->sql_galeriephoto_liste($idevent);
              $this->load->view('backend/galeriephoto_liste_view', $data);


      }


    // suppression d une contenu
    public function galeriephoto_supp($id)
    {
        $this->galerie_model->delete_galeriephoto($id);
        $this->session->set_flashdata('del', 'success');
        redirect_back();
    }


    // recuperation de id  la contenu  a modifier
    public function galeriephoto_recup()
    {$idphoto=$this->uri->segment(5);
        if ($idphoto) {
            $data['get'] = $this->galerie_model->get_galeriephoto($idphoto);

            $this->load->view('backend/galeriephoto_recup_view', $data);
        }else{
            redirect_back();
        }
    }














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