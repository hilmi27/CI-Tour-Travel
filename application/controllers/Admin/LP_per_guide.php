<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LP_per_guide extends CI_Controller {

	function __construct()
    {
        parent::__construct();

         $this->load->model('Konfirmasi_t_model');
         $this->load->model('Tour_guide_model');
      
         $this->load->model('Pemesanan_tourguide_model');
         $this->load->library('pdf_report');

        if(!$this->session->userdata('level')){
            $this->session->set_flashdata('login_gagal', 'Anda Harus Login terlebih dahulu.');
            redirect('login');
        } else if($this->session->userdata('level') && ($this->session->userdata('level') == "touragent" )){
             $this->session->set_flashdata('login_gagal', 'Halaman Ini hanya dapat diakses oleh admin.');
            redirect('login');
        }

    }
	
	function index()
	{
        $pemesanan_guide = $this->db->get("pemesanan_tourguide");
        $data['bulan'] = $this->input->post('bulan') ? $this->input->post('bulan') : date("m");
        $data['tahun'] = $this->input->post('tahun') ? $this->input->post('tahun') : date("Y");
        $data['alamat'] = $this->input->post('alamat') ? $this->input->post('alamat') : "semua";

        if($data['alamat'] == "semua"){
            $alamat = "";
        } else {
             $alamat = $data['alamat'];
        }

        $id_tourguide = $this->session->userdata('id_tourguide');

        $data['laporan'] = $this->Pemesanan_tourguide_model->data_per_laporan($id_tourguide, $data['bulan'],$data['tahun'], $alamat);
        $data['_view'] = 'layouts/admin/laporan/tour_guide';
         $this->load->view('layouts/admin/main',$data);
    }

    function cetak($bulan,$tahun,$alamat)
    {
        if($alamat == "semua"){
            $alamat = "";
        }

        $id_tourguide = $this->session->userdata('id_tourguide');

        $data['laporan'] = $this->Pemesanan_tourguide_model->data_per_laporan($id_tourguide, $bulan,$tahun,$alamat);

        $this->load->view('pdf/laporan_per_guide',$data);
        // if($alamat == "semua"){
        //     $alamat = "";
        // }
        // $data['laporan'] = $this->Pemesanan_tourguide_model->data_laporan($bulan,$tahun,$alamat);
        // $this->load->view('pdf/laporan_guide',$data);
        // $html = $this->output->get_output();

        // Convert to PDF
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        //utk menampilkan preview pdf
        // $this->dompdf->stream("Laporan-Pemesanan-Guide.pdf", array('Attachment' => 0));

       // $data['p_guide'] = $this->Pemesanan_tourguide_model->get_all_pemesanan_tourguide();
       //  $data['_view'] = 'layouts/admin/laporan/cetak_lpguide';
       //   $this->load->view('layouts/admin/main',$data);
    }
}