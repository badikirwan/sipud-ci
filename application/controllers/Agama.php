<?php
/**
 *
 */
class Agama extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $config['tag_open']   = '<ol class="breadcrumb breadcrumb-3">';
		$config['tag_close']  = '</ol>';
		$config['li_open']    = '<li>';
		$config['li_close']   = '</li>';
		$config['divider']    = '<span class="divider"> / </span>';
		$this->breadcrumb->initialize($config);
    //$this->load->model('M_agama');
  }

  public function index()
  {
    $data = array(
      'contents'  => 'agama/agama',
      'penduduk'  => '',
      'master'    => 'active in',
      'title'     => 'Agama',
      'menu'      => 'menu.php',
      'all'       => $this->db->get('agama')->result()
    );

    $this->breadcrumb->append_crumb('<i class="icon-home"></i> Home', site_url());
    $this->breadcrumb->append_crumb('Master Data', site_url('agama'));
    $this->breadcrumb->append_crumb('Agama', site_url('agama'));
    $this->load->view('index', $data);
  }

  public function add()
  {
    $this->form_validation->set_rules('id', 'id', 'required');
    $this->form_validation->set_rules('agama', 'agama', 'required');

    if ($this->form_validation->run() == FALSE) {

    } else {
      $data = array(
        'id_agama'  => $this->input->post('id'),
        'agama'     => $this->input->post('agama')
      );
    }
    $this->db->insert('agama', $data);
    redirect('agama');
  }

  public function update()
  {

  }

  public function delete($id)
  {
    $this->db->where('id_agama', $id)
             ->delete('agama');
    //redirect('agama');
  }


}
