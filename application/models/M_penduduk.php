<?php
/**
 *
 */
class M_penduduk extends CI_Model {

  public function get_by_id($id)
  {
		$this->db->from('data_kk')
		         ->where('id_kk',$id);
		$query = $this->db->get();

		return $query->row();
	}

  public function get_no_kk($id)
  {
    $query = $this->db->select('no_kk')
                      ->where('id_kk', $id)
                      ->get('data_kk');
    return $query->row()->no_kk;
  }
  public function add_kk($data)
  {
    $this->db->insert('data_kk', $data);
  }

  public function update_kk($data,$id)
  {
    $this->db->where('id_kk', $id)
             ->update('data_kk', $data);
  }

  public function delete_kk($id)
  {
    $this->db->where('id_kk', $id)
             ->delete('data_kk');
  }

  public function detail_kk($id)
  {
    return $this->db->where('id_kk', $id)
                    ->get('penduduk');
  }

  public function add_penduduk($data)
  {
    $this->db->insert('penduduk', $data);
  }
}
