					<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Data
                        <small>Perjalanan Dinas</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                    <div class="alert alert-info no-margin margin-top-10"> <b>Note!</b> Jika ada agenda JalDis yang telah selesai segera untuk memasukkan hasilnya, dengan meng-klik link yang tersedia.<br>Silahkan unduh link berikut guna melihat rekapan data perjalanan dinas, file yang diunduh berupa file excel.
                          <!-- <button class="btn btn-white btn-default btn-round">
                              <i class="ace-icon fa fa-download"></i>
                              <a href="download">Unduh</a>
                          </button> -->
                          <a href="download" class="btn purple"> <i class="fa fa-download"></i> Unduh </a>
                    </div>
              
                          
                          
                        
                    <br>
                    <table class="table table-bordered table-striped" id="data_jaldis">
                    <thead>
                      <tr>
                        <th style="text-align: center" >#</th>
                        <th style="text-align: center" >Tujuan</th>
                        <th style="text-align: center" >Waktu</th>
                        <th style="text-align: center" >Jumlah Anggota</th>
                        <th style="text-align: center" >Alat Kelengkapan</th>
                        <th style="text-align: center" >Keterangan</th>
                        <th style="text-align: center" width="14%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                                  
                    <?php
                    $no=1;
                    foreach($data_jaldis as $content)
                    {
                        foreach ($content as $key => $value ) {
                        $$key=$value;
                    }
                                      $tanggal1 = new DateTime($start_date);
                                      $tanggal2 = new DateTime($end_date);
                                      $tgl_sekarang = new DateTime();
                                      $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                      
                    ?>
                    <tr class="gradeX">
                        <td style="text-align: center"><?= $no++."."; ?></td>
                        <td><?php echo $tujuan; ?></td>
                        <td><?php
                        if($perbedaan=='1'){
                          echo date('d-m-Y', strtotime($start_date));
                        }
                        else{
                        echo date('d-m-Y', strtotime($start_date)).' - '.date('d-m-Y', strtotime($end_date)).' ('.$perbedaan.' Hari)';
                        }?></td>
                        <td><?php echo $jumlah_anggota.' orang.'; ?></td>
                        <td>
                          <?php
                            $ak = substr($alat_kelengkapan, 0,1);
                            if($ak=='B'){
                                $where1['id_badan'] = $alat_kelengkapan;
                                $data_ak1 = $this->Main_model->getSelectedData('badan',$where1);
                                foreach ($data_ak1 as $key => $value1) {
                                  echo $value1->nama_badan;
                                }
                            }
                            elseif($ak=='P'){
                                $where2['kode_pansus'] = $alat_kelengkapan;
                                $data_ak2 = $this->Main_model->getSelectedData('pansus',$where2);
                                foreach ($data_ak2 as $key => $value2) {
                                  echo $value2->nama_pansus;
                                }
                            }
                            elseif($ak=='K'){
                                $where3['id_komisi'] = $alat_kelengkapan;
                                $data_ak3 = $this->Main_model->getSelectedData('komisi',$where3);
                                foreach ($data_ak3 as $key => $value3) {
                                  echo $value3->nama_komisi;
                                }
                            }
                            elseif($ak=='J'){
                                $where4['kode_panja'] = $alat_kelengkapan;
                                $data_ak4 = $this->Main_model->getSelectedData('panja',$where4);
                                foreach ($data_ak4 as $key => $value4) {
                                  echo $value4->nama_panja;
                                }
                            }
                            elseif($ak=='s'){
                                echo 'DPRD';
                            }
                            elseif($ak=='a'){
                                echo 'Anggota Setwan';
                            }
                            elseif($ak=='i'){
                                echo 'Pimpinan';
                            }
                            else{
                                echo 'Masukan tidak valid';
                            }
                          ?>
                        </td>
                        <td style="text-align: center"><?php
                        if($tanggal2<$tgl_sekarang){
                          if(empty($catatan)){
                            echo '<span class="label label-sm label-warning"><a href="'.site_url().'Master/notulen/'.$kode_jaldis.'">Tambah Catatan</a></span>';
                          }
                          else{
                            echo '<span class="label label-sm label-warning"><a href="'.site_url().'Master/notulen/'.$kode_jaldis.'">Lihat Catatan</a></span>';
                          }
                        }
                        else{
                          if($tanggal1<$tgl_sekarang){
                            
                            echo '<span class="label label-sm label-success"> On Going </span>';
                          }
                          else{
                            echo '<span class="label label-sm label-info"> Coming Soon </span>';
                          }
                          
                        }
                        ?></td>
                        <td style="text-align: center">
                            <a class="btn btn-circle btn-icon-only yellow" href="<?php echo site_url('Master/detail_jaldis/'.$kode_jaldis)?>" title="detail data">
                                <i class="icon-eye"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only green" href="<?php echo site_url('Master/ubah_jaldis/'.$kode_jaldis)?>" title="ubah data">
                                <i class="icon-pencil"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only red" href="<?php echo site_url('Master/hapus_jaldis/'.$kode_jaldis)?>" title="hapus data" onclick="return confirm('Anda yakin?')">
                                <i class="icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
               
                  </table>

      <script>
      $(function () {
        $("#data_jaldis").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
      </script>
