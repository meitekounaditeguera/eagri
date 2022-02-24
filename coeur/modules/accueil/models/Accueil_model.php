<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil_model extends CI_Model {



           //SQL actualite
            public function sql_categorie()
            {
                $this->db->order_by('id', 'asc');
                $q = $this->db->get('event');
                return $q->result();
            }


           //SQL actualite
            public function sql_produit_accueil()
            {
                $this->db->order_by('id','RANDOM');
                $this->db->limit(10);
                $q = $this->db->get('photo');
                return $q->result();
            }



                  //Liste ou tableau des photo
              public function sql_photo_accueil($idalbum)
              {

                  $this->db->select('*')->from('photo');
                  $this->db->where('id_event',$idalbum);
                  $this->db->order_by('id','asc');
                  $this->db->limit(1);
                  $sql=$this->db->get();
                  return $sql->first_row();

              }



          public function sql_contact()

          {
              $this->db->limit(1);
              $q=$this->db->get('contact');
              return $q->first_row();

          }





/*











            //nombre de photo par event
            public function sql_nombrephoto($id_event)
            {
                $this->db->where('id_event', $id_event);
                $q = $this->db->get('photo');
                return $q->num_rows();
            }

*/

}

/* End of file Accueil_model.php */
/* Location: .//D/project-host/webhost/metro/coeur/modules/accueil/models/Accueil_model.php */
