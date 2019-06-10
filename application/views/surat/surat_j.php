
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Jalan</title>
    <link rel="stylesheet" href="<?= base_url('assets/surat/css/style.css'); ?>">
    <link rel='stylesheet' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' />
</head>

    <div id='surat-wrapper'>
        <div class='inner'>

            <!-- Kepala Surat Start -->
            <div id='kepala-surat'>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <img class='kepala-logo' src="<?= base_url('assets/surat/img/logo.png'); ?>" />
                            </td>
                            <td>
                                <h1>DEWAN PERWAKILAN RAKYAT DAERAH</h1>
                                <h2>KOTA SEMARANG</h2>
                                <p>
                                    Alamat: Jl. Pemuda No. 146 Telp. (024) 3556335 Psw. 1211 Fax. (024) 3547146 Semarang 50132
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Kepala Surat End -->

            <!-- Judul Surat Start -->
            <div class='judul'>
                <h3>SURAT JALAN</h3>
                <strong>Nomor : 090 / </strong>
            </div>
            <!-- Judul Surat End -->

            <!-- Konten Surat Start -->
            <div id='surat-content'>
                <!-- Konten Surat 2 Start -->

                <p>Yang bertanda tangan bawah ini menerangkan bahwa:</p>

                <!-- Table Kepada Start-->
                <table class='table top-vertical table-padding align-right-first'>
                    <tbody>
                    	<?php
                          $no=1;
                          foreach($detail_jaldis as $content)
                          {
                              foreach ($content as $key => $value ) {
                              $$key=$value;
                          }
                          if($no==1){
                            if($keterangan=='bukan anggota legislatif'){
                                echo'
                                    <tr>
                                        <td>1.</td>
                                        <td width="240">'.$nama.'</td>
                                        <td>:</td>
                                        <td>'.$jabatan.';</td>
                                    </tr>
                                       
                                    ';
                            }
                            else{
                                if($pimpinan!=''){
                                    echo'
                                        <tr>
                                            <td>1.</td>
                                            <td width="240">'.$nama.'</td>
                                            <td>:</td>
                                            <td>'.$pimpinan.';</td>
                                        </tr>
                                           
                                        ';
                                }
                                else{
                                    $ak = substr($alat_kelengkapan, 0,1);
                                    if($ak=='B'){
                                        $where1['id_badan'] = $alat_kelengkapan;
                                        $where1['id_anggota'] = $id_anggota;
                                        $data_ak1 = $this->Main_model->getSelectedData('anggota_badan',$where1);
                                        foreach ($data_ak1 as $key => $value1) {
                                          echo'
                                            <tr>
                                                <td>1.</td>
                                                <td width="240">'.$nama.'</td>
                                                <td>:</td>
                                                <td>'.$value1->jabatan.';</td>
                                            </tr>
                                               
                                            ';
                                        }
                                    }
                                    elseif($ak=='P'){
                                        $where2['kode_pansus'] = $alat_kelengkapan;
                                        $where2['id_anggota'] = $id_anggota;
                                        $data_ak2 = $this->Main_model->getSelectedData('anggota_pansus',$where2);
                                        foreach ($data_ak2 as $key => $value2) {
                                          echo'
                                            <tr>
                                                <td>1.</td>
                                                <td width="240">'.$nama.'</td>
                                                <td>:</td>
                                                <td>'.$value2->jabatan.';</td>
                                            </tr>
                                               
                                            ';
                                        }
                                    }
                                    elseif($ak=='J'){
                                        $where3['kode_panja'] = $alat_kelengkapan;
                                        $where3['id_anggota'] = $id_anggota;
                                        $data_ak3 = $this->Main_model->getSelectedData('anggota_panja',$where3);
                                        foreach ($data_ak3 as $key => $value3) {
                                          echo'
                                            <tr>
                                                <td>1.</td>
                                                <td width="240">'.$nama.'</td>
                                                <td>:</td>
                                                <td>'.$value3->jabatan.';</td>
                                            </tr>
                                               
                                            ';
                                        }
                                    }
                                    elseif($ak=='K'){
                                        echo'
                                        <tr>
                                            <td>1.</td>
                                            <td width="240">'.$nama.'</td>
                                            <td>:</td>
                                            <td>'.$jabatan_komisi.';</td>
                                        </tr>
                                           
                                        ';
                                    }
                                    else{
                                        echo'
                                        <tr>
                                            <td>1.</td>
                                            <td width="240">'.$nama.'</td>
                                            <td>:</td>
                                            <td>'.$jabatan.';</td>
                                        </tr>
                                           
                                        ';
                                    }
                                }
                            }
                          }
                          else{
                            if($keterangan=='bukan anggota legislatif'){
                                echo '
                                    <tr>
                                        <td>'.$no.'.</td>
                                        <td>'.$nama.'</td>
                                        <td>:</td>
                                        <td>'.$jabatan.'; </td>
                                    </tr>
                                      
                                    ';
                            }
                            else{
                                if($pimpinan!=''){
                                    echo '
                                        <tr>
                                            <td>'.$no.'.</td>
                                            <td>'.$nama.'</td>
                                            <td>:</td>
                                            <td>'.$pimpinan.'; </td>
                                        </tr>
                                          
                                        ';
                                }
                                else{
                                    $ak = substr($alat_kelengkapan, 0,1);
                                    if($ak=='B'){
                                        $where1['id_badan'] = $alat_kelengkapan;
                                        $where1['id_anggota'] = $id_anggota;
                                        $data_ak1 = $this->Main_model->getSelectedData('anggota_badan',$where1);
                                        foreach ($data_ak1 as $key => $value1) {
                                          echo '
                                            <tr>
                                                <td>'.$no.'.</td>
                                                <td>'.$nama.'</td>
                                                <td>:</td>
                                                <td>'.$value1->jabatan.'; </td>
                                            </tr>
                                              
                                            ';
                                        }
                                    }
                                    elseif($ak=='P'){
                                        $where2['kode_pansus'] = $alat_kelengkapan;
                                        $where2['id_anggota'] = $id_anggota;
                                        $data_ak2 = $this->Main_model->getSelectedData('anggota_pansus',$where2);
                                        foreach ($data_ak2 as $key => $value2) {
                                          echo '
                                            <tr>
                                                <td>'.$no.'.</td>
                                                <td>'.$nama.'</td>
                                                <td>:</td>
                                                <td>'.$value2->jabatan.'; </td>
                                            </tr>
                                              
                                            ';
                                        }
                                    }
                                    elseif($ak=='J'){
                                        $where3['kode_panja'] = $alat_kelengkapan;
                                        $where3['id_anggota'] = $id_anggota;
                                        $data_ak3 = $this->Main_model->getSelectedData('anggota_panja',$where3);
                                        foreach ($data_ak3 as $key => $value3) {
                                          echo '
                                            <tr>
                                                <td>'.$no.'.</td>
                                                <td>'.$nama.'</td>
                                                <td>:</td>
                                                <td>'.$value3->jabatan.'; </td>
                                            </tr>
                                              
                                            ';
                                        }
                                    }
                                    elseif($ak=='K'){
                                        echo '
                                        <tr>
                                            <td>'.$no.'.</td>
                                            <td>'.$nama.'</td>
                                            <td>:</td>
                                            <td>'.$jabatan_komisi.'; </td>
                                        </tr>
                                          
                                        ';
                                    }
                                    else{
                                        echo '
                                        <tr>
                                            <td>'.$no.'.</td>
                                            <td>'.$nama.'</td>
                                            <td>:</td>
                                            <td>'.$jabatan.'; </td>
                                        </tr>
                                          
                                        ';
                                    }
                                }
                            }
                          }
                          $no++;
                          }                
                        ?>
                        <!-- <tr>
                            <td>1.</td>
                            <td width='240'>KADAR LUSMAN, SE</td>
                            <td>:</td>
                            <td>Ketua Komisi “C” DPRD Kota Semarang;</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>ERRY SADEWO, SH</td>
                            <td>:</td>
                            <td>Wakil Ketua Komisi “C” DPRD Kota Semarang; </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Ir. WACHID NURMIYANTO </td>
                            <td>:</td>
                            <td>Sekretaris Komisi “C” DPRD Kota Semarang;</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>R. YUWANTO</td>
                            <td>:</td>
                            <td>Anggota Komisi “C” DPRD Kota Semarang;</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>H. DIBYO SUTIMAN, SH</td>
                            <td>:</td>
                            <td>Anggota Komisi “C” DPRD Kota Semarang;</td>
                        </tr>
                        <tr>
                            <td>6.</td>
                            <td>R. YUWANTO</td>
                            <td>:</td>
                            <td>Anggota Komisi “C” DPRD Kota Semarang;</td>
                        </tr>
                        <tr>
                            <td>7.</td>
                            <td>NUNUNG SRIYANTO, SH, MM</td>
                            <td>:</td>
                            <td>Anggota Komisi “C” DPRD Kota Semarang;</td>
                        </tr>
                        <tr>
                            <td>8.</td>
                            <td>R. YUWANTO</td>
                            <td>:</td>
                            <td>Anggota Komisi “C” DPRD Kota Semarang;</td>
                        </tr>
                        <tr>
                            <td>9.</td>
                            <td>H. DIBYO SUTIMAN, SH</td>
                            <td>:</td>
                            <td>Kepala Sub Bagian Pemberitaan pada Bagian Hubungan
                                    Masyarakat Sekretariat DPRD Kota Semarang;</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>R. YUWANTO</td>
                            <td>:</td>
                            <td>Staf Sub Bagian Tata Usaha dan Kepegawaian pada Bagian
                                    Umum Sekretariat DPRD Kota Semarang;</td>
                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>BAGUS SANTOSO, S.STP, MM.</td>
                            <td>:</td>
                            <td>Staf Sub Bagian Persidangan pada Bagian Persidangan dan
                                    Perundang-undangan Sekretariat DPRD Kota Semarang;</td>
                        </tr> -->
                    </tbody>
                </table>
                <!-- Table Kepada End-->

                <p>Melaksanakan perjalanan dinas:</p>

                <table class='top-vertical'>
                    <tbody>
                    <?php
                        
                        foreach($data_jaldis as $content)
                        {
                                foreach ($content as $key => $value ) {
                                $$key=$value;
                            }
                            $tgl1 = explode('-', $start_date);
                            $tgl2 = explode('-', $end_date);
                            
							$day1 = date('D', strtotime($start_date));
							$day2 = date('D', strtotime($end_date));

							$dayList = array(
								'Sun' => 'Minggu',
								'Mon' => 'Senin',
								'Tue' => 'Selasa',
								'Wed' => 'Rabu',
								'Thu' => 'Kamis',
								'Fri' => 'Jumat',
								'Sat' => 'Sabtu'
							);
									if ($tgl1[1]=="01") {
                                     $bulan1 = "Januari ";
                                    }elseif ($tgl1[1]=="02") {
                                     $bulan1 = "Februari ";
                                    }elseif ($tgl1[1]=="03") {
                                     $bulan1 = "Maret ";
                                    }elseif ($tgl1[1]=="04") {
                                     $bulan1 = "April ";
                                    }elseif ($tgl1[1]=="05") {
                                     $bulan1 = "Mei ";
                                    }elseif ($tgl1[1]=="06") {
                                     $bulan1 = "Juni ";
                                    }elseif ($tgl1[1]=="07") {
                                     $bulan1 = "Juli ";
                                    }elseif ($tgl1[1]=="08") {
                                     $bulan1 = "Agustus ";
                                    }elseif ($tgl1[1]=="09") {
                                     $bulan1 = "September ";
                                    }elseif ($tgl1[1]=="10") {
                                     $bulan1 = "Oktober ";
                                    }elseif ($tgl1[1]=="11") {
                                     $bulan1 = "November ";
                                    }elseif ($tgl1[1]=="12") {
                                     $bulan1 = "Desember ";
                                    }

                                    if ($tgl2[1]=="01") {
                                     $bulan2 = "Januari ";
                                    }elseif ($tgl2[1]=="02") {
                                     $bulan2 = "Februari ";
                                    }elseif ($tgl2[1]=="03") {
                                     $bulan2 = "Maret ";
                                    }elseif ($tgl2[1]=="04") {
                                     $bulan2 = "April ";
                                    }elseif ($tgl2[1]=="05") {
                                     $bulan2 = "Mei ";
                                    }elseif ($tgl2[1]=="06") {
                                     $bulan2 = "Juni ";
                                    }elseif ($tgl2[1]=="07") {
                                     $bulan2 = "Juli ";
                                    }elseif ($tgl2[1]=="08") {
                                     $bulan2 = "Agustus ";
                                    }elseif ($tgl2[1]=="09") {
                                     $bulan2 = "September ";
                                    }elseif ($tgl2[1]=="10") {
                                     $bulan2 = "Oktober ";
                                    }elseif ($tgl2[1]=="11") {
                                     $bulan2 = "November ";
                                    }elseif ($tgl2[1]=="12") {
                                     $bulan2 = "Desember ";
                                    }
                    ?>
                        <tr>
                            <td width='90'>Berangkat</td>
                            <td>:</td>
                            <td><?= $dayList[$day1].', '.$tgl1[2].' '.$bulan1.$tgl1[0]; ?></td>
                        </tr>
                        <tr>
                            <td>Kembali</td>
                            <td>:</td>
                            <td><?= $dayList[$day2].', '.$tgl2[2].' '.$bulan2.$tgl2[0]; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat</td>
                            <td>:</td>
                            <td><?= $tujuan; ?></td>
                        </tr>
                        <tr>
                            <td>Keperluan</td>
                            <td>:</td>
                            <td><?= $keperluan ?>.</td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

                <p>Demikian Surat Jalan ini dibuat untuk dipergunakan seperlunya.</p>

                <!-- Konten Surat 2 End -->
            </div>
            <!-- Konten Surat End -->

            <!-- Tanda Tangan Start -->
            <div id='ttd-section'>
                <div class='right'>
                    <div class='tgl'>Semarang, 
                        <?php
                        foreach ($data_jaldis as $key => $value) {
                            $tgl_ttd = explode('-', $value->tanggal_ttd);
                                    if ($tgl_ttd[1]=="01") {
                                     echo $tgl_ttd[2]." Januari ".$tgl_ttd[0];
                                    }elseif ($tgl_ttd[1]=="02") {
                                     echo $tgl_ttd[2]." Februari ".$tgl_ttd[0];
                                    }elseif ($tgl_ttd[1]=="03") {
                                     echo $tgl_ttd[2]." Maret ".$tgl_ttd[0];
                                    }elseif ($tgl_ttd[1]=="04") {
                                     echo $tgl_ttd[2]." April ".$tgl_ttd[0];
                                    }elseif ($tgl_ttd[1]=="05") {
                                     echo $tgl_ttd[2]." Mei ".$tgl_ttd[0];
                                    }elseif ($tgl_ttd[1]=="06") {
                                     echo $tgl_ttd[2]." Juni ".$tgl_ttd[0];
                                    }elseif ($tgl_ttd[1]=="07") {
                                     echo $tgl_ttd[2]." Juli ".$tgl_ttd[0];
                                    }elseif ($tgl_ttd[1]=="08") {
                                     echo $tgl_ttd[2]." Agustus ".$tgl_ttd[0];
                                    }elseif ($tgl_ttd[1]=="09") {
                                     echo $tgl_ttd[2]." September ".$tgl_ttd[0];
                                    }elseif ($tgl_ttd[1]=="10") {
                                     echo $tgl_ttd[2]." Oktober ".$tgl_ttd[0];
                                    }elseif ($tgl_ttd[1]=="11") {
                                     echo $tgl_ttd[2]." November ".$tgl_ttd[0];
                                    }elseif ($tgl_ttd[1]=="12") {
                                     echo $tgl_ttd[2]." Desember ".$tgl_ttd[0];
                                    }
                        }
                        ?>
                    </div>
                    <strong>DEWAN PERWAKILAN RAKYAT DAERAH</strong>
                    <strong>KOTA SEMARANG</strong>
                    <?php
                   
                    foreach ($ns as $key => $value) {
                       
                        echo '<strong>'.$value->jabatan.',</strong>';
                        echo "<div class='ttd'></div>";
                        echo '<strong class="nama">'.$value->ttd.'</strong>';
                    }
                    ?>
                </div>
            </div>
            <!-- Tanda Tangan End -->
        </div>
    </div>
    <!-- Button Print Start -->
    <div class='button-print' title='Print this document' onclick='window.print()'>
        <i class='ion-printer'></i>
    </div>
    <!-- Button Print End -->
</body>

</html>