
        <script language="JavaScript">
            function selectAll(source) {
              checkboxes = document.getElementsByName('nama[]');
              for(var i in checkboxes)
                checkboxes[i].checked = source.checked;
            }
        </script>
					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Ubah Data
                        <small>Badan</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('gagal') ?>
              					 <div class="portlet-title">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Catatan</h3>
                                        </div>
                                        <div class="panel-body">
                                            <ul>
                                                <li>Untuk jabatan/ posisi masing-masing anggota dalam sebuah Badan bisa diubah pada menu detail badan. </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" role="form" action="<?php echo site_url('Master/update_badan'); ?>" method="post" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <?php
                                            foreach ($detail_badan as $key => $value) {
                                            ?>
                                            <input type="hidden" name="id" value="<?= $value->id_badan; ?>">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="badan" class="form-control" maxlength="200" value="<?= $value->nama_badan; ?>" required>
                                                            <label for="form_control_1">Nama Badan</label>
                                                            <!-- <span class="help-block">Harap sertakan kata "Komisi" sebelum nama komisi terkait.</span> -->
                                                            <i class="icon-pin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="keterangan" class="form-control" maxlength="1000" value="<?= $value->keterangan; ?>" required> 
                                                            <label for="form_control_1">Keterangan</label>
                                                            <span class="help-block">Paparkan keterangan komisi terkait.</span>
                                                            <i class="icon-directions"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Tanggal Dibentuk</label>
                                                            <input type="date" name="tanggal_buat" class="form-control" value="<?= $value->tanggal_buat; ?>" required>
                                                            
                                                            <span class="help-block">Format : tanggal/bulan/tahun.</span>
                                                            <i class="icon-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <?php } ?>
                                            <div class="form-group form-md-checkboxes">
                                            
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;List Anggota</label>
                                                <div class="form-group form-md-checkboxes">
                                         
                                                    <div class="col-md-12">
                                                        <div class="md-checkbox-inline">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="md-checkbox">
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
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($data_badan as $key => $value) {
                                                   
                                                    ?>
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="<?= $value->id; ?>" name="nama[]" value="<?= $value->id.'_'.$value->status_badan.'_'.$value->jabatan_badan; ?>" <?php if(!empty($value->status_badan)){echo 'checked';}else{echo '';} ?> class="md-check">
                                                            <label for="<?= $value->id; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                           
                                                                                                                                    
                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Simpan</button>
                                            <button type="reset" class="btn default">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div> 