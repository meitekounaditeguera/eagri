<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agriculteurs_model extends CI_Model {




      public function liste_agriculteur()
      {

        $query = $this->db->get('agriculteur');
        return $query->result();

      }


      public function ajout_agriculteur($donne)
      {

        $this->db->insert('agriculteur', $donne);

      }



      public function select_agriculteur($id_agri)
      {

        $this->db->where('idagri',$id_agri);
        $query = $this->db->get('agriculteur');
        return $query->first_row();

      }

    public function update_agriculteur($data, $idagri)
    {
        $this->db->where('idagri', $idagri);
        $this->db->update('agriculteur', $data);
        return true;
    }




    public function sup_agriculteur($id)
    {
        $this->db->where('idagri', $id);
        $this->db->delete('agriculteur');
    }



}

/* End of file Accueil_model.php */
/* Location: .//D/project-host/webhost/metro/coeur/modules/accueil/models/Accueil_model.php */
