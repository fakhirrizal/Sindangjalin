<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
	public function beranda(){
		$where1 = array(
			'keterangan' => 'anggota legislatif',
			'status' => '1'
		);
		$where2 = array(
			'keterangan' => 'bukan anggota legislatif',
			'status' => '1'
		);
		$data = array();
		$data['kategori_keperluan'] = $this->Main_model->perkategorikeperluan();
		$data['total_anggaran'] = $this->Main_model->total_anggaran();
		$data['kategori_rapat'] = $this->Main_model->perkategorirapat();
		$data['data_jaldis'] = $this->Master_model->jaldis_oke();
		$data['data_rapat'] = $this->Main_model->getAlldata('rapat');
		$data['data_dewan'] = $this->Main_model->getSelectedData('anggota',$where1);
		$data['data_setwan'] = $this->Main_model->getSelectedData('anggota',$where2);

		$data_calendar1 = $this->Main_model->getAlldata('rapat');
		$calendar1 = array();
		foreach ($data_calendar1 as $key => $val)
		{
			$calendar1[] = array(
							'id' 	=> intval($val->id),
							'title' => $val->acara,
							'description' => trim($val->keterangan),
							'start' => date_format( date_create($val->tanggal) ,"Y-m-d H:i:s"),
							'end' 	=> date_format( date_create($val->tanggal) ,"Y-m-d H:i:s"),
							'color' => $val->warna,
							//'kategori' => $val->kategori,
							'jam' => $val->jam,
							//'materi' => $val->materi,
							//'nama_file' => $val->nama_file,
							);
		}

		$data['get_data1']		= json_encode($calendar1);

		$data_calendar2 = $this->Main_model->getAlldata('jaldis');
		$calendar2 = array();
		foreach ($data_calendar2 as $key => $val)
		{
			$calendar2[] = array(
							'id' 	=> intval($val->id),
							'title' => $val->tujuan,
							'description' => trim($val->keperluan),
							'start' => date_format( date_create($val->start_date) ,"Y-m-d H:i:s"),
							'end' 	=> date_format( date_create($val->end_date) ,"Y-m-d H:i:s"),
							'color' => '#26C281',
							'kode_jaldis' => $val->kode_jaldis
							);
		}

		$data['get_data2']			= json_encode($calendar2);

		$data_calendar3 = $this->Main_model->getAlldata('agenda');
		$calendar3 = array();
		foreach ($data_calendar3 as $key => $val)
		{
			$calendar3[] = array(
							'id' 	=> intval($val->id),
							'title' => $val->acara,
							'jam' => $val->jam,
							'tempat' => $val->tempat,
							'peserta' => $val->peserta,
							'description' => trim($val->materi),
							'start' => date_format( date_create($val->tanggal) ,"Y-m-d H:i:s"),
							'end' 	=> date_format( date_create($val->tanggal) ,"Y-m-d H:i:s"),
							'color' => '#c5b96b',
							//'kode_agenda' => $val->kode_agenda
							);
		}

		$data['get_data3']			= json_encode($calendar3);
		$data['active'] = 'beranda';
		$data['sub'] = '';
		$data['sub2'] = '';
		$this->load->view('Pengguna/Template/header',$data);
		$this->load->view('Pengguna/App/beranda',$data);
		$this->load->view('Pengguna/Template/footer');
	}
	public function tentang_aplikasi(){
		$data['active'] = 'tentang';
		$data['sub'] = '';
		$data['sub2'] = '';
		$this->load->view('Pengguna/Template/header',$data);
		$this->load->view('Pengguna/App/tentang',$data);
		$this->load->view('Pengguna/Template/footer');
	}
}