<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Backend_model extends CI_Model {

   /* function __construct() {
        parent::__construct();
    }*/
    //get informations from people connected








       // mot de passe oublié verification
       function check_compt($email){
          $this->db->where('email',$email);
          $q = $this->db->get('comptebackend');
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
        $this->db->update('comptebackend',$data);

         }



//---GESTION DES COMPTES ET PROFIL
//--------------------------------
//----------------------------------

  // Ajout d'un admin
    public function add_admin($data)
    {
        $this->db->insert('comptebackend', $data);
    }


    //liste des admin
    public function list_admin()
    {
        $this->db->order_by('niveau', 'desc');
       // $this->db->where('niveau !=',1);
        $q = $this->db->get('comptebackend');
        return $q->result();
    }


    //recuperation  thematique
    public function get_admin($id)
    {
        $this->db->where('idbackend', $id);
        $q = $this->db->get('comptebackend');
        return $q->first_row();

    }

    public function list_backend()
    {

        //$this->db->select('*')->from('backend');
       // $this->db->join('jeuxdonnee', 'jeuxdonnee.idbackend = backend.idbackend', 'left');
        $this->db->where('comptebackend.niveau', 1);
        $this->db->order_by('comptebackend.libelle', 'asc');
        $q = $this->db->get('comptebackend');
        return $q->result();

    }



   // modification de l'backend
    public function update_admin($data, $id)
    {
        $this->db->where('idbackend', $id);
        $this->db->update('comptebackend', $data);
    }


    //suppression admin
    public function delete_admin($id)
    {
        $this->db->where('idbackend', $id);
        $this->db->delete('comptebackend');
    }




  public function list_profile($idbackend)
    {
        $this->db->where('idbackend', $idbackend);
        $q = $this->db->get('comptebackend');
        return $q->first_row();
    }


   //recuperation  thematique
    public function get_profile($id)
    {
        $this->db->where('idbackend', $id);
        $q = $this->db->get('comptebackend');
        return $q->first_row();

    }

    // mise a jour du profile
     public function update_profile($data, $id)
    {
        $this->db->where('idbackend', $id);
        $this->db->update('comptebackend', $data);
    }



   // verification du compte au changement du mot de passe
   function check_compte($idbackend,$passa)
   {
       $this->db->where('idbackend',$idbackend);
       $this->db->where('pwd', $passa);
       $q = $this->db->get('comptebackend');

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
   public function modif_password($data,$idbackend)
      {
        $this->db->where('idbackend',$idbackend);
        $this->db->update('comptebackend',$data);

      }





   }