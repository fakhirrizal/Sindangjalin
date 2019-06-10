<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function tambah_data()
	{
		$data['active'] = 'agenda';
		$data['sub'] = 'tambah_data';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    
		$this->load->view('template/header',$data);
		$this->load->view('agenda/tambah_data',$data);
		$this->load->view('template/footer');
		}
	}
	public function simpan_data(){
		$kode_agenda = $this->Master_model->getKodeAgenda();
		$materi = str_replace('\r', '', $this->input->post('materi'));
		$data = array(
                'kode_agenda' => $kode_agenda,
                'tanggal' => $this->input->post('tanggal'),
                // 'tanggal_selesai' => $this->input->post('tanggal_selesai'),
				'jam' => $this->input->post('jam'),
				'waktu' => $this->input->post('tanggal').' '.$this->input->post('jam'),
                'tempat' => $this->input->post('tempat'),
                'acara' => $this->input->post('acara'),
                'materi' => $materi,
                // 'pemimpin' => $id_pimpinan[1],
                'peserta' => $this->input->post('peserta')          
                );

                $res = $this->Main_model->tambahdata('agenda',$data);
				$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>data telah berhasil ditambahkan.<br /></div>' );
				echo "<script>window.location='".base_url()."Agenda/lihat_data/'</script>";
	}
	public function lihat_data(){
		
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data_calendar = $this->Master_model->getdataagenda();
	
		$data['active'] = 'agenda';
		$data['sub'] = 'lihat_data';
		$data['sub2'] = '';
		$data['data_agenda'] = $data_calendar;
		$this->load->view('template/header',$data);
		$this->load->view('agenda/data_agenda',$data);
		$this->load->view('template/footer');
		
		}
	}
	public function timeline_calendar()
	{
		$data['active'] = 'agenda';
		$data['sub'] = 'timeline';
		$data['sub2'] = '';
		$month = date("m");
		$year = date("Y");
		/*$this->load->view('kalender', array('kalender'=>$this->draw_calendar($month,$year)));*/
		$this->load->view('template/header',$data);
		$this->load->view('agenda/kalender',$data);
		$this->load->view('template/footer');
	}
	// public function timeline_calendar(){
		
	// 	if(($this->session->userdata('id'))==NULL){
    //         echo "<script>alert('Harap login terlebih dahulu')</script>";
    //         echo "<script>window.location='".base_url()."admin/'</script>";
    // 	}
    // 	else{
    // 	$data_calendar = $this->Main_model->getAlldata('agenda');
	// 	$calendar = array();
	// 	foreach ($data_calendar as $key => $val) 
	// 	{
	// 		$waktu = $val->tanggal.' '.$val->jam;
	// 		$calendar[] = array(
	// 						'id' 	=> intval($val->id), 
	// 						'title' => $val->acara, 
	// 						'tempat' => $val->tempat, 
	// 						'materi' => $val->materi,  
	// 						'jam' => $val->jam,  
	// 						'start' => date_format( date_create($waktu) ,"Y-m-d H:i:s"),
	// 						'end' 	=> date_format( date_create($waktu) ,"Y-m-d H:i:s"),
	// 						'color' => '#BF55EC',
	// 						'peserta' => $val->peserta,  
	// 						);
	// 	}

	// 	$data = array();
	// 	$data['get_data']			= json_encode($calendar);
	// 	$data['active'] = 'agenda';
	// 	$data['sub'] = 'timeline';
	// 	$data['sub2'] = '';
	// 	$this->load->view('template/header',$data);
	// 	$this->load->view('agenda/lihat_data',$data);
	// 	$this->load->view('template/footer');
		
	// 	}
	// }
	public function update_data(){
		
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['active'] = 'rapat';
		$data['sub'] = 'lihat_data';
		$data['sub2'] = '';

		$stts['id'] = $this->uri->segment(3);
        $data['data_agenda'] = $this->Main_model->getSelectedData('agenda',$stts);
		$this->load->view('template/header',$data);
		$this->load->view('agenda/ubah_data',$data);
		$this->load->view('template/footer');
		
		}
	}
	public function ubah_data(){
		
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    		$id_r['id'] = $this->input->post('id');
			                $data = array(
			                                'tanggal' => $this->input->post('tanggal'),
							                // 'tanggal_selesai' => $this->input->post('tanggal_selesai'),
											'jam' => $this->input->post('jam'),
											'waktu' => $this->input->post('tanggal').' '.$this->input->post('jam'),
							                'tempat' => $this->input->post('tempat'),
							                'acara' => $this->input->post('acara'),
							                'materi' => $this->input->post('materi'),
							                // 'pemimpin' => $id_pimpinan[1],
							                'peserta' => $this->input->post('peserta')      
			                              );

			                $this->Main_model->updateData("agenda",$data,$id_r);
			                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
  	            			echo "<script>window.location='".base_url()."Agenda/lihat_data'</script>";	
		}
	}
	public function hapus_data(){
		
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['id'] = $this->uri->segment(3);
    	// $data = $this->Main_model->getSelectedData('rapat',$where);
    	// $where2['kode_rapat'] = '';
    	// $where3['kode_rapat'] = $this->uri->segment(3);
    	// foreach ($data as $key => $value) {
    	// 	$where2['kode_rapat'] = $value->kode_rapat;
    	// }
		$this->Main_model->deleteData('agenda',$where);
		// $this->Main_model->deleteData('hasil_rapat',$where3);
		// $this->Main_model->deleteData('peserta_rapat',$where2);
        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil dihapus.<br /></div>' );
        echo "<script>window.location='".base_url()."Agenda/lihat_data'</script>";
		}
	}
	public function pintas(){
		$data = $this->Main_model->getAlldata('agenda');
		foreach ($data as $key => $value) {
			$kode['id'] = $value->id;
			$data_ubah = array(
				'waktu' => $value->tanggal.' '.$value->jam
			);
		$this->Main_model->updateData("agenda",$data_ubah,$kode);
		}
	}
}