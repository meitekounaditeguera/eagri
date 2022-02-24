<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('administration_model');

      if(!$this->session->userdata('id_admin')){
            redirect('connexion');
        }

    }


    public function index()
    {

        $this->load->view('accueil');


    }






//----------------------------------------------------
//-------GESTION DES COMPTES -------------------------
//----------------------------------------------------


    // Ajout d'une organisation ( Admin)
    public function admin_ajout()
    {

      if($this->session->userdata('niveau') == 3){ // si administrateur


        $this->form_validation->set_rules('niveau', 'Niveau', 'trim|required');
        $this->form_validation->set_rules('libelle', 'Libellé', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[comptebackend.email]');
        $this->form_validation->set_rules('pwd', 'Mot de passe', 'required|min_length[8]|max_length[30]');
        $this->form_validation->set_rules('confirmpwd', 'Mot de passe', 'required|matches[pwd]');

        if ($this->form_validation->run()) {
            $data = array(
                'niveau' => $this->security->xss_clean($this->input->post('niveau')),
                'libelle' => $this->security->xss_clean($this->input->post('libelle')),
                'email' => $this->security->xss_clean($this->input->post('email')),
                'pwd' => sha1(md5($this->security->xss_clean($this->input->post('pwd'))))

            );
            $this->backend_model->add_admin($data);
            $this->session->set_flashdata('add', 'success');


                      /*
                      //ENVOIE DE MAIL POUR DONNER LES PARAMETRES DU COMPTE CREE
                       $this->load->library('email');
                       $this->email->set_mailtype('text');;
                       $this->email->from('info@data.gouv.ci','OPEN DATA');
                       $this->email->to($email);
                       //$this->email->to('e.elloh@cicg.gouv.ci');
                        $this->email->subject('CREATION DE COMPTE OPEN-DATA');
                         $this->email->message("
                        Bonjour  ,<br><br>

                        Un nouveau compte est créé pour votre organisation <br>
                        <strong>Login </strong>: ".$this->security->xss_clean($this->input->post('email')."<br>
                        <strong>Mot de passe </strong>: ".$this->security->xss_clean($this->input->post('pwd')."<br>
                        <font color='red'>Veuillez le changer a votre première connexion !</font><br>
                        Bien &agrave; vous,

                       ");
                        $this->email->send();
                       // FIN ENVOIE DE MAIL
                       */


            redirect_back();

        }else{
            $this->load->view('backend/admin_ajout_view');
        }

      }
    }



    // modification d'une organisation ( Admin)
    public function admin_modif()
    {
      if($this->session->userdata('niveau') == 3){ // si administrateur

        $this->form_validation->set_rules('niveau', 'Niveau', 'trim|required');
        $this->form_validation->set_rules('libelle', 'Libellé', 'trim|required');



        if ($this->form_validation->run()) {
            $data = array(
                'niveau' => $this->security->xss_clean($this->input->post('niveau')),
                'libelle' => $this->security->xss_clean($this->input->post('libelle')),
                'email' => $this->security->xss_clean($this->input->post('email')),
                'alias' => $this->alias($this->security->xss_clean($this->input->post('libelle')))

            );
                      $this->backend_model->update_admin($data, $this->security->xss_clean($this->input->post('idbackend', TRUE)));
                      $this->session->set_flashdata('modif', 'success');
                      redirect_back();

        }else{
             redirect_back();
        }
      }
    }




    // la liste des admins
    public function admin_liste()
    {
      if($this->session->userdata('niveau') == 3){ // si administrateur

        $data['admin'] = $this->backend_model->list_admin();
        $this->load->view('backend/admin_liste_view', $data);
      }
    }

    // suppression d'un  admin
    public function admin_supp($id)
    {
      if($this->session->userdata('niveau') == 3){ // si administrateur

        $this->backend_model->delete_admin($id);
        $this->session->set_flashdata('del', 'success');
        redirect_back();
      }
    }


      // recuperation de id du theme a modifier
      public function admin_recup($id)
      {

      if($this->session->userdata('niveau') == 3){ // si administrateur

          if ($id) {
              $data['get'] = $this->backend_model->get_admin($id);
              $data['listemenu'] = $this->backend_model->sql_menu_liste();
              $this->load->view('backend/admin_recup_view', $data);
          }else{
             redirect_back();
          }
        }

      }










    // afficher le profile
    public function profile()
    {
            $data['monprofil']=$this->backend_model->list_profile($this->session->userdata('idbackend'));
            $this->load->view('backend/profile_liste_view',$data);

    }


      // recuperation de id profile a modifier
      public function profile_recup($id)
      {
          if ($id) {
              $data['get'] = $this->backend_model->get_profile($id);
              $data['listemenu'] = $this->backend_model->sql_menu_liste();
              $this->load->view('backend/profile_recup_view', $data);
          }else{
             redirect_back();
          }

      }


     // Modification du Profil
      public function profile_modif()
        {
            $this->form_validation->set_rules('libelle', 'Libelle', 'trim|required');
            $this->form_validation->set_rules('description', 'Contenu', 'trim|required');
            $this->form_validation->set_rules('siteweb', 'Site web', 'trim');
            $this->form_validation->set_rules('telephone', 'Téléphone', 'trim|required');
            //$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('idbackend', 'ID', 'trim|required');

        if ($this->form_validation->run()) {

            if ($_FILES['userfile']['name'] == NULL) {

                $data = array(
                    'libelle' => $this->security->xss_clean($this->input->post('libelle', TRUE)),
                    'description' => $this->security->xss_clean($this->input->post('description', TRUE)),
                    'siteweb' => $this->security->xss_clean($this->input->post('siteweb', TRUE)),
                    'telephone' => $this->security->xss_clean($this->input->post('telephone', TRUE)),
                    'datemodif ' => date("Y-m-d H:i:s"),
                    'alias' => $this->alias($this->security->xss_clean($this->input->post('titre', TRUE)))
                );

                $this->backend_model->update_profile($data, $this->security->xss_clean($this->input->post('idbackend', TRUE)));
                $data['listemenu'] = $this->backend_model->sql_menu_liste();
                $this->session->set_flashdata('modif', 'success');
                redirect_back();

            }else{
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = 8*1024;
                $config['max_width'] = '320';
                $config['max_height'] = '320';
               // $config['encrypt_name'] = TRUE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload()){
                    $this->session->set_flashdata('img_error', $this->upload->display_errors());
                    redirect_back();
                    return FALSE;
                }
                else{
                    $fichier = $this->upload->data();
                    $data = array(
                        'logo' => $fichier['file_name'],
                        'libelle' => $this->security->xss_clean($this->input->post('libelle', TRUE)),
                        'description' => $this->security->xss_clean($this->input->post('description', TRUE)),
                        'siteweb' => $this->security->xss_clean($this->input->post('siteweb', TRUE)),
                        'telephone' => $this->security->xss_clean($this->input->post('telephone', TRUE)),
                        'datemodif ' => date("Y-m-d H:i:s"),
                        'alias' => $this->alias($this->security->xss_clean($this->input->post('titre', TRUE)))
                        );

                    $this->backend_model->update_profile($data, $this->security->xss_clean($this->input->post('idbackend', TRUE)));

                    $this->session->set_flashdata('modif', 'success');
                    redirect_back();
                }
            }

        }else {
           redirect_back();
        }

    }



    // changement de mot de passe de organisation
    function password_change()
    {


        $this->form_validation->set_rules('passworda','Mot de passe Ancien','trim|required');
        $this->form_validation->set_rules('passwordn','Mot de passe Nouveau','trim|required|min_length[8]');
        $this->form_validation->set_rules('passwordc','Mot de passe Confirmation','trim|required|matches[passwordn]');

        $this->form_validation->set_rules('idbackend','ID','trim|required');

        $passa=sha1(md5($this->security->xss_clean($this->input->post('passworda')))); //on crypte le mot de passe avant de comparer
        $passn=sha1(md5($this->security->xss_clean($this->input->post('passwordn'))));
        $passc=sha1(md5($this->security->xss_clean($this->input->post('passwordc'))));

        $idbackend=$this->security->xss_clean($this->input->post('idbackend', TRUE));
        $emailcompte=$this->security->xss_clean($this->input->post('email'));


             if($this->form_validation->run())
             {



                      // si le compte existe
                     if($this->backend_model->check_compte($this->security->xss_clean($this->input->post('idbackend',TRUE), $passa)))

                     {

                    $data = array(
                       'pwd'=>  $passn
                      );

                    //appel du model pour modification
                    $this->backend_model->modif_password($data,$idbackend);

                      //envoie de mail pour rappeler le nouveau password

                      $this->load->library('email');
                      $this->email->set_mailtype('text');;

                       $this->email->from('couloirshumanitaires@diplomatie.gouv.ci','MOT DE PASSE ASCAD');
                       $this->email->to($emailcompte);
                       //$this->email->to('e.elloh@cicg.gouv.ci');

                        $this->email->subject('Changement de mot de passe');
                         $this->email->message("
                        Bonjour,<br><br>

                        Vous venez de modifier votre ancien mot de passe <br><br>

                      <u>Nouveau </u>: ".$this->security->xss_clean($this->input->post('passwordn'))."<br><br>

                      Information confidentielle !


                      Bien &agrave; vous,

                     ");
                     $this->email->send();



                    $this->session->set_flashdata('passmodif', 'success');
                    redirect_back();

                    }
                    else { //si le compte n'existe pas

                      $this->session->set_flashdata('verifcompte', 'success');
                      redirect_back();
                   }





         }
         else
         {

              $this->load->view('backend/pwd_recup_view');
        }



}




























//----------------------------------
//------------------------------------
//----------------------------------
//-----------------------------------








    function imgresize($path, $file, $width, $height)
    {
       $config['image_library'] = 'gd2';
       $config['source_image'] = $path;
       $config['create_thumb'] = FALSE;
       $config['maintain_ratio'] =true;
       $config['width'] = $width;
       $config['height'] = $height;
       $config['new_image'] = './uploads/thumbs/'.$file;

       $this->load->library('image_lib', $config);
       $this->image_lib->initialize($config);
       $this->image_lib->resize();
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




 public function renamefichier($text2)
    {

    // creation de valeur ajoute a alias

      // replace non letter or digits by -
      $text2 = preg_replace('~[^\pL\d]+~u', '-', $text2);
      // transliterate
      $text2= iconv('utf-8', 'us-ascii//TRANSLIT', $text2);
      // remove unwanted characters
      $text2 = preg_replace('~[^-\w]+~', '', $text2);
      // trim
      $text2 = trim($text2, '-');
      // remove duplicate -
      $text2 = preg_replace('~-+~', '-', $text2);
      // lowercase
      $text2 = strtolower($text2);

      if (empty($text2)) {
        return 'n-a';
      }

      return $text2;
    }





function pdfdemande($dem)
{

//$this->load->helper('download');
//force_download('./uploads/docdemande/FOREVER_GIN2.pdf', NULL);

    $this->load->helper('pdf_helper');
    $data['demande'] = $this->backend_model->get_file($dem);
    $this->load->view('dossier_pdf_view', $data);
}





function pdftableau()
{

//$this->load->helper('download');
//force_download('./uploads/docdemande/FOREVER_GIN2.pdf', NULL);

    $this->load->helper('pdf_helper');
    $data['liste_tableau'] = $this->backend_model->sql_listdemande_ministre_new();
    $this->load->view('tableau_pdf_view', $data);
}




}


/* End of file connexion.php */
/* Location: ./application/modules/login/controllers/connexion.php */ ?>