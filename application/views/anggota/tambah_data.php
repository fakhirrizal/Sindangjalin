                    <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
       
         
                    <script type="text/javascript">
                                     $(document).ready(function () {
                                        $('#ya').click(function () {
                                           $('#partai').show('fast');
                                    });
                                    $('#tidak').click(function () {
                                          $('#partai').hide('fast');
                                     });
                                   });
                    </script>
                
					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Tambah Data
                        <small>Anggota Dewan</small>
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
                                                <!-- <li> Jika data yang akan Anda masukkan adalah data anggota legislatif, maka silahkan centang checkbox yang ada di bagian bawah dari form berikut. </li> -->
                                                <!-- <li> Only image files (
                                                    <strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction). </li>
                                                <li> Uploaded files will be deleted automatically after
                                                    <strong>5 minutes</strong> (demo setting). </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" role="form" action="<?php echo site_url('anggota/simpan_data'); ?>" method="post" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="nama" class="form-control" maxlength="50" required>
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
                                                            <input type="text" name="no_hp" class="form-control" maxlength="12" onkeyup="validAngka(this)" required>
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
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="email" name="email" class="form-control" maxlength="100" required>
                                                            <label for="form_control_1">Email</label>
                                                            
                                                            
                                                            <span class="help-block">Masukkan alamat email yang valid.</span>
                                                            <i class="icon-envelope"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <!-- <div class="form-group form-md-radios">
                                                <label class="col-md-2 control-label" for="form_control_1">Anggota Legislatif</label>
                                                <div class="col-md-9">
                                                    <div class="md-radio-inline">
                                                        <div class="md-radio">
                                                            <input type="radio" id="ya" name="radio2" value="1" class="md-radiobtn">
                                                            <label for="ya">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Ya </label>
                                                        </div>
                                                        <div class="md-radio">
                                                            <input type="radio" id="tidak" name="radio2" value="2" checked class="md-radiobtn">
                                                            <label for="tidak">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> Tidak </label>
                                                        </div>
                                                  
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="row" id="partai">
                                            <br>
                                                <!-- <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" name="partai">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($partai as $key => $value) {
                                                                                                        echo '<option value="'.$value->id_partai.'">'.$value->nm_partai.'</option>';
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih Partai</label>
                                                                                                <span class="help-block">Sesuaikan dengan partai asal anggota</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>
                                                </div> -->
                                           
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" name="fraksi">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($partai as $key => $value) {
                                                                                                        echo '<option value="'.$value->id_partai.'">'.$value->nm_partai.'</option>';
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih Fraksi</label>
                                                                                                <span class="help-block">Sesuaikan dengan fraksi anggota sekarang</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>
                                                </div>
                                            </div>
                                            <br>
                                        
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="jabatan" class="form-control" maxlength="100" required>
                                                            <label for="form_control_1">Jabatan</label>
                                                            <span class="help-block">Sesuaikan dengan jabatan sekarang.</span>
                                                            <i class="icon-briefcase"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                          
                                            
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