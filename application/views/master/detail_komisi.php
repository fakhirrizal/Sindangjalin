                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Detail Data
                        <small>Komisi</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <?= $this->session->flashdata('sukses') ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet red-pink box">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-drawer"></i>
                                      
                                        <?php
                                        foreach ($komisi as $key => $value) {
                                            echo $value->nama_komisi;
                                        }
                                        ?>
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                        
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="alert alert-info no-margin margin-top-10" style="text-align: justify;"> <?php
                                        foreach ($komisi as $key => $value) {
                                            echo 'Keterangan : '.$value->keterangan.'<br>';
                                        }

                                            echo 'Jumlah Anggota : '.count($anggotakomisi).' orang.';
                                        
                                        ?> </div>
                                        <div class="col-md-12">                
                                            <form action="<?php echo site_url('Master/jabatan_komisi'); ?>" method="post">
                                                <table class="table">
                                                    <tbody>
                                                    <?php
                                                    foreach ($komisi as $key => $value) {
                                                        echo '<input type="hidden" name="idkomisi" value="'.$value->id_komisi.'"';
                                                    }
                                                    $i = 0;
                                                    foreach ($anggotakomisi as $value) {
                                                    ?>
                                                    
                                                    <tr>
                                                      <td>
                                                        <?= $value->nama; ?>
                                                      </td>
                                                   
                                                    <input type="hidden" name="id[]" value="<?= $value->id; ?>">
                                                    <td>
                                                                                        <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <input type="text" name="jabatan[]" class="form-control" maxlength="200" required value="<?= $value->jabatan_komisi; ?>">
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
                                                                                                          <a href="<?php echo base_url()."Master/lihat_komisi"; ?>" class="btn btn-default red" role="button">Kembali</a>
                                                                                                  </div>
                                            </form>     
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>