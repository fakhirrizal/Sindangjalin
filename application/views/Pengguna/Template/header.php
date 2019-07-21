<?php
if(($this->session->userdata('id'))==NULL AND $this->session->userdata('level')=='user'){
            echo "<script>alert('Harap login terlebih dahulu')</script>";
            echo "<script>window.location='".base_url()."'</script>";
        }
else{
?>
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url('assets/global/plugins/datatables/datatables.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/select2/css/select2.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/select2/css/select2-bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/cubeportfolio/css/cubeportfolio.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/ladda/ladda-themeless.min.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?=base_url('assets/global/plugins/fullcalendar/fullcalendar.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/css/components-md.min.css');?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url('assets/global/css/plugins-md.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/pages/css/blog.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?=base_url('assets/layouts/layout/css/layout.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/layouts/layout/css/themes/default.min.css');?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?=base_url('assets/layouts/layout/css/custom.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?=base_url('assets/hai.ico');?>" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white" onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo" style="text-align: center;">
                    <a href="#">
                        <!-- <img src="<?=base_url()?>assets/sindangjalin.png" width='150' height="50" alt="logo" class="logo-default" /> --> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <?php
                                echo '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/1024px-Circle-icons-profile.svg.png" class="img-circle" alt="">';
                                ?>
                                <span class="username username-hide-on-mobile"> <?= $this->session->userdata('username') ?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="#">
                                        <i class="icon-rocket"></i> Bantuan
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="<?php echo site_url('logout'); ?>">
                                        <i class="icon-key"></i> Keluar </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="sidebar-search-wrapper">
                            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                            <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari....">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
						</li>
						<li class="heading">
                            <h3 class="uppercase">Menu</h3>
                        </li>
                        <li class="nav-item <?php if($active=='beranda'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="<?php echo site_url('beranda'); ?>" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Beranda</span>
                                <?php if($active=='beranda'){echo '<span class="selected"></span>';}else{echo '';} ?>
                            </a>
						</li>
						<li class="nav-item <?php if($active=='jaldis'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="<?php echo site_url('jaldis'); ?>" class="nav-link nav-toggle">
                                <i class="icon-paper-plane"></i>
                                <span class="title">Perjalanan Dinas</span>
                                <?php if($active=='jaldis'){echo '<span class="selected"></span>';}else{echo '';} ?>
                            </a>
						</li>
						<li class="nav-item <?php if($active=='agenda'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="<?php echo site_url('agenda'); ?>" class="nav-link nav-toggle">
                                <i class="icon-notebook"></i>
                                <span class="title">Agenda</span>
                                <?php if($active=='agenda'){echo '<span class="selected"></span>';}else{echo '';} ?>
                            </a>
						</li>
						<li class="nav-item <?php if($active=='rapat'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="<?php echo site_url('rapat'); ?>" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">Rapat</span>
                                <?php if($active=='rapat'){echo '<span class="selected"></span>';}else{echo '';} ?>
                            </a>
						</li>
						<li class="nav-item <?php if($active=='laporan'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="fa fa-file-zip-o"></i>
                                <span class="title">Laporan</span>
                                <?php if($active=='laporan'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                <span class="arrow <?php if($active=='laporan'){echo 'open';}else{echo '';} ?>"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if($sub=='jaldis'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('laporan/jaldis'); ?>" class="nav-link ">
                                        <span class="title">Perjalanan Dinas</span>
                                        <?php if($sub=='jaldis'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                                <li class="nav-item <?php if($sub=='rapat'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('laporan/rapat'); ?>" class="nav-link ">
                                        <span class="title">Rapat</span>
                                        <?php if($sub=='rapat'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if($active=='tentang'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="<?php echo site_url('tentang_aplikasi'); ?>" class="nav-link nav-toggle">
                                <i class="icon-bulb"></i>
                                <span class="title">Tentang Aplikasi</span>
                                <?php if($active=='tentang'){echo '<span class="selected"></span>';}else{echo '';} ?>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel hidden-xs hidden-sm">
                        <div class="toggler"> </div>
                        <div class="toggler-close"> </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="#">Dashboard Sistem Informasi</a>
                            </li>
                            <li>
                                <span>Sindangjalin (Persidangan dan Perjalanan Dinas)</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="pull-right tooltips btn btn-sm"  data-container="body" data-placement="bottom">
                                <i class="icon-calendar"></i>&nbsp;
                                <span id="clock"></span>
                                    <?php
                                    $hari = date('l');
                                    /*$new = date('l, F d, Y', strtotime($Today));*/
										if ($hari=="Sunday") {
										echo "Minggu";
										}elseif ($hari=="Monday") {
										echo "Senin";
										}elseif ($hari=="Tuesday") {
										echo "Selasa";
										}elseif ($hari=="Wednesday") {
										echo "Rabu";
										}elseif ($hari=="Thursday") {
										echo("Kamis");
										}elseif ($hari=="Friday") {
										echo "Jum'at";
										}elseif ($hari=="Saturday") {
										echo "Sabtu";
										}
                                    ?>,
                                    <?php
                                    $tgl =date('d');
                                    echo $tgl;
                                    $bulan =date('F');
										if ($bulan=="January") {
										echo " Januari ";
										}elseif ($bulan=="February") {
										echo " Februari ";
										}elseif ($bulan=="March") {
										echo " Maret ";
										}elseif ($bulan=="April") {
										echo " April ";
										}elseif ($bulan=="May") {
										echo " Mei ";
										}elseif ($bulan=="June") {
										echo " Juni ";
										}elseif ($bulan=="July") {
										echo " Juli ";
										}elseif ($bulan=="August") {
										echo " Agustus ";
										}elseif ($bulan=="September") {
										echo " September ";
										}elseif ($bulan=="October") {
										echo " Oktober ";
										}elseif ($bulan=="November") {
										echo " November ";
										}elseif ($bulan=="December") {
										echo " Desember ";
										}
                                    $tahun=date('Y');
                                    echo $tahun;
                                    ?>
                            </div>
                        </div>
                    </div>
<?php } ?>
<script type="text/javascript">
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    var waktu = new Date();            //membuat object date berdasarkan waktu saat
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>