<?php
class Model_Data extends CI_Model{
    public function baca_data()
	{
		return $this->db->get('barang_uas')->result_array();
	}
	public function tambah_data($tabel,$data)
	{
		$this->db->insert($data,$tabel);
	}
	public function hapus_data($data,$tabel)
	{
		$this->db->where($data);
		$this->db->delete($tabel);
	}
	public function edit_data($data,$tabel)
	{
		return $this->db->get_where($tabel,$data);
	}
	public function ubah_data($kunci,$data,$tabel)
	{
		$this->db->set($data);
		$this->db->where($kunci);
		$this->db->update($tabel,$data);
		//if ($this->db->update($tabel))
		//{
		//	$value='update data succes';
		//}
		//else
		//{
		//	$value='update gagal';
		//}
		//return $value;
	}

}
?>
