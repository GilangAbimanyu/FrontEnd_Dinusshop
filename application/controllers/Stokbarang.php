<?php
class StokBarang extends CI_Controller{
    public function panggil_barang()
	{
		$this->load->model('model_data');
		$data['barangku']=$this->model_data->baca_data();
		$this->load->view('panggil_barang',$data);
		
	} 
	public function panggil_tampilan()
	{
		$this->load->model('model_data');
		$data['barangku']=$this->model_data->baca_data();
		$this->load->view('panggil_tampilan',$data);
		
	} 
	public function detail()
    {
        $this->load->model('model_data');
        $data['barangku'] = $this->model_data->baca_data();
        $this->load->view('panggil_tampilan', $data);
    }
    public function detail_produk()
    {
        $this->load->model('model_data');
        $data['barangku'] = $this->model_data->baca_data();
        $this->load->view('detail_produk', $data);
    }
	public function simpan()
	{
		$kode 			= $this->input->post('kode');
		$nama_barang 	= $this->input->post('nama_barang');
		$harga 			= $this->input->post('harga');
		$gambar 		= $_FILES['gambar'];
		if ($gambar=''){}else{
			$config['upload_path']		= './image';
			$config['allowed_types'] 	= 'jpg|png|gif';
			
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "Upload Gambar Gagal!";die();
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}
		
		$data=array(
	       		'kode'		 	=>$kode,
				'nama_barang' 	=>$nama_barang,
				'harga'			=>$harga,
				'gambar'		=>$gambar,
	   	);
		
		$this->load->model('model_data');
		$this->model_data->tambah_data($data,'barang_uas');
		redirect('stokbarang/panggil_barang'); 

	}
	
	public function hapus_data($kode)
	{
		$kunci = array('kode' => $kode);
        $this->load->model('model_data');
        $this->model_data->hapus_data($kunci, 'barang_uas');
		redirect('stokbarang/panggil_barang'); 
	}
	
	public function edit($kode)   
	{
		$kunci=array('kode' =>$kode);
		$this->load->model('model_data');
		$data['barangku']=$this->model_data->edit_data($kunci,'barang_uas')->result();
		$this->load->view('formUpdate',$data);
	}
	public function update()
	{
		$kode = $this->input->post('kode');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$gambar = $this->input->post('gambar');
		
		$data=array(
	       		'kode'		 	=>$kode,
				'nama_barang' 	=>$nama_barang,
				'harga'			=>$harga,
				'gambar'		=>$gambar,
	   	);
		
		$kunci=array( 'kode' =>$kode);
	    $this->load->model('model_data');
		$this->model_data->ubah_data($kunci,$data,'barang_uas');
		redirect('stokbarang/panggil_barang'); 

        }
    }

?>