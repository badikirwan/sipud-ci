<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array(
			'contents' 	=> 'dashboard' ,
			'penduduk'  => '',
      'master'    => '',
			'title'			=> 'SIPUD',
			'menu'			=> 'menu.php'
		);
		$this->load->view('index', $data);
	}

	public function agama()
	{
			$data['active'] = 'active';
			$data['contents'] = 'agama/agama';
			$this->load->view('index', $data);
	}
}
