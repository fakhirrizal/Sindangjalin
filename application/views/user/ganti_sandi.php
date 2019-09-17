                    <link href="<?=base_url('assets/pages/css/profile.min.css');?>" rel="stylesheet" type="text/css" />
                    <link href="<?=base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css');?>" rel="stylesheet" type="text/css" />
                    <script src="<?=base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>
                    <script type="text/javascript">
                     window.onload = function () {
                      document.getElementById("p1").onchange = validate;
                      document.getElementById("p2").onchange = validate;
                     }
                     function validate(){
                      var password2=document.getElementById("p2").value;
                      var password1=document.getElementById("p1").value;
                      if(password1!=password2)
                       document.getElementById("p2").setCustomValidity("Passwords Tidak Sama, Harap Ulangi Lagi");
                      else
                       document.getElementById("p2").setCustomValidity('');
                     }
                    </script>
                    <?php foreach ($data_profil as $key => $value) {?>
                   
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Pengguna
                        <small>profil pengguna</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet ">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                    <?php
                                        if(empty($value->foto)){
                                            echo '<img src="'.base_url('assets/pages/img/avatars/kosong.jpeg').'" class="img-responsive" alt="">';
                                        }
                                        else{
                                            echo '<img src="'.base_url('assets/uploads/foto/').$value->foto.'" class="img-responsive" alt="">';
                                        }
                                    ?>
                                        
                                    </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> <?php echo $value->nama_lengkap; ?> </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li >
                                                <a href="<?php echo site_url('User/profil'); ?>">
                                                    <i class="icon-user"></i> Pengaturan Profil </a>
                                            </li>
                                            <li class="active">
                                                <a href="#">
                                                    <i class="icon-lock"></i> Pengaturan Kata Sandi </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('User/ganti_email'); ?>">
                                                    <i class="icon-envelope"></i> Pengaturan Email </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <h4><?= $this->session->flashdata('sukses') ?></h4>
                                                <h4><?= $this->session->flashdata('gagal') ?></h4>
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Pengaturan Kata Sandi</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Ganti Kata Sandi</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                   
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form action="<?php echo site_url('User/ubah_sandi'); ?>" method="post"">
                                                            <div class="form-group">
                                                                <label class="control-label">Kata Sandi Sekarang</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-lock"></i>
                                                                    <input type="password" class="form-control" maxlength="20" name="password" placeholder="Current Password"/> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Kata Sandi Baru</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-lock"></i>
                                                                    <input class="form-control placeholder-no-fix" type="password" id="p1" autocomplete="off" id="register_password" placeholder="New Password" name="password_new" maxlength="20" /> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Kata Sandi Baru</label>
                                                                <div class="controls">
                                                                    <div class="input-icon">
                                                                        <i class="fa fa-check"></i>
                                                                        <input class="form-control placeholder-no-fix" type="password" id="p2" autocomplete="off" placeholder="Re-type Your New Password" maxlength="20" /> </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn green"> Simpan </button>
                                                                <button type="reset" class="btn default"> Batal </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                    <?php } ?>
