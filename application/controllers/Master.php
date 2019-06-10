<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

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
	public function pimpinan(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'pimpinan';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['data_pimpinan'] = $this->Main_model->getdatapimpinan();
    	$where = array(
    		'keterangan' => 'anggota legislatif',
    		'status' => 1
    	);
    	$data['list_data'] = $this->Main_model->getSelectedData('anggota',$where);
		$this->load->view('template/header',$data);
		$this->load->view('master/pimpinan',$data);
		$this->load->view('template/footer');
		}
	}
	public function simpan_pimpinan(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'pimpinan';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$nama = $this->input->post('nama');
    		if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                $where['id_anggota'] = $nama[$i];
                $cek = $this->Main_model->getSelectedData('pimpinan',$where);
	                if(empty($cek)){
	                	$data_anggota = array('id_anggota' => $nama[$i]);
	                	$this->Main_model->tambahData("pimpinan",$data_anggota);
	                }
	                else{
	                	echo '';	                }
                
                }
                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/pimpinan'</script>";
        	}
	        else{
	        	$this->session->set_flashdata('gagal','<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Oops! </strong>Data gagal ditambahkan.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/pimpinan'</script>";
	        }    
		}
	}
	public function hapus_pimpinan(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
		$where['id'] = $this->uri->segment(3);
		$this->Main_model->deleteData('pimpinan',$where);
        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil dihapus.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/pimpinan'</script>";
		}
	}
	public function jabatan_pimpinan(){
		$where = array('id'=>$this->input->post('id'));
        $data = array(
                'jabatan' => $this->input->post('jabatan')
                );
        $this->User_model->updateData('pimpinan',$data,$where);

        $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah data jabatan Pimpinan DPRD',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
			redirect('Master/pimpinan');
	}
	public function tambah_panja(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'panja';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['data_anggota'] = $this->Master_model->getdataanggotadewan();
		$this->load->view('template/header',$data);
		$this->load->view('master/tambah_panja',$data);
		$this->load->view('template/footer');
		}
	}
	public function simpan_panja(){
		$nama = $this->input->post('nama');
		$kode_panja = $this->Master_model->getKodePanja();
	
		$data_pansus = array(
			'kode_panja' => $kode_panja,
			'nama_panja' => $this->input->post('nama_panja'),
			'perihal' => $this->input->post('perihal'),
			'awal_periode' => $this->input->post('from'),
			'akhir_periode' => $this->input->post('to')
		);
		
		$this->Main_model->tambahData("panja",$data_pansus);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menambah data pembentukan Panja',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                $anggota_panja = array('kode_panja' => $kode_panja,
 	                                    'id_anggota' => $nama[$i],
 	                               		'jabatan' => 'Anggota');
                //print_r($detail_jaldis);
                $this->Main_model->tambahData("anggota_panja",$anggota_panja);
                }
               }
        else{
        	echo '';
        }
        // if($status=='1'){
        // 	if($nama != NULL){
	       //  	for($i = 0; $i < count($nama); $i++){
	       //          $detail_jaldis = array('kode_jaldis' => $kode_jaldis,
	 	     //                               'id_anggota' => $nama[$i],
	 	     //                           	   'nomor_surat' => '1');
	          
	       //          $this->Main_model->tambahData("surat_cetak",$detail_jaldis);
	       //          }
        //         }
        //     else{
        //     	echo '';
        //     }
        // }
        // else{
        // 	if($nama != NULL){
	       //  	for($i = 0; $i < count($nama); $i++){
	       //          $detail_jaldis = array('kode_jaldis' => $kode_jaldis,
	 	     //                               'id_anggota' => $nama[$i],
	 	     //                           	   'nomor_surat' => '2');
	             
	       //          $this->Main_model->tambahData("surat_cetak",$detail_jaldis);
	       //          }
        //         }
        //     else{
        //     	echo '';
        //     }
        // }
        // $this->load->view('surat/surat_tugas',$data);
        
        redirect('Master/jabatan_panja/'.$kode_panja);
	}
	public function jabatan_panja(){		
		
        
        $data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'panja';
		
    	$where['kode_panja'] = $this->uri->segment(3);
        $data['anggota_panja'] = $this->Master_model->getAnggotaPanja($this->uri->segment(3));
    	$data['data_panja'] = $this->Main_model->getSelectedData('panja',$where);
		
		$this->load->view('template/header',$data);
		$this->load->view('master/jabatan_panja',$data);
		$this->load->view('template/footer');
	}
	public function update_jabatan_panja(){
    			if($this->input->post('jabatan') != NULL){
               
                $jabatan = $this->input->post('jabatan');

                for($i = 0; $i < count($jabatan); $i++){
                $id = $this->input->post('id');
                $table_id['id'] = $id[$i];
                $data = array(
                                  'jabatan' => $jabatan[$i]);
                //print_r($data);
                $this->Main_model->updateData("anggota_panja",$data,$table_id);
          
                }
                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/lihat_panja'</script>";
                }

    
	}
	public function lihat_panja(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'panja';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['data_panja'] = $this->Master_model->getDataPanja();
		$this->load->view('template/header',$data);
		$this->load->view('master/lihat_panja',$data);
		$this->load->view('template/footer');
		}
	}
	public function ajax_panja(){
		$where['id'] = $this->input->post('id');
		$data['data_anggota'] = $this->Master_model->ajax_panja($this->input->post('kode_panja'));
        $data['data_panja'] = $this->User_model->getSelectedData('panja',$where);
        $this->load->view('master/ajax_panja',$data);
	}
	public function ubah_panja(){
		$idpanja['kode_panja'] = $this->input->post('id');
		$nama = $this->input->post('nama');
		 
		$nama_panja = $this->input->post('nama_panja');
		$perihal = $this->input->post('perihal');   
		$awal_periode = $this->input->post('awal_periode');    
		$akhir_periode = $this->input->post('akhir_periode');    
			                $data = array(
			                                  'nama_panja' => $nama_panja,
			                                  'perihal' => $perihal,
			                              	  'awal_periode' => $awal_periode,
			                                  'akhir_periode' => $akhir_periode);

			                $this->Main_model->updateData("panja",$data,$idpanja);

		$this->User_model->deleteData('anggota_panja',$idpanja);

		if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                $kata = explode('_', $nama[$i]);
                $jp = '';
                if($kata[2]==NULL){
                	$jp = 'Anggota';
                }
                else{
                	$jp = $kata[2];
                }
                $anggota_panja = array('id' => $kata[1],
                						'kode_panja' => $this->input->post('id'),
 	                                    'id_anggota' => $kata[0],
 	                                	'jabatan' => $jp);
                $this->Main_model->tambahData("anggota_panja",$anggota_panja);
                //print_r($anggota_pansus);
                }
               }
        else{
        	echo '';
        }            

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah data Panja',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);
		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
	                redirect('Master/lihat_panja/');
	}
	public function hapus_panja(){
		$where['kode_panja'] = $this->uri->segment(3);
		$data = array(
			                                  'status' => '0');

			                $this->Main_model->updateData("panja",$data,$where);
        $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menghapus data Panja',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);
                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil dihapus.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/lihat_panja'</script>";
	}
	public function skpd(){
		$data['active'] = 'master';
		$data['sub'] = 'skpd';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['status'] = '1';
    	$data['skpd'] = $this->Main_model->getSelectedData('skpd',$where);
		$this->load->view('template/header',$data);
		$this->load->view('master/skpd',$data);
		$this->load->view('template/footer');
		}
	}
	public function simpan_skpd(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'keterangan' => $this->input->post('deskripsi'),
			'status' => '1'
		);
		$this->Main_model->tambahdata('skpd',$data);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menambah data SKPD baru',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/skpd/'</script>";
	}
	public function ubah_skpd(){
		$where = array('id'=>$this->input->post('id'));
         $data = array(
                'nama' => $this->input->post('nama'),
                'keterangan' => $this->input->post('deskripsi')
                );
        $this->User_model->updateData('skpd',$data,$where);

        $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah data master SKPD',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
			redirect('Master/skpd');
	}
	public function hapus_skpd(){
		$where['id'] = $this->uri->segment(3);
		$data_update['status'] = '0';
		$this->Main_model->updateData('skpd',$data_update,$where);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menghapus data SKPD',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil dihapus.<br /></div>' );
			redirect('Master/skpd');
	}
	public function tambah_partai()
	{
		$data['active'] = 'master';
		$data['sub'] = 'partai';
		$data['sub2'] = 'tambah_data';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	
		$this->load->view('template/header',$data);
		$this->load->view('master/tambah_partai',$data);
		$this->load->view('template/footer');
		}
	}
	public function simpan_partai(){
        $data = array(
                'nm_partai' => $this->input->post('nama_partai'),
                'singkatan' => $this->input->post('singkatan'),
                'tanggal_berdiri' => $this->input->post('tanggal'),
                'jumlah_anggota' => $this->input->post('anggota'),
                'kantor_pusat' => $this->input->post('kantor_pusat'),
                'ketua_umum' => $this->input->post('ketua_umum')
                );
        $this->Main_model->tambahdata('tblpartai',$data);

        $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menambah data partai politik baru',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
			redirect('Master/lihat_partai');
	}
	public function lihat_partai(){
		$data['active'] = 'master';
		$data['sub'] = 'partai';
		$data['sub2'] = 'lihat_data';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['status'] = '1';
    	$data['partai'] = $this->Main_model->getSelectedData('tblpartai',$where);
		$this->load->view('template/header',$data);
		$this->load->view('master/lihat_partai',$data);
		$this->load->view('template/footer');
		}
	}
	public function detail_partai(){
		$data['active'] = 'master';
		$data['sub'] = 'partai';
		$data['sub2'] = '';
		$where['id_partai'] = $this->uri->segment(3);
		$data['partai'] = $this->Main_model->getSelectedData('tblpartai',$where);
		$this->load->view('template/header',$data);
		$this->load->view('master/detail_partai',$data);
		$this->load->view('template/footer');
	}
	public function ubah_partai(){
		$data['active'] = 'master';
		$data['sub'] = 'partai';
		$data['sub2'] = '';
		$where['id_partai'] = $this->uri->segment(3);
		$data['partai'] = $this->Main_model->getSelectedData('tblpartai',$where);
		$this->load->view('template/header',$data);
		$this->load->view('master/ubah_partai',$data);
		$this->load->view('template/footer');
	}
	public function simpan_perubahan(){
		$where = array('id_partai'=>$this->input->post('id'));
         $data = array(
                'nm_partai' => $this->input->post('nama_partai'),
                'singkatan' => $this->input->post('singkatan'),
                'tanggal_berdiri' => $this->input->post('tanggal'),
                'jumlah_anggota' => $this->input->post('anggota'),
                'kantor_pusat' => $this->input->post('kantor_pusat'),
                'ketua_umum' => $this->input->post('ketua_umum')
                );
        $this->User_model->updateData('tblpartai',$data,$where);

        $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah data partai politik',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
			redirect('Master/lihat_partai');
	}
	public function hapus_partai(){
		$where['id_partai'] = $this->uri->segment(3);
		$data_update['status'] = '0';
		$this->Main_model->updateData('tblpartai',$data_update,$where);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menghapus data partai politik',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil dihapus.<br /></div>' );
			redirect('Master/lihat_partai');
	}
	public function ubah_logo(){
		$id_partai = $this->input->post('id_partai');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"]).'/assets/images/logo/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '5072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);    

        if(isset($_FILES['logo']['name']))
         {
             if(!$this->upload->do_upload('logo'))
             {
                $a = $this->upload->display_errors();
                echo "<script>alert('".$a."')</script>";
                echo "<script>window.location='".base_url('Master/detail_partai/'.$id_partai)."'</script>";
             }
             else
             {
                $gbr = $this->upload->data();
                
                $where = array('id_partai'=>$id_partai);
                $data = array(
                'logo' =>$gbr['file_name']          
                );

                $res = $this->User_model->updateData("tblpartai",$data,$where); //akses model untuk menyimpan ke database           

                $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah logo partai politik',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

                $config2['image_library'] = 'gd2'; 
                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                $config2['new_image'] = '/assets/hasil_resize/foto/'; // folder tempat menyimpan hasil resize
                $config2['maintain_ratio'] = TRUE;
                $config2['width'] = 100; //lebar setelah resize menjadi 100 px
                $config2['height'] = 300; //lebar setelah resize menjadi 100 px
                $this->load->library('image_lib',$config2);                 

                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/detail_partai/".$id_partai."'</script>";
                }
         }
	}
	public function kode_rekening(){
		$data['active'] = 'master';
		$data['sub'] = 'kode_rekening';
		$data['sub2'] = '';
		$where['status'] = '1';
		$data['kode_rekening'] = $this->Main_model->getSelectedData('kode_rekening',$where);
		$this->load->view('template/header',$data);
		$this->load->view('master/kode_rekening',$data);
		$this->load->view('template/footer');
	}
	public function add_kode_rekening(){
		$data = array(
			'kode_rekening' => $this->input->post('kode_rekening'),
			'pptk' => $this->input->post('pptk'),
			'anggaran' => $this->input->post('anggaran')
		);
		$this->Main_model->tambahdata('kode_rekening',$data);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menambah kode rekening baru',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/kode_rekening/'</script>";
	}
	public function form_ubahdata_kode_rekening(){
		$data['active'] = 'master';
		$data['sub'] = 'kode_rekening';
		$data['sub2'] = '';
		$where['id'] = $this->uri->segment(3);
		$data['kode_rekening'] = $this->Main_model->getSelectedData('kode_rekening',$where);
		$this->load->view('template/header',$data);
		$this->load->view('master/form_ubahdata_kode_rekening',$data);
		$this->load->view('template/footer');

	}
	public function update_kode_rekening(){
		$where['id'] = $this->input->post('id');
		$data = array(
			'kode_rekening' => $this->input->post('kode_rekening'),
			'pptk' => $this->input->post('pptk'),
			'anggaran' => $this->input->post('anggaran')
		);
		$this->Main_model->updateData('kode_rekening',$data,$where);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah data kode rekening',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>yeah! </strong>Data telah berhasil diubah.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/kode_rekening/'</script>";
	}
	public function delete_kode_rekening(){
		$where['id'] = $this->uri->segment(3);
		$data_update['status'] = '0';
		$this->Main_model->updateData('kode_rekening',$data_update,$where);
		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil dihapus.<br /></div>' );
			redirect('Master/kode_rekening');
	}
	public function nomor_surat(){
		$data['active'] = 'master';
		$data['sub'] = 'nomor_surat';
		$data['sub2'] = '';
		$where['status'] = '1';
		$data['nomor_surat'] = $this->Main_model->getSelectedData('nomor_surat',$where);
		$this->load->view('template/header',$data);
		$this->load->view('master/nomor_surat',$data);
		$this->load->view('template/footer');
	}
	public function add_nomor_surat(){
		$data = array(
			'nomor_surat' => $this->input->post('nomor_surat'),
			'keterangan' => $this->input->post('keterangan'),
			'ttd' => $this->input->post('ttd'),
			'nip' => $this->input->post('nip'),
			'jabatan' => $this->input->post('jabatan'),
		);
		$this->Main_model->tambahdata('nomor_surat',$data);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menambah nomor surat baru',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/nomor_surat/'</script>";
	}
	public function form_ubahdata_nomor_surat(){
		$data['active'] = 'master';
		$data['sub'] = 'nomor_surat';
		$data['sub2'] = '';
		$where['id'] = $this->uri->segment(3);
		$data['nomor_surat'] = $this->Main_model->getSelectedData('nomor_surat',$where);
		$this->load->view('template/header',$data);
		$this->load->view('master/form_ubahdata_nomor_surat',$data);
		$this->load->view('template/footer');

	}
	public function update_nomor_surat(){
		$where['id'] = $this->input->post('id');
		$data = array(
			'nomor_surat' => $this->input->post('nomor_surat'),
			'keterangan' => $this->input->post('keterangan'),
			'ttd' => $this->input->post('ttd'),
			'nip' => $this->input->post('nip'),
			'jabatan' => $this->input->post('jabatan'),
		);
		$this->Main_model->updateData('nomor_surat',$data,$where);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah nomor surat',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/nomor_surat/'</script>";
	}
	public function delete_nomor_surat(){
		$where['id'] = $this->uri->segment(3);
		$data_update['status'] = '0';
		$this->Main_model->updateData('nomor_surat',$data_update,$where);
		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil dihapus.<br /></div>' );
			redirect('Master/nomor_surat');
	}
	public function kategori_keperluan(){
		if(($this->session->userdata('id'))==NULL){
			echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
		}
		else{
			$data['active'] = 'master';
			$data['sub'] = 'kategori_keperluan';
			$data['sub2'] = '';
			$where['status'] = '1';
			$data['kategori_keperluan'] = $this->Main_model->getSelectedData('kategori_keperluan',$where);
			$this->load->view('template/header',$data);
			$this->load->view('master/kategori_keperluan',$data);
			$this->load->view('template/footer');
		}
	}
	public function simpan_keperluan(){
		if(($this->session->userdata('id'))==NULL){
			echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
        }
        else{
        	$data = array(
				'nama_keperluan' => $this->input->post('keperluan')
			);
			$this->Main_model->tambahdata('kategori_keperluan',$data);

			$data_log = array(
	                        'aktor' => $this->session->userdata('id'),
	                        'keterangan' => 'Menambah kategori keperluan baru',
	                        'waktu' => date('Y-m-d H-i-s')
	                    );
	                    $this->User_model->tambahdata('log_activity',$data_log);

			$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/kategori_keperluan/'</script>";
        }
	}
	public function ubah_keperluan(){
		if(($this->session->userdata('id'))==NULL){
			echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
        }
        else{
			$where['id'] = $this->input->post('id');
			$data = array(
				'nama_keperluan' => $this->input->post('keperluan')
			);
			$this->Main_model->updateData('kategori_keperluan',$data,$where);

			$data_log = array(
	                        'aktor' => $this->session->userdata('id'),
	                        'keterangan' => 'Mengubah kategori keperluan',
	                        'waktu' => date('Y-m-d H-i-s')
	                    );
	                    $this->User_model->tambahdata('log_activity',$data_log);

			$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/kategori_keperluan/'</script>";
        }
	}
	public function hapus_keperluan(){
		if(($this->session->userdata('id'))==NULL){
			echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
        }
        else{
			$where['id'] = $this->uri->segment(3);
			$data = array(
				'status' => '0'
			);
			$this->Main_model->updateData('kategori_keperluan',$data,$where);

			$data_log = array(
	                        'aktor' => $this->session->userdata('id'),
	                        'keterangan' => 'Mengubah kategori keperluan',
	                        'waktu' => date('Y-m-d H-i-s')
	                    );
	                    $this->User_model->tambahdata('log_activity',$data_log);

			$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil dihapus.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/kategori_keperluan/'</script>";
        }
	}
	public function buat_jaldis()
	{
		$data['active'] = 'jaldis';
		$data['sub'] = 'buat_jaldis';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['status'] = '1';
		//$data['nomor_surat'] = $this->Main_model->getSelectedData('nomor_surat',$where);
    	//$data['anggota_dewan'] = $this->Master_model->getdataanggotadewan();
    	$data['setwan'] = $this->Master_model->getdatabukandewan();
    	$data['data_komisi'] = $this->Main_model->getAlldata('komisi');
        $data['data_badan'] = $this->Main_model->getSelectedData('badan',$where);
        $data['data_panja'] = $this->Main_model->getSelectedData('panja',$where);
        $data['kategori_keperluan'] = $this->Main_model->getSelectedData('kategori_keperluan',$where);
        $data['kode_rekening'] = $this->Main_model->getSelectedData('kode_rekening',$where);
        $data['data_pansus'] = $this->Main_model->getSelectedData('pansus',$where);
        $data['data_pimpinan'] = $this->Main_model->getdatapimpinan();
		$this->load->view('template/header',$data);
		$this->load->view('master/buat_jaldis',$data);
		$this->load->view('template/footer');
		}
	}
	public function simpan_jaldis(){
		$nama = $this->input->post('nama');
		$nama2 = $this->input->post('nama2');
		$nama3 = $this->input->post('nama3');
		$kode_rekening = $this->input->post('kode_rekening');
		$dasar_hukum = $this->input->post('dasar_hukum');
		$kode_jaldis = $this->Main_model->getKodeJaldis();
		//$status = $this->input->post('status');
		$ak = '';
		if($this->input->post('stts_ak') != NULL){
			$ak = $this->input->post('ak');
		}
		else{
			$ak = 'anggota setwan';
		}
		$id_pimpinan = explode('-', $this->input->post('pimpinan'));
		$data_jaldis = array(
			'kode_jaldis' => $kode_jaldis,
			'start_date' => $this->input->post('from'),
			'end_date' => $this->input->post('to'),
			'tujuan' => $this->input->post('tujuan'),
			'pimpinan' => $id_pimpinan[1],
			'transportasi' => $this->input->post('transportasi'),
			'kategori' => $this->input->post('kategori'),
			'keperluan' => $this->input->post('keperluan'),
			'tanggal_ttd' => $this->input->post('tanggal_ttd'),
			'alat_kelengkapan' => $ak
		);
		//print_r($data_jaldis);
		$this->Main_model->tambahData("jaldis",$data_jaldis);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menambah data perjalanan dinas',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

        if($nama3 != NULL){
         
                for($i = 0; $i < count($nama3); $i++){
                $detail_jaldis = array('kode_jaldis' => $kode_jaldis,
 	                                   'id_anggota' => $nama3[$i],
 	                               	   'start_date' => $this->input->post('from'),
									   'end_date' => $this->input->post('to'),
									   'keterangan_posisi' => 'pimpinan');
                //print_r($detail_jaldis);
                $this->Main_model->tambahData("detail_jaldis",$detail_jaldis);
                }
        }
        else{
        	echo '';
        }

		if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                	$where_dewan = array(
                		'kode_jaldis' => $kode_jaldis,
 	                    'id_anggota' => $nama[$i]
                	);
                	$cek_anggota = $this->Main_model->getSelectedData('detail_jaldis',$where_dewan);
                	if(empty($cek_anggota)){
                		$detail_jaldis = array('kode_jaldis' => $kode_jaldis,
 	                                   'id_anggota' => $nama[$i],
 	                               	   'start_date' => $this->input->post('from'),
									   'end_date' => $this->input->post('to'));
		                //print_r($detail_jaldis);
		                $this->Main_model->tambahData("detail_jaldis",$detail_jaldis);
                	}
                	else{
                		echo '';
                	}
                
                }
        }
        else{
        	echo '';
        }      

        if($nama2 != NULL){
         
                for($i = 0; $i < count($nama2); $i++){
                $detail_jaldis = array('kode_jaldis' => $kode_jaldis,
 	                                   'id_anggota' => $nama2[$i],
 	                               	   'start_date' => $this->input->post('from'),
									   'end_date' => $this->input->post('to'));
                //print_r($detail_jaldis);
                $this->Main_model->tambahData("detail_jaldis",$detail_jaldis);
                }
        }
        else{
        	echo '';
        }

        if($kode_rekening != NULL){
         
                for($i = 0; $i < count($kode_rekening); $i++){
                $daftar_rekening = array('kode_jaldis' => $kode_jaldis,
 	                                     'kode_rekening' => $kode_rekening[$i]);
                //print_r($daftar_rekening);
                $this->Main_model->tambahData("akun",$daftar_rekening);
                }
        }
        else{
        	echo '';
        }      

        if($dasar_hukum != NULL){
         
                for($i = 0; $i < count($dasar_hukum); $i++){
                $dh = array('kode_jaldis' => $kode_jaldis,
 	                        'dasar_hukum' => $dasar_hukum[$i]);
                //print_r($dh);
                $this->Main_model->tambahData("dasar_hukum",$dh);
                }
        }
        else{
        	echo '';
        }            
        redirect('Master/keberangkatan/'.$kode_jaldis);
	}
	public function laporan_jaldis(){
		$data['active'] = 'jaldis';
		$data['sub'] = 'lihat_jaldis';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_jaldis'] = $this->uri->segment(3);
    	$data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where);
    	// $data['komisi'] = $this->Main_model->getAlldata('komisi');
    	// $data['pansus'] = $this->Main_model->getAlldata('pansus');
    	// $data['badan'] = $this->Main_model->getAlldata('badan');
    	// $data['jaldis'] = $this->Master_model->jaldis_oke();
		$this->load->view('template/header',$data);
		$this->load->view('master/laporan_jaldis',$data);
		$this->load->view('template/footer');
		}
	}
	public function tampil_ajax(){
		$where['kode_jaldis'] = $this->input->post('id');
    	$data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where);
    	$this->load->view('master/ajax_laporan',$data);
	}
	public function keberangkatan(){
		$data['active'] = 'jaldis';
		$data['sub'] = 'lihat_jaldis';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_jaldis'] = $this->uri->segment(3);
    	$data['kode_jaldis'] = $this->uri->segment(3);
    	$data['jaldis_dewan'] = $this->Main_model->JaldisDewan($this->uri->segment(3));
    	$data['jaldis_setwan'] = $this->Main_model->JaldisSetwan($this->uri->segment(3));
    	$data['akun'] = $this->Master_model->getDataAkun($this->uri->segment(3));
    	$data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where);
    	$data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where);
		$this->load->view('template/header',$data);
		$this->load->view('master/keberangkatan',$data);
		$this->load->view('template/footer');
		}
	}
	public function update_waktu(){
				if($this->input->post('start_date') != NULL){
                $start_date = $this->input->post('start_date');
                $end_date = $this->input->post('end_date');
                $kode_jaldis = $this->input->post('idj');
	                for($i = 0; $i < count($start_date); $i++){
		                $idj = $this->input->post('id');
		                $where['id'] = $idj[$i];
		                $update_waktu = array(
		                                  'start_date' => $start_date[$i],
		                                  'end_date' => $end_date[$i]);

		                $this->Main_model->updateData("detail_jaldis",$update_waktu,$where);
		                //print_r($update_waktu);
	                }
                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/keberangkatan/".$kode_jaldis."'</script>";
                }
	}
	public function lihat_jaldis(){
		$data['active'] = 'jaldis';
		$data['sub'] = 'lihat_jaldis';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['data_jaldis'] = $this->Main_model->getDataJaldis();
		$this->load->view('template/header',$data);
		$this->load->view('master/lihat_jaldis',$data);
		$this->load->view('template/footer');
		}
	}
	public function detail_jaldis(){
		$data['active'] = 'jaldis';
		$data['sub'] = 'lihat_jaldis';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_jaldis'] = $this->uri->segment(3);
    	//$data['nomor_surat'] = $this->Surat_model->nomorsurat();
    	$data['detail_jaldis'] = $this->Main_model->getDetailJaldis($this->uri->segment(3));
    	$data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where);
    	$data['akun'] = $this->Master_model->getDataAkun($this->uri->segment(3));
    	$data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where);
		$this->load->view('template/header',$data);
		$this->load->view('master/detail_jaldis',$data);
		$this->load->view('template/footer');
		}
	}
	public function ubah_jaldis(){
		$data['active'] = 'jaldis';
		$data['sub'] = 'lihat_jaldis';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_jaldis'] = $this->uri->segment(3);
    	//$data['nomor_surat'] = $this->Surat_model->nomorsurat();
    	//$data['detail_jaldis'] = $this->Main_model->getDetailJaldis($this->uri->segment(3));
    	$data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where);
    	$data['akun'] = $this->Master_model->getDataAkun($this->uri->segment(3));
    	$data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where);
		
    	$stts['status'] = '1';
    	$data['kategori_keperluan'] = $this->Main_model->getSelectedData('kategori_keperluan',$stts);
    	$data['setwan'] = $this->Master_model->SetwanJalDis($this->uri->segment(3));
    	$data['pimpinan'] = $this->Master_model->PimpinanJalDis($this->uri->segment(3));
    	$data['data_komisi'] = $this->Main_model->getAlldata('komisi');
        $data['data_badan'] = $this->Main_model->getSelectedData('badan',$stts);
        $data['kode_rekening'] = $this->Main_model->getSelectedData('kode_rekening',$stts);
        $data['data_pansus'] = $this->Main_model->getSelectedData('pansus',$stts);

        $data['dataanggota'] = '';
        $datajaldis = $this->Main_model->getSelectedData('jaldis',$where);
        foreach ($datajaldis as $key => $value) {
                    $ak = substr($value->alat_kelengkapan, 0,1);
                    if($ak=='B'){
                        $data['dataanggota'] = $this->Master_model->JalDisBadan($value->alat_kelengkapan,$this->uri->segment(3));
                    }
                    elseif($ak=='P'){
                        $data['dataanggota'] = $this->Master_model->JalDisPansus($value->alat_kelengkapan,$this->uri->segment(3));
                    }
                    elseif($ak=='K'){
                        $data['dataanggota'] = $this->Master_model->JalDisKomisi($value->alat_kelengkapan,$this->uri->segment(3));
                    }
                    else{
                    	$data['dataanggota'] = $this->Master_model->JalDisDewan($this->uri->segment(3));	
                    }
                }

		$this->load->view('template/header',$data);
		$this->load->view('master/ubah_jaldis',$data);
		$this->load->view('template/footer');
		}
	}
	public function updateJaldis(){
		$nama = $this->input->post('nama');
		$nama2 = $this->input->post('nama2');
		$nama3 = $this->input->post('nama3');
		$kode_rekening = $this->input->post('kode_rekening');
		$dasar_hukum = $this->input->post('dasar_hukum');
		$kode_jaldis['kode_jaldis'] = $this->input->post('kode_jaldis');
		//$status = $this->input->post('status');
		$ak = '';
		if($this->input->post('ak') != NULL){
			$ak = $this->input->post('ak');
		}
		else{
			$ak = $this->input->post('alat_kelengkapan');
		}
		$data_jaldis = array(
			'start_date' => $this->input->post('from'),
			'end_date' => $this->input->post('to'),
			'tujuan' => $this->input->post('tujuan'),
			'transportasi' => $this->input->post('transportasi'),
			'kategori' => $this->input->post('kategori'),
			'keperluan' => $this->input->post('keperluan'),
			'tanggal_ttd' => $this->input->post('tanggal_ttd'),
			'alat_kelengkapan' => $ak
		);
		//print_r($data_jaldis);
		$this->Main_model->updateData("jaldis",$data_jaldis,$kode_jaldis);
		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah data perjalanan dinas',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);
        $this->Main_model->deleteData('detail_jaldis',$kode_jaldis);
		if($nama3 != NULL){
         
                for($i = 0; $i < count($nama3); $i++){
                $detail_jaldis = array('kode_jaldis' => $this->input->post('kode_jaldis'),
 	                                   'id_anggota' => $nama3[$i],
 	                               	   'start_date' => $this->input->post('from'),
									   'end_date' => $this->input->post('to'),
									   'keterangan_posisi' => 'pimpinan');
                //print_r($detail_jaldis);
                $this->Main_model->tambahData("detail_jaldis",$detail_jaldis);
                }
        }
        else{
        	echo '';
        }    

		if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                	$where_dewan = array(
                		'kode_jaldis' => $this->input->post('kode_jaldis'),
 	                    'id_anggota' => $nama[$i]
                	);
                	$cek_anggota = $this->Main_model->getSelectedData('detail_jaldis',$where_dewan);
                	if(empty($cek_anggota)){
                		$detail_jaldis = array('kode_jaldis' => $this->input->post('kode_jaldis'),
 	                                   'id_anggota' => $nama[$i],
 	                               	   'start_date' => $this->input->post('from'),
									   'end_date' => $this->input->post('to'));
                		//print_r($detail_jaldis);
                		$this->Main_model->tambahData("detail_jaldis",$detail_jaldis);
                	}
                	else{
                		echo '';
                	}
                }
        }
        else{
        	echo '';
        }      

        if($nama2 != NULL){
         
                for($i = 0; $i < count($nama2); $i++){
                $detail_jaldis = array('kode_jaldis' => $this->input->post('kode_jaldis'),
 	                                   'id_anggota' => $nama2[$i],
 	                               	   'start_date' => $this->input->post('from'),
									   'end_date' => $this->input->post('to'));
                //print_r($detail_jaldis);
                $this->Main_model->tambahData("detail_jaldis",$detail_jaldis);
                }
        }
        else{
        	echo '';
        }     

        if($kode_rekening != NULL){
         
                for($i = 0; $i < count($kode_rekening); $i++){
                $daftar_rekening = array('kode_jaldis' => $this->input->post('kode_jaldis'),
 	                                     'kode_rekening' => $kode_rekening[$i]);
                //print_r($daftar_rekening);
                $this->Main_model->tambahData("akun",$daftar_rekening);
                }
        }
        else{
        	echo '';
        }      

        if($dasar_hukum != NULL){
         
                for($i = 0; $i < count($dasar_hukum); $i++){
                $dh = array('kode_jaldis' => $this->input->post('kode_jaldis'),
 	                        'dasar_hukum' => $dasar_hukum[$i]);
                //print_r($dh);
                $this->Main_model->tambahData("dasar_hukum",$dh);
                }
        }
        else{
        	echo '';
        }            
        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
        echo "<script>window.location='".base_url()."Master/detail_jaldis/".$this->input->post('kode_jaldis')."'</script>";
	}
	public function ubah_dasarhukum(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
		$id_ds['id'] = $this->input->post('id');
		$dasar_hukum = $this->input->post('dasar_hukum'); 
		$kode_jaldis = $this->input->post('kode_jaldis'); 
			                $data = array(
			                                  'dasar_hukum' => $dasar_hukum);

			                $this->Main_model->updateData("dasar_hukum",$data,$id_ds);
			                redirect('Master/ubah_jaldis/'.$kode_jaldis);   
		}
	}
	public function hapus_dasarhukum(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
		$where['id'] = $this->uri->segment(3);
		$kode_jaldis = $this->uri->segment(4);
		$this->Main_model->deleteData('dasar_hukum',$where);
        redirect('Master/ubah_jaldis/'.$kode_jaldis);  
		}
	}
	public function ubah_nomorakun(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
		$id_kr['id'] = $this->input->post('id');
		$kode_rekening = $this->input->post('kode_rekening'); 
		$kode_jaldis = $this->input->post('kode_jaldis'); 
			                $data = array(
			                                  'kode_rekening' => $kode_rekening);

			                $this->Main_model->updateData("akun",$data,$id_kr);
			                redirect('Master/ubah_jaldis/'.$kode_jaldis);   
		}
	}
	public function hapus_nomorakun(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
		$where['id'] = $this->uri->segment(3);
		$kode_jaldis = $this->uri->segment(4);
		$this->Main_model->deleteData('akun',$where);
        redirect('Master/ubah_jaldis/'.$kode_jaldis);  
		}
	}
	public function notulen()
	{
		$data['active'] = 'jaldis';
		$data['sub'] = 'lihat_jaldis';
		$data['sub2'] = '';
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
		$data['foto'] = $this->Main_model->getSelectedData('hasil_jaldis',$where);
		$this->load->view('laporan/notulen',$data);
		//$this->load->view('template/footer');
		}
	}
	public function catatan_jaldis(){
		$data['active'] = 'jaldis';
		$data['sub'] = 'lihat_jaldis';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_jaldis'] = $this->input->post('kode_jaldis');
    	// $data_setelah = array(
    	// 	'diterima' => $this->input->post('diterima'),
    	// 	'catatan' => $this->input->post('catatan'),
    	// 	'anggaran' => $this->input->post('anggaran')
    	// );
		// $this->Main_model->updateData("jaldis",$data_setelah,$where);
		$laporan_jaldis = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $konfig['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"]).'/assets/laporan_jaldis/'; //path folder
        $konfig['allowed_types'] = 'docx|doc|pdf'; //type yang dapat diakses bisa anda sesuaikan
        $konfig['max_size'] = '3072'; //maksimum besar file 3M
        $konfig['max_width']  = '5000'; //lebar maksimum 5000 px
        $konfig['max_height']  = '5000'; //tinggi maksimu 5000 px
        $konfig['file_name'] = $laporan_jaldis; //nama yang terupload nantinya

        $this->upload->initialize($konfig);

        if(isset($_FILES['file']['name']))
		{
			if(!$this->upload->do_upload('file'))
			{
				$datalaporan = array(
					'diterima' => $this->input->post('diterima'),
					'catatan' => $this->input->post('catatan'),
					'anggaran' => $this->input->post('anggaran')
				);
				$this->User_model->updateData("jaldis",$datalaporan,$where); //akses model untuk menyimpan ke database
			}
			else
			{
			$filelaporan = $this->upload->data();
			$datalaporan = array(
				'diterima' => $this->input->post('diterima'),
				'catatan' => $this->input->post('catatan'),
				'anggaran' => $this->input->post('anggaran'),
				'file_laporan' =>$filelaporan['file_name']
			);

			$this->User_model->updateData("jaldis",$datalaporan,$where); //akses model untuk menyimpan ke database
			}
		}
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
            $fileName = $this->input->post('kode_jaldis').$no++;

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
        else{
        	echo '';
        }
        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
		redirect('Master/lihat_jaldis/');
		}
	}
	public function keterangan_jaldis(){
		$data['active'] = 'jaldis';
		$data['sub'] = '';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['kode_jaldis'] = $this->uri->segment(3);
    	$id_anggota['id'] = $this->uri->segment(4);
    	$data['detail_jaldis'] = $this->Main_model->getDetailJaldis($this->uri->segment(3));
    	$data['data_jaldis'] = $this->Main_model->getSelectedData('jaldis',$where);
    	$data['akun'] = $this->Master_model->getDataAkun($this->uri->segment(3));
    	$data['dasar_hukum'] = $this->Main_model->getSelectedData('dasar_hukum',$where);
    	$data['data_anggota'] = $this->Main_model->getSelectedData('anggota',$id_anggota);
		$this->load->view('template/header',$data);
		$this->load->view('master/keterangan_jaldis',$data);
		$this->load->view('template/footer');
		}
	}
	public function simpan_keterangan(){
		$kode_jaldis = $this->input->post('kode_jaldis');
		$data = array(
			'kode_jaldis' => $kode_jaldis,
			'id_anggota' => $this->input->post('id_anggota'),
			'keterangan' => $this->input->post('keperluan')
		);
		$this->Main_model->tambahData("keterangan_jaldis",$data);
		redirect('Master/detail_jaldis/'.$kode_jaldis);
	}
	public function hapus_jaldis(){
		$where['kode_jaldis'] = $this->uri->segment(3);
		$this->Main_model->deleteData('jaldis',$where);
        $this->Main_model->deleteData('detail_jaldis',$where);
        $this->Main_model->deleteData('surat_cetak',$where);
        $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menghapus data perjalanan dinas',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);
                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil dihapus.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/lihat_jaldis'</script>";
	}
	public function tambah_pansus(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'pansus';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['data_anggota'] = $this->Master_model->getdataanggotadewan();
		$this->load->view('template/header',$data);
		$this->load->view('master/tambah_pansus',$data);
		$this->load->view('template/footer');
		}
	}
	public function simpan_pansus(){
		$nama = $this->input->post('nama');
		$kode_pansus = $this->Master_model->getKodePansus();
	
		$data_pansus = array(
			'kode_pansus' => $kode_pansus,
			'nama_pansus' => $this->input->post('nama_pansus'),
			'perihal' => $this->input->post('perihal'),
			'awal_periode' => $this->input->post('from'),
			'akhir_periode' => $this->input->post('to')
		);
		
		$this->Main_model->tambahData("pansus",$data_pansus);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menambah data pembentukan PANSUS',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                $anggota_pansus = array('kode_pansus' => $kode_pansus,
 	                                    'id_anggota' => $nama[$i],
 	                               		'jabatan' => 'Anggota');
                //print_r($detail_jaldis);
                $this->Main_model->tambahData("anggota_pansus",$anggota_pansus);
                }
               }
        else{
        	echo '';
        }
        // if($status=='1'){
        // 	if($nama != NULL){
	       //  	for($i = 0; $i < count($nama); $i++){
	       //          $detail_jaldis = array('kode_jaldis' => $kode_jaldis,
	 	     //                               'id_anggota' => $nama[$i],
	 	     //                           	   'nomor_surat' => '1');
	          
	       //          $this->Main_model->tambahData("surat_cetak",$detail_jaldis);
	       //          }
        //         }
        //     else{
        //     	echo '';
        //     }
        // }
        // else{
        // 	if($nama != NULL){
	       //  	for($i = 0; $i < count($nama); $i++){
	       //          $detail_jaldis = array('kode_jaldis' => $kode_jaldis,
	 	     //                               'id_anggota' => $nama[$i],
	 	     //                           	   'nomor_surat' => '2');
	             
	       //          $this->Main_model->tambahData("surat_cetak",$detail_jaldis);
	       //          }
        //         }
        //     else{
        //     	echo '';
        //     }
        // }
        // $this->load->view('surat/surat_tugas',$data);
        
        redirect('Master/jabatan_pansus/'.$kode_pansus);
	}
	public function jabatan_pansus(){		
		
        
        $data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'pansus';
		
    	$where['kode_pansus'] = $this->uri->segment(3);
        $data['anggota_pansus'] = $this->Master_model->getAnggotaPansus($this->uri->segment(3));
    	$data['data_pansus'] = $this->Main_model->getSelectedData('pansus',$where);
		
		$this->load->view('template/header',$data);
		$this->load->view('master/jabatan_pansus',$data);
		$this->load->view('template/footer');
	}
	public function update_jabatan(){
    			if($this->input->post('jabatan') != NULL){
               
                $jabatan = $this->input->post('jabatan');

                for($i = 0; $i < count($jabatan); $i++){
                $id = $this->input->post('id');
                $table_id['id'] = $id[$i];
                $data = array(
                                  'jabatan' => $jabatan[$i]);
                //print_r($data);
                $this->Main_model->updateData("anggota_pansus",$data,$table_id);
          
                }
                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/lihat_pansus'</script>";
                }

    
	}
	public function lihat_pansus(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'pansus';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['data_pansus'] = $this->Master_model->getDataPansus();
		$this->load->view('template/header',$data);
		$this->load->view('master/lihat_pansus',$data);
		$this->load->view('template/footer');
		}
	}
	public function ajax_pansus(){
		$where['id'] = $this->input->post('id');
		$data['data_anggota'] = $this->Master_model->ajax_pansus($this->input->post('kode_pansus'));
        $data['data_pansus'] = $this->User_model->getSelectedData('pansus',$where);
        $this->load->view('master/ajax_pansus',$data);
	}
	public function ubah_pansus(){
		$idpansus['kode_pansus'] = $this->input->post('id');
		$nama = $this->input->post('nama');
		 
		$nama_pansus = $this->input->post('nama_pansus');
		$perihal = $this->input->post('perihal');   
		$awal_periode = $this->input->post('awal_periode');    
		$akhir_periode = $this->input->post('akhir_periode');    
			                $data = array(
			                                  'nama_pansus' => $nama_pansus,
			                                  'perihal' => $perihal,
			                              	  'awal_periode' => $awal_periode,
			                                  'akhir_periode' => $akhir_periode);

			                $this->Main_model->updateData("pansus",$data,$idpansus);

		$this->User_model->deleteData('anggota_pansus',$idpansus);

		if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                $kata = explode('_', $nama[$i]);
                $jp = '';
                if($kata[2]==NULL){
                	$jp = 'Anggota';
                }
                else{
                	$jp = $kata[2];
                }
                $anggota_pansus = array('id' => $kata[1],
                						'kode_pansus' => $this->input->post('id'),
 	                                    'id_anggota' => $kata[0],
 	                                	'jabatan' => $jp);
                $this->Main_model->tambahData("anggota_pansus",$anggota_pansus);
                //print_r($anggota_pansus);
                }
               }
        else{
        	echo '';
        }            

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah data PANSUS',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);
		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
	                redirect('Master/lihat_pansus/');
	}
	public function hapus_pansus(){
		$where['kode_pansus'] = $this->uri->segment(3);
		$data = array(
			                                  'status' => '0');

			                $this->Main_model->updateData("pansus",$data,$where);
        $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menghapus data PANSUS',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);
                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil dihapus.<br /></div>' );
                echo "<script>window.location='".base_url()."Master/lihat_pansus'</script>";
	}
	public function lihat_komisi(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'komisi';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['data_komisi'] = $this->Master_model->getDataKomisi();
		$this->load->view('template/header',$data);
		$this->load->view('master/lihat_komisi',$data);
		$this->load->view('template/footer');
		}
	}
	public function ajax_komisi(){
		$where['id'] = $this->input->post('id');
		$data['data_anggota'] = $this->Master_model->getdataanggotadewan();
        $data['datakomisi'] = $this->User_model->getSelectedData('komisi',$where);
        $this->load->view('master/ajax_komisi',$data);
	}
	public function tambah_komisi(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'komisi';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['data_anggota'] = $this->Master_model->getdataanggotadewan();
		$this->load->view('template/header',$data);
		$this->load->view('master/tambah_komisi',$data);
		$this->load->view('template/footer');
		}
	}
	public function simpan_komisi(){
		$nama = $this->input->post('nama');
		$idkomisi = $this->Master_model->getKodeKomisi();
	
		$komisi = array(
			'id_komisi' => $idkomisi,
			'nama_komisi' => $this->input->post('komisi'),
			'keterangan' => $this->input->post('keterangan')
		);
		
		$this->Main_model->tambahData("komisi",$komisi);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menambah data pembentukan Komisi',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){               
                 $where = array('id'=>$nama[$i]);
		         $data = array(
		                'id_komisi' => $idkomisi,
		                'jabatan_komisi' => 'Anggota'
		                );
		        $this->User_model->updateData('anggota',$data,$where);
                }
               }
        else{
        	echo '';
        }
     
        redirect('Master/detail_komisi/'.$idkomisi);
	}
	public function ubah_komisi(){
		$nama = $this->input->post('nama');
		$id_komisi['id_komisi'] = $this->input->post('id');
		$nama_komisi = $this->input->post('komisi');
		$keterangan = $this->input->post('keterangan');           
			                $data = array(
			                                  'nama_komisi' => $nama_komisi,
			                                  'keterangan' => $keterangan);

			                $this->Main_model->updateData("komisi",$data,$id_komisi);

		$data_keterangan = array(
			                                  'id_komisi' => '');

			                $this->Main_model->updateData("anggota",$data_keterangan,$id_komisi);

		if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){               
                 $where = array('id'=>$nama[$i]);
		         $data_orang = array(
		                'id_komisi' => $this->input->post('id')
		                );
		        $this->User_model->updateData('anggota',$data_orang,$where);
                }
               }
        else{
        	echo '';
        }

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah data Komisi',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);
		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
	                redirect('Master/lihat_komisi/');
	}
	public function detail_komisi(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'komisi';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['id_komisi'] = $this->uri->segment(3);
    
    	$data['anggotakomisi'] = $this->Main_model->getSelectedData('anggota',$where);
    
    	$data['komisi'] = $this->Main_model->getSelectedData('komisi',$where);
		$this->load->view('template/header',$data);
		$this->load->view('master/detail_komisi',$data);
		$this->load->view('template/footer');
		}
	}
	public function jabatan_komisi(){
			$idkomisi = $this->input->post('idkomisi');
				if($this->input->post('jabatan') != NULL){
               
	                $jabatan = $this->input->post('jabatan');

		                for($i = 0; $i < count($jabatan); $i++){
			                $id = $this->input->post('id');
			                $table_id['id'] = $id[$i];
			                $data = array(
			                                
			                                  'jabatan_komisi' => $jabatan[$i]);

			                $this->Main_model->updateData("anggota",$data,$table_id);
		          
		                }
		                $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah jabatan anggota Komisi',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

	                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
	                redirect('Master/detail_komisi/'.$idkomisi);
                }
                else{
                	redirect('Master/detail_komisi/'.$idkomisi);
                }
	}
	public function hapus_komisi(){
		$where['id_komisi'] = $this->uri->segment(3);
		$data_update = array(
			'id_komisi' => '',
			'jabatan_komisi' => ''
		);
		$this->Main_model->updateData('anggota',$data_update,$where);
		
        $this->User_model->deleteData('komisi',$where);
		
		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menghapus data komisi',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil dihapus.<br /></div>' );
			redirect('Master/lihat_komisi');
	}
	public function tambah_badan(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'badan';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['data_anggota'] = $this->Master_model->getdataanggotadewan();
		$this->load->view('template/header',$data);
		$this->load->view('master/tambah_badan',$data);
		$this->load->view('template/footer');
		}
	}
	public function simpan_badan(){
		$nama = $this->input->post('nama');
		$id_badan = $this->Master_model->getKodeBadan();
	
		$komisi = array(
			'id_badan' => $id_badan,
			'nama_badan' => $this->input->post('badan'),
			'keterangan' => $this->input->post('keterangan'),
			'tanggal_buat' => date('Y-m-d')
		);
		
		$this->Main_model->tambahData("badan",$komisi);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menambah data pembentukan panitia '.$this->input->post('badan'),
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                $anggotabadan = array('id_badan' => $id_badan,
 	                                  'id_anggota' => $nama[$i],
 	                              	  'jabatan' => 'Anggota');
                $this->Main_model->tambahData("anggota_badan",$anggotabadan);
                }
               }
        else{
        	echo '';
        }
     
        redirect('Master/detail_badan/'.$id_badan);
	}
	public function detail_badan(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'badan';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['id_badan'] = $this->uri->segment(3);
    	$data['detail_badan'] = $this->Main_model->getSelectedData('badan',$where);
    	$data['data_badan'] = $this->Master_model->getDetailDataBadan($this->uri->segment(3));
		$this->load->view('template/header',$data);
		$this->load->view('master/detail_badan',$data);
		$this->load->view('template/footer');
		}
	}
	public function ubah_badan(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'badan';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['id_badan'] = $this->uri->segment(3);
    	$data['detail_badan'] = $this->Main_model->getSelectedData('badan',$where);
    	$data['data_badan'] = $this->Master_model->getAnggotaBadan($this->uri->segment(3));
		$this->load->view('template/header',$data);
		$this->load->view('master/ubah_badan',$data);
		$this->load->view('template/footer');
		}
	}
	public function update_badan(){
		$nama = $this->input->post('nama');
		$id_badan['id_badan'] = $this->input->post('id');
		$nama_badan = $this->input->post('badan');
		$keterangan = $this->input->post('keterangan');           
			                $data = array(
			                                  'nama_badan' => $nama_badan,
			                                  'keterangan' => $keterangan,
			                              	  'tanggal_buat' => $this->input->post('tanggal_buat'));

			                $this->Main_model->updateData("badan",$data,$id_badan);

		$this->User_model->deleteData('anggota_badan',$id_badan);

		if($nama != NULL){
         
                for($i = 0; $i < count($nama); $i++){
                $kata = explode('_', $nama[$i]);
                $jb = '';
                if($kata[2]==NULL){
                	$jb = 'Anggota';
                }
                else{
                	$jb = $kata[2];
                }
                $anggota_badan = array('id' => $kata[1],
                						'id_badan' => $this->input->post('id'),
 	                                    'id_anggota' => $kata[0],
 	                                	'jabatan' => $jb);
                $this->Main_model->tambahData("anggota_badan",$anggota_badan);
                }
               }
        else{
        	echo '';
        }      

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah data Badan',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);
		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
	                redirect('Master/detail_badan/'.$this->input->post('id'));
	}
	public function jabatan_badan(){	
    			if($this->input->post('jabatan') != NULL){
               
                $jabatan = $this->input->post('jabatan');

                for($i = 0; $i < count($jabatan); $i++){
                $id = $this->input->post('id');
                $table_id['id'] = $id[$i];
                $data = array(
                                
                                  'jabatan' => $jabatan[$i]);

                $this->Main_model->updateData("anggota_badan",$data,$table_id);
          
                }
                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah..<br /></div>' );
                echo "<script>window.location='".base_url()."Master/detail_badan/".$this->input->post('idbadan')."'</script>";
                }
	}
	public function lihat_badan(){
		$data['active'] = 'master';
		$data['sub'] = 'alat_kelengkapan';
		$data['sub2'] = 'badan';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['data_badan'] = $this->Master_model->getDataBadan();
		$this->load->view('template/header',$data);
		$this->load->view('master/lihat_badan',$data);
		$this->load->view('template/footer');
		}
	}
	public function selesai_badan(){
		$id_badan['id_badan'] = $this->uri->segment(3);
		    
			                $data = array(    'tanggal_selesai' => date('Y-m-d'),
			                                  'status' => '0');

			                $this->Main_model->updateData("badan",$data,$id_badan);
		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Alat kelengkapan Badan telah selesai tugas',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);
		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
	                redirect('Laporan/badan/'.$this->uri->segment(3));
	}
	public function download(){
		$data['active'] = '';
		$data['sub'] = '';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	
		$data['data_jaldis'] = $this->Main_model->getDataJaldis();
		$this->load->view('master/cetak_data',$data);
		
		}
	}
	public function bantuan(){
		$data['active'] = '';
		$data['sub'] = '';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	
		$this->load->view('template/header',$data);
		$this->load->view('bantuan');
		$this->load->view('template/footer');
		}
	}
	public function log_activity(){
		$data['active'] = 'log_activity';
		$data['sub'] = '';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['log_activity'] = $this->Master_model->getLogActivity();
		$this->load->view('template/header',$data);
		$this->load->view('master/log_activity',$data);
		$this->load->view('template/footer');
		}
	}
	public function kosongkan_log(){
        $this->Master_model->kosongkan_log();
        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button></i>Log activity telah dikosongkan.<br /></div>' );
        echo "<script>window.location='".base_url()."Master/log_activity'</script>";
    }
}