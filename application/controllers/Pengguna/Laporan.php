<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	/* JalDis */
	public function jaldis(){
		$q = "SELECT a.*,(SELECT COUNT(b.id) FROM detail_jaldis b WHERE b.kode_jaldis=a.kode_jaldis) AS jumlah_rombongan FROM jaldis a WHERE a.deleted='0' AND a.catatan!='' ORDER BY `a`.`start_date` DESC";
		$data['jaldis'] = $this->User_model->manualQuery($q)->result();
		$data['active'] = 'laporan';
		$data['sub'] = 'jaldis';
		$data['sub2'] = '';
		$this->load->view('Pengguna/Template/header',$data);
		$this->load->view('Pengguna/Laporan/jaldis',$data);
		$this->load->view('Pengguna/Template/footer');
	}
	public function detail_jaldis(){
		$data['active'] = 'laporan';
		$data['sub'] = 'jaldis';
		$data['sub2'] = '';
		$where['kode_jaldis'] = $this->uri->segment(3);
    	$data['detail_jaldis'] = $this->Main_model->getDetailJaldis($this->uri->segment(3));
    	$data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where);
    	// $data['akun'] = $this->Master_model->getDataAkun($this->uri->segment(3));
		// $data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where);
		$this->load->view('Pengguna/Template/header',$data);
		$this->load->view('Pengguna/Laporan/detail_jaldis',$data);
		$this->load->view('Pengguna/Template/footer');
	}
	/* Rapat */
	public function rapat(){
		$q = "SELECT a.* FROM rapat a WHERE a.hasil_rapat!='' ORDER BY `a`.`tanggal` DESC";
		$data['data_tabel'] = $this->User_model->manualQuery($q)->result();
		$data['active'] = 'laporan';
		$data['sub'] = 'rapat';
		$data['sub2'] = '';
		$this->load->view('Pengguna/Template/header',$data);
		$this->load->view('Pengguna/Laporan/rapat',$data);
		$this->load->view('Pengguna/Template/footer');
	}
}