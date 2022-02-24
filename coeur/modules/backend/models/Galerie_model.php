<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Galerie_model extends CI_Model {

   /* function __construct() {
        parent::__construct();
    }*/
    //get informations from people connected







// SQL actualite---------------------------------------------------------------------------------------------------

    //Ajout
    public function sql_galerieevent_ajout($data)
    {
        $this->db->insert('event', $data);
    }

    //liste
    public function sql_galerieevent_liste()
    {
        $this->db->order_by('id', 'asc');
        $q = $this->db->get('event');
        return $q->result();
    }

    // modification
    public function sql_update_galerieevent($data, $id_event)
    {
        $this->db->where('id', $id_event);
        $this->db->update('event', $data);
    }

   //suppression
    public function delete_galerieevent($id_event)
    {
        $this->db->where('id', $id_event);
        $this->db->delete('event');
    }

    // obtention
    public function get_galerieevent($id_event)
    {
        $this->db->where('id', $id_event);
        $q = $this->db->get('event');
        if ($q->num_rows() > 0) {
            $data = $q->row();
            return $data;
        }
    }





    //nombre de photo par event
    public function sql_nombrephoto($id_event)
    {
        $this->db->where('id_event', $id_event);
        $q = $this->db->get('photo');
        return $q->num_rows();
    }

 // fin article---------------------------------------------------------------------------------------------------





//////////////PHOTO/////////////////////

    //Ajout
    public function sql_galeriephoto_ajout($data)
    {
        $this->db->insert('photo', $data);
    }

    //liste
    public function sql_galeriephoto_liste($id_event)
    {
        $this->db->order_by('id', 'desc');
        $this->db->where('id_event', $id_event);
        $q = $this->db->get('photo');
        return $q->result();
    }

    // modification
    public function sql_update_galeriephoto($data, $id_photo)
    {
        $this->db->where('id', $id_photo);
        $this->db->update('photo', $data);
    }

   //suppression
    public function delete_galeriephoto($id_photo)
    {
        $this->db->where('id', $id_photo);
        $this->db->delete('photo');
    }

    // obtention
    public function get_galeriephoto($id_photo)
    {
        $this->db->where('id', $id_photo);
        $q = $this->db->get('photo');
        if ($q->num_rows() > 0) {
            $data = $q->row();
            return $data;
        }
    }









   }