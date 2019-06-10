<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jaldis extends CI_Controller {
	public function index(){
		$data['jaldis'] = '';
		if(($this->input->post('start_date') AND $this->input->post('end_date'))==NULL){
			$q = "SELECT a.*,(SELECT COUNT(b.id) FROM detail_jaldis b WHERE b.kode_jaldis=a.kode_jaldis) AS jumlah_rombongan FROM jaldis a WHERE a.deleted='0' ORDER BY `a`.`start_date` DESC";
	        $data['jaldis'] = $this->User_model->manualQuery($q)->result();
		}else{
			$start_date = $this->input->post('start_date');
			$end_date = $this->input->post('end_date');
			$q = "SELECT a.*,(SELECT COUNT(b.id) FROM detail_jaldis b WHERE b.kode_jaldis=a.kode_jaldis) AS jumlah_rombongan FROM jaldis a WHERE (a.start_date BETWEEN '".$start_date."' AND '".$end_date."') AND a.deleted='0' ORDER BY `a`.`start_date` DESC";
			$data['jaldis'] = $this->User_model->manualQuery($q)->result();
		}
		$data['active'] = 'jaldis';
		$data['sub'] = '';
		$data['sub2'] = '';
		$this->load->view('Pengguna/Template/header',$data);
		$this->load->view('Pengguna/Jaldis/list_data',$data);
		$this->load->view('Pengguna/Template/footer');
	}
	public function detail_data(){
		$data['active'] = 'jaldis';
		$data['sub'] = '';
		$data['sub2'] = '';
		$where['kode_jaldis'] = $this->uri->segment(2);
    	$data['detail_jaldis'] = $this->Main_model->getDetailJaldis($this->uri->segment(2));
    	$data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where);
    	$data['akun'] = $this->Master_model->getDataAkun($this->uri->segment(2));
		$data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where);
		$this->load->view('Pengguna/Template/header',$data);
		$this->load->view('Pengguna/Jaldis/detail_data',$data);
		$this->load->view('Pengguna/Template/footer');
	}
	public function cetak_data(){
		$data['data_jaldis'] = $this->Main_model->getDataJaldis();
		$this->load->view('Pengguna/Jaldis/cetak_data',$data);
	}
}