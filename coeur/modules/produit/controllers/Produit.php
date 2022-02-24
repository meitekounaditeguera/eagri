<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        ini_set('allow_url_fopen',1);
        $this->load->model('produit_model');

    }



 public function liste($cate)
    {




      $this->db->where('id_event',$cate);
      $q=$this->db->get('photo');
      $num=$q->num_rows();


        $config['base_url'] = site_url("produit/liste/".$cate);
        $config['total_rows'] =$num ;
        $config['per_page'] = 20;
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;
        $config['full_tag_open'] = '<ul class="pagination-layout1 margin-t-20">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li> <a href="">';
        $config['first_tag_close'] = '</a> </li>';
        $config['last_tag_open'] = '<li> <a href="">';
        $config['last_tag_close'] = '</a> </li>';

        $config['cur_tag_open'] = '<li class="active"> <a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;




      $data['categorie']=$this->produit_model->sql_categorie();
      $data['event']=$this->produit_model->detail_event($cate);

      $data['listes_produit'] = $this->produit_model->liste_produit($config["per_page"], $page,$cate);
      $data["links"] = $this->pagination->create_links();
      $this->load->view('categorie',$data);


    }

    public function detail($id)
    {



        $data['categorie']=$this->produit_model->sql_categorie();
        $data['produit']=$this->produit_model->detail_produit($id);
        $this->load->view('produit',$data);

    }
















}

/* End of file Accueil.php */
/* Location: .//D/project-host/webhost/metro/coeur/modules/accueil/controllers/Accueil.php */