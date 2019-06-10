<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
	public function login_process(){
		$this->db->trans_start();
		$lastid = '';
		$getlast_id = $this->Main_model->getLastID('guest');
		foreach ($getlast_id as $key => $value) {
			$lastid = ($value->id)+1;
		}
		$data = array(
			'id' => $lastid,
			'fullname' => $this->input->post('fullname'),
			'address' => $this->input->post('address'),
			'phone_number' => $this->input->post('phone_number'),
			'created_by' => $lastid
			);
		$save = $this->User_model->tambahdata('guest',$data);
		$sess_data['id'] = $lastid;
		$sess_data['username'] = $this->input->post('fullname');
		$this->session->set_userdata($sess_data);
		$this->db->trans_complete();
		if($this->db->trans_status() === false){
			$this->session->set_flashdata('gagal','<br><br><br><div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button><strong></i>Oops! </strong>silahkan ulangi lagi.<br /></div>' );
            echo "<script>window.location='".base_url()."'</script>";
		}
		else{
            echo "<script>window.location='".base_url()."beranda/'</script>";
		}
	}
	public function logout(){
		$this->session->sess_destroy();
	    echo "<script>window.location='".base_url()."'</script>";
	}
}