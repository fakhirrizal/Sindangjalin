                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Data
                        <small>Badan</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                    <?php
                    foreach ($detail_badan as $key => $row) {
                        echo '
                            <div class="m-heading-1 border-green m-bordered">
                                                            <h3>'.$row->nama_badan.'</h3>
                                                            <p style="text-align: justify;"> Perihal :<br>'.$row->keterangan.'. </p>
                                                            <p style="text-align: justify;"> Diresmikan pada tanggal : '.date('d-m-Y', strtotime($row->tanggal_buat)).'. </p>
                                                            <p style="text-align: justify;"> Jumlah Anggota : '.count($data_badan).' orang. </p>
                                                            <p style="font-size: 11px">Berikut adalah detail daftar anggota dalam pembentukan Badan ini, untuk <i>update</i> Jabatan silihkan klik tombol dibawah ini.</p>
                                                            <p>
                                                                <a class="btn green" href="#" data-toggle="modal" data-target="#ubah"> <i>Update</i> Jabatan </a>
                                                            </p>
                            </div>
                        ';
                    }
                    ?>
                    
                            <div class="portlet box yellow">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dropbox"></i>Anggota Badan (Jabatan di Badan)</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body" style="">
                                    <div class="panel-group accordion" id="accordion3">
                                        <?php
                                        foreach ($data_badan as $key => $value) {
                                        ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#<?= $value->id_anggota; ?>" aria-expanded="false"> <?= $value->nama.' ('.$value->jabatan_badan.')'; ?> </a>
                                                </h4>
                                            </div>
                                            <div id="<?= $value->id_anggota; ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">
                                                    <table class="table">

                                                      <tbody>

                                                      <tr>

                                                      <td> Nama Anggota </td>

                                                      <td> : </td>

                                                      <td><?php echo $value->nama; ?></td> 

                                                      </tr>  

                                                     
                                                      
                                                      <?php
                                                      
                                                        echo '
                                                         
                                                          <tr>
                                                          <td> Fraksi </td>
                                                          <td> : </td>
                                                          <td>'.$value->asalfraksi.'</td> 
                                                          </tr> 
                                                        ';
                                                     
                                                      ?>
                                                      <tr>

                                                      <td> Jabatan </td>

                                                      <td> : </td>

                                                      <td><?php echo $value->jabatan; ?></td> 

                                                      </tr>  
                                                      <tr>

                                                      <td> Email </td>

                                                      <td> : </td>

                                                      <td><?php echo $value->email; ?></td> 

                                                      </tr>  

                                                      <tr>

                                                      <td> Nomor HP </td>

                                                      <td> : </td>

                                                      <td><?php echo $value->no_hp; ?></td> 

                                                      </tr> 
                                                      </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

<div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="text-align: center;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ubah Jabatan Anggota</h4>
      </div>
      <div class="modal-body">      
        <div class="box box-primary">       
          <form class="form-horizontal" method="post" action="<?php echo base_url()."Master/jabatan_badan"; ?>">
                <div class="box-body">
                                                <table class="table">
                                                    <tbody>
                                                    <?php
                                                    $i = 0;
                                                    foreach ($data_badan as $value) {
                                                    ?>
                                                    
                                                    <tr>
                                                      <td>
                                                        <?= $value->nama; ?>
                                                      </td>
                                                   
                                                    <input type="hidden" name="id[]" value="<?= $value->idab; ?>">
                                                    <input type="hidden" name="idbadan" value="<?= $this->uri->segment(3); ?>">
                                                    <td>
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <input type="text" name="jabatan[]" class="form-control" maxlength="200" required value="<?= $value->jabatan_badan; ?>">
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
                                                                                                          <button type="submit" class="btn green">Perbarui</button>
                                                                                                          <button type="button" class="btn red" data-dismiss="modal">Batal</button>
                                                                                                  </div>
                </div>                                            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>