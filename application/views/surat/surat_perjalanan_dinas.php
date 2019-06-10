
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Perjalanan Dinas</title>
    <link rel="stylesheet" href="<?= base_url('assets/surat/css/style.css'); ?>">
    <link rel='stylesheet' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' />
</head>

<body>
    <?php
                        $keterangan = '';
                        $tgl_berangkat = '';
                        $tgl_kembali = '';
                        $nama = '';
                      
                        foreach ($dataanggota as $key => $value) {
    ?>
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

            <div class='ket-surat4'>
                <div class='right'>
                    <table>
                        <tbody>
                            <tr>
                                <td width='100'>Lembar ke</td>
                                <td>:</td>
                                <td>...</td>
                            </tr>
                            <tr>
                                <td>Kode no</td>
                                <td>:</td>
                                <td>...</td>
                            </tr>
                            <tr>
                                <td>Nomor</td>
                                <td>:</td>
                                <td>090 / </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Judul Surat Start -->
            <div class='judul surat4'>
                <h3>SURAT PERJALANAN DINAS</h3>
                <strong>( S P D )</strong>
            </div>
            <!-- Judul Surat End -->

            <!-- Konten Surat Start -->
            <div id='surat-content'>
                <!-- Konten Surat 4 Start -->

                <!-- Table Dasar Start-->
                <table class='table surat4 top-vertical table-padding'>
                    <tbody>
                        <!-- 1 -->
                        <tr>
                            <td>1.</td>
                            <td width='300'>Pengguna Anggaran</td>
                            <td>Sekretaris DPRD Kota Semarang</td>
                        </tr>
                        
                        <?php
                     
                            $nama = $value->nama;
                            $keterangan = $value->keterangan;
                            $tgl_berangkat = $value->start_date;
                            $tgl_kembali = $value->end_date;

                            $tgl1 = explode('-', $tgl_berangkat);
                            $tgl2 = explode('-', $tgl_kembali);

                            $tanggal1 = new DateTime($tgl_berangkat);
                            $tanggal2 = new DateTime($tgl_kembali);
                                       
                            $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                        ?>
                        <tr>
                            <td>2.</td>
                            <td>Nama/NIP Pegawai yang Melaksanakan Perjalanan Dinas </td>
                            <td><?= $nama; ?></td>
                        </tr>

                        <!-- 3 -->
                        <?php
                        if($keterangan=='anggota legislatif'){
                            if($value->pimpinan!=''){
                                echo "
                                <tr class='no-bottom-border'>
                                    <td rowspan='3'>3.</td>
                                    <td>a. Pangkat dan Golongan</td>
                                    <td></td>
                                </tr>
                                <tr class='no-bottom-border'>
                                    <td>b. Jabatan / Instansi</td>
                                    <td>".$value->pimpinan."</td>
                                </tr>
                                ";
                            }
                            else{
                                echo "
                                <tr class='no-bottom-border'>
                                    <td rowspan='3'>3.</td>
                                    <td>a. Pangkat dan Golongan</td>
                                    <td></td>
                                </tr>
                                <tr class='no-bottom-border'>
                                    <td>b. Jabatan / Instansi</td>
                                    <td>".$value->jabatan_ak."</td>
                                </tr>
                                ";
                            }
                            
                        }else{
                            echo "
                                <tr class='no-bottom-border'>
                                    <td rowspan='3'>3.</td>
                                    <td>a. Pangkat dan Golongan</td>
                                    <td>".$value->pangkat." dan ".$value->golongan."</td>
                                </tr>
                                <tr class='no-bottom-border'>
                                    <td>b. Jabatan / Instansi</td>
                                    <td></td>
                                </tr>
                            ";
                        }
                        
                        ?>
                        
                        <tr>
                            <td>c. Tingkat Biaya Perjalanan Dinas</td>
                            <td></td>
                        </tr>
                        
                        <!-- 4 -->
                        <?php
                        foreach ($data_jaldis as $key => $row) {
                            if($keterangan=='anggota legislatif'){
                                echo '
                                <tr>
                                    <td>4.</td>
                                    <td>Maksud Perjalanan Dinas</td>
                                    <td>Melaksanakan '.$row->keperluan.'</td>
                                </tr>
                                ';
                            }
                            else{
                                echo '
                                <tr>
                                    <td>4.</td>
                                    <td>Maksud Perjalanan Dinas</td>
                                    <td>Melaksanakan Pendampingan '.$row->keperluan.'</td>
                                </tr>
                                '; 
                            }
                        ?>
                        <!-- <tr>
                            <td>4.</td>
                            <td>Maksud Perjalanan Dinas</td>
                            <td>Melaksanakan Kunjungan Kerja Komisi D DPRD Kota Semarang untuk mendapatkan informasi dalam rangka
                                Penyusunan Kajian tentang Bantuan Kepada Siswa Miskin</td>
                        </tr> -->

                        <!-- 5 -->
                        <tr>
                            <td>5.</td>
                            <td>Alat Angkutan Yang dipergunakan</td>
                            <td><?= $row->transportasi; ?></td>
                        </tr>

                        <!-- 6 -->
                        <tr class='no-bottom-border'>
                            <td rowspan='2'>6.</td>
                            <td>a. Tempat Berangkat</td>
                            <td>Semarang</td>
                        </tr>
                        <tr>
                            <td>b. Tempat Tujuan</td>
                            <td><?= $row->tujuan; ?></td>
                        </tr>

                        <!-- 7 -->
                        <tr class='no-bottom-border'>
                            <td rowspan='3'>7.</td>
                            <td>a. Lamanya Perjalanan Dinas</td>
                            <?php
                            if($perbedaan=='1'){
                                echo '<td>'.$perbedaan.' ( satu ) hari</td>';
                            }
                            elseif($perbedaan=='2'){
                                echo '<td>'.$perbedaan.' ( dua ) hari</td>';
                            }
                            elseif($perbedaan=='3'){
                                echo '<td>'.$perbedaan.' ( tiga ) hari</td>';
                            }
                            elseif($perbedaan=='4'){
                                echo '<td>'.$perbedaan.' ( empat ) hari</td>';
                            }
                            elseif($perbedaan=='5'){
                                echo '<td>'.$perbedaan.' ( lima ) hari</td>';
                            }
                            elseif($perbedaan=='6'){
                                echo '<td>'.$perbedaan.' ( enam ) hari</td>';
                            }
                            elseif($perbedaan=='7'){
                                echo '<td>'.$perbedaan.' ( tujuh ) hari</td>';
                            }
                            elseif($perbedaan=='8'){
                                echo '<td>'.$perbedaan.' ( delapan ) hari</td>';
                            }
                            elseif($perbedaan=='9'){
                                echo '<td>'.$perbedaan.' ( sembilan ) hari</td>';
                            }
                            else{
                                echo '<td>'.$perbedaan.' ( sepuluh ) hari</td>';
                            }
                            ?>
                        </tr>
                        <tr class='no-bottom-border'>
                            <td>b. Tanggal Berangkat</td>
                            <?php
                            echo "<td>";
                                    if ($tgl1[1]=="01") {
                                     echo $tgl1[2]." Januari ".$tgl1[0];
                                    }elseif ($tgl1[1]=="02") {
                                     echo $tgl1[2]." Februari ".$tgl1[0];
                                    }elseif ($tgl1[1]=="03") {
                                     echo $tgl1[2]." Maret ".$tgl1[0];
                                    }elseif ($tgl1[1]=="04") {
                                     echo $tgl1[2]." April ".$tgl1[0];
                                    }elseif ($tgl1[1]=="05") {
                                     echo $tgl1[2]." Mei ".$tgl1[0];
                                    }elseif ($tgl1[1]=="06") {
                                     echo $tgl1[2]." Juni ".$tgl1[0];
                                    }elseif ($tgl1[1]=="07") {
                                     echo $tgl1[2]." Juli ".$tgl1[0];
                                    }elseif ($tgl1[1]=="08") {
                                     echo $tgl1[2]." Agustus ".$tgl1[0];
                                    }elseif ($tgl1[1]=="09") {
                                     echo $tgl1[2]." September ".$tgl1[0];
                                    }elseif ($tgl1[1]=="10") {
                                     echo $tgl1[2]." Oktober ".$tgl1[0];
                                    }elseif ($tgl1[1]=="11") {
                                     echo $tgl1[2]." November ".$tgl1[0];
                                    }else {
                                     echo $tgl1[2]." Desember ".$tgl1[0];
                                    }
                            echo "</td>";
                            ?>
                            
                        </tr>
                        <tr>
                            <td>c. Tanggal Harus Kembali/Tiba di Tempat Baru</td>
                            <?php
                            echo "<td>";
                                    if ($tgl2[1]=="01") {
                                     echo $tgl2[2]." Januari ".$tgl2[0];
                                    }elseif ($tgl2[1]=="02") {
                                     echo $tgl2[2]." Februari ".$tgl2[0];
                                    }elseif ($tgl2[1]=="03") {
                                     echo $tgl2[2]." Maret ".$tgl2[0];
                                    }elseif ($tgl2[1]=="04") {
                                     echo $tgl2[2]." April ".$tgl2[0];
                                    }elseif ($tgl2[1]=="05") {
                                     echo $tgl2[2]." Mei ".$tgl2[0];
                                    }elseif ($tgl2[1]=="06") {
                                     echo $tgl2[2]." Juni ".$tgl2[0];
                                    }elseif ($tgl2[1]=="07") {
                                     echo $tgl2[2]." Juli ".$tgl2[0];
                                    }elseif ($tgl2[1]=="08") {
                                     echo $tgl2[2]." Agustus ".$tgl2[0];
                                    }elseif ($tgl2[1]=="09") {
                                     echo $tgl2[2]." September ".$tgl2[0];
                                    }elseif ($tgl2[1]=="10") {
                                     echo $tgl2[2]." Oktober ".$tgl2[0];
                                    }elseif ($tgl2[1]=="11") {
                                     echo $tgl2[2]." November ".$tgl2[0];
                                    }else {
                                     echo $tgl2[2]." Desember ".$tgl2[0];
                                    }
                            echo "</td>";
                            ?>
                        </tr>

                        <!-- 8 -->
                        <tr>
                            <td>8.</td>
                            <td>Pengikut : Nama</td>
                            <td>Keterangan</td>
                        </tr>
                        <?php } ?>
                        <!-- 9 -->
                        <tr class='no-bottom-border'>
                            <td rowspan='3'>9.</td>
                            <td>Pembebanan Anggaran</td>
                            <td></td>
                        </tr>
                        <tr class='no-bottom-border'>
                            <td>a. Instansi</td>
                            <td>Sekretariat DPRD Kota Semarang</td>
                        </tr>
                        <tr>
                            <td>b. Akun</td>
                            <td>
                                <?php
                                foreach ($akun as $key => $ak) {
                                    echo $ak->kr.'<br>';
                                }
                                ?>
                            </td>
                        </tr>

                        <!-- 10 -->
                        <tr>
                            <td>10.</td>
                            <td>Keterangan Lain lain</td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
                <!-- Table Dasar End-->

                <!-- Konten Surat 4 End -->
            </div>
            <!-- Konten Surat End -->

            <!-- Konten Dikeluarkan Start -->
            <div id='dikeluarkan-section'>
                <div class='right'>
                    <table>
                        <tbody>
                            <tr>
                                <td>Dikeluarkan di</td>
                                <td>:</td>
                                <td>Semarang</td>
                            </tr>
                            <tr>
                                <td>Pada tanggal</td>
                                <td>:</td>
                                <td>
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
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Konten Dikeluarkan End -->

            <!-- Tanda Tangan Start -->
            <div id='ttd-section' class='surat4'>
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <strong>Tanda Tangan Pemegang</strong>
                            </td>
                            <td>
                                <strong>DPRD KOTA SEMARANG</strong>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <?php
                                foreach ($nomor_surat as $key => $ns) {
                                    echo '<strong>'.$ns->jabatan.'</strong>';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class='ttd'></div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <strong class="nama"><?= $nama; ?></strong>
                            </td>
                            <td>
                                <?php
                                foreach ($nomor_surat as $key => $ns) {
                                    echo '<strong class="nama">'.$ns->ttd.'</strong>';
                                }
                                ?>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Tanda Tangan End -->
        </div>
    </div>
    <?php
    }
    ?>
    <!-- Button Print Start -->
    <div class='button-print' title='Print this document' onclick='window.print()'>
        <i class='ion-printer'></i>
    </div>
    <!-- Button Print End -->
</body>

</html>