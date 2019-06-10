
					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Ubah Data
                        <small>Partai Politik</small>
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
                                                <li> The maximum file size for uploads in this demo is
                                                    <strong>5 MB</strong> (default file size is unlimited). </li>
                                                <li> Only image files (
                                                    <strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction). </li>
                                                <li> Uploaded files will be deleted automatically after
                                                    <strong>5 minutes</strong> (demo setting). </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="portlet light bordered">
                                <?php
                                foreach ($partai as $key => $value) {
                                ?>
                                <div class="portlet-body form">
                                    <form class="form-horizontal" role="form" action="<?php echo site_url('Master/simpan_perubahan'); ?>" method="post" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <input type="hidden" name="id" class="form-control" value="<?= $value->id_partai; ?>">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="nama_partai" class="form-control" maxlength="250" value="<?= $value->nm_partai; ?>" required>
                                                            <label for="form_control_1">Nama Partai</label>
                                                           
                                                            <i class="icon-shield"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="singkatan" class="form-control" maxlength="25" value="<?= $value->singkatan; ?>" required>
                                                            <label for="form_control_1">Singkatan</label>
                                                            
                                                            <i class="icon-pin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Tanggal Berdiri</label>
                                                            <input type="date" name="tanggal" class="form-control" value="<?= $value->tanggal_berdiri; ?>" required>
                                                            
                                                            <span class="help-block">Format : tanggal/bulan/tahun.</span>
                                                            <i class="icon-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="anggota" class="form-control" onkeyup="validAngka(this)" maxlength="9" value="<?= $value->jumlah_anggota; ?>" required>
                                                            <label for="form_control_1">Jumlah Anggota</label>
                                                            
                                                            <i class="icon-users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="kantor_pusat" class="form-control" value="<?= $value->kantor_pusat; ?>" maxlength="100" required>
                                                            <label for="form_control_1">Alamat Kantor Pusat</label>
                                                            <span class="help-block">Tuliskan alamat lengkap.</span>
                                                            <i class="icon-pointer"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="ketua_umum" class="form-control" maxlength="50" value="<?= $value->ketua_umum; ?>" required>
                                                            <label for="form_control_1">Ketua Umum</label>
                                                            <span class="help-block">Tuliskan nama lengkap beserta gelar.</span>
                                                            <i class="icon-user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                                <?php } ?>
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