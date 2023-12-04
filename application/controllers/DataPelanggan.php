<!--Gilang Abimanyu (A11.2019.11753)-->
<?php
class DataPelanggan extends CI_Controller{
    public function panggil_data()
	{
		$this->load->model('model_dataplgn');
		$data['pelangganku']=$this->model_dataplgn->baca_data();
		$this->load->view('tampil_pelanggan',$data);
		
	} 
	public function simpan()
	{
		$kode=$this->input->post('xkd');
		$nmplgn=$this->input->post('xnm');
	  	$almt=$this->input->post('xalmt');
	  	$tlp=$this->input->post('xtlp');
	  	$kt=$this->input->post('xkt');
		  
		$data=array(
	       	'kode'		 =>$kode,
			'nama_plggn' =>$nmplgn,
		  	'alamat'		 =>$almt,
		  	'no_telp'		 =>$tlp,
		  	'kota'			 =>$kt,
	   	);
	    $this->load->model('model_dataplgn');
		$this->model_dataplgn->tambah_data($data,'pelanggan');
		redirect('datapelanggan/panggil_data');
	}
	
	public function hapus_data($kode)
	{
		$kunci=array('kode' =>$kode);
		$this->load->model('model_dataplgn');
		$this->model_dataplgn->hapus_data($kunci,'pelanggan');
		redirect('datapelanggan/panggil_data'); 
	}
	
	public function edit($kode)   
	{
		$kunci=array('kode' =>$kode);
		$this->load->model('model_dataplgn');
		$data['pelangganku']=$this->model_dataplgn->edit_data($kunci,'pelanggan')->result();
		$this->load->view('formUpdateplgn',$data);
	}
	public function update()
	{
		$kode=$this->input->post('xkd');
		$nmplgn=$this->input->post('xnm');
	  	$almt=$this->input->post('xalmt');
	  	$tlp=$this->input->post('xtlp');
	  	$kt=$this->input->post('xkt');
		$data=array(
	       	'kode'		 =>$kode,
			'nama_plggn' =>$nmplgn,
		  	'alamat'		 =>$almt,
		  	'no_telp'		 =>$tlp,
		  	'kota'			 =>$kt,
	   	);
		$kunci=array('kode' =>$kode);
		$this->load->model('model_dataplgn');
		$this->model_dataplgn->ubah_data($kunci,$data,'pelanggan');
		redirect('datapelanggan/panggil_data'); 
	}
}
?>