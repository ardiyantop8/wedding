<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umum extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Weeding_model');
		// $this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] 			= 'Wedding Ardi Desti';
		$data_get_url			= (isset($_GET['link']) ? $_GET['link'] : '');
		if (isset($data_get_url)) {
			$data['link_get']		= $this->Weeding_model->get_link($data_get_url);
		} else {
			$data['link_get']		= '';
		}
		$data['isi_resepsi'] 	= $this->Weeding_model->all_resepsi();
		$data['isi_sambutan'] 	= $this->Weeding_model->all_sambutan();
		$data['isi_cerita'] 	= $this->Weeding_model->all_cerita();
		$data['isi_adat'] 		= $this->Weeding_model->all_adat();
		$data['isi_galery'] 	= $this->Weeding_model->all_galery();
		$data['isi_sosmed'] 	= $this->Weeding_model->all_sosmed();
		// echo $_GET['link'];
		// die;
		$this->load->view('template/header-umum', $data);
		$this->load->view('template/topbar-umum', $data);
		$this->load->view('umum/home', $data);
		$this->load->view('template/footer-umum', $data);
	}
	function showAllResepsi()
	{
		$query =  $this->Weeding_model->showAllResepsi();
		if ($query) {
			$result['resepsi']  = $this->Weeding_model->showAllResepsi();
		}
		echo "<pre>";
		print_r($result);
		die;
		echo json_encode($result);
	}

	public function list_tamu()
	{
		echo "blaa";
		die;
	}
}
