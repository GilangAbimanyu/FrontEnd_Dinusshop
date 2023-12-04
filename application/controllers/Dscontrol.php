<?php 
//defined('BASEPATH') OR exit('No direct script access allowed');
//	class DsControl extends CI_Controller {
//	   public function index() { 
//		   $this->load->helper('url'); 
//		   $this->load->model('model_data');
//		   $data['barangku']=$this->model_data->baca_data();
//		   $this->load->view('brand',$data);
//      } 
//   } 
 class DsControl extends CI_Controller{
    public function brand()
	{
		$this->load->view('brand');
		
	} 
	public function detail()
	{
		$this->load->view('detail');
		
	} 
 }
?>