<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class PHPWord_Text extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('word');
    }
    function index() {
		
        $PHPWord = $this->word; // New Word Document
        $section = $PHPWord->createSection(); // New portrait section
        // Add text elements
        $section->addText('Hello World!');
        $section->addTextBreak(2);
        $section->addText('Mohammad Rifqi Sucahyo.', array('name'=>'Verdana', 'color'=>'006699'));
        $section->addTextBreak(2);
        $PHPWord->addFontStyle('rStyle', array('bold'=>true, 'italic'=>true, 'size'=>16));
        $PHPWord->addParagraphStyle('pStyle', array('align'=>'center', 'spaceAfter'=>100));
        // Save File / Download (Download dialog, prompt user to save or simply open it)
		$section->addText('Ini Adalah Demo PHPWord untuk CI', 'rStyle', 'pStyle');
		
        $filename='just_some_random_name.docx'; //save our document as this file name
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        $objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
        $objWriter->save('php://output');

        // $tempat = base_url('assets/Template.docx');
        // $template = $PHPWord->loadTemplate($tempat); // membuka template
        // proses meletakan data dari database ke file template
        // $q = "SELECT a.nama_lengkap as nama, a.id as jns_kelamin, a.email as tgl_lahir from user a where a.id='".$this->session->userdata('id')."'";
        // $data = $this->User_model->manualQuery($q)->result();
        // foreach($data as $nama_kolom => $value){
        //     $template->setValue($nama_kolom, $value);
        // }

        // menyimpan hasil
        // $file_hasil ="data-siswa.docx";
        // $template->save($file_hasil);
    }
    function cobaword(){
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=document_name.doc");

        // echo "<html>";
        // echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
        // echo "<body>";
        // echo "<b>My first document</b>";
        // echo "</body>";
        // echo "</html>";
        $this->load->view('surat/surat_j');
    }
}
?>
