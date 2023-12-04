<?php
class StokBarang extends CI_Controller{
    public function panggil_barang()
	{
		$this->load->model('model_data');
		$data['barangku']=$this->model_data->baca_data();
		$this->load->view('tampil_barang',$data);
		
	} 
	public function simpan()
	{
	$kode=$this->input->post('xkdbrg');
		$nmbrg=$this->input->post('xnmbrg');
	  	$hgbrg=$this->input->post('xhgbrg');
		  
		$data=array(
	       	'kode'		 =>$kode,
			'nama_barang' =>$nmbrg,
		  	'harga'		 =>$hgbrg,
	   	);
	    $this->load->model('model_data');
		$this->model_data->tambah_data($data,'barang');
		redirect('stokbarang/panggil_barang');
	}
	
	public function hapus_data($kode)
	{
		$kunci=array('kode' =>$kode);
		$this->load->model('model_data');
		$this->model_data->hapus_data($kunci,'barang');
		redirect('stokbarang/panggil_barang'); 
	}
	
	public function edit($kode)   
	{
		$kunci=array('kode' =>$kode);
		$this->load->model('model_data');
		$data['barangku']=$this->model_data->edit_data($kunci,'barang')->result();
		$this->load->view('formUpdate',$data);
	}
	public function update()
	{
		$kode=$this->input->post('xkdbrg');
		$nama=$this->input->post('xnmbrg');
		$harga=$this->input->post('xhgbrg');
		$data=array(
			'kode'		 	=>$kode,
		   	'nama_barang'	=>$nama,
		   	'harga'		 	=>$harga);
		$kunci=array('kode' =>$kode);
		$this->load->model('model_data');
		$this->model_data->ubah_data($kunci,$data,'barang');
		redirect('stokbarang/panggil_barang'); 
	}
}
?>