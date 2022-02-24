<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrateurs_model extends CI_Model {




      public function liste_administrateur()
      {

        $query = $this->db->get('administrateur');
        return $query->result();

      }


      public function ajout_administrateur($donne)
      {

        $this->db->insert('administrateur', $donne);

      }



      public function select_administrateur($id_admin)
      {

        $this->db->where('idadmin',$id_admin);
        $query = $this->db->get('administrateur');
        return $query->first_row();

      }

        public function get_administrateur($id_admin)
      {

        $this->db->where('idadmin',$id_admin);
        $query = $this->db->get('administrateur');
        return $query->first_row();

      }


    public function update_administrateur($data, $idadmin)
    {
        $this->db->where('idadmin', $idadmin);
        $this->db->update('administrateur', $data);
        return true;
    }




    public function sup_administrateur($id)
    {
        $this->db->where('idadmin', $id);
        $this->db->delete('administrateur');
    }



}

/* End of file Accueil_model.php */
/* Location: .//D/project-host/webhost/metro/coeur/modules/accueil/models/Accueil_model.php */
