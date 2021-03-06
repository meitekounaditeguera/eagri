<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agriculteurs_model extends CI_Model {




      public function liste_agriculteur()
      {

        $this->db->select('*');
        $this->db->from('agriculteur');
        $this->db->join('departement','departement.iddep = agriculteur.iddep ');

        $query = $this->db->get();
        return $query->result();

      }

       public function liste_dep()
      {

        $query = $this->db->get('departement');
        return $query->result();

      }

         public function modifie_dep()
      {

        $query = $this->db->get('departement');
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

      public function selects_agriculteur($id_agri)
      {

        $this->db->where('idagri',$id_agri);
        $query = $this->db->get('accueil');
        return $query->first_row();

      }




      public function get_agriculteur($id_agri)
      {

        $this->db->where('idagri',$id_agri);
        $query = $this->db->get('agriculteur');
        return $query->first_row();

      }


      public function get_liste_plantation_agriculteur($id_agri)
      {
        $this->db->select('*');
        $this->db->from('plantation');
        $this->db->join('departement','departement.iddep = plantation.iddep ');
        $this->db->where('idagri',$id_agri);
        $query = $this->db->get();
        return $query->result();

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
