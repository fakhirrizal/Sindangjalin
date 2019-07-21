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
	public function cetak_spd()  {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $phpWord->getCompatibility()->setOoxmlVersion(14);
        $phpWord->getCompatibility()->setOoxmlVersion(15);

        $targetFile = "./global/uploads/";
        $filename = 'Surat SPPD.docx';

            $section = $phpWord->addSection(array('paperSize' => 'Legal'));
            
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


        //}
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

    public function cetak_sj()  {
        //$news = $this->phpword_model->get_data();

        //  create new file and remove Compatibility mode from word title
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $phpWord->getCompatibility()->setOoxmlVersion(14);
        $phpWord->getCompatibility()->setOoxmlVersion(15);

        $targetFile = "./global/uploads/";
        $filename = 'Surat Jalan.docx';

        // add style settings for the title and paragraph
        //foreach($news as $n){

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

            $section->addText('SURAT PERJALANAN DINAS', array('bold' => true,'underline' => 'single','name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
            $section->addTextBreak(0.5);
            $section->addText('Nomor : 090 /', array('bold' => true,'name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
            $section->addTextBreak(1);
            $section->addText('Yang bertanda tangan bawah ini menerangkan bahwa:', array('bold' => false,'name'=> 'arial','size' => 10,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10));
            $section->addTextBreak(1);

            $table = $section->addTable();
            $table->addRow();
            $table->addCell(5000)->addText("1. H.WIWIN SUBIYONO,SH");
            $table->addCell(5000)->addText(": Wakil Ketua DPRD Kota Semarang");
            $section->addTextBreak(1);
            
            $section->addText("Melaksanakan perjalanan dinas:");
            $section->addTextBreak(0.5);
            
            $table2 = $section->addTable();
            $table2->addRow();
            $table2->addCell(1500)->addText("Berangkat");
            $table2->addCell(8500)->addText(": Kamis, 03 Januari 2019");
            $table2->addRow();
            $table2->addCell(1500)->addText("Kembali");
            $table2->addCell(8500)->addText(": Jumat, 04 Januari 2019");
            $table2->addRow();
            $table2->addCell(1500)->addText("Tempat");
            $table2->addCell(8500)->addText(": DPRD Kabupaten Sragen");
            $table2->addRow();
            $table2->addCell(1500)->addText("Keperluan");
            $table2->addCell(8500)->addText(": Melaksanakan Kunjungan Kerja luar daerah Komisi A DPRD Kota Semarang dalam rangka menambah wawasan, sekaligus menimba ilmu dan pengalaman tentang Mekanisme Pelaksanaan Penyelenggaraan Murenbang.");
            $section->addTextBreak(1);
            $section->addText("Demikian Surat Jalan ini dibuat untuk dipergunakan seperlunya.");
            $section->addTextBreak(1);
                        
            $section_footer = $section->addTable();
            
            $section_footer->addRow();
            $content = $section_footer->addCell(5000);
            $content = $section_footer->addCell(5000);
            $content->addText('Semarang, 02 Januari 2019', array('bold' =>false,'name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));
            $content->addText('DEWAN PERWAKILAN RAKYAT', array('bold' =>true,'name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));
            $content->addText('KOTA SEMARANG', array('bold' =>true,'name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));
            $content->addText('KETUA', array('bold' =>true,'name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));
            $content->addTextBreak(2);
            $content->addText('H. SUPRIYADI, S.Sos', array('bold' =>true,'name'=> 'arial','size' => 10,'underline' => 'single'),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));


        //}
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

    public function cetak_std()  {
        //$news = $this->phpword_model->get_data();

        //  create new file and remove Compatibility mode from word title
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $phpWord->getCompatibility()->setOoxmlVersion(14);
        $phpWord->getCompatibility()->setOoxmlVersion(15);

        $targetFile = "./global/uploads/";
        $filename = 'Surat Tugas Dewan.docx';

        // add style settings for the title and paragraph
        //foreach($news as $n){

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

            $section->addText('SURAT TUGAS', array('bold' => true,'underline' => 'single','name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
            $section->addTextBreak(0.5);
            $section->addText('Nomor : 170 /', array('bold' => true,'name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
            $section->addTextBreak(1);
            $table_atas = $section->addTable();
            $table_atas->addRow();
            $table_atas->addCell(1000)->addText("Dasar :");
            $content = $table_atas->addCell(9000);
            $content->addText("1. Peraturan Daerah Kota Semarang Nomor 11 Tahun 2018 tentang Anggaran Pendapatan dan Belanja Daerah Kota Semarang Tahun 2019;");
            $content->addText("2. Surat Komisi A DPRD Kota Semarang Nomor : 70/A/DPRD/2018 tanggal 26 Januari 2019 perihal Kunjungan Kerja Komisi A DPRD Kota Semarang.");

            $section->addTextBreak(1);
            $section->addText('MENUGASKAN :', array('bold' => true,'name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
            $section->addTextBreak(1);
            
            $table = $section->addTable();
            $table->addRow();
            $table->addCell(1000)->addText("Kepada :");
            $content2 = $table->addCell(4000);
            $content2->addText(" 1. H.WIWIN SUBIYONO,SH");
            $content2->addText(" 2. H. MEIDIANA KUSWARA, A.Md");
            $content3 = $table->addCell(5000);
            $content3->addText(" : Wakil Ketua DPRD Kota Semarang;");
            $content3->addText(" : Ketua Komisi A DPRD Kota Semarang;");
            $section->addTextBreak(1);
            
            $table_bwh = $section->addTable();
            $table_bwh->addRow();
            $table_bwh->addCell(1000)->addText("Untuk :");
            $content4 = $table_bwh->addCell(9000);
            $content4->addText("1. Melaksanakan Melaksanakan Kunjungan Kerja luar daerah Komisi A DPRD Kota Semarang dalam rangka menambah wawasan, sekaligus menimba ilmu dan pengalaman tentang Mekanisme Pelaksanaan Penyelenggaraan Murenbang ke DPRD Kabupaten Sragen selama 2 (dua) hari, pada tanggal 03 s/d 04 Januari 2019;");
            $content4->addText("2. Melaporkan hasilnya kepada Pimpinan setelah selesai melaksanakan tugas.");
           
            $section->addTextBreak(0.5);
            $section->addText('Demikian untuk dilaksanakan dengan sebaik-baiknya.', array('bold' => false,'name'=> 'arial','size' => 10,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10));       
            $section_footer = $section->addTable();
            
            $section_footer->addRow();
            $content = $section_footer->addCell(5000);
            $content = $section_footer->addCell(5000);
            $content->addText('Semarang, 02 Januari 2019', array('bold' =>false,'name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));
            $content->addText('DEWAN PERWAKILAN RAKYAT', array('bold' =>true,'name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));
            $content->addText('KOTA SEMARANG', array('bold' =>true,'name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));
            $content->addText('KETUA', array('bold' =>true,'name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));
            $content->addTextBreak(2);
            $content->addText('H. SUPRIYADI, S.Sos', array('bold' =>true,'name'=> 'arial','size' => 10,'underline' => 'single'),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));


        //}
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

    public function cetak_sts()  {
        //$news = $this->phpword_model->get_data();

        //  create new file and remove Compatibility mode from word title
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $phpWord->getCompatibility()->setOoxmlVersion(14);
        $phpWord->getCompatibility()->setOoxmlVersion(15);

        $targetFile = "./global/uploads/";
        $filename = 'Surat Tugas Setwan.docx';

        // add style settings for the title and paragraph
        //foreach($news as $n){

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

            $section->addText('SURAT TUGAS', array('bold' => true,'underline' => 'single','name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
            $section->addTextBreak(0.5);
            $section->addText('Nomor : 800 /', array('bold' => true,'name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
            $section->addTextBreak(1);
            $table_atas = $section->addTable();
            $table_atas->addRow();
            $table_atas->addCell(1000)->addText("Dasar :");
            $content = $table_atas->addCell(9000);
            $content->addText("1. Peraturan Daerah Kota Semarang Nomor 11 Tahun 2018 tentang Anggaran Pendapatan dan Belanja Daerah Kota Semarang Tahun 2019;");
            $content->addText("2. Surat Komisi A DPRD Kota Semarang Nomor : 70/A/DPRD/2018 tanggal 26 Januari 2019 perihal Kunjungan Kerja Komisi A DPRD Kota Semarang.");

            $section->addTextBreak(1);
            $section->addText('MENUGASKAN :', array('bold' => true,'name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
            $section->addTextBreak(1);
            
            $table = $section->addTable();
            $table->addRow();
            $table->addCell(1000)->addText("Kepada :");
            $content2 = $table->addCell(4000);
            $content2->addText(" 1. H.WIWIN SUBIYONO,SH");
            $content2->addText(" 2. H. MEIDIANA KUSWARA, A.Md");
            $content3 = $table->addCell(5000);
            $content3->addText(" : Wakil Ketua DPRD Kota Semarang;");
            $content3->addText(" : Ketua Komisi A DPRD Kota Semarang;");
            $section->addTextBreak(1);
            
            $table_bwh = $section->addTable();
            $table_bwh->addRow();
            $table_bwh->addCell(1000)->addText("Untuk :");
            $content4 = $table_bwh->addCell(9000);
            $content4->addText("1. Melaksanakan Melaksanakan Kunjungan Kerja luar daerah Komisi A DPRD Kota Semarang dalam rangka menambah wawasan, sekaligus menimba ilmu dan pengalaman tentang Mekanisme Pelaksanaan Penyelenggaraan Murenbang ke DPRD Kabupaten Sragen selama 2 (dua) hari, pada tanggal 03 s/d 04 Januari 2019;");
            $content4->addText("2. Melaporkan hasilnya kepada Pimpinan setelah selesai melaksanakan tugas.");
           
            $section->addTextBreak(0.5);
            $section->addText('Demikian untuk dilaksanakan dengan sebaik-baiknya.', array('bold' => false,'name'=> 'arial','size' => 10,'color' =>'black'),array('align' => 'left', 'spaceAfter' => 10));       
            $section_footer = $section->addTable();
            
            $section_footer->addRow();
            $content = $section_footer->addCell(5000);
            $content = $section_footer->addCell(5000);
            $content->addText('Semarang, 02 Januari 2019', array('bold' =>false,'name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));
            $content->addText('SEKRETARIS DPRD KOTA SEMARANG', array('bold' =>true,'name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));
           
            $content->addTextBreak(2);
            $content->addText('Ir. EKO CAHYONO, MT,', array('bold' =>true,'name'=> 'arial','size' => 10,'underline' => 'single'),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));
            $content->addText('Pembina Utama Muda', array('bold' =>false,'name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));
            $content->addText('NIP. 196001041988031001', array('bold' =>false,'name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 10, 'indent' => '0'));


        //}
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
	public function download_laporan()  {
		$q = "SELECT a.*,b.nama_keperluan,c.nama FROM jaldis a LEFT JOIN kategori_keperluan b ON a.kategori=b.id LEFT JOIN anggota c ON a.pimpinan=c.id WHERE a.kode_jaldis='".$this->uri->segment(3)."' AND a.deleted='0'";
		$data_jaldis = $this->Main_model->manualQuery($q)->result();
		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$phpWord->getCompatibility()->setOoxmlVersion(14);
		$phpWord->getCompatibility()->setOoxmlVersion(15);

		$targetFile = "./global/uploads/";
		$filename = 'Laporan.docx';
		foreach ($data_jaldis as $key => $value) {
			$ak = substr($value->alat_kelengkapan, 0,1);
			$alat_k = '';
			if($ak=='B'){
				$alat_k = "BADAN ";
			}
			elseif($ak=='P'){
				$alat_k = "PANITIA KHUSUS ";	
			}
			elseif($ak=='K'){
				$alat_k = "KOMISI ";}
			elseif($ak=='J'){
				$alat_k = "PANITIA KERJA ";}
			elseif($ak=='a'){
				$alat_k = "SEKRETARIAT ";}
			else{
				$alat_k = '';
			}
			$tgl_berangkat = $value->start_date;
			$tgl_kembali = $value->end_date;

			$tgl1 = explode('-', $tgl_berangkat);
			$tgl2 = explode('-', $tgl_kembali);
			$bulan1 = '';
			if($tgl1[1]=='01'){
				$bulan1 = 'Januari';
			}
			elseif($tgl1[1]=='02'){
				$bulan1 = 'Februari';
			}
			elseif($tgl1[1]=='03'){
				$bulan1 = 'Maret';
			}
			elseif($tgl1[1]=='04'){
				$bulan1 = 'April';
			}
			elseif($tgl1[1]=='05'){
				$bulan1 = 'Mei';
			}
			elseif($tgl1[1]=='06'){
				$bulan1 = 'Juni';
			}
			elseif($tgl1[1]=='07'){
				$bulan1 = 'Juli';
			}
			elseif($tgl1[1]=='08'){
				$bulan1 = 'Agustus';
			}
			elseif($tgl1[1]=='09'){
				$bulan1 = 'September';
			}
			elseif($tgl1[1]=='10'){
				$bulan1 = 'Oktober';
			}
			elseif($tgl1[1]=='11'){
				$bulan1 = 'November';
			}
			else{
				$bulan1 = 'Desember';
			}
			$bulan2 = '';
			if($tgl2[1]=='01'){
				$bulan2 = 'Januari';
			}
			elseif($tgl2[1]=='02'){
				$bulan2 = 'Februari';
			}
			elseif($tgl2[1]=='03'){
				$bulan2 = 'Maret';
			}
			elseif($tgl2[1]=='04'){
				$bulan2 = 'April';
			}
			elseif($tgl2[1]=='05'){
				$bulan2 = 'Mei';
			}
			elseif($tgl2[1]=='06'){
				$bulan2 = 'Juni';
			}
			elseif($tgl2[1]=='07'){
				$bulan2 = 'Juli';
			}
			elseif($tgl2[1]=='08'){
				$bulan2 = 'Agustus';
			}
			elseif($tgl2[1]=='09'){
				$bulan2 = 'September';
			}
			elseif($tgl2[1]=='10'){
				$bulan2 = 'Oktober';
			}
			elseif($tgl2[1]=='11'){
				$bulan2 = 'November';
			}
			else{
				$bulan2 = 'Desember';
			}
			$string_tgl = '';
			$string_tgl2 = $tgl1[2].' '.$bulan1.' '.$tgl1[0];
			$string_tgl3 = $bulan1.' '.$tgl1[0];
			$string_hari = '';
			if($bulan1==$bulan2){
				if($tgl1[2]==$tgl2[2]){
					$string_tgl = $tgl1[2].' '.$bulan1.' '.$tgl1[0];
					$string_hari = $this->namahari($value->start_date);
				}else{
					$string_tgl = $tgl1[2].' s/d '.$tgl2[2].' '.$bulan1.' '.$tgl1[0];
					$string_hari = $this->namahari($value->start_date).' s/d '.$this->namahari($value->end_date);
				}
			}else{
				$string_hari = $this->namahari($value->start_date).' s/d '.$this->namahari($value->end_date);
				$string_tgl = $tgl1[2].' '.$bulan1.' s/d '.$tgl2[2].' '.$bulan2.' '.$tgl1[0];
			}
			$section = $phpWord->addSection(array('paperSize' => 'Legal'));
			
			$section->addText('LAPORAN', array('bold' => true,'name'=> 'arial','size' => 20,'color' =>'black'),array('align' => 'right', 'spaceAfter' => 10));
			$section->addTextBreak(0);
			$section->addText(strtoupper($value->nama_keperluan), array('bold' => true,'name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'right', 'spaceAfter' => 10));
			$section->addTextBreak(0);
			$section->addText($alat_k.'DPRD KOTA SEMARANG', array('bold' => true,'name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'right', 'spaceAfter' => 10));
			$section->addTextBreak(0);
			$section->addText(strtoupper($value->keperluan), array('bold' => true,'name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'right', 'spaceAfter' => 10));
			$section->addTextBreak(0);
			// $section->addText('PEMERINTAH KOTA SEMARANG KEPADA', array('bold' => true,'name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'right', 'spaceAfter' => 10));
			// $section->addTextBreak(0);
			// $section->addText('PT. BANK PEMBANGUNAN DAERAH JAWA TENGAH', array('bold' => true,'name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'right', 'spaceAfter' => 10));
			// $section->addTextBreak(0);
			$section->addText('KE '.strtoupper($value->tujuan), array('bold' => true,'name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'right', 'spaceAfter' => 10));
			$section->addTextBreak(0);
			$section->addText($string_tgl, array('bold' => true,'name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'right', 'spaceAfter' => 10));
			$section->addTextBreak(1);
						
			$tableStyle = array(
			    'cellMargin'  => 50
			);
			$phpWord->addTableStyle('myTable', $tableStyle);
			$table = $section->addTable('myTable');

			$table->addRow();
			$q2 = "SELECT a.* FROM hasil_jaldis a WHERE a.kode_jaldis='".$this->uri->segment(3)."' LIMIT 4";
			$foto_laporan = $this->Main_model->manualQuery($q2)->result();
			$urutan = 1;
			foreach ($foto_laporan as $key => $fl) {
				$table->addCell(5000)->addImage('assets/hasil_jaldis/'.$fl->nama_file, array('height' => 150,'width' => 300, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::RIGHT,'wrappingStyle' => 'inline'));
				if($urutan==2){
					$table->addRow();
				}else{echo'';}
				$urutan++;
			}
			// $table->addCell(5000)->addImage('assets/surat/img/Jellyfish.jpg', array('height' => 150,'width' => 300, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::RIGHT,'wrappingStyle' => 'inline'));
			// $table->addCell(5000)->addImage('assets/surat/img/Jellyfish.jpg', array('height' => 150,'width' => 300, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::RIGHT,'wrappingStyle' => 'inline'));
			// $table->addRow();
			// $table->addCell(5000)->addImage('assets/surat/img/Jellyfish.jpg', array('height' => 150,'width' => 300, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::RIGHT,'wrappingStyle' => 'inline'));
			// $table->addCell(5000)->addImage('assets/surat/img/Jellyfish.jpg', array('height' => 150,'width' => 300, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::RIGHT,'wrappingStyle' => 'inline'));	
			
			$section->addTextBreak(5);
			$section->addText('SEKRETARIAT DPRD KOTA SEMARANG', array('name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'right', 'spaceAfter' => 10));
			$section->addTextBreak(0);
			$section->addText('2019', array('name'=> 'arial','size' => 12,'color' =>'black'),array('align' => 'right', 'spaceAfter' => 10));
			
			//NEXT PAGE
			$section->addPageBreak();
			$section->addText('LAPORAN', array('bold' => true,'name'=> 'arial','size' => 16,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));	
			$section->addTextBreak(1);
			$section->addText(strtoupper($value->nama_keperluan), array('name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
			$section->addTextBreak(0);
			$section->addText($alat_k.'DPRD KOTA SEMARANG YANG MEMBAHAS', array('name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
			$section->addTextBreak(0);
			$section->addText(strtoupper($value->keperluan), array('name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
			$section->addTextBreak(0);
			// $section->addText('PEMERINTAH KOTA SEMARANG KEPADA', array('name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
			// $section->addTextBreak(0);
			// $section->addText('PT. BANK PEMBANGUNAN DAERAH JAWA TENGAH', array('name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
			// $section->addTextBreak(0);
			$section->addText('KE '.strtoupper($value->tujuan), array('name'=> 'arial','size' => 14,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
			$section->addTextBreak(1);
			
			$multilevel = 'multilevel';
			$phpWord->addNumberingStyle(
				$multilevel,
				array(
					'type' => 'multilevel',
					'levels' => array(
						array('format' => 'upperRoman','text' => '%1', 'left' => 360, 'hanging' => 360, 'tabPos' => 360),
						array('format' => 'lowerLetter', 'text' => '%2', 'left' => 720, 'hanging' => 360, 'tabPos' => 720),
						array('format' => 'decimal', 'text' => '%3', 'left' => 720, 'hanging' => 360, 'tabPos' => 720),
					),
				)
			);
			$q3 = "SELECT a.* FROM dasar_hukum a WHERE a.kode_jaldis='".$this->uri->segment(3)."'";
			$dasarhukum = $this->Main_model->manualQuery($q3)->result();
			$section->addListItem('Dasar :',0,null,$multilevel);
			foreach ($dasarhukum as $key => $dh) {
				$section->addListItem($dh->dasar_hukum,1,null,$multilevel);	
			}
			// $section->addListItem('Paragraph 2 :',1,null,$multilevel);
			$section->addTextBreak(1);
			$section->addListItem('Pelaksanaan :',0,null,$multilevel);
			$section->addListItem('Waktu',2,null,$multilevel);
			$section->addListItem('Hari : Senin s/d Selasa');
			$section->addListItem('Tanggal : '.$string_tgl);
			$section->addListItem('Tempat Tujuan',2,null,$multilevel);
			$section->addListItem($value->tujuan);
			
			$section->addListItem('Peserta',0,null,$multilevel);
			$section->addListItem('Pimpinan DPRD Kota Semarang');
			$ak2 = substr($value->alat_kelengkapan, 0,1);
			$nama_alat_kelengkapan = '';
			if($ak2=='B'){
				$nama_alat_kelengkapan = 'Badan DPRD Kota Semarang';
				$section->addListItem('Pimpinan dan Anggota Badan DPRD Kota Semarang');
			}
			elseif($ak2=='P'){
				$nama_alat_kelengkapan = 'Pansus DPRD Kota Semarang';
				$section->addListItem('Pimpinan dan Anggota Pansus DPRD Kota Semarang');	
			}
			elseif($ak2=='K'){
				$nama_alat_kelengkapan = 'Komisi DPRD Kota Semarang';
				$section->addListItem('Pimpinan dan Anggota Komisi DPRD Kota Semarang');}
			elseif($ak2=='J'){
				$nama_alat_kelengkapan = 'Panja DPRD Kota Semarang';
				$section->addListItem('Pimpinan dan Anggota Panja DPRD Kota Semarang');}
			elseif($ak2=='a'){
				$nama_alat_kelengkapan = 'Sekretariat DPRD Kota Semarang';
				echo '';}
			elseif($ak2=='s'){
				$nama_alat_kelengkapan = 'DPRD Kota Semarang';
				$section->addListItem('Anggota DPRD Kota Semarang');}
			elseif($ak2=='i'){
				$nama_alat_kelengkapan = 'Bimtek DPRD Kota Semarang';
				$section->addListItem('Pimpinan dan Anggota Bimtek DPRD Kota Semarang');}
			else{
				echo '';
			}
			
			$section->addListItem('Sekretariat DPRD Kota Semarang');
			
			$section->addListItem('Materi',0,null,$multilevel);
			$section->addListItem('Konsultasi tentang Penyertaan Modal Pemerintah Kota Semarang Kepada PT. Bank Pembangunan Daerah Jawa Tengah.');
			
			$section->addListItem('Kesimpulan',0,null,$multilevel);
			$ak3 = substr($value->alat_kelengkapan, 0,1);
			if($ak3=='B'){
				$section->addListItem('Rombongan Badan DPRD Kota Semarang dipimpin oleh Ketua Badan, '.$value->nama.', didampingi Ketua dan Wakil Ketua DPRD Kota Semarang, diterima pada hari '.$this->namahari($value->start_date).', '.$string_tgl2.', di '.$value->tujuan.', oleh '.$value->diterima.'.',2,null,$multilevel);
			}
			elseif($ak3=='P'){
				$section->addListItem('Rombongan Pansus DPRD Kota Semarang dipimpin oleh Ketua Pansus, '.$value->nama.', didampingi Ketua dan Wakil Ketua DPRD Kota Semarang, diterima pada hari '.$this->namahari($value->start_date).', '.$string_tgl2.', di '.$value->tujuan.', oleh '.$value->diterima.'.',2,null,$multilevel);	
			}
			elseif($ak3=='K'){
				$section->addListItem('Rombongan Komisi DPRD Kota Semarang dipimpin oleh Ketua Komisi, '.$value->nama.', didampingi Ketua dan Wakil Ketua DPRD Kota Semarang, diterima pada hari '.$this->namahari($value->start_date).', '.$string_tgl2.', di '.$value->tujuan.', oleh '.$value->diterima.'.',2,null,$multilevel);}
			elseif($ak3=='J'){
				$section->addListItem('Rombongan Panja DPRD Kota Semarang dipimpin oleh Ketua Panja, '.$value->nama.', didampingi Ketua dan Wakil Ketua DPRD Kota Semarang, diterima pada hari '.$this->namahari($value->start_date).', '.$string_tgl2.', di '.$value->tujuan.', oleh '.$value->diterima.'.',2,null,$multilevel);}
			elseif($ak3=='a'){
				$section->addListItem('Rombongan Sekretariat Dewan DPRD Kota Semarang dipimpin oleh Ketua, '.$value->nama.', didampingi Ketua dan Wakil Ketua DPRD Kota Semarang, diterima pada hari '.$this->namahari($value->start_date).', '.$string_tgl2.', di '.$value->tujuan.', oleh '.$value->diterima.'.',2,null,$multilevel);}
			elseif($ak3=='s'){
				$section->addListItem('Rombongan DPRD Kota Semarang dipimpin oleh Ketua, '.$value->nama.', didampingi Ketua dan Wakil Ketua DPRD Kota Semarang, diterima pada hari '.$this->namahari($value->start_date).', '.$string_tgl2.', di '.$value->tujuan.', oleh '.$value->diterima.'.',2,null,$multilevel);}
			elseif($ak3=='i'){
				$section->addListItem('Rombongan Bimtek DPRD Kota Semarang dipimpin oleh Ketua, '.$value->nama.', didampingi Ketua dan Wakil Ketua DPRD Kota Semarang, diterima pada hari '.$this->namahari($value->start_date).', '.$string_tgl2.', di '.$value->tujuan.', oleh '.$value->diterima.'.',2,null,$multilevel);}
			else{
				echo '';
			}
			// $section->addListItem('Rombongan ',2,null,$multilevel);
			$section->addListItem($value->catatan,2,null,$multilevel);
			
			$section->addListItem('Penutup',0,null,$multilevel);
			$section->addText('Demikian laporan disusun untuk menjadikan periksa.', array('name'=> 'arial','size' => 10,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
			$section->addTextBreak(1);
			$section->addText('Semarang,         '.$string_tgl3, array('name'=> 'arial','size' => 10,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));						
			$section->addTextBreak(1);
			$section->addText($nama_alat_kelengkapan, array('name'=> 'arial','size' => 10,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
			$section->addTextBreak(0);
			// $section->addText('Tentang Raperda Penyertaan Modal', array('name'=> 'arial','size' => 10,'color' =>'black'),array('align' => 'center', 'spaceAfter' => 10));
			// $section->addTextBreak(1);
			$section_footer = $section->addTable();
			
			$section_footer->addRow();
			$content = $section_footer->addCell(5000);
			$content->addText('Ketua', array('name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));
			$content->addTextBreak(2);
			$content->addText($value->nama, array('name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));

			$content = $section_footer->addCell(5000);
			$content->addText('Sekretaris', array('name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));
			$content->addTextBreak(2);
			$content->addText('JOKO SUSILO', array('name'=> 'arial','size' => 10),array('align' => 'center', 'spaceAfter' => 100, 'indent' => '0'));			
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
	function namahari($tanggal){
		//fungsi mencari namahari
		//format $tgl YYYY-MM-DD
		//harviacode.com
		$tgl=substr($tanggal,8,2);
		$bln=substr($tanggal,5,2);
		$thn=substr($tanggal,0,4);
		$info=date('w', mktime(0,0,0,$bln,$tgl,$thn));
		switch($info){
			case '0': return "Minggu"; break;
			case '1': return "Senin"; break;
			case '2': return "Selasa"; break;
			case '3': return "Rabu"; break;
			case '4': return "Kamis"; break;
			case '5': return "Jumat"; break;
			case '6': return "Sabtu"; break;
		};
	}
}
/* End of file dashboard.php */
/* Location: ./system/application/modules/matchbox/controllers/dashboard.php */