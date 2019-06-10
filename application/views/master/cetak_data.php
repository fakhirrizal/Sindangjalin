

<?php 
date_default_timezone_set('Asia/Jakarta'); 
//$list=$this->db->query("SELECT * from anggota ")->result();
?>
<div class='entry'>
<table border='1' align='left'>
<tr>
<td colspan='3'><!-- <b>Data KTA Yang Sudah Di Cetak </b> --> <br> Update : <font color='red'><?php echo date('d-m-Y')?> | <?php echo date('H:i')?> WIB</font></td>
<td colspan='5' style="text-align: center;">Rekap Laporan Perjalanan Dinas</td>
</tr>
<tr>
<td bgcolor='gren' width='10px'>No</td>
<td bgcolor='gren'>Tujuan</td>
<td bgcolor='gren'>Moda Transportasi</td>
<td bgcolor='gren'>Waktu</td>
<td bgcolor='gren'>Jumlah Anggota</td>
<td bgcolor='gren'>Alat Kelengkapan</td>
<td bgcolor='gren'>Diterima Oleh</td>
<td bgcolor='gren'>Catatan</td>

</tr>
<?php

$n=1;
foreach ($data_jaldis as $dolay)
{
// if($dolay->status_cetak=='1')
// {
// $cek="<img src='http://www.myiconfinder.com/uploads/iconsets/256-256-486a9b90c52d4de7be5c625acc8836a9.png' class='img' >";
// }else
// {
// $cek="<img src='http://www.myiconfinder.com/uploads/iconsets/256-256-d02328532122a358e4c3d755cd436c6c.png' class='img'>";
// }
							$kete = '';
							$ak = substr($dolay->alat_kelengkapan, 0,1);
                            if($ak=='B'){
                                $where1['id_badan'] = $dolay->alat_kelengkapan;
                                $data_ak1 = $this->Main_model->getSelectedData('badan',$where1);
                                foreach ($data_ak1 as $key => $value1) {
                                  $kete = $value1->nama_badan;
                                }
                            }
                            elseif($ak=='P'){
                                $where2['kode_pansus'] = $alat_kelengkapan;
                                $data_ak2 = $this->Main_model->getSelectedData('pansus',$where2);
                                foreach ($data_ak2 as $key => $value2) {
                                  $kete = $value2->nama_pansus;
                                }
                            }
                            elseif($ak=='K'){
                                $where3['id_komisi'] = $alat_kelengkapan;
                                $data_ak3 = $this->Main_model->getSelectedData('komisi',$where3);
                                foreach ($data_ak3 as $key => $value3) {
                                  $kete = $value3->nama_komisi;
                                }
                            }
                            elseif($ak=='J'){
                                $where4['kode_panja'] = $alat_kelengkapan;
                                $data_ak4 = $this->Main_model->getSelectedData('panja',$where4);
                                foreach ($data_ak4 as $key => $value4) {
                                  $kete = $value4->nama_panja;
                                }
                            }
                            elseif($ak=='s'){
                                $kete = 'DPRD';
                            }
                            elseif($ak=='a'){
                                $kete = 'Anggota Setwan';
                            }
                            elseif($ak=='i'){
                                $kete = 'Pimpinan';
                            }
                            else{
                                $kete = 'Masukan tidak valid';
                            }
									  $tanggal1 = new DateTime($dolay->start_date);
                                      $tanggal2 = new DateTime($daolay->end_date);
                                      $tgl_sekarang = new DateTime();
                                      $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
						if($tanggal1==$tanggal2){
                          echo"
							<tr>
							<td>".$n."</td>
							<td>".$dolay->tujuan."</td>
							<td>".$dolay->transportasi."</td>
							<td>".date('d-m-Y', strtotime($dolay->start_date))."</td>
							<td>".$dolay->jumlah_anggota." Anggota</td>
							<td>".$kete."</td>
							<td>".$dolay->diterima."</td>
							<td><a href='".base_url('Master/laporan_jaldis/'.$dolay->kode_jaldis)."'>Klik Disini</a></td>
							</tr>
							";
                        }
                        else{
                          echo"
							<tr>
							<td>".$n."</td>
							<td>".$dolay->tujuan."</td>
							<td>".$dolay->transportasi."</td>
							<td>".date('d-m-Y', strtotime($dolay->start_date)).' - '.date('d-m-Y', strtotime($dolay->end_date))."</td>
							<td>".$dolay->jumlah_anggota." Anggota</td>
							<td>".$kete."</td>
							<td>".$dolay->diterima."</td>
							<td><a href='".base_url('Master/laporan_jaldis/'.$dolay->kode_jaldis)."'>Klik Disini</a></td>
							</tr>
							";
                        }

$n++;}

?>
<?php

// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data_JalDis.xls");
 
// Tambahkan table
//include "../pilihan_menu/tamu.php";

?>
</table>

</div>
