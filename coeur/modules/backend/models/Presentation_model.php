<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Presentation_model extends CI_Model {

   /* function __construct() {
        parent::__construct();
    }*/
    //get informations from people connected







// SQL Presentation---------------------------------------------------------------------------------------------------

    //Ajout
    public function sql_Presentation_ajout($data)
    {
        $this->db->insert('presentation', $data);
    }

    //liste
    public function sql_Presentation_liste()
    {
        $this->db->order_by('id', 'desc');
        $q = $this->db->get('presentation');
        return $q->result();
    }

    // modification
    public function sql_update_Presentation($data, $id_Presentation)
    {
        $this->db->where('id', $id_Presentation);
        $this->db->update('presentation', $data);
    }

   //suppression
    public function delete_Presentation($id_Presentation)
    {
        $this->db->where('id', $id_Presentation);
        $this->db->delete('presentation');
    }

    // obtention
    public function get_Presentation($id_Presentation)
    {
        $this->db->where('id', $id_Presentation);
        $q = $this->db->get('presentation');
        if ($q->num_rows() > 0) {
            $data = $q->row();
            return $data;
        }
    }


 // fin article---------------------------------------------------------------------------------------------------










   }