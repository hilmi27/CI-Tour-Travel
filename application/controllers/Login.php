<?php
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
 
        $this->load->model(array('login_model'));
        
    }
    function index() {
        if($this->session->userdata('nama')){
            redirect('admin/dashboard');
        }
        $this->load->view('layouts/admin/login');    
    }



    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' =>sha1("ditambahi_iki_ben_rodo_mbulet_sitik".md5($password))
            );
        $cek = $this->m_login->cek_login("admin",$where)->num_rows();
        if($cek > 0){
            $datagambar = $this->User_model->datagambar($username);
            echo $datagambar->gambar;
            die();
            $data_session = array(
                'status' => "login",
                'gambar' => $datagambar->gambar
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("admin"));
 
        }else{
            echo "Username dan password salah !";
        }
    }



    function proses() {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layouts/admin/login');
        } else {

            $usr = $this->input->post('username');
            $psw = $this->input->post('password');
            $u = $usr;
            $p = sha1("ditambahi_iki_ben_rodo_mbulet_sitik".md5($psw));
            $cek = $this->login_model->cek($u, md5($psw));
            if ($cek->num_rows() > 0) {
                //login berhasil, buat session
                // die();
                foreach ($cek->result() as $user) {
                    $data_session['id'] = $user->id_user;
                    if($user->level == "tourguide"){
                        $data_session['id_tourguide'] = $user->id_tourguide;
                    } else {
                        $data_session['id_touragent'] = $user->id_touragent;
                    }
                    
                    $data_session['nama'] = $user->nama;
                    $data_session['level'] = $user->level;
                    $data_session['gambar'] = $user->gambar;
                   
                    $this->session->set_userdata($data_session);
                }
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('login_gagal', '<br>Username atau Password yang anda masukkan salah.');
                redirect('login');
            }
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
