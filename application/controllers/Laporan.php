<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

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
	public function __construct()
		{	
			parent::__construct();
			
		}
	public function contohtcpdf()
		{
			$this->load->view('contoh', $data);
		}
	public function contohtmpdf()
		{
				$data = [];
			    $this->load->view('contoh', $data, true);

                //this the the PDF filename that user will get to download
                $pdfFilePath = "nama_file.pdf";

              	$html = '<a>Hello world</a>';
                // generate the PDF from the given html
                // $css = base_url('assets/surat/css/style.css');
                // $stylesheet = file_get_contents($css); // external css
                // $this->m_pdf->pdf->WriteHTML($stylesheet,1);
                $this->m_pdf->pdf->WriteHTML($html);

                //download it.
                $this->m_pdf->pdf->Output($pdfFilePath, "D");   
		}
	public function notulen()
	{
		$data['active'] = 'laporan';
		$data['sub'] = 'rekap';
		$data['sub2'] = 'jaldis';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_jaldis'] = $this->uri->segment(3);
    	$status['status'] = '1';
    	$data['nomor_surat'] = $this->Main_model->getSelectedData('nomor_surat',$status);
    	$data['detail_jaldis'] = $this->Main_model->getDetailJaldis($this->uri->segment(3));
    	$data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where);
    	$data['akun'] = $this->Master_model->getDataAkun($this->uri->segment(3));
    	$data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where);
		//$this->load->view('template/header',$data);
		$this->load->view('laporan/note',$data);
		//$this->load->view('template/footer');
		}
	}
	public function catatan_jaldis(){
		$data['active'] = 'laporan';
		$data['sub'] = 'rekap';
		$data['sub2'] = 'jaldis';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_jaldis'] = $this->input->post('kode_jaldis');
    	$data_catatan['catatan'] = $this->input->post('catatan');
    	$this->Main_model->updateData("jaldis",$data_catatan,$where);
    	if(!empty($_FILES['foto'])){
      
        	$config = array(
            'upload_path'   => dirname($_SERVER["SCRIPT_FILENAME"]).'/assets/hasil_jaldis/',
            'allowed_types' => 'jpg|jpeg|png|bmp',
            'max_size'      => 8192,
            'overwrite'     => 1,                       
        );

        $this->load->library('upload', $config);

        $images = array();
        $files = $_FILES['foto'];
        foreach ($files['name'] as $key => $image) {
            $_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];
            $no = 1;
            $fileName = $this->input->post('kode_jaldis').time();

            $images[] = $fileName;

            $config['file_name'] = $fileName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('images[]')) {
                $this->upload->data();
                $data = array(
                     'kode_jaldis' => $this->input->post('kode_jaldis'),
                     'nama_file' => $this->upload->data('file_name')
                    );    
                    $this->User_model->tambahdata("hasil_jaldis",$data);  //akses model untuk menyimpan ke database
                    
            } 
        }

        	
        }
        
    	$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
		//redirect('Laporan/jaldis/');
		echo "<script>window.location='".base_url()."Laporan/jaldis'</script>";
		}
	}
	public function keikutsertaan_anggota(){
		$data['active'] = 'laporan';
		$data['sub'] = 'rekap';
		$data['sub2'] = 'keikutsertaan_anggota';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data["data_keikutsertaan"] = $this->Master_model->getDataKeikutsertaan();
		$this->load->view('template/header',$data);
		$this->load->view('laporan/keikutsertaan_anggota',$data);
		$this->load->view('template/footer');
		}
	}
	public function rekap_dewan(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
		$this->load->view('laporan/rekap_dewan');
		}
	}
	public function rekap_setwan(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
		$this->load->view('laporan/rekap_setwan');
		}
	}
	public function keikutsertaan_detail(){
		$data['active'] = 'laporan';
		$data['sub'] = 'rekap';
		$data['sub2'] = 'keikutsertaan_anggota';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where = $this->uri->segment(3);
    	$data["data_keikutsertaan"] = $this->Master_model->keikutsertaan_detail($where);
		$this->load->view('template/header',$data);
		$this->load->view('laporan/keikutsertaan_detail',$data);
		$this->load->view('template/footer');
		}
	}
	public function anggaran(){
		$data['active'] = 'laporan';
		$data['sub'] = 'rekap';
		$data['sub2'] = 'anggaran';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	// $where['id_badan'] = $this->uri->segment(3);
    	// $data['detail_badan'] = $this->Main_model->getSelectedData('badan',$where);
    	// $data['data_badan'] = $this->Master_model->getDetailDataBadan($this->uri->segment(3));
		$this->load->view('template/header',$data);
		$this->load->view('laporan/anggaran',$data);
		$this->load->view('template/footer');
		}
	}
	public function badan(){
		$data['active'] = 'laporan';
		$data['sub'] = 'badan';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['id_badan'] = $this->uri->segment(3);
    	$data['detail_badan'] = $this->Main_model->getSelectedData('badan',$where);
    	$data['data_badan'] = $this->Master_model->getDetailDataBadan($this->uri->segment(3));
		$this->load->view('laporan/badan',$data);
		}
	}
	public function catatan_badan(){
		$data['active'] = 'laporan';
		$data['sub'] = 'badan';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['id_badan'] = $this->input->post('id_badan');
    	$data_catatan['hasil'] = $this->input->post('catatan');
    	$this->Main_model->updateData("badan",$data_catatan,$where);
		redirect('Laporan/rekap_badan/');
		}
	}
	public function rekap_badan(){
		$data['active'] = 'laporan';
		$data['sub'] = 'badan';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['status'] = '0';
    	$data['rekap_badan'] = $this->Main_model->getSelectedData('badan',$where);
		$this->load->view('template/header',$data);
		$this->load->view('laporan/rekap_badan',$data);
		$this->load->view('template/footer');
		}
	}
	public function detail_badan(){
		$data['active'] = 'laporan';
		$data['sub'] = 'badan';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['id_badan'] = $this->uri->segment(3);
    	$data['detail_badan'] = $this->Main_model->getSelectedData('badan',$where);
    	$data['data_badan'] = $this->Master_model->getDetailDataBadan($this->uri->segment(3));
		$this->load->view('template/header',$data);
		$this->load->view('laporan/detail_badan',$data);
		$this->load->view('template/footer');
		}
	}
	public function pansus(){
		$data['active'] = 'laporan';
		$data['sub'] = 'pansus';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_pansus'] = $this->uri->segment(3);
    	$data['detail_pansus'] = $this->Main_model->getSelectedData('pansus',$where);
    	$data['data_pansus'] = $this->Main_model->getSelectedData('anggota_pansus',$where);
		$this->load->view('laporan/pansus',$data);
		}
	}
	public function catatan_pansus(){
		$data['active'] = 'laporan';
		$data['sub'] = 'pansus';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_pansus'] = $this->input->post('kode_pansus');
    	$data_catatan['hasil'] = $this->input->post('catatan');
    	$this->Main_model->updateData("pansus",$data_catatan,$where);
		redirect('Laporan/rekap_pansus/');
		}
	}
	public function rekap_pansus(){
		$data['active'] = 'laporan';
		$data['sub'] = 'pansus';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['rekap_pansus'] = $this->Master_model->selesai_pansus();
		$this->load->view('template/header',$data);
		$this->load->view('laporan/rekap_pansus',$data);
		$this->load->view('template/footer');
		}
	}
	public function detail_pansus(){
		$data['active'] = 'laporan';
		$data['sub'] = 'pansus';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_pansus'] = $this->uri->segment(3);
    	$data['detail_pansus'] = $this->Main_model->getSelectedData('pansus',$where);
    	$data['data_pansus'] = $this->Master_model->getAnggotaPansus($this->uri->segment(3));
		$this->load->view('template/header',$data);
		$this->load->view('laporan/detail_pansus',$data);
		$this->load->view('template/footer');
		}
	}
	public function panja(){
		$data['active'] = 'laporan';
		$data['sub'] = 'panja';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_panja'] = $this->uri->segment(3);
    	$data['detail_panja'] = $this->Main_model->getSelectedData('panja',$where);
    	$data['data_panja'] = $this->Main_model->getSelectedData('anggota_panja',$where);
		$this->load->view('laporan/panja',$data);
		}
	}
	public function catatan_panja(){
		$data['active'] = 'laporan';
		$data['sub'] = 'panja';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_panja'] = $this->input->post('kode_panja');
    	$data_catatan['hasil'] = $this->input->post('catatan');
    	$this->Main_model->updateData("panja",$data_catatan,$where);
		redirect('Laporan/rekap_panja/');
		}
	}
	public function rekap_panja(){
		$data['active'] = 'laporan';
		$data['sub'] = 'panja';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['rekap_panja'] = $this->Master_model->selesai_panja();
		$this->load->view('template/header',$data);
		$this->load->view('laporan/rekap_panja',$data);
		$this->load->view('template/footer');
		}
	}
	public function detail_panja(){
		$data['active'] = 'laporan';
		$data['sub'] = 'panja';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_panja'] = $this->uri->segment(3);
    	$data['detail_panja'] = $this->Main_model->getSelectedData('panja',$where);
    	$data['data_panja'] = $this->Master_model->getAnggotaPanja($this->uri->segment(3));
		$this->load->view('template/header',$data);
		$this->load->view('laporan/detail_panja',$data);
		$this->load->view('template/footer');
		}
	}
	public function jaldis(){
		$data['active'] = 'laporan';
		$data['sub'] = 'rekap';
		$data['sub2'] = 'jaldis';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['komisi'] = $this->Main_model->getAlldata('komisi');
    	$data['pansus'] = $this->Main_model->getAlldata('pansus');
    	$data['panja'] = $this->Main_model->getAlldata('panja');
    	$data['badan'] = $this->Main_model->getAlldata('badan');
    	$data['jaldis'] = $this->Master_model->jaldis_oke();
		$this->load->view('template/header',$data);
		$this->load->view('laporan/jaldis',$data);
		$this->load->view('template/footer');
		}
	}
	public function kategori_keperluan(){
		$data['active'] = 'laporan';
		$data['sub'] = 'rekap';
		$data['sub2'] = 'kategori_keperluan';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['komisi'] = $this->Main_model->getAlldata('komisi');
    	$data['pansus'] = $this->Main_model->getAlldata('pansus');
    	$data['panja'] = $this->Main_model->getAlldata('panja');
    	$data['badan'] = $this->Main_model->getAlldata('badan');
    	$data['jaldis'] = $this->Main_model->getAlldata('jaldis');
    	$where['status'] = '1';
		$data['kategori_keperluan'] = $this->Main_model->getSelectedData('kategori_keperluan',$where);
		$this->load->view('template/header',$data);
		$this->load->view('laporan/kategori_keperluan',$data);
		$this->load->view('template/footer');
		}
	}
	public function timeline_jaldis(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data_calendar = $this->Main_model->getAlldata('jaldis');
		$calendar = array();
		foreach ($data_calendar as $key => $val) 
		{
			$calendar[] = array(
							'id' 	=> intval($val->id), 
							'title' => $val->tujuan, 
							'description' => trim($val->keperluan), 
							'start' => date_format( date_create($val->start_date) ,"Y-m-d H:i:s"),
							'end' 	=> date_format( date_create($val->end_date) ,"Y-m-d H:i:s"),
							'color' => '#A52A2A',
							'kode_jaldis' => $val->kode_jaldis
							);
		}

		$data = array();
		$data['get_data']			= json_encode($calendar);
		$data['active'] = 'jaldis';
		$data['sub'] = 'timeline_jaldis';
		$data['sub2'] = '';
		$data['data_rapat'] = $data_calendar;
		$this->load->view('template/header',$data);
		$this->load->view('laporan/timeline_jaldis',$data);
		$this->load->view('template/footer');
		
		}
	}
	public function rapat(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	
		$data['active'] = 'laporan';
		$data['sub'] = 'rapat';
		$data['sub2'] = '';

		$data['data_rapat'] = $this->Main_model->getAlldata('rapat');
		$this->load->view('template/header',$data);
		$this->load->view('laporan/rapat',$data);
		$this->load->view('template/footer');
		
		}
	}
	public function hasil_rapat(){
		
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_rapat'] = $this->uri->segment(3);
    	$data['data_foto'] = $this->Main_model->getSelectedData('hasil_rapat',$where);
    	$data['data_rapat'] = $this->Rapat_model->getDataRapat($this->uri->segment(3));
    	$data['peserta_dewan'] = $this->Rapat_model->peserta_dewan($this->uri->segment(3));
    	$data['peserta_skpd'] = $this->Rapat_model->peserta_skpd($this->uri->segment(3));
    	$data['peserta_umum'] = $this->Rapat_model->peserta_umum($this->uri->segment(3));
		$data['active'] = 'laporan';
		$data['sub'] = 'rapat';
		$data['sub2'] = '';
		$this->load->view('template/header',$data);
		$this->load->view('laporan/hasil_rapat',$data);
		$this->load->view('template/footer');
		
		}
	}
	public function unduh_lampiran(){
		$where['id'] = $this->uri->segment(3);
		$data = $this->Main_model->getSelectedData('jaldis',$where);
		foreach ($data as $key => $value) {
			$url = base_url().'assets/laporan_jaldis/'.$value->file_laporan;
			$url1 = file_get_contents($url);
			force_download($value->file_laporan,$url1);
			//print_r($url);
		}
	}
	/* Laporan Jaldis by Date */
	public function by_date(){
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
		$data['active'] = 'laporan';
		$data['sub'] = 'rekap';
		$data['sub2'] = 'by_date';
		$this->load->view('template/header',$data);
		$this->load->view('laporan/by_date',$data);
		$this->load->view('template/footer');
	}
	public function sort_by_date_process(){
		// print_r($data);
		// echo $start_date.'-'.$end_date;
		$data['active'] = 'laporan';
		$data['sub'] = 'rekap';
		$data['sub2'] = 'by_date';
		$this->load->view('template/header',$data);
		$this->load->view('laporan/by_date',$data);
		$this->load->view('template/footer');
	}
}