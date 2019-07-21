<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="keywords" content="Transparansi Publik, Aplikasi Perjalanan Dinas, DPRD Kota Semarang, Sindangjalin">
	<meta content='"Sindangjalin" (Sistem Informasi Persidangan dan Perjalanan Dinas) adalah aplikasi yang dibangun untuk memberikan kemudahan dalam pengelolaan data dan penyajian informasi kegiatan Persidangan dan perjalanan Dinas Dewan Perwakilan Raktyat Daerah Kota Semarang.' name="description" />
	<meta content="DPRD Kota Semarang" name="author" />
	<title>Sindangjalin | DPRD Kota Semarang</title>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
    <link href="https://web.xegel.id/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://web.xegel.id/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="https://web.xegel.id/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://web.xegel.id/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="https://web.xegel.id/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <link href="https://web.xegel.id/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="https://web.xegel.id/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css">
    <link href="https://web.xegel.id/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css">
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="https://web.xegel.id/assets/pages/css/login-5.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="<?=base_url('assets/user.png');?>"></head>
<!-- END HEAD -->

<body class=" login">
    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login-5" style='background-image: url("https://1.bp.blogspot.com/-HNYRCVfAErY/VKcXVwUhJAI/AAAAAAAAB-Q/LJ3IiilkNwk/s1600/Lawang-Sewu.jpg")'>
        <div class="row bs-reset">
            <div class="col-md-7 login-bg bs-reset" style="position: relative; z-index: 0; background: none;">
                
            </div>
            <div class="col-md-5 login-container bs-reset">
                <div class="login-content">       
                    <div class="text-center">
                        <small class="badge badge-primary font-white pull-right">BETA</small>
                        <img class="text-center" src="<?=base_url('assets/sindangjalin_semarang.png');?>" alt="logo" style="width:373px; height:180px">                        
                    </div>
                    <div class="login-form">

                        <h3>Login as Guest</h3>
                        
                        <!-- <p style="text-align: justify;">  <b>Sindangjalin</b> is a system solution for schedule management systems. </p> -->
<form action="<?php echo site_url('login_proses'); ?>" class="login-form" method="post" role="form">                            
                            <?= $this->session->flashdata('gagal') ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Nama Lengkap" name="fullname" required>
                                </div>
                                <div class="col-xs-12">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Alamat" name="address" required>
                                </div>
								<div class="col-xs-12">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Nomor HP" name="phone_number" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-5">
                                   
                                </div>
                                <div class="col-sm-7 text-right">
                                    <button class="btn green" type="submit">Sign In</button>
                                </div>
                            </div>
                          
</form>                        </div>

                </div>
                

                <div class="login-footer">
                    <div class="row bs-reset">                 
                        <div class="col-xs-5 bs-reset">   </div>                
                        <div class="col-xs-7 bs-reset">
                            <div class="login-copyright text-right">
                                <p>2019 © Sindangjalin - DPRD Kota Semarang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGIN -->
    <!-- BEGIN COPYRIGHT
    <div class="logo"><img src="~/assets/pages/media/bg/Sign04.png" alt="logo" class="page-logo" width="400" height="100" /></div>
    END COPYRIGHT -->
    <!--[if lt IE 9]>
    <script src="../assets/global/plugins/respond.min.js"></script>
    <script src="../assets/global/plugins/excanvas.min.js"></script>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="https://web.xegel.id/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="https://web.xegel.id/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://web.xegel.id/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="https://web.xegel.id/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="https://web.xegel.id/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="https://web.xegel.id/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="https://web.xegel.id/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="https://web.xegel.id/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://web.xegel.id/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="https://web.xegel.id/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="https://web.xegel.id/assets/global/plugins/backstretch/jquery.backstretch.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="https://web.xegel.id/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="https://web.xegel.id//assets/pages/scripts/login-5.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <!-- END THEME LAYOUT SCRIPTS -->


</body></html>