<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Administration_model extends CI_Model {

   /* function __construct() {
        parent::__construct();
    }*/
    //get informations from people connected








       // mot de passe oublié verification
       function check_compt($email){
          $this->db->where('email',$email);
          $q = $this->db->get('administrateur');
          if($q->num_rows()>0)
          {
             return True;
          }
          else
          {
            return False;
          }


        }



        // mot de passe oublié changement
        public function modif_pwd($data,$email)
         {
        $this->db->where('email',$email);
        $this->db->update('administrateur',$data);

         }



//---GESTION DES COMPTES ET PROFIL
//--------------------------------
//----------------------------------

  // Ajout d'un admin
    public function add_admin($data)
    {
        $this->db->insert('administrateur', $data);
    }


    //liste des admin
    public function list_admin()
    {
        $this->db->order_by('niveau', 'desc');
       // $this->db->where('niveau !=',1);
        $q = $this->db->get('administrateur');
        return $q->result();
    }


    //recuperation  thematique
    public function get_admin($id)
    {
        $this->db->where('id_admin', $id);
        $q = $this->db->get('administrateur');
        return $q->first_row();

    }

    public function list_backend()
    {

        //$this->db->select('*')->from('backend');
       // $this->db->join('jeuxdonnee', 'jeuxdonnee.id_admin = backend.id_admin', 'left');
        $this->db->where('administrateur.niveau', 1);
        $this->db->order_by('administrateur.libelle', 'asc');
        $q = $this->db->get('administrateur');
        return $q->result();

    }



   // modification de l'backend
    public function update_admin($data, $id)
    {
        $this->db->where('id_admin', $id);
        $this->db->update('administrateur', $data);
    }


    //suppression admin
    public function delete_admin($id)
    {
        $this->db->where('id_admin', $id);
        $this->db->delete('administrateur');
    }




  public function list_profile($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        $q = $this->db->get('administrateur');
        return $q->first_row();
    }


   //recuperation  thematique
    public function get_profile($id)
    {
        $this->db->where('id_admin', $id);
        $q = $this->db->get('administrateur');
        return $q->first_row();

    }

    // mise a jour du profile
     public function update_profile($data, $id)
    {
        $this->db->where('id_admin', $id);
        $this->db->update('administrateur', $data);
    }



   // verification du compte au changement du mot de passe
   function check_compte($id_admin,$passa)
   {
       $this->db->where('id_admin',$id_admin);
       $this->db->where('pwd', $passa);
       $q = $this->db->get('administrateur');

              $count=0;

              if($q->num_rows()>0)
              {
                 return True;
              }
              else
              {
                return False;
              }


    }


    // application du changement du mot de passe
   public function modif_password($data,$id_admin)
      {
        $this->db->where('id_admin',$id_admin);
        $this->db->update('administrateur',$data);

      }


    //nombre d'agriculteur 
    public function sql_nombreagriculteur()
    {
        
        $q = $this->db->get('agriculteur');
        return $q->num_rows();
    }
    
    //nombre de plantation
   public function sql_nombreplantation()
    {
        
        $q = $this->db->get('plantation');
        return $q->num_rows();
    }


   }