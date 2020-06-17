<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class L_Pemesanguide extends CI_Controller {

	function __construct()
    {
        parent::__construct();
         $this->load->model('Konfirmasi_t_model');
         $this->load->model('Pemesanan_tourguide_model');
         $this->load->model('Tour_guide_model');
         $this->load->library('pdf_report');

        if(!$this->session->userdata('level')){
            $this->session->set_flashdata('login_gagal', 'Anda Harus Login terlebih dahulu.');
            redirect('login');
        } else if($this->session->userdata('level') && ($this->session->userdata('level') == "tourguide" || $this->session->userdata('level') == "tourguide")){
             $this->session->set_flashdata('login_gagal', 'Halaman Ini hanya dapat diakses oleh admin.');
            redirect('login');
        }

    }
	
	function index()
    {
        $guide = $this->db->get("pemesanan_tourguide");
        $data['guide'] = $this->Pemesanan_tourguide_model->laporanpemesan();
        $data['_view'] = 'layouts/admin/laporan/pemesanguide';
        $this->load->view('layouts/admin/main',$data);

  //       $guide = $this->db->get("pemesanan_tourguide");
  //   	$data['guide'] = $this->Pemesanan_tourguide_model->laporanguide();
		// $data['_view'] = 'layouts/admin/laporan/pemesanguide';
  //        $this->load->view('layouts/admin/main',$data);
	}

    function cetak($bulan,$tahun)
    {
        $data['laporan'] = $this->Pemesanan_model->data_laporan($bulan,$tahun);

        $this->load->view('pdf/laporan_paket',$data);

        $html = $this->output->get_output();

        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        //utk menampilkan preview pdf
        $this->dompdf->stream("Laporan-Pemesanan-Paket.pdf", array('Attachment' => 0));
    }

	
}

