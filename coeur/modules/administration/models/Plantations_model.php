<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plantations_model extends CI_Model {



      public function get_agriculteur($id_agri)
      {

        $this->db->where('idagri',$id_agri);
        $query = $this->db->get('agriculteur');
        return $query->first_row();

      }



      public function liste_plantation()
      {

        $query = $this->db->get('plantation');
        return $query->result();

      }


      public function ajout_plantation($donne)
      {

        $this->db->insert('plantation', $donne);

      }


      public function select_plantation($id_plant)
      {

        $this->db->where('idplant',$id_plant);
        $query = $this->db->get('plantation');
        return $query->first_row();

      }


      public function get_plantation($id_plant)
      {

        $this->db->where('idplant',$id_plant);
        $query = $this->db->get('plantation');
        return $query->first_row();

      }


    public function update_plantation($data, $idplant)
    {
        $this->db->where('idplant', $idplant);
        $this->db->update('plantation', $data);
        return true;
    }


    public function sup_plantation($id)
    {
        $this->db->where('idplant', $id);
        $this->db->delete('plantation');
    }



}

/* End of file Accueil_model.php */
/* Location: .//D/project-host/webhost/metro/coeur/modules/accueil/models/Accueil_model.php */
