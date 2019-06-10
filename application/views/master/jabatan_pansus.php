                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Update Data
                        <small>Jabatan Anggota dalam Pansus</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet red-pink box">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-puzzle"></i>
                                      
                                        <?php
                                        foreach ($data_pansus as $key => $value) {
                                            echo 'PANSUS '.$value->nama_pansus.' ('.count($anggota_pansus).' anggota)';
                                        }
                                        ?>
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="alert alert-info no-margin margin-top-10" style="text-align: justify;"> Wewenang Tugas : <?= $value->perihal; ?> </div>
                                        <div class="alert alert-warning no-margin margin-top-10"> Periode : <?= date('d-m-Y', strtotime($value->awal_periode)).' sampai '.date('d-m-Y', strtotime($value->akhir_periode)); ?> </div>
                                        <div class="col-md-12">                
                                            <form action="<?php echo site_url('Master/update_jabatan'); ?>" method="post">
                                                <table class="table">
                                                    <tbody>
                                                    <?php
                                                    $i = 0;
                                                    foreach ($anggota_pansus as $value) {
                                                    ?>
                                                    
                                                    <tr>
                                                      <td>
                                                        <?= $value->nama; ?>
                                                      </td>
                                                   
                                                    
                                                    <td>
                                                                                        <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <input type="hidden" name="id[]" value="<?= $value->id_ap; ?>">
                                                                                                <input type="text" name="jabatan[]" class="form-control" maxlength="200" required value="<?= $value->jabatan; ?>">
                                                                                                <label for="form_control_1">Jabatan</label>
                                                                                                <!-- <span class="help-block">Karakter yang dibolehkan hanya angka.</span> -->
                                                                                                <i class="icon-badge"></i>
                                                                                            </div>
                                                                                        </div>
                                                    </td> 
                                        
                                                    </tr>   
                                                                                                  
                                                    
                                                    <?php }
                                                    ?>             
                                                    </tbody>
                                                </table>
                                                                                                  <div style="text-align: center;">
                                                                                                          <button type="submit" class="btn green">Update</button>
                                                                                                          <a href="<?php echo base_url()."Master/lihat_pansus"; ?>" class="btn btn-default red" role="button">Kembali</a>
                                                                                                  </div>
                                            </form>     
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>