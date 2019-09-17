                    <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
                
					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Ubah Data
                        <small>Anggota</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('gagal') ?>
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" role="form" action="<?php echo site_url('anggota/update_data'); ?>" method="post" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <?php
                                            foreach ($data_anggota as $key => $value) {
                                                echo '<input type="hidden" name="id" value="'.$value->id.'">';
                                                if($value->keterangan=='anggota legislatif'){
                                            ?>
                                            <input type="hidden" name="status" value="dewan">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="nama" class="form-control" maxlength="50" value="<?= $value->nama; ?>" required>
                                                            <label for="form_control_1">Nama Anggota</label>
                                                            <span class="help-block">Tuliskan nama beserta gelar.</span>
                                                            <i class="icon-users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="no_hp" class="form-control" value="<?= $value->no_hp; ?>" maxlength="12" onkeyup="validAngka(this)" required>
                                                            <label for="form_control_1">Nomor HP</label>
                                                            
                                                            
                                                            <span class="help-block">Karakter hanya angka.</span>
                                                            <i class="icon-call-end"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="email" name="email" class="form-control" value="<?= $value->email; ?>" maxlength="100" required>
                                                            <label for="form_control_1">Email</label>
                                                            <span class="help-block">Masukkan alamat email yang valid.</span>
                                                            <i class="icon-envelope"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <!-- <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="alamat" class="form-control" value="<?= $value->alamat; ?>" maxlength="100" required>
                                                            <label for="form_control_1">Alamat</label>
                                                            <span class="help-block">Tuliskan alamat lengkap.</span>
                                                            <i class="icon-pointer"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br> -->
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" name="fraksi">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($partai as $key => $row) {
                                                                                                    ?>
                                                                                                    <option value="<?= $row->id_partai ?>" <?php if($value->fraksi==$row->id_partai){echo 'selected';}else{echo '';} ?>><?= $row->nm_partai; ?></option>
                                                                                                    
                                                                                                    <?php }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih Fraksi</label>
                                                                                                <span class="help-block">Sesuaikan dengan fraksi anggota sekarang</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <!-- <?php
                                            if (!empty($value->partai)) {
                                            ?>
                                            <div class="row">
                                            <br>
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" name="partai">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($partai as $key => $row) {
                                                                                                    ?>
                                                                                                    <option value="<?= $row->id_partai ?>" <?php if($value->partai==$row->id_partai){echo 'selected';}else{echo '';} ?>><?= $row->nm_partai; ?></option>
                                                                                                    
                                                                                                    <?php }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih Partai</label>
                                                                                                <span class="help-block">Sesuaikan dengan partai asal anggota</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>
                                                </div>
                                            <?php
                                            }
                                            else{
                                                echo '';
                                            }
                                            if (!empty($value->fraksi)) {
                                            ?>
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" name="fraksi">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($partai as $key => $row) {
                                                                                                    ?>
                                                                                                    <option value="<?= $row->id_partai ?>" <?php if($value->fraksi==$row->id_partai){echo 'selected';}else{echo '';} ?>><?= $row->nm_partai; ?></option>
                                                                                                    
                                                                                                    <?php }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih Fraksi</label>
                                                                                                <span class="help-block">Sesuaikan dengan fraksi anggota sekarang</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>
                                                </div>
                                            </div>
                                            <?php
                                            }
                                            else{
                                                echo '';
                                            }
                                            ?> -->
                                            
                                            <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="jabatan" class="form-control" value="<?= $value->jabatan; ?>" maxlength="20" required>
                                                            <label for="form_control_1">Jabatan</label>
                                                            <span class="help-block">Sesuaikan dengan jabatan sekarang.</span>
                                                            <i class="icon-briefcase"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <input type="hidden" name="status" value="setwan">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="nama" class="form-control" maxlength="50" value="<?= $value->nama; ?>" required>
                                                            <label for="form_control_1">Nama Anggota</label>
                                                            <span class="help-block">Tuliskan nama beserta gelar.</span>
                                                            <i class="icon-users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="nip" class="form-control" maxlength="20" value="<?= $value->nip; ?>" onkeyup="validAngka(this)" required>
                                                            <label for="form_control_1">NIP</label>
                                                            <span class="help-block">Nomor Induk Kepegawaian.</span>
                                                            <i class="icon-credit-card"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="jabatan" value="<?= $value->jabatan; ?>" class="form-control" maxlength="300" required>
                                                            <label for="form_control_1">Jabatan</label>
                                                            <span class="help-block">Sesuaikan dengan jabatan sekarang.</span>
                                                            <i class="icon-briefcase"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="golongan" value="<?= $value->golongan; ?>" class="form-control" maxlength="10" required>
                                                            <label for="form_control_1">Golongan</label>
                                                            
                                                            
                                                            <span class="help-block">Masukkan golongan yang sesuai dengan anggota.</span>
                                                            <i class="fa fa-line-chart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="pangkat" value="<?= $value->pangkat; ?>" class="form-control" maxlength="30" required>
                                                            <label for="form_control_1">Pangkat</label>
                                                            
                                                            
                                                            <span class="help-block">Masukkan pangkat yang sesuai dengan anggota.</span>
                                                            <i class="icon-badge"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <?php
                                            }}                                            
                                            ?>                                            
                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Simpan</button>
                                            <button type="reset" class="btn default">Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
<script language='javascript'>

                    function validAngka(a)

                    {

                        if(!/^[0-9]+$/.test(a.value))

                        {

                        a.value = a.value.substring(0,a.value.length-1000);

                        }

                    }

</script>    