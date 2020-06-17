<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
         $this->load->model('Konfirmasi_p_model');
         $this->load->model('Konfirmasi_t_model');
         $this->load->model('Pemesanan_model');
         $this->load->model('Pemesanan_tourguide_model');

    }
	
	function index($offset=0)
	{
		$pemesanan = $this->db->get("pemesanan");


        $config['total_rows']=$pemesanan->num_rows();
        $config['base_url']= base_url().'admin/Pemesanan/index';
        $config['per_page']= 10;


        $config['full_tag_open']="<ul class='pagination pagination-sm' style='position:relative; top: -25px'> ";
        $config['full_tag_close']="</ul>";
        $config['num_tag_open']="<li>";
        $config['num_tag_close']="</li>";
        $config['cur_tag_open']="<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']="<span class='sr-only'></span></a></li>";
        $config['next_tag_open']="<li>";
        $config['next_tag_close']="</li>";
        $config['prev_tag_open']="<li>";
        $config['prev_tag_close']="</li>";
        $config['first_tag_open']="<li>";
        $config['first_tag_close']="</li>";
        $config['last_tag_open']="<li>";
        $config['last_tag_close']="</li>";

        $this->pagination->initialize($config);
        
        $data['halaman']=$this->pagination->create_links();
        $data['offset']=$offset;

        $data['data']=$this->Pemesanan_model->ambil_data($config['per_page'], $offset);

    	$data['pemesanan'] = $this->Pemesanan_model->get_all_pemesanan();



    	 $p_guide = $this->db->get("pemesanan_tourguide");


        $config['total_rows']=$p_guide->num_rows();
        $config['base_url']= base_url().'admin/Pemesanan_guide/index';
        $config['per_page']= 5;


        $config['full_tag_open']="<ul class='pagination pagination-sm' style='position:relative; top: -25px'> ";
        $config['full_tag_close']="</ul>";
        $config['num_tag_open']="<li>";
        $config['num_tag_close']="</li>";
        $config['cur_tag_open']="<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close']="<span class='sr-only'></span></a></li>";
        $config['next_tag_open']="<li>";
        $config['next_tag_close']="</li>";
        $config['prev_tag_open']="<li>";
        $config['prev_tag_close']="</li>";
        $config['first_tag_open']="<li>";
        $config['first_tag_close']="</li>";
        $config['last_tag_open']="<li>";
        $config['last_tag_close']="</li>";

        $this->pagination->initialize($config);
        
        $data['page']=$this->pagination->create_links();
        $data['offset']=$offset;

        $data['ps_guide']=$this->Pemesanan_tourguide_model->ambil_data($config['per_page'], $offset);

        $this->db->select('*');
        $this->db->from('pemesanan_tourguide');
        $this->db->join('tour_guide', 'tour_guide.id_tourguide = pemesanan_tourguide.id_tourguide');

        // $data['pemesanan'] = $this->Pemesanan_model->get_all_pemesanan();
        $data['pemesanan_tourguide'] = $this->db->get()->result_array();
		$data['_view'] = 'layouts/admin/laporan/index';
         $this->load->view('layouts/admin/main',$data);
	}

	
}

