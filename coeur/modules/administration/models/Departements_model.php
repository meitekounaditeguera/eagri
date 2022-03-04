<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departements_model extends CI_Model {




      public function liste_departement()
      {

        $query = $this->db->get('departement');
        return $query->result();

      }


      public function ajout_departement($donne)
      {

        $this->db->insert('departement', $donne);

      }



      public function select_departement($id_dep)
      {

        $this->db->where('iddep',$id_dep);
        $query = $this->db->get('departement');
        return $query->first_row();

      }

        public function get_departement($id_dep)
      {

        $this->db->where('iddep',$id_dep);
        $query = $this->db->get('departement');
        return $query->first_row();

      }


 public function update_departement($data, $iddep)
    {
        $this->db->where('iddep',$iddep);
        $this->db->update('departement', $data);
        return true;
    }



    public function sup_departement($id)
    {
        $this->db->where('iddep', $id);
        $this->db->delete('departement');
    }



}

/* End of file Accueil_model.php */
/* Location: .//D/project-host/webhost/metro/coeur/modules/accueil/models/Accueil_model.php */
