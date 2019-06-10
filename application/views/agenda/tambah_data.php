                    
                    <script src="<?=base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>
                    <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
                
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Tambah Data
                        <small>Agenda</small>
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
                                                <li>Dalam mengisi field, jika Anda akan menggunakan enter (untuk barus bisa dibawahnya) ganti dengan karakter "<b>&lt;br&gt;</b>"</li>
                                                <!-- <li>Ekstensi yang diizinkan adalah pdf, jpg, png, jpeg, dan bmp </li>
                                                <li>Untuk memilih anggota dewan silahkan pilih terdahulu alat kelengkapannya. </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" role="form" action="<?php echo site_url('Agenda/simpan_data'); ?>" method="post" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <!-- <div class="row">
                                                <div class="col-md-2">
                                                <h4>Bukti Surat*</h4>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <span class="btn green btn-file">
                                                            <span class="fileinput-new"> Select file </span>
                                                            <span class="fileinput-exists"> Change </span>
                                                            <input type="file" name="bukti_surat" required accept="application/pdf"> </span>
                                                        <span class="fileinput-filename"> </span> &nbsp;
                                                        <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Tanggal</label>
                                                            <input type="date" name="tanggal" class="form-control" required>
                                                            
                                                            <span class="help-block">Format : tanggal/bulan/tahun</span>
                                                            <i class="fa fa-calendar-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Jam</label>
                                                            <input type="time" name="jam" class="form-control" required>
                                                            
                                                            <span class="help-block">Format : 12 Jam</span>
                                                            <i class="icon-speedometer"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="tempat" class="form-control" maxlength="200" required>
                                                            <label for="form_control_1">Tempat</label>
                                                            <span class="help-block">Berikan keterangan tempat yang jelas.</span>
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
                                                            <input type="text" name="acara" class="form-control" maxlength="300" required>
                                                            <label for="form_control_1">Acara</label>
                                                            <span class="help-block">Deskripsikan secara lengkap dan jelas.</span>
                                                            <i class="icon-note"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div> 
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                          
                                                            <textarea name="materi" class="form-control" maxlength="1000" required></textarea>
                                                            <label for="form_control_1">Materi/ keperluan</label>
                                                            <span class="help-block">Tuliskan materi yg akan disampaikan secara jelas.</span>
                                                            <i class="icon-pencil"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row" >
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <textarea name="peserta" class="form-control" maxlength="1000" required></textarea>
                                                            <label for="form_control_1">Yang diundang</label>
                                                            <span class="help-block">Tuliskan beberapa nama atau instansi yg akan diundang.</span>
                                                            <i class="icon-users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            
                                            
                                            <div id="ak" style="display:none">
                                            </div>
                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="reset" class="btn default">Reset</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>