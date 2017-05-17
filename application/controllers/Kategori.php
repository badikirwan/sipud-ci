<?php
/**
 *
 */
class Kategori extends CI_Controller
{

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
      'contents'  => 'kategori/kategori',
      'aktif'     => 'kategori',
      'in'        => 'in',
      'menu'      => 'menu.php'
    );

    $this->breadcrumb->append_crumb('<i class="icon-home"></i> Home', site_url());
    $this->breadcrumb->append_crumb('Master Data', site_url('kategori'));
    $this->breadcrumb->append_crumb('Kategori', site_url('kategori'));
    $this->load->view('index', $data);
  }

}
