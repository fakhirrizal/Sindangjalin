					<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
     
          <script language="JavaScript">
            function selectAll(source) {
              checkboxes = document.getElementsByName('nama[]');
              for(var i in checkboxes)
                checkboxes[i].checked = source.checked;
            }
          </script>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"><i>Update</i> Data
                        <small>Waktu Perjalanan</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
        <?php

                if(isset($data_jaldis)){

                    foreach($data_jaldis as $row)

                    {
                                      $tanggal1 = new DateTime($row->start_date);
                                      $tanggal2 = new DateTime($row->end_date);
                                       
                                      $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
        ?>
<div class="row">
        <div class="col-md-12">                
            <div class="m-heading-1 border-green m-bordered">
                <table class="table">

                  <tbody>

                  <tr>
                  <td> Tujuan </td>
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

                  <td> Keperluan </td>

                  <td> : </td>
                  
                  <td><?php echo $row->keperluan; ?></td> 

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
                  if($perbedaan=='1'){
                    echo date('d-m-Y', strtotime($row->start_date));
                  }
                  else{
                  echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)';
                  }?></td> 

                  </tr> 
                  </tbody>

                </table>
                <p> Untuk cetak surat silahkan klik tombol berikut
                    <a class="btn green" href="<?php echo site_url('Master/detail_jaldis/'.$kode_jaldis)?>" target="_blank"> klik disini </a>
                </p>
            </div>
        </div>
</div>
        <?php } } ?>
                  <div class="row">
                          
                                <div class="portlet-title">
                                    <div class="alert alert-info no-margin margin-top-10"> Note! Silahkan ubah tanggal perjalanan masing-masing anggota guna mencetak Surat Perjalanan Dinas. </div>
                                    <br>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="tabbable-custom nav-justified">
                                        <ul class="nav nav-tabs nav-justified">
                                            <li class="active">
                                                <a href="#tab_1_1_1" data-toggle="tab" aria-expanded="true"> Anggota Dewan </a>
                                            </li>
                                            <li class="">
                                                <a href="#tab_1_1_2" data-toggle="tab" aria-expanded="false"> Sekretariat Dewan </a>
                                            </li>
                                           
                                        </ul>
                                        <div class="tab-content">
                                          
                                            <div class="tab-pane active" id="tab_1_1_1">
                                              <form class="form-horizontal" role="form" action="<?php echo site_url('Master/update_waktu'); ?>" method="post">
                                              <input type="hidden" name="idj" value="<?= $kode_jaldis; ?>">

                                                <table class="table table-bordered table-striped">
                                                  <thead>
                                                    <tr>
                                                      <th style="text-align: center" >#</th>
                                                      <th style="text-align: center" >Nama Anggota</th>
                                                      <th style="text-align: center" >Tanggal Berangkat</th>
                                                      <th style="text-align: center" >Tanggal Kembali</th>
                                                    
                                                     
                                                    </tr>
                                                  </thead>
                                                  
                                                  <tbody>
                                                                
                                                    <?php
                                                    $no=1;
                                                    foreach($jaldis_dewan as $content)
                                                    {
                                                        foreach ($content as $key => $value ) {
                                                        $$key=$value;
                                                    }
                                                   
                                                    ?>
                                                    <input type="hidden" name="id[]" value="<?= $iddj; ?>">
                                                    <tr class="gradeX">
                                                      <td style="text-align: center"><?= $no++."."; ?></td>
                                                      <td><?php echo $nama; ?></td>
                                                      
                                                      <td>
                                                                              <div class="col-md-12">

                                                                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                                      <div class="input-icon">
                                                                                          <input type="date" name="start_date[]" class="form-control" value="<?= $start_date ?>" required>
                                                                                          <label for="form_control_1">Tanggal Berangkat</label>
                                                                                          <!-- <span class="help-block">Tuliskan kode Rekening yang valid.</span> -->
                                                                                          <i class="icon-calendar"></i>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>                                        
                                                                             
                                                      </td>
                                                      <td>
                                                                              <div class="col-md-12">

                                                                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                                      <div class="input-icon">
                                                                                          <input type="date" name="end_date[]" class="form-control" value="<?= $end_date; ?>" required>
                                                                                          <label for="form_control_1">Tanggal Kembali</label>
                                                                                          <!-- <span class="help-block">Tuliskan kode Rekening yang valid.</span> -->
                                                                                          <i class="icon-calendar"></i>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>                                        
                                                                         
                                                      </td>
                                                      
                                                    </tr>

                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                  </tbody>
                                                </table>
                                                <div class="form-actions noborder" style="text-align: center;">
                                                          <button type="submit" class="btn blue">Simpan</button>
                                                          <button type="reset" class="btn default">Batal</button>
                                                </div>
                                              </form>
                                            </div>
                                         
                                            <div class="tab-pane" id="tab_1_1_2">
                                              <form class="form-horizontal" role="form" action="<?php echo site_url('Master/update_waktu'); ?>" method="post">
                                              <input type="hidden" name="idj" value="<?= $kode_jaldis; ?>">

                                                <table class="table table-bordered table-striped">
                                                  <thead>
                                                    <tr>
                                                      <th style="text-align: center" >#</th>
                                                      <th style="text-align: center" >Nama Anggota</th>
                                                      <th style="text-align: center" >Tanggal Berangkat</th>
                                                      <th style="text-align: center" >Tanggal Kembali</th>
                                                    
                                                     
                                                    </tr>
                                                  </thead>
                                                  
                                                  <tbody>
                                                                
                                                    <?php
                                                    $no=1;
                                                    foreach($jaldis_setwan as $content)
                                                    {
                                                        foreach ($content as $key => $value ) {
                                                        $$key=$value;
                                                    }
                                                   
                                                    ?>
                                                    <input type="hidden" name="id[]" value="<?= $iddj; ?>">
                                                    <tr class="gradeX">
                                                      <td style="text-align: center"><?= $no++."."; ?></td>
                                                      <td><?php echo $nama.' ('.$jabatan.')'; ?></td>
                                                      
                                                      <td>
                                                                              <div class="col-md-12">

                                                                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                                      <div class="input-icon">
                                                                                          <input type="date" name="start_date[]" class="form-control" value="<?= $start_date ?>" required>
                                                                                          <label for="form_control_1">Tanggal Berangkat</label>
                                                                                          <!-- <span class="help-block">Tuliskan kode Rekening yang valid.</span> -->
                                                                                          <i class="icon-calendar"></i>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>                                        
                                                                             
                                                      </td>
                                                      <td>
                                                                              <div class="col-md-12">

                                                                                  <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                                      <div class="input-icon">
                                                                                          <input type="date" name="end_date[]" class="form-control" value="<?= $end_date; ?>" required>
                                                                                          <label for="form_control_1">Tanggal Kembali</label>
                                                                                          <!-- <span class="help-block">Tuliskan kode Rekening yang valid.</span> -->
                                                                                          <i class="icon-calendar"></i>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>                                        
                                                                         
                                                      </td>
                                                      
                                                    </tr>

                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                  </tbody>
                                                </table>
                                                <div class="form-actions noborder" style="text-align: center;">
                                                          <button type="submit" class="btn blue">Simpan</button>
                                                          <button type="reset" class="btn default">Batal</button>
                                                </div>
                                              </form>                                          
                                            </div>
                                         
                                        </div>
                                    </div>
                                    
                                </div>
                           
                  </div>                                                
                  
                  