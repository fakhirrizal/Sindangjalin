<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

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
		$data['active'] = 'master';
		$data['sub'] = 'anggota';
		$data['sub2'] = 'tambah_data';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['partai'] = $this->Main_model->getAlldata('tblpartai');
		$this->load->view('template/header',$data);
		$this->load->view('anggota/tambah_data',$data);
		$this->load->view('template/footer');
		}
	}
    public function tambah_setwan()
    {
        $data['active'] = 'master';
        $data['sub'] = 'anggota';
        $data['sub2'] = 'tambah_setwan';
        if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
        }
        else{
        $this->load->view('template/header',$data);
        $this->load->view('anggota/tambah_setwan',$data);
        $this->load->view('template/footer');
        }
    }
	public function simpan_data(){
        $data = array(
                'nama' => $this->input->post('nama'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'fraksi' => $this->input->post('fraksi'),
                'jabatan' => $this->input->post('jabatan'),
                'keterangan' => 'anggota legislatif'
                );
        $this->Main_model->tambahdata('anggota',$data);

        $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menambah data anggota dewan baru',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
			redirect('Anggota/lihat_data');
	}
    public function simpan_setwan(){
        $data = array(
                'nama' => $this->input->post('nama'),
                'nip' => $this->input->post('nip'),
                'jabatan' => $this->input->post('jabatan'),
                'golongan' => $this->input->post('golongan'),
                'pangkat' => $this->input->post('pangkat'),
                'keterangan' => 'bukan anggota legislatif'
                );
        $this->Main_model->tambahdata('anggota',$data);

        $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menambah data anggota setwan baru',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil ditambahkan.<br /></div>' );
            redirect('Anggota/lihat_data');
    }
	public function hapus_data(){
		$where['id'] = $this->uri->segment(3);
		$data_update['status'] = '0';
		$this->Main_model->updateData('anggota',$data_update,$where);

		$data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Menghapus data anggota',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

		$this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil dihapus.<br /></div>' );
			redirect('Anggota/lihat_data');
	}
	public function lihat_data(){
		$data['active'] = 'master';
		$data['sub'] = 'anggota';
		$data['sub2'] = 'lihat_data';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	//$data['data_anggota'] = $this->Master_model->getalldataanggota();
    	$where['status'] = '1';
		$data['data_anggota'] = $this->Main_model->getSelectedData('anggota',$where);
		$this->load->view('template/header',$data);
		$this->load->view('anggota/lihat_data',$data);
		$this->load->view('template/footer');
		}
	}
	public function detail_data(){
		$data['active'] = 'master';
		$data['sub'] = 'anggota';
		$data['sub2'] = 'lihat_data';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$data['data_anggota'] = $this->Master_model->getalldataanggota($this->uri->segment(3));
    	$data['riwayat_pansus'] = $this->Master_model->riwayat_pansus($this->uri->segment(3));
    	$data['riwayat_badan'] = $this->Master_model->riwayat_badan($this->uri->segment(3));
		$this->load->view('template/header',$data);
		$this->load->view('anggota/detail_data',$data);
		$this->load->view('template/footer');
		}
	}
	public function ubah_foto(){
		$id_anggota = $this->input->post('id_anggota');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = dirname($_SERVER["SCRIPT_FILENAME"]).'/assets/images/anggota/'; //path folder
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
                echo "<script>window.location='".base_url('Anggota/detail_data/'.$id_anggota)."'</script>";
             }
             else
             {
                $gbr = $this->upload->data();
                
                $where = array('id'=>$id_anggota);
                $data = array(
                'foto' =>$gbr['file_name']          
                );

                $res = $this->User_model->updateData("anggota",$data,$where); //akses model untuk menyimpan ke database           

                $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah foto anggota',
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
                echo "<script>window.location='".base_url()."Anggota/detail_data/".$id_anggota."'</script>";
                }
         }
	}
	public function ubah_data(){
		$data['active'] = 'master';
		$data['sub'] = 'anggota';
		$data['sub2'] = '';
		if(($this->session->userdata('id'))==NULL){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."admin/'</script>";
    	}
    	else{
    	$where['id'] = $this->uri->segment(3);
		$data['data_anggota'] = $this->Main_model->getSelectedData('anggota',$where);
		$data['partai'] = $this->Main_model->getAlldata('tblpartai');
		$this->load->view('template/header',$data);
		$this->load->view('anggota/ubah_data',$data);
		$this->load->view('template/footer');
		}
	}
	public function update_data(){
		$where['id'] = $this->input->post('id');
        $status = $this->input->post('status');
        $data = '';
        if($status=='dewan'){
             $data = array(
                'nama' => $this->input->post('nama'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'fraksi' => $this->input->post('fraksi'),
                'jabatan' => $this->input->post('jabatan')
                );
        }
        else{
             $data = array(
                'nama' => $this->input->post('nama'),
                'nip' => $this->input->post('nip'),
                'jabatan' => $this->input->post('jabatan'),
                'golongan' => $this->input->post('golongan'),
                'pangkat' => $this->input->post('pangkat'),
                );
        }
       
        $this->Main_model->updateData('anggota',$data,$where);

        $data_log = array(
                        'aktor' => $this->session->userdata('id'),
                        'keterangan' => 'Mengubah data anggota',
                        'waktu' => date('Y-m-d H-i-s')
                    );
                    $this->User_model->tambahdata('log_activity',$data_log);

        $this->session->set_flashdata('sukses','<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Yeah! </strong>Data telah berhasil diubah.<br /></div>' );
			redirect('Anggota/detail_data/'.$this->input->post('id'));
	}
	public function ambil_data(){
		$value = $this->input->post('id');
		if($value=='1'){
			$data['data_anggota'] = $this->Master_model->getdataanggotadewan();
			$this->load->view('anggota/anggota_dewan',$data);
		}
		else{
			$data['data_anggota'] = $this->Master_model->getdatabukandewan();
			$this->load->view('anggota/anggota_dewan',$data);
		}
	}
    public function alat_kelengkapan(){
        $value = $this->input->post('id');
        $modul = $this->input->post('modul');
        if($modul=='anggota_komisi'){
            $where['id_komisi'] = $value;
            $data['anggota'] = $this->Main_model->getSelectedData('anggota',$where);
            $this->load->view('anggota/alat_kelengkapan/anggota',$data);
        }
        elseif($modul=='anggota_badan'){
            $data['anggota'] = $this->Master_model->getDetailDataBadan($value);
            $this->load->view('anggota/alat_kelengkapan/anggota',$data);
        }
        elseif($modul=='anggota_pansus'){
            $data['anggota'] = $this->Master_model->getAnggotaPansus($value);
            $this->load->view('anggota/alat_kelengkapan/anggota',$data);
        }
        elseif($modul=='anggota_panja'){
            $data['anggota'] = $this->Master_model->getAnggotaPanja($value);
            $this->load->view('anggota/alat_kelengkapan/anggota',$data);
        }
        else{
            $data['anggota'] = $this->Master_model->getdataanggotadewan();
            $this->load->view('anggota/alat_kelengkapan/anggota',$data);
        }
    }
}
