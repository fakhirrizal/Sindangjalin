<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

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
	// public function cetak(){
	// 	$nama = $this->input->post('nama');
	// 	$kode_jaldis = $this->input->post('kode_jaldis');
	// 	$nomor_surat = $this->input->post('nomor_surat');
	// 	$data['active'] = 'surat';
	// 	$data['sub'] = 'lihat_data';
	// 	$data['sub2'] = '';
	// 	if($nama != NULL){
         
 //                for($i = 0; $i < count($nama); $i++){
 //                $data_cetak = array('kode_jaldis' => $kode_jaldis,
 // 	                                'id_anggota' => $nama[$i],
 //                					'nomor_surat' => $nomor_surat);
 //                	$cek = $this->Master_model->cekCetakSurat($kode_jaldis,$nama[$i],$nomor_surat);
 //                	if(empty($cek)){
 //                		$this->Main_model->tambahData("surat_cetak",$data_cetak);
 //                	}
 //                	else{
 //                		echo '';
 //                	}
 //                }
 //                if($nomor_surat=='2'){
 //                $data['detail_jaldis'] = $this->Main_model->getDetailJaldis($kode_jaldis);
 //                $where['id'] = $nomor_surat;
 //                $where2['kode_jaldis'] = $kode_jaldis;
 //                $data['nomor_surat'] = $this->Main_model->getSelectedData('nomor_surat',$where);
 //                $data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where2);
 //                $data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where2);
 //                $this->load->view('surat/surat_j',$data);//cetak surat word
 //                }
 //                elseif ($nomor_surat=='3') {
 //                $this->load->view('surat/surat_perintah',$data_cetak);//cetak surat word	
 //                }
 //                elseif ($nomor_surat=='4') {
 //                $data['detail_jaldis'] = $this->Main_model->getDetailJaldis($kode_jaldis);
 //                $where['id'] = $nomor_surat;
 //                $where2['kode_jaldis'] = $kode_jaldis;
 //                $data['nomor_surat'] = $this->Main_model->getSelectedData('nomor_surat',$where);
 //                $data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where2);
 //                $data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where2);
 //                $this->load->view('surat/surat_ts',$data);//cetak surat word	
 //                }
 //                else{
 //                $data['detail_jaldis'] = $this->Main_model->getDetailJaldis($kode_jaldis);
 //                $where['id'] = $nomor_surat;
 //                $where2['kode_jaldis'] = $kode_jaldis;
 //                $data['nomor_surat'] = $this->Main_model->getSelectedData('nomor_surat',$where);
 //                $data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where2);
 //                $data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where2);
 //                $this->load->view('surat/surat_td',$data);//cetak surat word   
 //            	}
 //            }
 //        else{
 //        	echo '<script>alert("Harap pilih nomor surat terlebih dahulu")</script>';
 //        	echo "<script>window.location='".base_url()."Master/detail_jaldis/".$kode_jaldis."'</script>";
 //        }
 //        //redirect('Master/detail_jaldis/'.$kode_jaldis);//ini bisa pindah halaman tapi gak bisa cetak
 //        //echo base_url('Master/detail_jaldis/'.$kode_jaldis);//ini bisa cetak tapi gak bisa pindah halaman
	// 	//echo "<script>window.location.href='".base_url()."Master/detail_jaldis/".$kode_jaldis."'</script>";
	// }
	// public function spd(){
 //        $where['kode_jaldis'] = $this->uri->segment(3);
 //        $where2['id'] = '5';
 //        $id_anggota = $this->uri->segment(4);
 //        $datajaldis = $this->Main_model->getSelectedData('jaldis',$where);
 //        $data['dataanggota'] = '';
 //        foreach ($datajaldis as $key => $value) {
 //            $ak = substr($value->alat_kelengkapan, 0,1);
 //            if($ak=='B'){
 //                $data['dataanggota'] = $this->Surat_model->spdbadan($this->uri->segment(3),$id_anggota,$value->alat_kelengkapan);
 //            }
 //            elseif($ak=='P'){
 //                $data['dataanggota'] = $this->Surat_model->spdpansus($this->uri->segment(3),$id_anggota,$value->alat_kelengkapan);
 //            }
 //            elseif($ak=='K'){
 //                $data['dataanggota'] = $this->Surat_model->spdkomisi($this->uri->segment(3),$id_anggota);
 //            }
 //            else{
 //                $data['dataanggota'] = $this->Surat_model->spdsetwan($this->uri->segment(3),$id_anggota);
 //            }
 //        }
 //        $data['akun'] = $this->Master_model->getDataAkun($this->uri->segment(3));
 //        $data['nomor_surat'] = $this->Main_model->getSelectedData('nomor_surat',$where2);
 //        $data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where);
	// 	$this->load->view('surat/surat_perjalanan_dinas',$data);//cetak surat word
	// }
    public function cetak_spd(){
        $where['kode_jaldis'] = $this->input->post('kode_jaldis');
        $kode_cetak = $this->Surat_model->getKodeCetak();
        $where2['id'] = $this->input->post('nomor_surat');
        $nama = $this->input->post('nama1');
        $datajaldis = $this->Main_model->getSelectedData('jaldis',$where);
        $data['dataanggota'] = '';
        
        if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                $data_cetak = array('kode_jaldis' => $this->input->post('kode_jaldis'),
                                    'id_anggota' => $nama[$i],
                                    'nomor_surat' => $this->input->post('nomor_surat'),
                                    'kode_cetak' => $kode_cetak,
                                    'waktu_cetak' => date('Y-m-d h:i:s'));
                    $cek = $this->Master_model->cekCetakSurat($kode_jaldis,$nama[$i],$nomor_surat,$kode_cetak);
                    if(empty($cek)){
                        $this->Main_model->tambahData("surat_cetak",$data_cetak);
                    }
                    else{
                        echo '';
                    }
                }
                foreach ($datajaldis as $key => $value) {
                    $ak = substr($value->alat_kelengkapan, 0,1);
                    if($ak=='B'){
                        $data['dataanggota'] = $this->Surat_model->spdbadan($this->input->post('kode_jaldis'),$value->alat_kelengkapan,$kode_cetak);
                    }
                    elseif($ak=='P'){
                        $data['dataanggota'] = $this->Surat_model->spdpansus($this->input->post('kode_jaldis'),$value->alat_kelengkapan,$kode_cetak);
                    }
                    elseif($ak=='K'){
                        $data['dataanggota'] = $this->Surat_model->spdkomisi($this->input->post('kode_jaldis'),$kode_cetak);
                    }
                    elseif($ak=='J'){
                        $data['dataanggota'] = $this->Surat_model->spdpanja($this->input->post('kode_jaldis'),$value->alat_kelengkapan,$kode_cetak);
                    }
                    elseif($ak=='s' or $ak=='a' or $ak=='i'){
                        $data['dataanggota'] = $this->Surat_model->spdanggota($this->input->post('kode_jaldis'),$kode_cetak);
                    }
                    else{
                        echo '<script>alert("Maaf masukan Anda tidak valid")</script>';
                        echo "<script>window.location='".base_url()."Master/detail_jaldis/".$this->input->post('kode_jaldis')."'</script>";
                    }
                }
                $data['akun'] = $this->Master_model->getDataAkun($this->input->post('kode_jaldis'));
                $data['nomor_surat'] = $this->Main_model->getSelectedData('nomor_surat',$where2);
                $data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where);
                $this->load->view('surat/surat_perjalanan_dinas',$data);//cetak surat word
            }
        else{
            echo '<script>alert("Harap pilih nomor surat terlebih dahulu")</script>';
            echo "<script>window.location='".base_url()."Master/detail_jaldis/".$this->input->post('kode_jaldis')."'</script>";
        }
    }
    public function cetak_sj(){
        $kode_cetak = $this->Surat_model->getKodeCetak();
        $nama = $this->input->post('nama2');
        $kode_jaldis = $this->input->post('kode_jaldis');
        $nomor_surat = $this->input->post('nomor_surat');
        $data['active'] = 'surat';
        $data['sub'] = 'lihat_data';
        $data['sub2'] = '';
        if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                $data_cetak = array('kode_jaldis' => $kode_jaldis,
                                    'id_anggota' => $nama[$i],
                                    'nomor_surat' => $nomor_surat,
                                    'kode_cetak' => $kode_cetak,
                                    'waktu_cetak' => date('Y-m-d h:i:s'));
                    $cek = $this->Master_model->cekCetakSurat($kode_jaldis,$nama[$i],$nomor_surat,$kode_cetak);
                    if(empty($cek)){
                        $this->Main_model->tambahData("surat_cetak",$data_cetak);
                    }
                    else{
                        echo '';
                    }
                }
                $data['detail_jaldis'] = $this->Surat_model->getCetakSurat($kode_cetak);
                $where['id'] = $nomor_surat;
                $where2['kode_jaldis'] = $kode_jaldis;
                $data['ns'] = $this->Main_model->getSelectedData('nomor_surat',$where);
                $data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where2);
                $data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where2);
                $this->load->view('surat/surat_j',$data);//cetak surat word
            }
        else{
            echo '<script>alert("Harap pilih nomor surat terlebih dahulu")</script>';
            echo "<script>window.location='".base_url()."Master/detail_jaldis/".$kode_jaldis."'</script>";
        }
    }
    public function cetak_std(){
        $kode_cetak = $this->Surat_model->getKodeCetak();
        $nama = $this->input->post('nama3');
        $kode_jaldis = $this->input->post('kode_jaldis');
        $nomor_surat = $this->input->post('nomor_surat');
        $data['active'] = 'surat';
        $data['sub'] = 'lihat_data';
        $data['sub2'] = '';
        if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                $data_cetak = array('kode_jaldis' => $kode_jaldis,
                                    'id_anggota' => $nama[$i],
                                    'nomor_surat' => $nomor_surat,
                                    'kode_cetak' => $kode_cetak,
                                    'waktu_cetak' => date('Y-m-d h:i:s'));
                    $cek = $this->Master_model->cekCetakSurat($kode_jaldis,$nama[$i],$nomor_surat,$kode_cetak);
                    if(empty($cek)){
                        $this->Main_model->tambahData("surat_cetak",$data_cetak);
                    }
                    else{
                        echo '';
                    }
                }
                $data['detail_jaldis'] = $this->Surat_model->getCetakSurat($kode_cetak);
                $where['id'] = $nomor_surat;
                $where2['kode_jaldis'] = $kode_jaldis;
                $data['ns'] = $this->Main_model->getSelectedData('nomor_surat',$where);
                $data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where2);
                $data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where2);
                $this->load->view('surat/surat_td',$data);//cetak surat word   
            }
        else{
            echo '<script>alert("Harap pilih nomor surat terlebih dahulu")</script>';
            echo "<script>window.location='".base_url()."Master/detail_jaldis/".$kode_jaldis."'</script>";
        }
    }
    public function cetak_sts(){
        $kode_cetak = $this->Surat_model->getKodeCetak();
        $nama = $this->input->post('nama4');
        $kode_jaldis = $this->input->post('kode_jaldis');
        $nomor_surat = $this->input->post('nomor_surat');
        $data['active'] = 'surat';
        $data['sub'] = 'lihat_data';
        $data['sub2'] = '';
        if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                $data_cetak = array('kode_jaldis' => $kode_jaldis,
                                    'id_anggota' => $nama[$i],
                                    'nomor_surat' => $nomor_surat,
                                    'kode_cetak' => $kode_cetak,
                                    'waktu_cetak' => date('Y-m-d h:i:s'));
                    $cek = $this->Master_model->cekCetakSurat($kode_jaldis,$nama[$i],$nomor_surat,$kode_cetak);
                    if(empty($cek)){
                        $this->Main_model->tambahData("surat_cetak",$data_cetak);
                    }
                    else{
                        echo '';
                    }
                }
                $data['detail_jaldis'] = $this->Surat_model->getCetakSurat($kode_cetak);
                $where['id'] = $nomor_surat;
                $where2['kode_jaldis'] = $kode_jaldis;
                $data['ns'] = $this->Main_model->getSelectedData('nomor_surat',$where);
                $data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where2);
                $data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where2);
                $this->load->view('surat/surat_ts',$data);//cetak surat word    
                
            }
        else{
            echo '<script>alert("Harap pilih nomor surat terlebih dahulu")</script>';
            echo "<script>window.location='".base_url()."Master/detail_jaldis/".$kode_jaldis."'</script>";
        }
    }
}
