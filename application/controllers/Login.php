<?php
/**
 *
 */
class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('M_login');
  }

  public function index()
  {
    if (empty($this->session->userdata('username'))){
      $this->load->view('login');
    } else {
      redirect('dashboard');
    }
  }

//Fungsi untuk login serta auth
  public function signin() {
    $data = array('username' => $this->input->post('username', TRUE) ,
                  'password' => md5($this->input->post('password', TRUE)));
    $hasil = $this->M_login->auth($data);
    if ($hasil->num_rows() > 0) {
      foreach ($hasil->result() as $sess) {
        $sess_data['logged_in'] = 'Sudah Loggin';
        $sess_data['user_id']   = $sess->user_id;
        $sess_data['username']  = $sess->username;
        $sess_data['nama']      = $sess->nama;
        $sess_data['akses']     = $sess->akses;
        $this->session->set_userdata($sess_data);
      }
        redirect('dashboard');
    } else {
      $this->session->set_flashdata('error', 'Maaf, username atau password salah!');
      redirect('login');
    }
  }

//Fungsi untuk menghapus session dan loggout
  public function signout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }
}
