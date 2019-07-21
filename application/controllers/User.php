<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		if(($this->session->userdata('id'))!=NULL AND $this->session->userdata('level')=='user'){
            echo "<script>window.location='".base_url('beranda')."'</script>";
		}
		else{
			$this->load->view('Pengguna/Auth/login');
		}
	}
	public function login()
	{
		if(($this->session->userdata('id'))!=NULL AND $this->session->userdata('level')=='admin'){
            echo "<script>window.location='".base_url('User/beranda')."'</script>";
		}
		else{
			if ($this->agent->is_mobile()){
				$this->load->view('mobile_login');
			}else{
				$this->load->view('login');
			}
		}
	}
	public function daftar(){
		$where = array('email'=>$this->input->post('email'));
		$cek = $this->Main_model->getSelectedData('user',$where);
		if(empty($cek)){
			$data = array(
			'kd_user' => $this->User_model->getKode(),
			'nama_lengkap' => $this->input->post('fullname'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
			);
			$this->User_model->tambahdata('user',$data);
						
			$data = $this->Main_model->getSelectedData('user',$where);
			foreach ($data as $key => $value) {
				$sess_data['kd_user'] = $value->kd_user;
				$sess_data['username'] = $value->username;
				$sess_data['id'] = $value->id;
		        $sess_data['email'] = $this->input->post('email');
		        $this->session->set_userdata($sess_data);
			}
			redirect('User/profil');
		}
		else{
			echo "<script>alert('Email telah digunakan');</script>";
			echo "<script>window.location='".base_url()."'</script>";
		}
	}
	public function masuk(){
		$cek = $this->User_model->cek($this->input->post('email'),$this->input->post('password'));
		if($cek->num_rows() > 0){
			$where = array('email'=>$this->input->post('email'));
			$data = $this->Main_model->getSelectedData('user',$where);
			foreach ($data as $key => $value) {
				$sess_data['username'] = $value->username;
				$sess_data['id'] = $value->id;
				$sess_data['status'] = $value->status;
				$sess_data['email'] = $this->input->post('email');
				$sess_data['level'] = 'admin';
		        $this->session->set_userdata($sess_data);
			}
			redirect('User/beranda');
		}
		else{
			$this->session->set_flashdata('error','<br><br><br><div class="alert alert-danger alert-dismissible" role="alert" style="text-align: justify;">
											  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											  <strong>Ups! </strong>Email atau Kata Sandi yang Anda masukkan tidak valid.
											</div>	' );
	   		redirect('admin');
		}
	}
	public function detail(){
			$data['active'] = 'user';
			$data['sub'] = 'rekap';
			$data['sub2'] = '';
			$where['kd_user'] = $this->uri->segment(3);
			$where2['kd_user'] = $this->uri->segment(3);
			$data['data_profil'] = $this->Main_model->getSelectedData('user',$where);
			$data['data_pendidikan'] = $this->Main_model->getSelectedData('riwayat_pendidikan',$where2);
			$data['data_pekerjaan'] = $this->Main_model->getSelectedData('pengalaman_bekerja',$where2);
			$this->load->view('template/header',$data);
			$this->load->view('user/detail_user',$data);
			$this->load->view('template/footer');
	}
	public function lupa_password(){
		$where = array('email'=>$this->input->post('email'));
		$data = $this->User_model->getSelectedData('user',$where);
		if(!empty($data)){
			$kode = $this->User_model->generate_pass(10);
			$ubah = array('password'=>$kode);
			$this->User_model->updateData('user',$ubah,$where);
			$pesan = "Silahkan gunakan sandi berikut ".$kode." untuk masuk ke sistem kami";
			$subjek = "Lupa sandi";
			$email = 'admin@admin.com';

		    ini_set( 'display_errors', 1 );   
		    error_reporting( E_ALL );        
		    $to = $this->input->post('email');
		    $headers = "From:" . $email;    
		    mail($to,$subjek,$pesan, $headers);  
		    echo "<script>alert('Silahkan cek kotak masuk atau pesan sampah di email Anda.')</script>";  
		    echo "<script>window.location='".base_url('')."'</script>";
		}
		else{
			echo "<script>alert('Email yang Anda masukkan tidak terdaftar.')</script>";  
		    echo "<script>window.location='".base_url('')."'</script>";
		}
	}
	public function profil(){
		$data['active'] = '';
		$data['sub'] = '';
		$data['sub2'] = '';
		$where = array('id'=>$this->session->userdata('id'));
		$where2 = array('email'=>$this->session->userdata('email'));
		$data['data_profil'] = $this->Main_model->getSelectedData('user',$where);
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
		$this->load->view('template/header',$data);
		$this->load->view('user/profil',$data);
		$this->load->view('template/footer');
		}
	}

	
	public function ganti_sandi(){
		$data['active'] = '';
		$data['sub'] = '';
		$data['sub2'] = '';
		$where = array('id'=>$this->session->userdata('id'));
		$data['data_profil'] = $this->User_model->getSelectedData('user',$where);
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
		$this->load->view('template/header',$data);
		$this->load->view('user/ganti_sandi',$data);
		$this->load->view('template/footer');
		}
	}
	public function ganti_email(){
		$data['active'] = '';
		$data['sub'] = '';
		$data['sub2'] = '';
		$where = array('id'=>$this->session->userdata('id'));
		$data['data_profil'] = $this->User_model->getSelectedData('user',$where);
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
		$this->load->view('template/header',$data);
		$this->load->view('user/ganti_email',$data);
		$this->load->view('template/footer');
		}
	}
	
	public function ubah_profil(){
		$where = array('id'=>$this->session->userdata('id'));
        $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
               
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                   
                );
        $this->User_model->updateData('user',$data,$where);

        $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Update profil',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
			redirect('User/profil');
	}
	public function ubah_email(){
		$cek = $this->User_model->cek($this->input->post('email'),$this->input->post('pass'));
		if($cek->num_rows() > 0){
			$where = array('id'=>$this->session->userdata('id'));
			$data = array('email'=>$this->input->post('email_new'));
			$cek2 = $this->User_model->getSelectedData('user',$data);
			if(empty($cek2)){
	   			$this->User_model->updateData('user',$data,$where);

	   			$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah email',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

				$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Email telah berhasil diubah.<br /></div>' );
				redirect('User/ganti_email');
			}
			else{
				$this->session->set_flashdata('gagal','<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Oops! </strong>Email yang Anda masukkan sudah digunakan.<br /></div>' );
	   			redirect('User/ganti_email');
			}
			
		}
		else{
			$this->session->set_flashdata('gagal','<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Oops! </strong>Password yang Anda masukkan tidak valid.<br /></div>' );
	   		redirect('User/ganti_email');
		}		
	}
	public function ubah_sandi(){
		$cek = $this->User_model->cek_pass($this->session->userdata('id'),$this->input->post('password'));
		if($cek->num_rows() > 0){
			$where = array('id'=>$this->session->userdata('id'));
			$data = array('password'=>$this->input->post('password_new'));
			$this->User_model->updateData('user',$data,$where);

			$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah kata sandi akun',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

			$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Password telah berhasil diubah.<br /></div>' );
			redirect('User/ganti_sandi');
		}
		else{
			$this->session->set_flashdata('gagal','<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Oops! </strong>Password yang Anda masukkan tidak valid.<br /></div>' );
	   		redirect('User/ganti_sandi');
		}
	}
	public function ubah_foto(){
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"]).'/assets/global/img/profile/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);    

        if(isset($_FILES['foto']['name']))
         {
             if(!$this->upload->do_upload('foto'))
             {
                $a = $this->upload->display_errors();
                echo "<script>alert('".$a."')</script>";
                echo "<script>window.location='".base_url('User/profil')."'</script>";
             }
             else
             {
                $gbr = $this->upload->data();
                
                $where = array('id'=>$this->session->userdata('id'));
                $data = array(
                'foto' =>$gbr['file_name']          
                );

                $res = $this->User_model->updateData("user",$data,$where); //akses model untuk menyimpan ke database           

                $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah foto profil',
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
                echo "<script>window.location='".base_url()."User/profil'</script>";
                }
         }
	}
	public function beranda(){
		$data['active'] = 'beranda';
		$data['sub'] = '';
		$data['sub2'] = '';
		
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
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
			$this->load->view('template/header',$data);
			$this->load->view('beranda',$data);
			$this->load->view('template/footer');
		}
	}
	public function get_libur_nasional(){
		$array_libur_nasional = json_decode(file_get_contents("https://raw.githubusercontent.com/guangrei/Json-Indonesia-holidays/master/calendar.json"),true);
		echo json_encode($array_libur_nasional);
	}
	public function tentang(){
		$data['active'] = 'tentang';
		$data['sub'] = '';
		$data['sub2'] = '';
		$this->load->view('template/header',$data);
		$this->load->view('tentang');
		$this->load->view('template/footer');
	}
	public function keluar(){
		$this->session->sess_destroy();
	    echo "<script>window.location='".base_url('admin')."'</script>";
	}
}
