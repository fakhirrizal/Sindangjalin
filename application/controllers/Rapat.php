<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapat extends CI_Controller {

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
		$data['active'] = 'rapat';
		$data['sub'] = 'tambah_data';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['status'] = '1';
    	$data['data_komisi'] = $this->Main_model->getAlldata('komisi');
        $data['data_badan'] = $this->Main_model->getSelectedData('badan',$where);
        $data['data_panja'] = $this->Main_model->getSelectedData('panja',$where);
        $data['data_pansus'] = $this->Main_model->getSelectedData('pansus',$where);
        $data['data_skpd'] = $this->Main_model->getSelectedData('skpd',$where);
		//$this->load->view('template/header',$data);
		$this->load->view('rapat/tambah_data',$data);
		//$this->load->view('template/footer');
		}
	}
	public function simpan_data(){
		$kode_rapat = $this->Rapat_model->getKodeRapat();
		$nama = $this->input->post('nama');
		$nama2 = $this->input->post('nama2');
		$nama3 = $this->input->post('nama3');
		$warna = '';
		$kategori = '';
		$ak = substr($this->input->post('ak'), 0,1);
		if($ak=='B'){
			$warna = '#3598dc';
			$kategori = 'Badan';
		}
		elseif($ak=='P'){
			$warna = '#f3c200';
			$kategori = 'Pansus';
		}
		elseif($ak=='K'){
			$warna = '#D91E18';
			$kategori = 'Komisi';
		}
		elseif($ak=='i'){
			$warna = '#2f353b';
			$kategori = 'Pimpinan';
		}
		elseif($ak=='J'){
			$warna = '#26C281';
			$kategori = 'Panja';
		}
		else{
			$warna = '#9A12B3';
			$kategori = 'DPRD';
		}
		$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"]).'/assets/surat_rapat/'; //path folder
        $config['allowed_types'] = 'pdf|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '5072'; //maksimum besar file 5M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);    

        if($_FILES['bukti_surat']['name']!=NULL)
         {
             if(!$this->upload->do_upload('bukti_surat'))
             {
                $a = $this->upload->display_errors();
                echo "<script>alert('".$a."')</script>";
                echo "<script>window.location='".base_url('Rapat/tambah_data')."'</script>";
             }
             else
             {
                $file = $this->upload->data();
              	$id_pimpinan = explode('-', $this->input->post('pimpinan'));
                $data = array(
                'kode_rapat' => $kode_rapat,
                'nomor_surat' => $this->input->post('nomor_surat'),
                'acara' => $this->input->post('acara'),
                'keterangan' => $this->input->post('keterangan'),
                'warna' => $warna,
                'kategori' => $kategori,
                'tanggal' => $this->input->post('tanggal'),
                //'tanggal_selesai' => $this->input->post('tanggal_selesai'),
                'jam' => $this->input->post('jam'),
                //'jam_berakhir' => $this->input->post('jam2'),
                'materi' => $this->input->post('materi'),
                'pemimpin' => $id_pimpinan[1],
                'nama_file' =>$file['file_name'],
                'hasil_rapat' => $this->input->post('catatan')          
                );

                $res = $this->Main_model->tambahdata('rapat',$data); 

                if($nama != NULL){
         
	                for($i = 0; $i < count($nama); $i++){
	                $anggota_dewan = array('kode_rapat' => $kode_rapat,
	 	                                   'anggota' => $nama[$i],
	 	                               	   'keterangan' => $this->input->post('ak'),
										   'sebelum' => '1');
	                //print_r($anggota_dewan);
	                $this->Main_model->tambahData("peserta_rapat",$anggota_dewan);
	                }
		        }
		        else{
		        	echo '';
		        }      

		        if($nama2 != NULL){
		         
		                for($i = 0; $i < count($nama2); $i++){
		                $anggota_sppd = array( 'kode_rapat' => $kode_rapat,
		 	                                   'anggota' => $nama2[$i],
		 	                               	   'keterangan' => 'skpd',
											   'sebelum' => '1');
	
		                $this->Main_model->tambahData("peserta_rapat",$anggota_sppd);
		                }
		        }
		        else{
		        	echo '';
		        } 

		        if($nama3 != NULL){
		         
		                for($i = 0; $i < count($nama3); $i++){
		                $anggota_umum = array( 'kode_rapat' => $kode_rapat,
		 	                                   'anggota' => $nama3[$i],
		 	                               	   'keterangan' => 'umum',
											   'sebelum' => '1');
		             
		                $this->Main_model->tambahData("peserta_rapat",$anggota_umum);
		                }
		        }
		        else{
		        	echo '';
		        }               

                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
                echo "<script>window.location='".base_url()."Rapat/lihat_data'</script>";
                }
         }
        else{
              	$id_pimpinan = explode('-', $this->input->post('pimpinan'));
                $data = array(
                'kode_rapat' => $kode_rapat,
                'nomor_surat' => $this->input->post('nomor_surat'),
                'acara' => $this->input->post('acara'),
                'keterangan' => $this->input->post('keterangan'),
                'warna' => $warna,
                'kategori' => $kategori,
                'tanggal' => $this->input->post('tanggal'),
                //'tanggal_selesai' => $this->input->post('tanggal_selesai'),
                'jam' => $this->input->post('jam'),
                //'jam_berakhir' => $this->input->post('jam2'),
                'materi' => $this->input->post('materi'),
                'pemimpin' => $id_pimpinan[1],
                'hasil_rapat' => $this->input->post('catatan')      
                );

                $res = $this->Main_model->tambahdata('rapat',$data); 

                if($nama != NULL){
         
	                for($i = 0; $i < count($nama); $i++){
	                $anggota_dewan = array('kode_rapat' => $kode_rapat,
	 	                                   'anggota' => $nama[$i],
	 	                               	   'keterangan' => $this->input->post('ak'),
										   'sebelum' => '1');
	                //print_r($anggota_dewan);
	                $this->Main_model->tambahData("peserta_rapat",$anggota_dewan);
	                }
		        }
		        else{
		        	echo '';
		        }      

		        if($nama2 != NULL){
		         
		                for($i = 0; $i < count($nama2); $i++){
		                $anggota_sppd = array( 'kode_rapat' => $kode_rapat,
		 	                                   'anggota' => $nama2[$i],
		 	                               	   'keterangan' => 'skpd',
											   'sebelum' => '1');
	
		                $this->Main_model->tambahData("peserta_rapat",$anggota_sppd);
		                }
		        }
		        else{
		        	echo '';
		        } 

		        if($nama3 != NULL){
		         
		                for($i = 0; $i < count($nama3); $i++){
		                $anggota_umum = array( 'kode_rapat' => $kode_rapat,
		 	                                   'anggota' => $nama3[$i],
		 	                               	   'keterangan' => 'umum',
											   'sebelum' => '1');
		             
		                $this->Main_model->tambahData("peserta_rapat",$anggota_umum);
		                }
		        }
		        else{
		        	echo '';
		        }               

                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
                echo "<script>window.location='".base_url()."Rapat/lihat_data'</script>";
                
         }
	}
	public function lihat_data(){
		
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data_calendar = $this->Rapat_model->getAlldataRapat();
		$calendar = array();
		foreach ($data_calendar as $key => $val) 
		{
			$calendar[] = array(
							'id' 	=> intval($val->id), 
							'title' => $val->acara, 
							'description' => trim($val->keterangan), 
							'start' => date_format( date_create($val->tanggal) ,"Y-m-d H:i:s"),
							'end' 	=> date_format( date_create($val->tanggal) ,"Y-m-d H:i:s"),
							'color' => $val->warna,
							'jam' => $val->jam,
							'jam_berakhir' => $val->jam_berakhir,
							'nama_file' => $val->nama_file,
							);
		}

		$data = array();
		$data['get_data']			= json_encode($calendar);
		$data['active'] = 'rapat';
		$data['sub'] = 'lihat_data';
		$data['sub2'] = '';
		$data['data_rapat'] = $data_calendar;
		$this->load->view('template/header',$data);
		$this->load->view('rapat/data_rapat',$data);
		$this->load->view('template/footer');
		
		}
	}
	public function timeline_calendar(){
		
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data_calendar = $this->Main_model->getAlldata('rapat');
		$calendar = array();
		foreach ($data_calendar as $key => $val) 
		{
			$calendar[] = array(
							'id' 	=> intval($val->id), 
							'title' => $val->acara, 
							'description' => trim($val->keterangan), 
							'start' => date_format( date_create($val->tanggal) ,"Y-m-d H:i:s"),
							'end' 	=> date_format( date_create($val->tanggal) ,"Y-m-d H:i:s"),
							'color' => $val->warna,
							'jam' => $val->jam,
							//'jam_berakhir' => $val->jam_berakhir,
							'nama_file' => $val->nama_file,
							);
		}

		$data = array();
		$data['get_data']			= json_encode($calendar);
		$data['active'] = 'rapat';
		$data['sub'] = 'timeline';
		$data['sub2'] = '';
		$this->load->view('template/header',$data);
		$this->load->view('rapat/lihat_data',$data);
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
		$data['active'] = 'rapat';
		$data['sub'] = 'lihat_data';
		$data['sub2'] = '';
		//$this->load->view('template/header',$data);
		$this->load->view('rapat/hasil_rapat',$data);
		//$this->load->view('template/footer');
		
		}
	}
	public function update_hasil(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
		$id_r['id'] = $this->input->post('id');
		$hasil_r = $this->input->post('hasil'); 
			                $data = array('jam_berakhir' => $this->input->post('jam2'),
			                                  'hasil_rapat' => $hasil_r);

			                $this->Main_model->updateData("rapat",$data,$id_r);
			                redirect('Rapat/hasil_rapat/'.$this->input->post('id'));   
		}
	}
	public function kehadiran_dewan(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
	    	$nama1 = $this->input->post('nama1');
	    	$where = array(
	    		'kode_rapat' => $this->input->post('kode_rapat'),
	    		'keterangan' => $this->input->post('ak')
	    	);
	    	$data1 = array('setelah' => '0');

	        $this->Main_model->updateData("peserta_rapat",$data1,$where);
	    	if($nama1 != NULL){
			                for($i = 0; $i < count($nama1); $i++){
			                $id_anggota['id'] = $nama1[$i];
			                $data2 = array('setelah' => '1');
			                $this->Main_model->updateData("peserta_rapat",$data2,$id_anggota);
			                }
			    }
			else{
			        	echo '';
			    } 
			redirect('Rapat/hasil_rapat/'.$this->input->post('id'));   
		}
	}
	public function kehadiran_skpd(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
	    	$nama2 = $this->input->post('nama2');
	    	$where = array(
	    		'kode_rapat' => $this->input->post('kode_rapat'),
	    		'keterangan' => 'skpd'
	    	);
	    	$data1 = array('setelah' => '0');

	        $this->Main_model->updateData("peserta_rapat",$data1,$where);
	    	if($nama2 != NULL){
			                for($i = 0; $i < count($nama2); $i++){
			                $id_anggota['id'] = $nama2[$i];
			                $data2 = array('setelah' => '1');
			                $this->Main_model->updateData("peserta_rapat",$data2,$id_anggota);
			                }
			    }
			else{
			        	echo '';
			    } 
			redirect('Rapat/hasil_rapat/'.$this->input->post('id'));   
		}
	}
	public function kehadiran_umum(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
	    	$nama3 = $this->input->post('nama3');
	    	$where = array(
	    		'kode_rapat' => $this->input->post('kode_rapat'),
	    		'keterangan' => 'umum'
	    	);
	    	$data1 = array('setelah' => '0');

	        $this->Main_model->updateData("peserta_rapat",$data1,$where);
	    	if($nama3 != NULL){
			                for($i = 0; $i < count($nama3); $i++){
			                $id_anggota['id'] = $nama3[$i];
			                $data2 = array('setelah' => '1');
			                $this->Main_model->updateData("peserta_rapat",$data2,$id_anggota);
			                }
			    }
			else{
			        	echo '';
			    } 
			redirect('Rapat/hasil_rapat/'.$this->input->post('id'));   
		}
	}
	public function hapus_pesertaumum(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
		$where['id'] = $this->uri->segment(3);
		$kode_rapat['kode_rapat'] = $this->uri->segment(4);
		$this->Main_model->deleteData('peserta_rapat',$where);
		$link = $this->Main_model->getSelectedData('rapat',$kode_rapat);
		$id='';
		foreach ($link as $key => $value) {
			$id = $value->id;
		}
        redirect('Rapat/ubah_data/'.$id);  
		}
	}
	public function ubah_data(){
		
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['active'] = 'rapat';
		$data['sub'] = 'lihat_data';
		$data['sub2'] = '';

		$stts['status'] = '1';
    	$data['data_rapat'] = $this->Rapat_model->getDataRapat($this->uri->segment(3));
    	$data['data_komisi'] = $this->Main_model->getAlldata('komisi');
        $data['data_badan'] = $this->Main_model->getSelectedData('badan',$stts);
        $data['data_pansus'] = $this->Main_model->getSelectedData('pansus',$stts);

        $data['dataanggota'] = '';
        $data['peserta_umum'] = '';
        $data['peserta_skpd'] = '';
        $data['pimpinan'] = '';
        $dr = $this->Rapat_model->getDataRapat($this->uri->segment(3));
        foreach ($dr as $key => $value) {
        			$where0['id'] = $value->pemimpin;
        			$data['pimpinan'] = $this->Main_model->getSelectedData('anggota',$where0);
                    $ak = substr($value->alat_kelengkapan, 0,1);
                    $kr = $value->kode_rapat;
                    if($ak=='B'){
                        $data['dataanggota'] = $this->Rapat_model->RapatBadan($value->alat_kelengkapan,$kr);
                    }
                    elseif($ak=='P'){
                        $data['dataanggota'] = $this->Rapat_model->RapatPansus($value->alat_kelengkapan,$kr);
                    }
                    elseif($ak=='K'){
                        $data['dataanggota'] = $this->Rapat_model->RapatKomisi($value->alat_kelengkapan,$kr);
                    }
                    else{
                    	$data['dataanggota'] = $this->Rapat_model->RapatDewan($kr);	
                    }
                    $where1 = array(
			        	'kode_rapat' => $kr,
			        	'keterangan' => 'umum'
			        );
			        $data['peserta_umum'] = $this->Main_model->getSelectedData('peserta_rapat',$where1);
			        $data['peserta_skpd'] = $this->Rapat_model->getPesertaSkpd($kr);
                }
		$this->load->view('template/header',$data);
		$this->load->view('rapat/ubah_data',$data);
		$this->load->view('template/footer');
		
		}
	}
	public function update_data(){
		$id = $this->input->post('id');
		$kode_rapat = $this->input->post('kode_rapat');
		$nama = $this->input->post('nama');
		$nama2 = $this->input->post('nama2');
		$nama3 = $this->input->post('nama3');   
		$id_pimpinan = explode('-', $this->input->post('pimpinan'));
        $data = array(
                'nomor_surat' => $this->input->post('nomor_surat'),
                'acara' => $this->input->post('acara'),
                'keterangan' => $this->input->post('keterangan'),
                'tanggal' => $this->input->post('tanggal'),
                //'tanggal_selesai' => $this->input->post('tanggal_selesai'),
                'jam' => $this->input->post('jam'),
                //'jam_berakhir' => $this->input->post('jam2'),
                'materi' => $this->input->post('materi'),
                'pemimpin' => $id_pimpinan[1]   
                );
        //print_r($data);
        		$where['kode_rapat'] = $kode_rapat;
                $res = $this->Main_model->updateData("rapat",$data,$where);
                $where2 = array(
					'kode_rapat' => $kode_rapat,
					'keterangan' => 'skpd'               
                );
                $where3 = array(
					'kode_rapat' => $kode_rapat,
					'keterangan' => $this->input->post('alat_kelengkapan')             
                );
                $this->Main_model->deleteData('peserta_rapat',$where2);
                $this->Main_model->deleteData('peserta_rapat',$where3);
                if($nama != NULL){
         
	                for($i = 0; $i < count($nama); $i++){
	                $anggota_dewan = array('kode_rapat' => $kode_rapat,
	 	                                   'anggota' => $nama[$i],
	 	                               	   'keterangan' => $this->input->post('alat_kelengkapan'),
										   'sebelum' => '1');
	           
	                $this->Main_model->tambahData("peserta_rapat",$anggota_dewan);
	                }
		        }
		        else{
		        	echo '';
		        }      

		        if($nama2 != NULL){
		         
		                for($i = 0; $i < count($nama2); $i++){
		                $anggota_sppd = array( 'kode_rapat' => $kode_rapat,
		 	                                   'anggota' => $nama2[$i],
		 	                               	   'keterangan' => 'skpd',
											   'sebelum' => '1');
	
		                $this->Main_model->tambahData("peserta_rapat",$anggota_sppd);
		                }
		        }
		        else{
		        	echo '';
		        } 

		        if($nama3 != NULL){
		         
		                for($i = 0; $i < count($nama3); $i++){
		                $anggota_umum = array( 'kode_rapat' => $kode_rapat,
		 	                                   'anggota' => $nama3[$i],
		 	                               	   'keterangan' => 'umum',
											   'sebelum' => '1');
		             
		                $this->Main_model->tambahData("peserta_rapat",$anggota_umum);
		                }
		        }
		        else{
		        	echo '';
		        }               

                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
                //echo "<script>window.location='".base_url()."Rapat/ubah_data/'".$id."</script>";
                redirect('Rapat/ubah_data/'.$id);
	}
	public function ubah_pesertaumum(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['id'] = $this->input->post('id');
    	$data['anggota'] = $this->input->post('nama');
    	$this->User_model->updateData("peserta_rapat",$data,$where);
		$where2['kode_rapat'] = $this->input->post('kode_rapat');
		$data_r = $this->Main_model->getSelectedData('rapat',$where2);
		$id='';
			foreach ($data_r as $key => $value) {
				$id = $value->id;
			}
			redirect('Rapat/ubah_data/'.$id);
		}
	}
	public function ubah_bukti(){
		
		$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"]).'/assets/surat_rapat/'; //path folder
        $config['allowed_types'] = 'pdf|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '5072'; //maksimum besar file 5M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);    

        if(isset($_FILES['bukti_surat']['name']))
         {
             if(!$this->upload->do_upload('bukti_surat'))
             {
                $a = $this->upload->display_errors();
                echo "<script>alert('".$a."')</script>";
                echo "<script>window.location='".base_url('Rapat/lihat_data')."'</script>";
             }
             else
             {
                $file = $this->upload->data();
              	$id_rapat['id'] = $this->input->post('id_rapat');
                $data = array(
                'nama_file' =>$file['file_name']          
                );

                $this->Main_model->updateData("rapat",$data,$id_rapat);

                $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
                echo "<script>window.location='".base_url()."Rapat/ubah_data/".$this->input->post('id_rapat')."'</script>";
                }
         }
	}
	public function hapus_data(){
		
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['id'] = $this->uri->segment(3);
    	$data = $this->Main_model->getSelectedData('rapat',$where);
    	$where2['kode_rapat'] = '';
    	$where3['kode_rapat'] = $this->uri->segment(3);
    	foreach ($data as $key => $value) {
    		$where2['kode_rapat'] = $value->kode_rapat;
    	}
		$this->Main_model->deleteData('rapat',$where);
		$this->Main_model->deleteData('hasil_rapat',$where3);
		$this->Main_model->deleteData('peserta_rapat',$where2);
        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah </strong>Data telah berhasil dihapus.<br /></div>' );
        echo "<script>window.location='".base_url()."Rapat/lihat_data'</script>";
		}
	}
	public function foto_rapat(){
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	if(!empty($_FILES['foto'])){
      
        	$config = array(
            'upload_path'   => dirname($_SERVER["SCRIPT_FILENAME"]).'/assets/hasil_rapat/',
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
                     'kode_rapat' => $this->input->post('kode_rapat'),
                     'nama_file' => $this->upload->data('file_name')
                    );    
                    $this->User_model->tambahdata("hasil_rapat",$data);  //akses model untuk menyimpan ke database
                    
            } 
        }

        	
        }
        
    	$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
		//redirect('Laporan/jaldis/');
		echo "<script>window.location='".base_url()."Rapat/hasil_rapat/".$this->input->post('kode_rapat')."'</script>";
		}
	}
	function autocomplete()
	{
		$nama = $this->input->post('kirimNama');
		$data['hasil_semua']=$this->Main_model->tampil_semua($nama);
		$data['hasil_limit']=$this->Main_model->tampil_limit($nama);
		if($nama!="")
		{
			echo '<ul>';
				foreach($data['hasil_limit']->result() as $result)
				{
			 		echo '<li class="list-group-item" onClick="pilih(\''.$result->nama.'-'.$result->id.'\');">
					<i class="icon-check"></i>
					<b>'.$result->nama.'</b></li>';
				}
				echo '<li class="list-group-item" id="total">
				<a href="#" class="thickbox">
				Terdapat <b>'.$data['hasil_semua']->num_rows().'</b> hasil pencarian dengan kata "<b>'.$nama.'</b>"</a></li>';
			echo '</ul>';
		}
		else
		{
			echo "error";
		}
	}
}