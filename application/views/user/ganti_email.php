                    <link href="<?=base_url('assets/pages/css/profile.min.css');?>" rel="stylesheet" type="text/css" />
                    <link href="<?=base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css');?>" rel="stylesheet" type="text/css" />
                    <script src="<?=base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>
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
                                            <li>
                                                <a href="<?php echo site_url('User/ganti_sandi'); ?>">
                                                    <i class="icon-lock"></i> Pengaturan Kata Sandi </a>
                                            </li>
                                            <li class="active">
                                                <a href="#">
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
                                                    <span class="caption-subject font-blue-madison bold uppercase">Pengaturan Email</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                   
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Ganti Email</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                   
                                                    <!-- CHANGE EMAIL TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form class="login-form" action="<?php echo site_url('User/ubah_email'); ?>" method="post">
                                                            <div class="form-group">
                                                                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                                                <label class="control-label">Email Sekarang</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-envelope"></i>
                                                                    <input value="<?php echo $value->email; ?>" class="form-control placeholder-no-fix" name="email" readonly/> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Kata Sandi Saat Ini</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-lock"></i>
                                                                    <input class="form-control placeholder-no-fix" type="password" name="pass" placeholder="Password" maxlength="20" /> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                                                <label class="control-label">Email Baru</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-envelope"></i>
                                                                    <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email_new" maxlength="50" /> </div>
                                                            </div>
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn green"> Simpan </button>
                                                                <button type="reset" class="btn default"> Batal </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE EMAIL TAB -->
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
