<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login_model extends CI_Model {

   /* function __construct() {
        parent::__construct();
    }*/
    //get informations from people connected

   function getInfo_admin($login,$password){
      $this->db->where('email',$login);
      $this->db->where('pwd',sha1(md5($password)));
      $q = $this->db->get('comptebackend');
      if($q->num_rows()>0)
      {
          foreach ($q->result() as $lign)
          {
              $data[]=$lign;
          }

          return $data;
      }
    }


    function check_connection($login,$password){
      $this->db->where('email',$login);
      $this->db->where('pwd', sha1(md5($password)));
      $q = $this->db->get('comptebackend');
      if($q->num_rows()>0)
      {
         return True;
      }
      else
      {
        return False;
      }


    }




   }