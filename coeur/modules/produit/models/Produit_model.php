<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit_model extends CI_Model {


           //SQL actualite
            public function sql_categorie()
            {
                $this->db->order_by('id', 'asc');
                $q = $this->db->get('event');
                return $q->result();
            }



            //Liste ou tableau des photo
        public function sql_photo($idalbum)
        {

            $this->db->select('*')->from('photo');
            $this->db->where('id_event',$idalbum);
            $this->db->order_by('id','asc');
            $this->db->limit(1);
            $sql=$this->db->get();
            return $sql->first_row();

        }



        //nombre de photo par event
        public function sql_nombrephoto($id_event)
        {
            $this->db->where('id_event', $id_event);
            $q = $this->db->get('photo');
            return $q->num_rows();
        }







      public function detail_produit($id)

      {
            $this->db->select('*')->from('photo');
            $this->db->where('id',$id);
            $sql=$this->db->get();
            return $sql->first_row();

      }



      public function liste_produit($limit, $start,$cate)

      {
            $this->db->select('*')->from('photo');
            $this->db->where('id_event',$cate);
           $this->db->limit($limit, $start);
            $this->db->order_by('id','desc');
            $sql=$this->db->get();
            return $sql->result();

      }



      public function detail_event($cate)

      {
            $this->db->select('*')->from('event');
            $this->db->where('id',$cate);
            $sql=$this->db->get();
            return $sql->first_row();

      }

}

/* End of file Accueil_model.php */
/* Location: .//D/project-host/webhost/metro/coeur/modules/accueil/models/Accueil_model.php */
