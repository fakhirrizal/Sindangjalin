<?php
/* @property phpword_model $phpword_model */
include_once(APPPATH."third_party/PhpWord/Autoloader.php");
//include_once(APPPATH."core/Front_end.php");

use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;
Autoloader::register();
Settings::loadConfig();
class Phpword extends CI_Controller {

	function __construct(){
	  parent::__construct();
		// $this->load->model('phpword_model');

    }

	function index()
	{
		$data['news'] = $this->phpword_model->get_data();
		$this->load->view('content/phpword', $data);
	}

	public function download()  {
		// $this->load->library('phpword');

		$news = $this->phpword_model->get_data();

		//  create new file and remove Compatibility mode from word title

		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$phpWord->getCompatibility()->setOoxmlVersion(14);
		$phpWord->getCompatibility()->setOoxmlVersion(15);

		// $targetFile = "./assets/";
		$filename = 'test.docx';

		// add style settings for the title and paragraph
		foreach($news as $n){

			$section = $phpWord->addSection(array('paperSize' => 'Legal'));
			// Add first page header
			$header = $section->addHeader();
			$header->firstPage();

			$table_header = $header->addTable();
			
			$table_header->addRow();
			$table_header->addCell(200)->addImage(
		    'assets/surat/img/logo.png',
		    array(		     
		        'height'           => 80,
		    ));
			$text_header = $table_header->addCell(20000);
			$text_header->addText('DEWAN PERWAKILAN RAKYAT DAERAH',
				array(
					'bold' =>true,
					'name'=> 'arial',
					'size' => 18
				),
				array(
					'align' => 'center',
					'spaceAfter' => 100
				)
			);
			$text_header->addText('KOTA SEMARANG', array('bold' =>true,'name'=> 'arial','size' => 14),array('align' => 'center', 'spaceAfter' => 100, 'marginTop' => -10));
			$text_header->addText('Alamat: Jl. Pemuda No. 146 Telp. (024) 3556335 Psw. 1211 Fax. (024) 3547146 Semarang 50132', array('name'=> 'arial','size' => 8),array('align' => 'center', 'spaceAfter' => 100));

			$lineStyle = array('weight' => 3, 'width' => 600, 'height' => 0, 'color' => 000000, 'marginBot' =>0);
			$header->addLine($lineStyle);

			$section->addText('Lembar ke : ...', array('name'=> 'arial','size' => 11,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10, 'indent' => '8'));
			$section->addTextBreak(0);
			$section->addText('Kode no : ...', array('name'=> 'arial','size' => 11,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10, 'indent' => '8'));
			$section->addTextBreak(0);
			$section->addText('Nomor : ...', array('name'=> 'arial','size' => 11,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10, 'indent' => '8'));
			$section->addTextBreak(1);

			$section->addText('SURAT PERJALANAN DINAS', array('bold' => true,'underline' => 'single','name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
			$section->addTextBreak(0.5);
			$section->addText('( SPD )', array('bold' => true,'name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
			$section->addTextBreak(1);
			$tableStyle = array(
			    'borderColor' => '006699',
			    'borderSize'  => 6,
			    'cellMargin'  => 50
			);
			$phpWord->addTableStyle('myTable', $tableStyle);
			$table = $section->addTable('myTable');

			$table->addRow();
			$table->addCell(500)->addText("1");
			$table->addCell(3500)->addText("Pengguna Anggaran");
			$table->addCell(6000)->addText("Sekretaris DPRD Kota Semarang");
			$table->addRow();
			$table->addCell(500)->addText("2");
			$table->addCell(3500)->addText("Nama/NIP Pegawai yang Melaksanakan Perjalanan Dinas");
			$table->addCell(6000)->addText("H.WIWIN SUBIYONO,SH");
	
			$table->addRow();
			$table->addCell(500)->addText("3");
			$content = $table->addCell(3500);
			$content->addText("a.Pangkat dan Golongan");
			$content->addText("b.Jabatan / Instansi");
			$content->addText("c.Tingkat Biaya Perjalanan Dinas");
			$content = $table->addCell(6000);
			$content->addText("");
			$content->addText("Wakil Ketua DPRD Kota Semarang");

			$table->addRow();
			$table->addCell(500)->addText("4");
			$table->addCell(3500)->addText("Maksud Perjalanan Dinas");
			$table->addCell(6000)->addText("Melaksanakan Kunjungan Kerja luar daerah Komisi A DPRD Kota Semarang dalam rangka menambah wawasan, sekaligus menimba ilmu dan pengalaman tentang Mekanisme Pelaksanaan Penyelenggaraan Murenbang");

			$table->addRow();
			$table->addCell(500)->addText("5");
			$table->addCell(3500)->addText("Alat Angkutan Yang dipergunakan");
			$table->addCell(6000)->addText("Kendaraan Roda Empat");

			$table->addRow();
			$table->addCell(500)->addText("6");
			$content = $table->addCell(3500);
			$content->addText("a. Tempat Berangkat");
			$content->addText("b. Tempat Tujuan");
			$content = $table->addCell(6000);
			$content->addText("Semarang");
			$content->addText("DPRD Kabupaten Sragen");

			$table->addRow();
			$table->addCell(500)->addText("7");
			$content = $table->addCell(3500);
			$content->addText("a. Lamanya Perjalanan Dinas");
			$content->addText("b. Tanggal Berangkat");
			$content->addText("c. Tanggal Harus Kembali/Tiba di Tempat Baru");
			$content = $table->addCell(6000);
			$content->addText("1 (satu) Hari");
			$content->addText("Desember");
			$content->addText("Desember");

			$table->addRow();
			$table->addCell(500)->addText("8");
			$table->addCell(3500)->addText("Pengikut : Nama");
			$table->addCell(6000)->addText("Keterangan");

			$table->addRow();
			$table->addCell(500)->addText("9");
			$content = $table->addCell(3500);
			$content->addText("Pembebanan Anggaran");
			$content->addText("a. Instansi");
			$content->addText("b. Akun");
			$content = $table->addCell(6000);
			$content->addText("");
			$content->addText("Sekretariat DPRD Kota Semarang");
			$content->addText("3.1.05.3.1.05.04.01.018.5.2.2.15.02");
			
			$table->addRow();
			$table->addCell(500)->addText("10");
			$table->addCell(3500)->addText("Keterangan Lain lain");
			$table->addCell(6000)->addText("");
			$section->addTextBreak(1);
			$section->addText('Dikeluarkan di    : Semarang', array('name'=> 'arial','size' => 10,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10, 'indent' => '6.5'));
			$section->addText('Pada tanggal     : 02 Januari 2019', array('name'=> 'arial','size' => 10,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10, 'indent' => '6.5'));
			$section->addTextBreak(1);


			$section_footer = $section->addTable();
			
			$section_footer->addRow();
			$content = $section_footer->addCell(5000);
			$content->addText('Tanda Tangan Pemegang', array('bold' =>true,'name'=> 'arial','size' => 12),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));
			$content->addText('', array('bold' =>true,'name'=> 'arial','size' => 12),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));
			$content->addTextBreak(2);
			$content->addText('H. WIWIN SUBIYONO, SH', array('bold' =>true,'name'=> 'arial','size' => 12,'underline' => 'single'),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));

			$content = $section_footer->addCell(5000);
			$content->addText('DPRD KOTA SEMARANG', array('bold' =>true,'name'=> 'arial','size' => 12),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));
			$content->addText('KETUA', array('bold' =>true,'name'=> 'arial','size' => 12),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));
			$content->addTextBreak(2);
			$content->addText('H. SUPRIYADI, S.Sos', array('bold' =>true,'name'=> 'arial','size' => 12,'underline' => 'single'),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));


		}
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		$objWriter->save($filename);
		// send results to browser to download
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.$filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
	}
	public function downloadspd(){
		$where['kode_jaldis'] = $this->input->post('kode_jaldis');
        $kode_cetak = $this->Surat_model->getKodeCetak();
        $where2['id'] = $this->input->post('nomor_surat');
        $nama = $this->input->post('nama1');
        $datajaldis = $this->Main_model->getSelectedData('jaldis',$where);
        $dataanggota = '';
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
                        $dataanggota = $this->Surat_model->spdbadan($this->input->post('kode_jaldis'),$value->alat_kelengkapan,$kode_cetak);
                    }
                    elseif($ak=='P'){
                        $dataanggota = $this->Surat_model->spdpansus($this->input->post('kode_jaldis'),$value->alat_kelengkapan,$kode_cetak);
                    }
                    elseif($ak=='K'){
                        $dataanggota = $this->Surat_model->spdkomisi($this->input->post('kode_jaldis'),$kode_cetak);
                    }
                    elseif($ak=='J'){
                        $dataanggota = $this->Surat_model->spdpanja($this->input->post('kode_jaldis'),$value->alat_kelengkapan,$kode_cetak);
                    }
                    elseif($ak=='s' or $ak=='a' or $ak=='i'){
                        $dataanggota = $this->Surat_model->spdanggota($this->input->post('kode_jaldis'),$kode_cetak);
                    }
                    else{
                        echo '<script>alert("Maaf masukan Anda tidak valid")</script>';
                        echo "<script>window.location='".base_url()."Master/detail_jaldis/".$this->input->post('kode_jaldis')."'</script>";
                    }
                }
                $akun = $this->Master_model->getDataAkun($this->input->post('kode_jaldis'));
                $nomor_surat = $this->Main_model->getSelectedData('nomor_surat',$where2);
				$data_jaldis = $this->Main_model->getSelectedData('jaldis',$where);
				// print_r($dataanggota);
				$phpWord = new \PhpOffice\PhpWord\PhpWord();
				$phpWord->getCompatibility()->setOoxmlVersion(14);
				$phpWord->getCompatibility()->setOoxmlVersion(15);

				// $targetFile = "./assets/";
				$filename = 'surat_sppd.docx';

				// add style settings for the title and paragraph
				foreach ($dataanggota as $key => $value) {
					$teks0 = $value->nama;
					$section = $phpWord->addSection(array('paperSize' => 'Legal'));
					// Add first page header
					$header = $section->addHeader();
					$header->firstPage();

					$table_header = $header->addTable();

					$table_header->addRow();
					$table_header->addCell(200)->addImage(
					'assets/surat/img/logo.png',
					array(
						'height'           => 80,
					));
					$text_header = $table_header->addCell(20000);
					$text_header->addText('DEWAN PERWAKILAN RAKYAT DAERAH',
						array(
							'bold' =>true,
							'name'=> 'arial',
							'size' => 18
						),
						array(
							'align' => 'center',
							'spaceAfter' => 100
						)
					);
					$text_header->addText('KOTA SEMARANG', array('bold' =>true,'name'=> 'arial','size' => 14),array('align' => 'center', 'spaceAfter' => 100, 'marginTop' => -10));
					$text_header->addText('Alamat: Jl. Pemuda No. 146 Telp. (024) 3556335 Psw. 1211 Fax. (024) 3547146 Semarang 50132', array('name'=> 'arial','size' => 8),array('align' => 'center', 'spaceAfter' => 100));

					$lineStyle = array('weight' => 3, 'width' => 600, 'height' => 0, 'color' => 000000, 'marginBot' =>0);
					$header->addLine($lineStyle);

					$section->addText('Lembar ke : ...', array('name'=> 'arial','size' => 11,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10, 'indent' => '8'));
					$section->addTextBreak(0);
					$section->addText('Kode no : ...', array('name'=> 'arial','size' => 11,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10, 'indent' => '8'));
					$section->addTextBreak(0);
					$section->addText('Nomor : 090 /', array('name'=> 'arial','size' => 11,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10, 'indent' => '8'));
					$section->addTextBreak(1);

					$section->addText('SURAT PERJALANAN DINAS', array('bold' => true,'underline' => 'single','name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
					$section->addTextBreak(0.5);
					$section->addText('( SPD )', array('bold' => true,'name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
					$section->addTextBreak(1);
					$tableStyle = array(
						'borderColor' => '006699',
						'borderSize'  => 6,
						'cellMargin'  => 50
					);
					$phpWord->addTableStyle('myTable', $tableStyle);
					$table = $section->addTable('myTable');

					$table->addRow();
					$table->addCell(500)->addText("1");
					$table->addCell(3500)->addText("Pengguna Anggaran");
					$table->addCell(6000)->addText("Sekretaris DPRD Kota Semarang");
					$table->addRow();
					$table->addCell(500)->addText("2");
					$table->addCell(3500)->addText("Nama/NIP Pegawai yang Melaksanakan Perjalanan Dinas");
					$table->addCell(6000)->addText($value->nama);
					$keterangan = $value->keterangan;
					$tgl_berangkat = $value->start_date;
					$tgl_kembali = $value->end_date;

					$tgl1 = explode('-', $tgl_berangkat);
					$tgl2 = explode('-', $tgl_kembali);

					$tanggal1 = new DateTime($tgl_berangkat);
					$tanggal2 = new DateTime($tgl_kembali);

					$perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
					$table->addRow();
					$table->addCell(500)->addText("3");
					$content = $table->addCell(3500);
					if($keterangan=='anggota legislatif'){
						if($value->pimpinan!=''){
							$content->addText("a.Pangkat dan Golongan");
							$content->addText("b.Jabatan / Instansi");
							$content->addText("c.Tingkat Biaya Perjalanan Dinas");
							$content = $table->addCell(6000);
							$content->addText("");
							$content->addText($value->pimpinan);
						}
						else{
							$content->addText("a.Pangkat dan Golongan");
							$content->addText("b.Jabatan / Instansi");
							$content->addText("c.Tingkat Biaya Perjalanan Dinas");
							$content = $table->addCell(6000);
							$content->addText("");
							$content->addText($value->jabatan_ak);
						}
					}else{
						$teks = $value->pangkat." dan ".$value->golongan;
						$content->addText("a.Pangkat dan Golongan");
						$content->addText("b.Jabatan / Instansi");
						$content->addText("c.Tingkat Biaya Perjalanan Dinas");
						$content = $table->addCell(6000);
						$content->addText($teks);
						$content->addText("");
					}

					$table->addRow();
					$table->addCell(500)->addText("4");
					$table->addCell(3500)->addText("Maksud Perjalanan Dinas");
					foreach ($data_jaldis as $key => $row) {
						if($keterangan=='anggota legislatif'){
							$teks2 = 'Melaksanakan '.$row->keperluan;
							$table->addCell(6000)->addText($teks2);
						}
						else{
							$teks3 = 'Melaksanakan Pendampingan '.$row->keperluan;
							$table->addCell(6000)->addText($teks3);
						}

					$table->addRow();
					$table->addCell(500)->addText("5");
					$table->addCell(3500)->addText("Alat Angkutan Yang dipergunakan");
					$table->addCell(6000)->addText($row->transportasi);

					$table->addRow();
					$table->addCell(500)->addText("6");
					$content = $table->addCell(3500);
					$content->addText("a. Tempat Berangkat");
					$content->addText("b. Tempat Tujuan");
					$content = $table->addCell(6000);
					$content->addText("Semarang");
					$content->addText($row->tujuan);}

					$table->addRow();
					$table->addCell(500)->addText("7");
					$content = $table->addCell(3500);
					$content->addText("a. Lamanya Perjalanan Dinas");
					$content->addText("b. Tanggal Berangkat");
					$content->addText("c. Tanggal Harus Kembali/Tiba di Tempat Baru");
					$content = $table->addCell(6000);
					if($perbedaan=='1'){
						$content->addText($perbedaan." ( satu ) hari");
					}
					elseif($perbedaan=='2'){
						$content->addText($perbedaan." ( dua ) hari");
					}
					elseif($perbedaan=='3'){
						$content->addText($perbedaan." ( tiga ) hari");
					}
					elseif($perbedaan=='4'){
						$content->addText($perbedaan." ( empat ) hari");
					}
					elseif($perbedaan=='5'){
						$content->addText($perbedaan." ( lima ) hari");
					}
					elseif($perbedaan=='6'){
						$content->addText($perbedaan." ( enam ) hari");
					}
					elseif($perbedaan=='7'){
						$content->addText($perbedaan." ( tujuh ) hari");
					}
					elseif($perbedaan=='8'){
						$content->addText($perbedaan." ( delapan ) hari");
					}
					elseif($perbedaan=='9'){
						$content->addText($perbedaan." ( sembilan ) hari");
					}
					else{
						$content->addText($perbedaan." ( sepuluh ) hari");
					}

					$teks4 = '';
					if ($tgl1[1]=="01") {
					$teks4 = $tgl1[2]." Januari ".$tgl1[0];
					}elseif ($tgl1[1]=="02") {
					$teks4 = $tgl1[2]." Februari ".$tgl1[0];
					}elseif ($tgl1[1]=="03") {
					$teks4 = $tgl1[2]." Maret ".$tgl1[0];
					}elseif ($tgl1[1]=="04") {
					$teks4 = $tgl1[2]." April ".$tgl1[0];
					}elseif ($tgl1[1]=="05") {
					$teks4 = $tgl1[2]." Mei ".$tgl1[0];
					}elseif ($tgl1[1]=="06") {
					$teks4 = $tgl1[2]." Juni ".$tgl1[0];
					}elseif ($tgl1[1]=="07") {
					$teks4 = $tgl1[2]." Juli ".$tgl1[0];
					}elseif ($tgl1[1]=="08") {
					$teks4 = $tgl1[2]." Agustus ".$tgl1[0];
					}elseif ($tgl1[1]=="09") {
					$teks4 = $tgl1[2]." September ".$tgl1[0];
					}elseif ($tgl1[1]=="10") {
					$teks4 = $tgl1[2]." Oktober ".$tgl1[0];
					}elseif ($tgl1[1]=="11") {
					$teks4 = $tgl1[2]." November ".$tgl1[0];
					}else {
					$teks4 = $tgl1[2]." Desember ".$tgl1[0];
					}
					$content->addText($teks4);

					$teks5 = '';
					if ($tgl2[1]=="01") {
					$teks5 = $tgl2[2]." Januari ".$tgl2[0];
					}elseif ($tgl2[1]=="02") {
					$teks5 = $tgl2[2]." Februari ".$tgl2[0];
					}elseif ($tgl2[1]=="03") {
					$teks5 = $tgl2[2]." Maret ".$tgl2[0];
					}elseif ($tgl2[1]=="04") {
					$teks5 = $tgl2[2]." April ".$tgl2[0];
					}elseif ($tgl2[1]=="05") {
					$teks5 = $tgl2[2]." Mei ".$tgl2[0];
					}elseif ($tgl2[1]=="06") {
					$teks5 = $tgl2[2]." Juni ".$tgl2[0];
					}elseif ($tgl2[1]=="07") {
					$teks5 = $tgl2[2]." Juli ".$tgl2[0];
					}elseif ($tgl2[1]=="08") {
					$teks5 = $tgl2[2]." Agustus ".$tgl2[0];
					}elseif ($tgl2[1]=="09") {
					$teks5 = $tgl2[2]." September ".$tgl2[0];
					}elseif ($tgl2[1]=="10") {
					$teks5 = $tgl2[2]." Oktober ".$tgl2[0];
					}elseif ($tgl2[1]=="11") {
					$teks5 = $tgl2[2]." November ".$tgl2[0];
					}else {
					$teks5 = $tgl2[2]." Desember ".$tgl2[0];
					}
					$content->addText($teks5);

					$table->addRow();
					$table->addCell(500)->addText("8");
					$table->addCell(3500)->addText("Pengikut : Nama");
					$table->addCell(6000)->addText("Keterangan");

					$table->addRow();
					$table->addCell(500)->addText("9");
					$content = $table->addCell(3500);
					$content->addText("Pembebanan Anggaran");
					$content->addText("a. Instansi");
					$content->addText("b. Akun");
					$content = $table->addCell(6000);
					$content->addText("");
					$content->addText("Sekretariat DPRD Kota Semarang");
					foreach ($akun as $key => $ak) {
						$content->addText($ak->kr);
					}

					$table->addRow();
					$table->addCell(500)->addText("10");
					$table->addCell(3500)->addText("Keterangan Lain lain");
					$table->addCell(6000)->addText("");
					$section->addTextBreak(1);
					$section->addText('Dikeluarkan di    : Semarang', array('name'=> 'arial','size' => 10,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10, 'indent' => '6.5'));
					$teks6 = '';
					foreach ($data_jaldis as $key => $value) {
						$tgl_ttd = explode('-', $value->tanggal_ttd);
							if ($tgl_ttd[1]=="01") {
								$teks6 = $tgl_ttd[2]." Januari ".$tgl_ttd[0];
							}elseif ($tgl_ttd[1]=="02") {
								$teks6 = $tgl_ttd[2]." Februari ".$tgl_ttd[0];
							}elseif ($tgl_ttd[1]=="03") {
								$teks6 = $tgl_ttd[2]." Maret ".$tgl_ttd[0];
							}elseif ($tgl_ttd[1]=="04") {
								$teks6 = $tgl_ttd[2]." April ".$tgl_ttd[0];
							}elseif ($tgl_ttd[1]=="05") {
								$teks6 = $tgl_ttd[2]." Mei ".$tgl_ttd[0];
							}elseif ($tgl_ttd[1]=="06") {
								$teks6 = $tgl_ttd[2]." Juni ".$tgl_ttd[0];
							}elseif ($tgl_ttd[1]=="07") {
								$teks6 = $tgl_ttd[2]." Juli ".$tgl_ttd[0];
							}elseif ($tgl_ttd[1]=="08") {
								$teks6 = $tgl_ttd[2]." Agustus ".$tgl_ttd[0];
							}elseif ($tgl_ttd[1]=="09") {
								$teks6 = $tgl_ttd[2]." September ".$tgl_ttd[0];
							}elseif ($tgl_ttd[1]=="10") {
								$teks6 = $tgl_ttd[2]." Oktober ".$tgl_ttd[0];
							}elseif ($tgl_ttd[1]=="11") {
								$teks6 = $tgl_ttd[2]." November ".$tgl_ttd[0];
							}elseif ($tgl_ttd[1]=="12") {
								$teks6 = $tgl_ttd[2]." Desember ".$tgl_ttd[0];
							}
					}
					$section->addText('Pada tanggal     : '.$teks6.'', array('name'=> 'arial','size' => 10,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10, 'indent' => '6.5'));
					$section->addTextBreak(1);


					$section_footer = $section->addTable();

					$section_footer->addRow();
					$content = $section_footer->addCell(5000);
					$content->addText('Tanda Tangan Pemegang', array('bold' =>true,'name'=> 'arial','size' => 12),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));
					$content->addText('', array('bold' =>true,'name'=> 'arial','size' => 12),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));
					$content->addTextBreak(2);
					$content->addText($teks0, array('bold' =>true,'name'=> 'arial','size' => 12,'underline' => 'single'),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));

					foreach ($nomor_surat as $key => $ns) {
					$content = $section_footer->addCell(5000);
					$content->addText('DPRD KOTA SEMARANG', array('bold' =>true,'name'=> 'arial','size' => 12),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));
					$content->addText($ns->jabatan, array('bold' =>true,'name'=> 'arial','size' => 12),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));
					$content->addTextBreak(2);
					$content->addText($ns->ttd, array('bold' =>true,'name'=> 'arial','size' => 12,'underline' => 'single'),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));
					}
				}
				$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
				$objWriter->save($filename);
				// send results to browser to download
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename='.$filename);
				header('Content-Transfer-Encoding: binary');
				header('Expires: 0');
				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				header('Pragma: public');
				header('Content-Length: ' . filesize($filename));
				flush();
				readfile($filename);
				unlink($filename); // deletes the temporary file
				exit;
            }
        else{
            echo '<script>alert("Harap pilih nomor surat terlebih dahulu")</script>';
            echo "<script>window.location='".base_url()."Master/detail_jaldis/".$this->input->post('kode_jaldis')."'</script>";
        }
	}
}
/* End of file dashboard.php */
/* Location: ./system/application/modules/matchbox/controllers/dashboard.php */