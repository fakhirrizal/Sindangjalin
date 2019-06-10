<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Tugas Dewan</title>
    <link rel="stylesheet" href="<?= base_url('assets/surat/css/style.css'); ?>">
    <link rel='stylesheet' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' />
</head>

<body>
    <div id='surat-wrapper'>
        <div class='inner'>

            <!-- Kepala Surat Start -->
            <div id="kepala-surat">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <img class="kepala-logo" src="<?= base_url('assets/surat/img/logo.png'); ?>"/>
                            </td>
                            <td>
                                <h1 style="text-align: center;">DEWAN PERWAKILAN RAKYAT DAERAH</h1>
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
                <h3>SURAT TUGAS</h3>
                <strong>Nomor : 170 / <!-- 113 --></strong>
            </div>
            <!-- Judul Surat End -->

            <!-- Konten Surat Start -->
            <div id='surat-content'>
                <!-- Konten Surat 1 Start -->

                <!-- Table Dasar Start-->
                <table class='table top-vertical table-padding'>
                    <tbody>
                        <!-- <tr>
                            <td rowspan='2'>Dasar</td>
                            <td rowspan='2'>:</td>
                            <td>1.</td>
                            <td>Peraturan Daerah Kota Semarang Nomor 13 Tahun 2017 tentang Anggaran Pendapatan dan Belanja Daerah
                                Kota Semarang Tahun 2018;</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Surat Komisi C DPRD Kota Semarang Nomor : 4 / C / DPRD / 2018 tanggal 24 Januari 2018 perihal
                                Pendampingan Kunjungan Kerja Komisi C DPRD Kota Semarang.</td>
                        </tr> -->
                        <?php
                          if(isset($dasar_hukum)){
                            $i = 1;
                            foreach($dasar_hukum as $dh)

                            {
                              if($i==1){
                                echo '
                                  
                                    <tr>
                                        <td class="dynamic-rowspan">Dasar</td>
                                        <td class="dynamic-rowspan">:</td>
                                        <td>1.</td>
                                        <td>'.$dh->dasar_hukum.';</td>
                                    </tr>
                                ';
                              }
                              else{
                              echo '
                                   
                                    <tr>
                                        <td>'.$i.'.</td>
                                        <td>'.$dh->dasar_hukum.'.</td>
                                    </tr>
                              ';
                              }
                              $i++;
                            }
                          
                          }
                        ?>
                    </tbody>
                </table>
                <!-- Table Dasar End-->

                <h3 class='center h3'>MENUGASKAN : </h3>

                <!-- Table Kepada Start-->
                <table class='table top-vertical table-padding'>
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
                                    <td width="50" class="dynamic-rowspan">Kepada</td>
                                    <td width="5" class="dynamic-rowspan">:</td>
                                    <td width="25">1.</td>
                                    <td width="270">'.$nama.'</td>
                                    <td width="10">:</td>
                                    <td>'.$jabatan.';</td>
                                </tr>
                                   
                                ';
                            }
                            else{
                                if($pimpinan!=''){
                                    echo'
                                    <tr>
                                        <td width="50" class="dynamic-rowspan">Kepada</td>
                                        <td width="5" class="dynamic-rowspan">:</td>
                                        <td width="25">1.</td>
                                        <td width="270">'.$nama.'</td>
                                        <td width="10">:</td>
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
                                                <td width="50" class="dynamic-rowspan">Kepada</td>
                                                <td width="5" class="dynamic-rowspan">:</td>
                                                <td width="25">1.</td>
                                                <td width="270">'.$nama.'</td>
                                                <td width="10">:</td>
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
                                                <td width="50" class="dynamic-rowspan">Kepada</td>
                                                <td width="5" class="dynamic-rowspan">:</td>
                                                <td width="25">1.</td>
                                                <td width="270">'.$nama.'</td>
                                                <td width="10">:</td>
                                                <td>'.$value2->jabatan.';</td>
                                            </tr>
                                               
                                            ';
                                        }
                                    }
                                    elseif($ak=='J'){
                                        $where3['kode_pansus'] = $alat_kelengkapan;
                                        $where3['id_anggota'] = $id_anggota;
                                        $data_ak3 = $this->Main_model->getSelectedData('anggota_panja',$where3);
                                        foreach ($data_ak3 as $key => $value3) {
                                          echo'
                                            <tr>
                                                <td width="50" class="dynamic-rowspan">Kepada</td>
                                                <td width="5" class="dynamic-rowspan">:</td>
                                                <td width="25">1.</td>
                                                <td width="270">'.$nama.'</td>
                                                <td width="10">:</td>
                                                <td>'.$value3->jabatan.';</td>
                                            </tr>
                                               
                                            ';
                                        }
                                    }
                                    elseif($ak=='K'){
                                        echo'
                                        <tr>
                                            <td width="50" class="dynamic-rowspan">Kepada</td>
                                            <td width="5" class="dynamic-rowspan">:</td>
                                            <td width="25">1.</td>
                                            <td width="270">'.$nama.'</td>
                                            <td width="10">:</td>
                                            <td>'.$jabatan_komisi.';</td>
                                        </tr>
                                           
                                        ';
                                    }
                                    else{
                                        echo'
                                        <tr>
                                            <td width="50" class="dynamic-rowspan">Kepada</td>
                                            <td width="5" class="dynamic-rowspan">:</td>
                                            <td width="25">1.</td>
                                            <td width="270">'.$nama.'</td>
                                            <td width="10">:</td>
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
                            // echo '
                            // <tr>
                            //     <td>'.$no.'.</td>
                            //     <td>'.$nama.'</td>
                            //     <td>:</td>
                            //     <td>'.$jabatan.'; </td>
                            // </tr>
                              
                            // ';
                          }
                          $no++;
                          }                
                        ?>
                        <!-- <tr>
                            <td rowspan='11'>Kepada</td>
                            <td rowspan='11'>:</td>
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
                            <td>H. DIBYO SUTIMAN, SH</td>
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
                            <td>Anggota Komisi “C” DPRD Kota Semarang;</td>
                        </tr>
                        <tr>
                            <td>10.</td>
                            <td>R. YUWANTO</td>
                            <td>:</td>
                            <td>Anggota Komisi “C” DPRD Kota Semarang;</td>
                        </tr>
                        <tr>
                            <td>11.</td>
                            <td>H. DIBYO SUTIMAN, SH</td>
                            <td>:</td>
                            <td>Anggota Komisi “C” DPRD Kota Semarang;</td>
                        </tr> -->
                    </tbody>
                </table>
                <!-- Table Kepada End-->

                <!-- Table Untuk Start-->
                <table class='table top-vertical table-padding'>
                    <tbody>
                        <?php
                        
                        foreach($data_jaldis as $content)
                        {
                                foreach ($content as $key => $value ) {
                                $$key=$value;
                            }
                                      $tanggal1 = new DateTime($start_date);
                                      $tanggal2 = new DateTime($end_date);
                                      
                                      $tgl1 = explode('-', $start_date);
                                      $tgl2 = explode('-', $end_date);
                                      $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                            echo "
                            <tr>
                                <td rowspan='2'>Untuk</td>
                                <td rowspan='2'>:</td>
                                <td>1.</td>";
                            echo "<td>Melaksanakan ".$keperluan." ke ".$tujuan." selama ".$perbedaan." (";
                            if($tgl1[1]==$tgl2[1]){
                                if($perbedaan=='1'){
                                    echo 'satu) hari, pada tanggal '.$tgl1[2].' s/d '.$tgl2[2].' ';
                                }
                                elseif ($perbedaan=='2') {
                                    echo 'dua) hari, pada tanggal '.$tgl1[2].' s/d '.$tgl2[2].' ';
                                }
                                elseif ($perbedaan=='3') {
                                    echo 'tiga) hari, pada tanggal '.$tgl1[2].' s/d '.$tgl2[2].' ';
                                }
                                elseif ($perbedaan=='4') {
                                    echo 'empat) hari, pada tanggal '.$tgl1[2].' s/d '.$tgl2[2].' ';
                                }
                                elseif ($perbedaan=='5') {
                                    echo 'lima) hari, pada tanggal '.$tgl1[2].' s/d '.$tgl2[2].' ';
                                }
                                elseif ($perbedaan=='6') {
                                    echo 'enam) hari, pada tanggal '.$tgl1[2].' s/d '.$tgl2[2].' ';
                                }
                                elseif ($perbedaan=='7') {
                                    echo 'tujuh) hari, pada tanggal '.$tgl1[2].' s/d '.$tgl2[2].' ';
                                }
                                elseif ($perbedaan=='8') {
                                    echo 'delapan) hari, pada tanggal '.$tgl1[2].' s/d '.$tgl2[2].' ';
                                }
                                elseif ($perbedaan=='9') {
                                    echo 'sembilan) hari, pada tanggal '.$tgl1[2].' s/d '.$tgl2[2].' ';
                                }
                                else{
                                    echo 'sepuluh) hari, pada tanggal '.$tgl1[2].' s/d '.$tgl2[2].' ';
                                }
                                    if ($tgl1[1]=="01") {
                                     echo "Januari ".$tgl1[0];
                                    }elseif ($tgl1[1]=="02") {
                                     echo "Februari ".$tgl1[0];
                                    }elseif ($tgl1[1]=="03") {
                                     echo "Maret ".$tgl1[0];
                                    }elseif ($tgl1[1]=="04") {
                                     echo "April ".$tgl1[0];
                                    }elseif ($tgl1[1]=="05") {
                                     echo "Mei ".$tgl1[0];
                                    }elseif ($tgl1[1]=="06") {
                                     echo "Juni ".$tgl1[0];
                                    }elseif ($tgl1[1]=="07") {
                                     echo "Juli ".$tgl1[0];
                                    }elseif ($tgl1[1]=="08") {
                                     echo "Agustus ".$tgl1[0];
                                    }elseif ($tgl1[1]=="09") {
                                     echo "September ".$tgl1[0];
                                    }elseif ($tgl1[1]=="10") {
                                     echo "Oktober ".$tgl1[0];
                                    }elseif ($tgl1[1]=="11") {
                                     echo "November ".$tgl1[0];
                                    }elseif ($tgl1[1]=="12") {
                                     echo "Desember ".$tgl1[0];
                                    }
                            }
                            else{
                                if($perbedaan=='1'){
                                    echo 'satu) hari, pada tanggal '.$tgl1[2];
                                }
                                elseif ($perbedaan=='2') {
                                    echo 'dua) hari, pada tanggal '.$tgl1[2];
                                }
                                elseif ($perbedaan=='3') {
                                    echo 'tiga) hari, pada tanggal '.$tgl1[2];
                                }
                                elseif ($perbedaan=='4') {
                                    echo 'empat) hari, pada tanggal '.$tgl1[2];
                                }
                                elseif ($perbedaan=='5') {
                                    echo 'lima) hari, pada tanggal '.$tgl1[2];
                                }
                                elseif ($perbedaan=='6') {
                                    echo 'enam) hari, pada tanggal '.$tgl1[2];
                                }
                                elseif ($perbedaan=='7') {
                                    echo 'tujuh) hari, pada tanggal '.$tgl1[2];
                                }
                                elseif ($perbedaan=='8') {
                                    echo 'delapan) hari, pada tanggal '.$tgl1[2];
                                }
                                elseif ($perbedaan=='9') {
                                    echo 'sembilan) hari, pada tanggal '.$tgl1[2];
                                }
                                else{
                                    echo 'sepuluh) hari, pada tanggal '.$tgl1[2];
                                }
                                    if ($tgl1[1]=="01") {
                                     echo " Januari s/d ".$tgl2[2];
                                    }elseif ($tgl1[1]=="02") {
                                     echo " Februari s/d ".$tgl2[2];
                                    }elseif ($tgl1[1]=="03") {
                                     echo " Maret s/d ".$tgl2[2];
                                    }elseif ($tgl1[1]=="04") {
                                     echo " April s/d ".$tgl2[2];
                                    }elseif ($tgl1[1]=="05") {
                                     echo " Mei s/d ".$tgl2[2];
                                    }elseif ($tgl1[1]=="06") {
                                     echo " Juni s/d ".$tgl2[2];
                                    }elseif ($tgl1[1]=="07") {
                                     echo " Juli s/d ".$tgl2[2];
                                    }elseif ($tgl1[1]=="08") {
                                     echo " Agustus s/d ".$tgl2[2];
                                    }elseif ($tgl1[1]=="09") {
                                     echo " September s/d ".$tgl2[2];
                                    }elseif ($tgl1[1]=="10") {
                                     echo " Oktober s/d ".$tgl2[2];
                                    }elseif ($tgl1[1]=="11") {
                                     echo " November s/d ".$tgl2[2];
                                    }elseif ($tgl1[1]=="12") {
                                     echo " Desember s/d ".$tgl2[2];
                                    }

                                    if ($tgl2[1]=="01") {
                                     echo " Januari ".$tgl2[0];
                                    }elseif ($tgl2[1]=="02") {
                                     echo " Februari ".$tgl2[0];
                                    }elseif ($tgl2[1]=="03") {
                                     echo " Maret ".$tgl2[0];
                                    }elseif ($tgl2[1]=="04") {
                                     echo " April ".$tgl2[0];
                                    }elseif ($tgl2[1]=="05") {
                                     echo " Mei ".$tgl2[0];
                                    }elseif ($tgl2[1]=="06") {
                                     echo " Juni ".$tgl2[0];
                                    }elseif ($tgl2[1]=="07") {
                                     echo " Juli ".$tgl2[0];
                                    }elseif ($tgl2[1]=="08") {
                                     echo " Agustus ".$tgl2[0];
                                    }elseif ($tgl2[1]=="09") {
                                     echo " September ".$tgl2[0];
                                    }elseif ($tgl2[1]=="10") {
                                     echo " Oktober ".$tgl2[0];
                                    }elseif ($tgl2[1]=="11") {
                                     echo " November ".$tgl2[0];
                                    }elseif ($tgl2[1]=="12") {
                                     echo " Desember ".$tgl2[0];
                                    }
                            }
                            
                                    
                            echo ';</td></tr>';
                        }
                        ?>
                        <!-- <tr>
                            <td rowspan='2'>Untuk</td>
                            <td rowspan='2'>:</td>
                            <td>1.</td>
                            <td>Melaksanakan Pendampingan Kunjungan Kerja Dinas Lingkungan Hidup Kota Semarang tentang
                                    Penyusunan Rencana Aksi Daerah Adaptasi Perubahan Iklim (RAD-API) ke Pemerintah Kota
                                    Balikpapan selama 3 (tiga) hari, pada tanggal 25 s/d 27 Januari 2018;</td>
                        </tr> -->
                        <tr>
                            <td>2.</td>
                            <td>Melaporkan hasilnya kepada Pimpinan setelah selesai melaksanakan tugas.</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Table Untuk End-->

                <p>Demikian untuk dilaksanakan dengan sebaik-baiknya.</p>

                <!-- Konten Surat 1 End -->
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
                    <!-- <strong>Ketua,</strong>
                    <div class='ttd'></div>
                    <strong class="nama">H. SUPRIYADI, S.Sos</strong> -->
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

    <script src='<?= base_url('assets/surat/js/script.js'); ?>'></script>
</body>

</html>