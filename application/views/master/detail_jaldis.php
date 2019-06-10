					<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
          <script>
             setTimeout(function(){
                 location.reload();
             },25000); // 5000 milliseconds atau 5 seconds.
          </script>
          <script language="JavaScript">
            function selectAll(source) {
              checkboxes = document.getElementsByName('nama[]');
              for(var i in checkboxes)
                checkboxes[i].checked = source.checked;
            }
          </script>
          <script language="JavaScript">
            function selectAllSPD(source1) {
              checkboxes1 = document.getElementsByName('nama1[]');
              for(var i in checkboxes1)
                checkboxes1[i].checked = source1.checked;
            }
          </script>
          <script language="JavaScript">
            function selectAllSJ(source2) {
              checkboxes2 = document.getElementsByName('nama2[]');
              for(var i in checkboxes2)
                checkboxes2[i].checked = source2.checked;
            }
          </script>
          <script language="JavaScript">
            function selectAllSTD(source3) {
              checkboxes3 = document.getElementsByName('nama3[]');
              for(var i in checkboxes3)
                checkboxes3[i].checked = source3.checked;
            }
          </script>
          <script language="JavaScript">
            function selectAllSTS(source4) {
              checkboxes4 = document.getElementsByName('nama4[]');
              for(var i in checkboxes4)
                checkboxes4[i].checked = source4.checked;
            }
          </script>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Data
                        <small>Detail Perjalanan Dinas</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
        <?php
        $ket_tanggal = '';
                if(isset($data_jaldis)){

                    foreach($data_jaldis as $row)

                    {
                                      $ket_tanggal = $row->end_date;
                                      $tanggal1 = new DateTime($row->start_date);
                                      $tanggal2 = new DateTime($row->end_date);
                                       
                                      $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
        ?>

        <div class="col-md-12">                

                <table class="table">

                  <tbody>

                  <tr>
                  <td> Alat Kelengkapan </td>
                  <td> : </td>
                  <td><?php
                  $alat_kelengkapan = $row->alat_kelengkapan;
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
                            elseif($ak=='s'){
                                echo 'Semua Anggota Dewan';
                            }
                            elseif($ak=='a'){
                                echo 'Anggota Setwan';
                            }
                            elseif($ak=='i'){
                                echo 'Bintek';
                            }
                            else{
                                echo 'Masukan tidak valid';
                            }
                  ?></td> 
                  </tr>

                  <tr>
                  <td> Tempat Tujuan </td>
                  <td> : </td>
                  <td><?php echo $row->tujuan; ?></td> 
                  </tr> 

                  <tr>
                  <td> Transportasi yang digunakan </td>
                  <td> : </td>
                  <td><?php echo $row->transportasi; ?></td> 
                  </tr> 

                  <?php
                  if(isset($akun)){
                    $i = 0;
                    foreach($akun as $akn)

                    {
                      if($i==0){
                        echo '
                          <tr>

                          <td> Akun </td>

                          <td> : </td>
                          <td>'.$akn->kr.'</td>
                          </tr>
                        ';
                      }
                      else{
                      echo '
                      <tr>

                      <td>  </td>

                      <td>  </td>

                      <td>'.$akn->kr.'</td>

                      </tr>  
                      ';
                      }
                      $i++;
                    }
                  
                  }
                  ?>   

                  <tr>

                  <td> Materi </td>

                  <td> : </td>
                  
                  <td><?php echo $row->keperluan; ?></td> 

                  </tr> 
                  </tr> 
                  <?php
                  if(isset($dasar_hukum)){
                    $i = 0;
                    foreach($dasar_hukum as $dh)

                    {
                      if($i==0){
                        echo '
                          <tr>

                          <td> Dasar Hukum </td>

                          <td> : </td>
                          <td>'.$dh->dasar_hukum.'</td>
                          </tr>
                        ';
                      }
                      else{
                      echo '
                      <tr>

                      <td>  </td>

                      <td>  </td>

                      <td>'.$dh->dasar_hukum.'</td> 

                      </tr>  
                      ';
                      }
                      $i++;
                    }
                  
                  }
                  ?>
                  <tr>

                  <td> Waktu </td>

                  <td> : </td>

                  <td><?php
                  if($perbedaan==1){
                    echo date('d-m-Y', strtotime($row->start_date));
                  }
                  else{
                  echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)';}?></td> 

                  </tr> 
                  <tr>

                  <td> Pimpinan Rombongan </td>

                  <td> : </td>

                  <td>
                    <?php
                    $q = "SELECT * from anggota where id='".$row->pimpinan."'";
                    $data_pimpinan = $this->User_model->manualQuery($q)->result();
                    foreach ($data_pimpinan as $key => $dp) {
                      echo $dp->nama;
                    }
                    ?>
                  </td> 

                  </tr> 
                  </tbody>

                </table>

        </div>
        <?php } } ?>
                  <div class="m-heading-1 border-green m-bordered">
                      <p> Untuk mengatur jadwal masing-masing Anggota silahkan klik tombol berikut
                        <a class="btn green" href="<?php echo site_url('Master/keberangkatan/'.$this->uri->segment(3))?>" target="_blank"> klik disini </a>
                    </p>
                      <p style="color: red">* <b>Catatan</b> : Silahkan klik tombol dibawah ini guna mencetak surat yang Anda butuhkan.</p>
                  </div>
                  <div class="dt-buttons">
                    <a class="dt-button buttons-print btn yellow btn-outline" data-toggle="modal" data-target="#cetak_spd" tabindex="0" aria-controls="sample_1"><span>Cetak Surat SPPD</span></a>
                    <a class="dt-button buttons-pdf buttons-html5 btn green btn-outline" data-toggle="modal" data-target="#cetak_sj" tabindex="0" aria-controls="sample_1"><span>Cetak Surat Jalan</span></a>
                    <a class="dt-button buttons-csv buttons-html5 btn purple btn-outline" data-toggle="modal" data-target="#cetak_std" tabindex="0" aria-controls="sample_1"><span>Cetak Surat Tugas Dewan</span></a>
                    <a class="dt-button buttons-print btn dark btn-outline" data-toggle="modal" data-target="#cetak_sts" tabindex="0" aria-controls="sample_1"><span>Cetak Surat Tugas Setwan</span></a>
                    |
                    <?php
                                                            if($ket_tanggal>date('Y-m-d')){
                                                                echo '<a class="dt-button buttons-print btn red btn-outline" href="#" tabindex="0" aria-controls="sample_1"><span>Laporan</span></a>';
                                                            }
                                                            else{
                    ?>
                    <a class="dt-button buttons-print btn red btn-outline" href="<?php echo site_url('Master/laporan_jaldis/'.$this->uri->segment(3))?>" tabindex="0" aria-controls="sample_1"><span>Laporan</span></a>
                    <?php } ?>
                  </div>
                  <table class="table table-bordered table-striped" id="jaldis">
                    <thead>
                      <tr>
                        <th style="text-align: center" >#</th>
                        <th style="text-align: center" >Nama Anggota</th>
                        <!-- <th style="text-align: center" >Surat Perintah</th> -->
                        <th style="text-align: center" >Surat Tugas</th>
                      
                        <th style="text-align: center" >Surat Jalan</th>
                        <th style="text-align: center" >SPD</th>
                      </tr>
                    </thead>
                    <tbody>
                                  
                      <?php
                      $no=1;
                      foreach($detail_jaldis as $content)
                      {
                          foreach ($content as $key => $value ) {
                          $$key=$value;
                      }
                     
                      ?>
                      <tr class="gradeX">
                        <td style="text-align: center"><?= $no++."."; ?></td>
                        <!-- <td><?php echo $nama.' ('.$jabatan.')'; ?></td> -->
                        <td><?php echo $nama; ?></td>
                        <!-- <td><?php
                        if(empty($surat_perintah)){
                          echo '
                            <div style="text-align: center">
                            <a class="btn btn-circle btn-icon-only red" href="'.base_url('Master/keterangan_jaldis/'.$kode_jaldis.'/'.$id_anggota).'" title="belum cetak">
                                <i class="icon-dislike"></i>
                            </a>';
                        }
                        else{
                          echo '
                            <div style="text-align: center">
                            <a class="btn btn-circle btn-icon-only green" href="#" title="sudah cetak">
                                <i class="icon-like"></i>
                            </a>';
                        }
                        ?></td> -->
                        <td><?php
                        if(empty($surat_tugas)){
                          echo '
                            <div style="text-align: center">
                            <a class="btn btn-circle btn-icon-only red" href="'.base_url('Master/keterangan_jaldis/'.$kode_jaldis.'/'.$id_anggota).'" title="belum cetak">
                                <i class="icon-dislike"></i>
                            </a>';
                        }
                        else{
                          echo '
                            <div style="text-align: center">
                            <a class="btn btn-circle btn-icon-only green" href="#" title="sudah cetak">
                                <i class="icon-like"></i>
                            </a>';
                        }
                        ?></td>
                        <td><?php
                        if(empty($surat_jalan)){
                          echo '
                            <div style="text-align: center">
                            <a class="btn btn-circle btn-icon-only red" href="'.base_url('Master/keterangan_jaldis/'.$kode_jaldis.'/'.$id_anggota).'" title="belum cetak">
                                <i class="icon-dislike"></i>
                            </a>';
                        }
                        else{
                          echo '
                            <div style="text-align: center">
                            <a class="btn btn-circle btn-icon-only green" href="#" title="sudah cetak">
                                <i class="icon-like"></i>
                            </a>';
                        }
                        ?></td>
                        <td><?php
                        if(empty($spd)){
                          echo '
                            <div style="text-align: center">
                            <a class="btn btn-circle btn-icon-only red" href="'.base_url('Master/keterangan_jaldis/'.$kode_jaldis.'/'.$id_anggota).'" title="belum cetak">
                                <i class="icon-dislike"></i>
                            </a>';
                        }
                        else{
                          echo '
                            <div style="text-align: center">
                            <a class="btn btn-circle btn-icon-only green" href="#" title="sudah cetak">
                                <i class="icon-like"></i>
                            </a>';
                        }
                        ?></td>
                        <!-- <td>
                            <div style="text-align: center">
                            <a class="btn btn-circle btn-icon-only yellow" href="<?php echo site_url('Surat/spd/'.$kode_jaldis.'/'.$id_anggota)?>" title="cetak Surat Perjalanan Dinas">
                                <i class="icon-printer"></i>
                            </a>
                        </td> -->
                      </tr>
                      
                      <?php
                      }
                      ?>
                    </tbody>
               
                  </table>
                  <!-- <p style="color: red">* Catatan : Tombol dibawah ini berguna untuk mencetak daftar anggota beserta jumlah keikutsertaannya, dengan keluaran file yang berekstensi .xls</p> -->
      <a href="<?php echo base_url()."Master/lihat_jaldis"; ?>" class="btn btn-default" role="button">Kembali</a>  

<div class="modal fade" id="cetak_surat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-full" role="document">

    <div class="modal-content">

      <div class="modal-header" style="text-align: center;">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Cetak Surat</h4>

      </div>

      <div class="modal-body">

       

        <div class="box box-primary">

       
          <form class="form-horizontal" method="post" action="<?php echo base_url()."Surat/cetak"; ?>" target='_blank' enctype='multipart/form-data'>
                <div class="box-body"> 
                
                <div class="alert alert-info no-margin margin-top-10"> Note! Silahkan pilih anggota yang akan dicantumkan namanya di dalam surat. </div>
                  <input name="kode_jaldis" type="hidden" value="<?= $this->uri->segment(3) ?>">
                  <br>
                  <div style="border: 2px #006400 inset; padding: 10px; text-align: left;">
                           
                                            <div class="form-group form-md-checkboxes">
                                         
                                                <div class="col-md-12">
                                                    <div class="md-checkbox-inline">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="selectall" onClick="selectAll(this)" class="md-check">
                                                            <label for="selectall">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Select All </label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                    <div class="form-group form-md-checkboxes">
                     
                        <div class="md-checkbox-inline">
                          <?php
                          $no=1;
                          foreach($detail_jaldis as $content)
                          {
                              foreach ($content as $key => $value ) {
                              $$key=$value;
                          }
                          echo '
                          
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="'.$id_anggota.'" name="nama[]" value="'.$id_anggota.'" class="md-check">
                                                        <label for="'.$id_anggota.'">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> '.$nama.' </label>
                                                    </div>
                                                </div>
                                                   
                                                
                          ';}
                          ?>
                        </div>
                                                                 
                    </div>
                  </div> 
                  <br>
                
                                                                                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" name='nomor_surat' required>
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($nomor_surat as $key => $value) {
                                                                                                      echo '<option value="'.$value->id.'">'.$value->keterangan.' ('.$value->nomor_surat.')</option>';
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Nomor Surat</label>
                                                                                                <span class="help-block">&nbsp; &nbsp;Silahkan pilih terlebih dahulu jenis surat yang akan dicetak</span>
                                                                                                <i class="icon-users"></i>
                                                                                            </div>
                                                                                        </div>
                              

                </div>

           
            <br>
            <div class="box-footer">

                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Print</button>
                                            <button type="reset" class="btn default">Reset</button>
                                        </div>
            </div>

          </form>

        </div>

      </div>

      

    </div>

  </div>

</div>
<div class="modal fade" id="cetak_spd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-full" role="document">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cetak Surat</h4>
      </div>
      <div class="modal-body">   
        <div class="box box-primary">       
          <form class="form-horizontal" method="post" action="<?php echo base_url()."Surat/cetak_spd"; ?>" target='_blank' enctype='multipart/form-data'>
                <div class="box-body">                
                <div class="alert alert-info no-margin margin-top-10"> Note! Silahkan pilih anggota yang akan dicetakkan Surat Perjalanan Dinas-nya. </div>
                  <input name="kode_jaldis" type="hidden" value="<?= $this->uri->segment(3); ?>">
                  <br>
                  <div style="border: 2px #006400 inset; padding: 10px; text-align: left;">
                                            <div class="form-group form-md-checkboxes">
                                         
                                                <div class="col-md-12">
                                                    <div class="md-checkbox-inline">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="selectall1" onClick="selectAllSPD(this)" class="md-check">
                                                            <label for="selectall1">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Select All </label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                    <div class="form-group form-md-checkboxes">
                     
                        <div class="md-checkbox-inline">
                          <?php
                          $no=1;
                          foreach($detail_jaldis as $content)
                          {
                              foreach ($content as $key => $value ) {
                              $$key=$value;
                          }
                          echo '
                          
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="'.$id_anggota.'spd" name="nama1[]" value="'.$id_anggota.'" class="md-check">
                                                        <label for="'.$id_anggota.'spd">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> '.$nama.' </label>
                                                    </div>
                                                </div>
                                                   
                                                
                          ';}
                          ?>
                        </div>
                                                                 
                    </div>
                  </div> 
                  <input type="hidden" value="5" name="nomor_surat">
                 
                              

                </div>

           
            <br>
            <div class="box-footer">

                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Cetak</button>
                                            <button type="reset" data-dismiss="modal" class="btn default">Batal</button>
                                        </div>
                                        
            </div>

          </form>

        </div>

      </div>

      

    </div>

  </div>

</div>
<div class="modal fade" id="cetak_sj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-full" role="document">

    <div class="modal-content">

      <div class="modal-header" style="text-align: center;">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Cetak Surat</h4>

      </div>

      <div class="modal-body">

       

        <div class="box box-primary">

       
          <form class="form-horizontal" method="post" action="<?php echo base_url()."Surat/cetak_sj"; ?>" target='_blank' enctype='multipart/form-data'>
                <div class="box-body"> 
                
                <div class="alert alert-info no-margin margin-top-10"> Note! Silahkan pilih anggota yang akan dicantumkan namanya di dalam Surat Jalan. </div>
                  <input name="kode_jaldis" type="hidden" value="<?= $this->uri->segment(3) ?>">
                  <br>
                  <div style="border: 2px #006400 inset; padding: 10px; text-align: left;">
                           
                                            <div class="form-group form-md-checkboxes">
                                         
                                                <div class="col-md-12">
                                                    <div class="md-checkbox-inline">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="selectall2" onClick="selectAllSJ(this)" class="md-check">
                                                            <label for="selectall2">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Select All </label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                    <div class="form-group form-md-checkboxes">
                     
                        <div class="md-checkbox-inline">
                          <?php
                          $no=1;
                          foreach($detail_jaldis as $content)
                          {
                              foreach ($content as $key => $value ) {
                              $$key=$value;
                          }
                          echo '
                          
                                                <div class="col-md-3">
                                                    <div class="md-checkbox">
                                                        <input type="checkbox" id="'.$id_anggota.'sj" name="nama2[]" value="'.$id_anggota.'" class="md-check">
                                                        <label for="'.$id_anggota.'sj">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> '.$nama.' </label>
                                                    </div>
                                                </div>
                                                   
                                                
                          ';}
                          ?>
                        </div>
                                                                 
                    </div>
                  </div> 
                  <input type="hidden" value="2" name="nomor_surat">
                 
                              

                </div>

           
            <br>
            <div class="box-footer">

                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Cetak</button>
                                            <button type="reset" data-dismiss="modal" class="btn default">Batal</button>
                                        </div>
                                        
            </div>

          </form>

        </div>

      </div>

      

    </div>

  </div>

</div>
<div class="modal fade" id="cetak_std" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-full" role="document">

    <div class="modal-content">

      <div class="modal-header" style="text-align: center;">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Cetak Surat</h4>

      </div>

      <div class="modal-body">

       

        <div class="box box-primary">

       
          <form class="form-horizontal" method="post" action="<?php echo base_url()."Surat/cetak_std"; ?>" target='_blank' enctype='multipart/form-data'>
                <div class="box-body"> 
                
                <div class="alert alert-info no-margin margin-top-10"> Note! Silahkan pilih anggota Dewan yang akan dicantumkan namanya di dalam Surat Tugas. </div>
                  <input name="kode_jaldis" type="hidden" value="<?= $this->uri->segment(3) ?>">
                  <br>
                  <div style="border: 2px #006400 inset; padding: 10px; text-align: left;">
                           
                                            <div class="form-group form-md-checkboxes">
                                         
                                                <div class="col-md-12">
                                                    <div class="md-checkbox-inline">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="selectall3" onClick="selectAllSTD(this)" class="md-check">
                                                            <label for="selectall3">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Select All </label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                    <div class="form-group form-md-checkboxes">
                     
                        <div class="md-checkbox-inline">
                          <?php
                          $no=1;
                          foreach($detail_jaldis as $content)
                          {
                              foreach ($content as $key => $value ) {
                              $$key=$value;
                          }
                            if($keterangan=='anggota legislatif'){
                              echo '
                            
                                                  <div class="col-md-3">
                                                      <div class="md-checkbox">
                                                          <input type="checkbox" id="'.$id_anggota.'std" name="nama3[]" value="'.$id_anggota.'" class="md-check">
                                                          <label for="'.$id_anggota.'std">
                                                              <span class="inc"></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> '.$nama.' </label>
                                                      </div>
                                                  </div>
                                                     
                                                  
                              ';
                            }
                          }
                          ?>
                        </div>
                                                                 
                    </div>
                  </div> 
                  <input type="hidden" value="1" name="nomor_surat">
                 
                              

                </div>

           
            <br>
            <div class="box-footer">

                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Cetak</button>
                                            <button type="reset" data-dismiss="modal" class="btn default">Batal</button>
                                        </div>
                                        
            </div>

          </form>

        </div>

      </div>

      

    </div>

  </div>

</div>
<div class="modal fade" id="cetak_sts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-full" role="document">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cetak Surat</h4>
      </div>
      <div class="modal-body">      
        <div class="box box-primary">       
          <form class="form-horizontal" method="post" action="<?php echo base_url()."Surat/cetak_sts"; ?>" target='_blank' enctype='multipart/form-data'>
                <div class="box-body"> 
                <div class="alert alert-info no-margin margin-top-10"> Note! Silahkan pilih anggota Sekretariat Dewan yang akan dicantumkan namanya di dalam Surat Tugas. </div>
                  <input name="kode_jaldis" type="hidden" value="<?= $this->uri->segment(3) ?>">
                  <br>
                  <div style="border: 2px #006400 inset; padding: 10px; text-align: left;">            
                                            <div class="form-group form-md-checkboxes">                                         
                                                <div class="col-md-12">
                                                    <div class="md-checkbox-inline">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="selectall4" onClick="selectAllSTS(this)" class="md-check">
                                                            <label for="selectall4">
                                                                <span></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Select All </label>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                    <div class="form-group form-md-checkboxes">
                     
                        <div class="md-checkbox-inline">
                          <?php
                          $no=1;
                          foreach($detail_jaldis as $content)
                          {
                              foreach ($content as $key => $value ) {
                              $$key=$value;
                          }
                            if($keterangan=='bukan anggota legislatif'){
                              echo '
                            
                                                  <div class="col-md-3">
                                                      <div class="md-checkbox">
                                                          <input type="checkbox" id="'.$id_anggota.'sts" name="nama4[]" value="'.$id_anggota.'" class="md-check">
                                                          <label for="'.$id_anggota.'sts">
                                                              <span class="inc"></span>
                                                              <span class="check"></span>
                                                              <span class="box"></span> '.$nama.' </label>
                                                      </div>
                                                  </div>
                                                     
                                                  
                              ';
                            }
                          }
                          ?>
                        </div>
                                                                 
                    </div>
                  </div> 
                  <input type="hidden" value="4" name="nomor_surat">              
                </div>           
            <br>
            <div class="box-footer">

                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Cetak</button>
                                            <button type="reset" data-dismiss="modal" class="btn default">Batal</button>
                                        </div>
                                        
            </div>
          </form>
        </div>
      </div>    
    </div>
  </div>
</div>
      <script>
      $(function () {
        $("#jaldis").DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": false,
          "autoWidth": true
        });
      });
      </script>
      <!-- <?php
      foreach ($datamu as $key => $value) {
        echo $value->kode_transaksi.'<br>';
        echo $value->tgl_mulai.'<br>';
        echo $value->sesi.'<br>';
        for($i=0;$i<count($value->id_jadwal_pengajar);$i++){
          echo $value->id_jadwal_pengajar[$i]."<br>";
        }
      }
      ?> -->