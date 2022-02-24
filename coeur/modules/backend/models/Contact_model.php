<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Contact_model extends CI_Model {

   /* function __construct() {
        parent::__construct();
    }*/
    //get informations from people connected





// SQL evenement---------------------------------------------------------------------------------------------------

    //Ajout
    public function sql_contact_ajout($data)
    {
        $this->db->insert('contact', $data);
    }

    //liste
    public function sql_contact_liste()
    {
        $this->db->order_by('id', 'desc');
        $q = $this->db->get('contact');
        return $q->result();
    }

    // modification
    public function sql_update_contact($data, $id_contact)
    {
        $this->db->where('id', $id_contact);
        $this->db->update('contact', $data);
    }

   //suppression
    public function delete_contact($id_contact)
    {
        $this->db->where('id', $id_contact);
        $this->db->delete('contact');
    }

    // obtention
    public function get_contact($id_contact)
    {
        $this->db->where('id', $id_contact);
        $q = $this->db->get('contact');
        if ($q->num_rows() > 0) {
            $data = $q->row();
            return $data;
        }
    }


 // fin article---------------------------------------------------------------------------------------------------






   }