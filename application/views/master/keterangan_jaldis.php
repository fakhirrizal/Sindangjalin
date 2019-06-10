                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Form
                        <small>Keterangan</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="portlet blue-hoki box">
                                                            <div class="portlet-title">
                                                                <div class="caption">
                                                                    <i class="icon-user"></i> 
                                                                    <?php
                                                                    foreach ($data_anggota as $key => $value) {
                                                                        echo ' '.$value->nama;
                                                                    }
                                                                    ?>
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="portlet-body">
                                                              <h3>Info Data Perjalanan Dinas</h3>
                                                                <?php
                                                                if(isset($dasar_hukum)){
                                                                    $i = 1;
                                                                    foreach($dasar_hukum as $dh)

                                                                    {
                                                                      if($i==1){
                                                                        echo '
                                                                          <div class="row static-info">
                                                                          <div class="col-md-5 name"> Dasar Hukum </div>
                                                                          <div class="col-md-7 value"> '.$i.'. '.$dh->dasar_hukum.'</div>
                                                                          </div>
                                                                        ';
                                                                      }
                                                                      else{
                                                                      echo '
                                                                      <div class="row static-info">
                                                                          <div class="col-md-5 name"> </div>
                                                                          <div class="col-md-7 value"> '.$i.'. '.$dh->dasar_hukum.'</div>
                                                                      </div>  
                                                                      ';
                                                                      }
                                                                      $i++;
                                                                    }
                                                                  
                                                                  }
                                                                foreach ($data_jaldis as $key => $value) {
                                                                    $tanggal1 = new DateTime($value->start_date);
                                                                    $tanggal2 = new DateTime($value->end_date);
                                                                   
                                                                    $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                                                    
                                                                    echo '
                                                                        <div class="row static-info">
                                                                            <div class="col-md-5 name"> Tempat Tujuan </div>
                                                                            <div class="col-md-7 value"> '.$value->tujuan.' </div>
                                                                        </div>
                                                                        <div class="row static-info">
                                                                            <div class="col-md-5 name"> Transportasi yang digunakan </div>
                                                                            <div class="col-md-7 value"> '.$value->transportasi.' </div>
                                                                        </div>
                                                                        
                                                                        <div class="row static-info">
                                                                            <div class="col-md-5 name"> Materi </div>
                                                                            <div class="col-md-7 value"> '.$value->keperluan.' </div>
                                                                        </div>
                                                                      
                                                                        <div class="row static-info">
                                                                            <div class="col-md-5 name"> Waktu </div>
                                                                            <div class="col-md-7 value"> '.date('d-m-Y', strtotime($value->start_date)).' - '.date('d-m-Y', strtotime($value->end_date)).' ('.$perbedaan.' Hari) </div>
                                                                        </div>
                                                                    ';
                                                                }

                                                                  if(isset($akun)){
                                                                    $i = 1;
                                                                    foreach($akun as $akn)

                                                                    {
                                                                      if($i==1){
                                                                        echo '
                                                                          <div class="row static-info">

                                                                          <div class="col-md-5 name"> Akun </div>

                                                                          <div class="col-md-7 value"> '.$i.'. '.$akn->kr.'</div>
                                                                          </div>
                                                                        ';
                                                                      }
                                                                      else{
                                                                      echo '
                                                                      <div class="row static-info">

                                                                          <div class="col-md-5 name">  </div>

                                                                          <div class="col-md-7 value"> '.$i.'. '.$akn->kr.'</div>
                                                                      </div>  
                                                                      ';
                                                                      }
                                                                      $i++;
                                                                    }
                                                                  
                                                                  }
                    
                                                                ?>
                                                                <hr>
                                                                <span class="help-block">Tuliskan secara lengkap alasan kenapa anggota tidak tidak bisa mengikuti acara pada form dibawah ini!</span>
                                                                <form class="form-horizontal" role="form" action="<?php echo site_url('Master/simpan_keterangan'); ?>" method="post" enctype='multipart/form-data'>       
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                                                    <div class="input-icon">
                                                                                        <input type="hidden" name="kode_jaldis" value="<?= $this->uri->segment(3); ?>" />
                                                                                        <input type="hidden" name="id_anggota" value="<?= $this->uri->segment(4); ?>" />
                                                                                        <textarea name="keperluan" class="form-control" maxlength="30000" required=""></textarea>
                                                                                        <label for="form_control_1">Keterangan</label>
                                                                                        
                                                                                        <i class="icon-pencil"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <br>                                                                        
                                                                        
                                                                    <div class="form-actions noborder">
                                                                        <button type="submit" class="btn blue">Submit</button>
                                                                        <button type="reset" class="btn default">Reset</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>