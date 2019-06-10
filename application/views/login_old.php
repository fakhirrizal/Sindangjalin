<html lang="en"><head>
    <meta charset="utf-8">
    <title>Sindangjalin | Beta Version</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
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
    <link rel="shortcut icon" href="<?=base_url('assets/hai.ico');?>"></head>
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
                        <img class="text-center" src="<?=base_url('assets/sindangjalin_semarang.png');?>" alt="logo" style="width:383px; height:200px">                        
                    </div>
                    <div class="login-form">

                        <h2>Login</h2>
                        
                        <!-- <p style="text-align: justify;">  <b>Sindangjalin</b> is a system solution for schedule management systems. </p> -->
<form action="<?php echo site_url('User/masuk'); ?>" class="login-form" method="post" role="form">                            
                            <?= $this->session->flashdata('error') ?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="email" autocomplete="off" placeholder="Email" name="email" required>
                                </div>
                                <div class="col-xs-12">
                                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="rem-password">
                                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                                            <input type="checkbox" name="remember" value="1"> Remember me
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-7 text-right">
                                    <div class="forgot-password">
                                        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                                    </div>
                                    <button class="btn green" type="submit">Sign In</button>
                                </div>
                            </div>
                          
</form>                        </div>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <!-- END FORGOT PASSWORD FORM -->
                    <div class="forget-form" style="display: none;">
<form action="#" method="post" role="form"><input name="__RequestVerificationToken" type="hidden" value="AK0PLejsNrTAet6rRQoHFPsuCOVKlV2aAksEF9PEz77QP9ydDud4Rh_i9sxPUe3-8BsbiWT8Tia8bZg3rgGrSz0f046jcEHpko1aOPxho_k1"><div class="validation-summary-valid text-danger" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>                            <h2 style="color:dimgrey">Forgot Password ?</h2>
                            <p> Eter your e-mail address below to reset your password. </p>
                            <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" required="">
                            </div>
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                            </div>
</form>                    </div>
                </div>
                

                <div class="login-footer">
                    <div class="row bs-reset">                 
                        <div class="col-xs-5 bs-reset">   </div>                
                        <div class="col-xs-7 bs-reset">
                            <div class="login-copyright text-right">
                                <p>2018 © Sindangjalin - DPRD Kota Semarang</p>
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