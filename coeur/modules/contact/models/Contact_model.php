<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {




           //SQL actualite
            public function sql_categorie()
            {
                $this->db->order_by('id', 'asc');
                $q = $this->db->get('event');
                return $q->result();
            }






      public function sql_contact()

      {
          $this->db->limit(1);
          $q=$this->db->get('contact');
          return $q->first_row();

      }







}

/* End of file Accueil_model.php */
/* Location: .//D/project-host/webhost/metro/coeur/modules/accueil/models/Accueil_model.php */
