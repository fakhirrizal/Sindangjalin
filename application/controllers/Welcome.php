<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function tes(){
		$data['active'] = 'beranda';
		$data['sub'] = '';
		$data['sub2'] = '';
		$this->load->view('template/header',$data);
		$this->load->view('isi');
		$this->load->view('template/footer');
	}
	public function coba(){
		$data['active'] = '';
		$data['sub'] = '';
		$data['sub2'] = '';
		$where['dapildpr'] = '1102';
		$data['daerah'] = $this->Main_model->getSelectedData('kabupaten',$where);
		$data['caleg'] = $this->Caleg_model->get_detailcaleg('1102');
		$this->load->view('template/header',$data);
		$this->load->view('anggota_legislatif/anggota_legislatif',$data);
		$this->load->view('template/footer');
	}
	public function testes(){
		$this->load->view('tes');
	}
	public function cobacoba(){
		$data = array(
			'satu' => '1',
			'dua' => '2'
		);
		echo json_encode($data);
	}
	public function tes2(){
		$alamat = "http://localhost/sindangjaring/Welcome/cobacoba";

        $header = file_get_contents($alamat,false);

        $a = json_decode($header, true);
        echo $a['satu'];
	}
	public function coba_word(){
		$this-&gt;load-&gt;library('word');
 
		$section = $this-&gt;word-&gt;createSection();
		 
		$section-&gt;addText('Hello world!');
		$section-&gt;addText('Hello world! I am formatted.', array('name'=&gt;'Tahoma', 'size'=&gt;16, 'bold'=&gt;true));
		$section-&gt;addText('Hello world! I am formatted by a user defined style', 'myOwnStyle');
		 
		$objWriter = PHPWord_IOFactory::createWriter($this-&gt;word, 'Word2007');
		$objWriter-&gt;save('helloWorld.docx');
	}
}
