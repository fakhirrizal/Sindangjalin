<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
	public function index(){
		$data['active'] = 'agenda';
		$data['sub'] = '';
		$data['sub2'] = '';
		$data['data_tabel'] = $this->Master_model->getdataagenda();
		$this->load->view('Pengguna/Template/header',$data);
		$this->load->view('Pengguna/Agenda/list_data',$data);
		$this->load->view('Pengguna/Template/footer');
	}
	public function ajax_agenda(){
		$id = $this->input->post('id');
		$modul = $this->input->post('modul');
		if($modul=='modul_detail_data_agenda'){
			$q = "SELECT * FROM `agenda` WHERE `agenda`.`id`='".$id."' ORDER BY `agenda`.`tanggal` DESC";
			$data['data_ajax'] = $this->Main_model->manualQuery($q)->result();
			$this->load->view('Pengguna/Agenda/ajax_detail_data_agenda',$data);
		}
	}
}