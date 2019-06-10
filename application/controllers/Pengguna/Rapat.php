<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapat extends CI_Controller {
	public function index(){
		$data['active'] = 'rapat';
		$data['sub'] = '';
		$data['sub2'] = '';
		$data['data_tabel'] = $this->Rapat_model->getAlldataRapat();
		$this->load->view('Pengguna/Template/header',$data);
		$this->load->view('Pengguna/Rapat/list_data',$data);
		$this->load->view('Pengguna/Template/footer');
	}
	public function ajax_rapat(){
		$id = $this->input->post('id');
		$modul = $this->input->post('modul');
		if($modul=='modul_detail_data_rapat'){
			$q = "SELECT * FROM `rapat` WHERE `rapat`.`id`='".$id."' ORDER BY `rapat`.`tanggal` DESC";
			$data['data_ajax'] = $this->Main_model->manualQuery($q)->result();
			$this->load->view('Pengguna/Rapat/ajax_detail_data_rapat',$data);
		}
	}
}