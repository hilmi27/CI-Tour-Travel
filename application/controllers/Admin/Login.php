<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('layouts/admin/login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('id',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin=$this->login_model->auth_admin($username,$password);

        if($cek_admin->num_rows() > 0){ //jika login sebagai dosen
						$data=$cek_admin->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['user_level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['id']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');

		         }else{ //akses dosen
		            $this->session->set_userdata('akses','2');
								$this->session->set_userdata('ses_id',$data['id']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');
		         }

        }else{ //jika login sebagai mahasiswa
					$cek_touragent=$this->login_model->auth_touragent($username,$password);
					if($cek_touragent->num_rows() > 0){
							$data=$cek_touragent->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id',$data['id']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('page');
					}else{  // jika username dan password tidak ditemukan atau salah
							$url=base_url();
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect($url);
					}
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}
