<?php
/**
 *
 */
class Penduduk extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $config['tag_open']   = '<ol class="breadcrumb breadcrumb-3"';
    $config['tag_close']  = '</ol>';
    $config['li_open']    = '<li>';
    $config['li_close']   = '</li>';
    $config['divider']    = '<span class="divider"> / </span>';
    $this->breadcrumb->initialize($config);
    $this->load->model('m_penduduk');
  }

  public function index()
  {
    $data = array(
      'contents'  => 'penduduk/kk',
      'penduduk'  => 'active in',
      'master'    => '',
      'title'     => 'penduduk',
      'menu'      => 'menu.php',
      'all'       => $this->db->get('data_kk')->result()
    );

    $this->breadcrumb->append_crumb('<i class="icon-home"></i> Home', site_url());
    $this->breadcrumb->append_crumb('Master Data', site_url('penduduk'));
    $this->breadcrumb->append_crumb('Penduduk', site_url('penduduk'));
    $this->load->view('index', $data);
  }

/*START FUNGSI DI DATA KK*/
//Fungsi untuk mengambil data KK berdasarkan ID
  public function get_id_kk($id)
  {
    $data = $this->m_penduduk->get_by_id($id);
    echo json_encode($data);
  }

//Fungsi tambah data KK
  public function add_kk()
  {
    $data = array(
      'no_kk'       => $this->input->post('no_kk'),
      'desa'        => $this->input->post('desa'),
      'dusun'       => $this->input->post('dusun'),
      'rt'          => $this->input->post('rt'),
      'rw'          => $this->input->post('rw'),
      'kecamatan'   => $this->input->post('kec'),
      'kab_kota'    => $this->input->post('kab_kota'),
      'kode_pos'    => $this->input->post('kd_pos'),
      'provinsi'    => $this->input->post('prov')
    );

    $this->m_penduduk->add_kk($data);
    redirect('penduduk');
  }

//Fungsi untuk merubah data KK
  public function update_kk()
  {
    $id = $this->input->post('id');
    $data = array(
      'no_kk'       => $this->input->post('no_kk'),
      'desa'        => $this->input->post('desa'),
      'dusun'       => $this->input->post('dusun'),
      'rt'          => $this->input->post('rt'),
      'rw'          => $this->input->post('rw'),
      'kecamatan'   => $this->input->post('kec'),
      'kab_kota'    => $this->input->post('kab_kota'),
      'kode_pos'    => $this->input->post('kd_pos'),
      'provinsi'    => $this->input->post('prov')
     );

     $this->m_penduduk->update_kk($data, $id);
  }

//Fungsi untuk menghapus data KK
  public function delete_kk($id)
  {
    $this->m_penduduk->delete_kk($id);
  }

//Fungsi untuk melihat data penduduk per KK
  public function detail_kk($id)
  {
    $no_kk = $this->m_penduduk->get_no_kk($id);
    $data  = array(
      'contents'  => 'penduduk/detail_kk',
      'penduduk'  => 'active in',
      'master'    => '',
      'title'     => 'penduduk',
      'menu'      => 'menu.php',
      'all'       => $this->m_penduduk->detail_kk($id)->result(),
      'id'        => $id,
      'no_kk'     => $no_kk
    );

    $this->breadcrumb->append_crumb('<i class="icon-home"></i> Home', site_url());
    $this->breadcrumb->append_crumb('Master Data', site_url('penduduk'));
    $this->breadcrumb->append_crumb('Detail KK No.'.$no_kk, site_url('penduduk'));
    $this->load->view('index', $data);
  }
/*END FUNGSI DI DATA KK*/

/*Fungsi tambah penduduk*/
  public function add_penduduk($id)
  {
    $data = array(
      'contents'  => 'penduduk/add_penduduk',
      'penduduk'  => 'active in',
      'master'    => '',
      'title'     => 'penduduk',
      'menu'      => 'menu.php',
      'all'       => $this->m_penduduk->detail_kk($id)->result(),
      'agama'     => $this->db->get('agama')->result(),
      'id'        => $id
    );

    $this->breadcrumb->append_crumb('<i class="icon-home"></i> Home', site_url());
    $this->breadcrumb->append_crumb('Master Data', site_url('penduduk'));
    $this->breadcrumb->append_crumb('Detail KK', site_url('penduduk'));
    $this->load->view('index', $data);
  }
/*END Fungsi tambah penduduk*/

/*Fungsi proses tambah penduduk*/
  public function proc_add_penduduk()
  {
    $id = $this->input->post('no_kk');
    $this->form_validation->set_rules('nik','nik','required');
    $this->form_validation->set_rules('nama','nama','required');
    $this->form_validation->set_rules('tmp_lahir','tmp_lahir','required');
    $this->form_validation->set_rules('tgl_lahir','tgl_lahir','required');
    $this->form_validation->set_rules('jk','jk','required');
    $this->form_validation->set_rules('golongan_darah','golongan_darah','required');
    $this->form_validation->set_rules('alamat','alamat','required');
    $this->form_validation->set_rules('pekerjaan','pekerjaan','required');
    $this->form_validation->set_rules('negara','negara','required');
    $this->form_validation->set_rules('agama','agama','required');

    if ($this->form_validation->run() == FALSE) {
      $this->session->set_flashdata('error', 'Data gagal di simpan');
      redirect('penduduk/add_penduduk/'.$id);
    } else {
      $this->load->library('upload');
      $nmfile                   = "file_".time();
      $config['upload_path']    = 'upload/';
      $config['allowed_types']  = 'gif|jpg|png|jpeg|bmp';
      $config['max_size']       = '3072';
      $config['max_width']      = '5000';
      $config['max_height']     = '5000';
      $config['file_name']      = $nmfile;
      $this->upload->initialize($config);

      if($_FILES['gambar']['name']) {
        if ($this->upload->do_upload('gambar')) {
          $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
        } else {
          $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
        }
      }

      $data = array(
        'nik'               => $this->input->post('nik'),
        'nama'              => strtoupper($this->input->post('nama')),
        'tempat_lahir'      => strtoupper($this->input->post('tmp_lahir')),
        'tanggal_lahir'     => $this->input->post('tgl_lahir'),
        'jenis_kelamin'     => $this->input->post('jk'),
        'golongan_darah'    => $this->input->post('golongan_darah'),
        'alamat'            => strtoupper($this->input->post('alamat')),
        'pekerjaan'         => strtoupper($this->input->post('pekerjaan')),
        'kewarganegaraan'   => $this->input->post('negara'),
        'agama'             => strtoupper($this->input->post('agama')),
        'foto'              => $this->upload->data('file_name'),
        'id_kk'             => $id
      );

      $this->m_penduduk->add_penduduk($data);
      redirect('penduduk/detail_kk/'.$id);
    }
  }

}

/* End of file Penduduk.php */
/* Location : application/controllers/Penduduk.php */
