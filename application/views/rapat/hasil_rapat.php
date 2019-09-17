<?php
if(($this->session->userdata('id'))==NULL){
	echo "<script>alert('Harap login terlebih dahulu')</script>";
	echo "<script>window.location='".base_url()."admin/'</script>";
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
        <meta content='"Sindangjalin" (Sistem Informasi Persidangan dan Perjalanan Dinas) adalah aplikasi yang dibangun untuk memberikan kemudahan dalam pengelolaan data dan penyajian informasi kegiatan Persidangan dan perjalanan Dinas Dewan Perwakilan Raktyat Daerah Kota Semarang.' name="description" />
        <meta content="DPRD Kota Semarang" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/simple-line-icons/simple-line-icons.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?=base_url('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/plugins/bootstrap-summernote/summernote.css');?>" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?=base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/global/css/components.min.css');?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url('assets/global/css/plugins.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?=base_url('assets/layouts/layout/css/layout.min.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?=base_url('assets/layouts/layout/css/themes/darkblue.min.css');?>" rel="stylesheet" type="text/css" id="style_color" />
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
                <div class="page-logo">
                    <a href="index.html">
                        <img src="<?=base_url()?>assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
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
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <?php
                            $notif = $this->Master_model->notif_jaldis();
                            ?>
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge badge-default"> <?= count($notif); ?> </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3>
                                        <span class="bold"><?= count($notif); ?> hasil JalDis</span> belum ditambahkan</h3>
                                    <!-- <a href="#">view all</a> -->
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                        <?php
                                        foreach ($notif as $key => $value) {
                                        echo '
                                        <li>
                                            <a href="'.base_url().'Laporan/notulen/'.$value->kode_jaldis.'">
                                                <span class="time">'.date('d-m-Y', strtotime($value->end_date)).'</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-success">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> '.$value->tujuan.' </span>
                                            </a>
                                        </li>';
                                        }
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <?php
                            $notif = $this->Rapat_model->notif_rapat();
                            ?>
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-calendar"></i>
                                <span class="badge badge-default"> <?= count($notif); ?> </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3>
                                        <span class="bold"><?= count($notif); ?> kesimpulan Rapat</span> belum ditambahkan</h3>
                                    <!-- <a href="#">view all</a> -->
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                        <?php
                                        foreach ($notif as $key => $value) {
                                        echo '
                                        <li>
                                            <a href="'.base_url().'Rapat/hasil_rapat/'.$value->id.'">
                                                <span class="time">'.date('d-m-Y', strtotime($value->tanggal_selesai)).'</span>
                                                <span class="details">
                                                    <span class="label label-sm label-icon label-success">
                                                        <i class="fa fa-bell-o"></i>
                                                    </span> '.$value->acara.' </span>
                                            </a>
                                        </li>';
                                        }
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                
                                <?php
                                $q = "SELECT * from user where id='".$this->session->userdata('id')."'";
                                $data = $this->User_model->manualQuery($q)->result();
                                    foreach ($data as $key => $value) {
                                        if(!empty($value->foto)){
                                            echo '<img src="'.base_url('assets/global/img/profile/').$value->foto.'" class="img-circle" alt="">';
                                        }
                                        else{
                                            echo '<img src="'.base_url('assets/global/img/file_1509643007.png').'" class="img-circle" alt="">';
                                        }
                                    }
                                ?>
                                <span class="username username-hide-on-mobile"> <?= $this->session->userdata('username') ?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo site_url('User/profil'); ?>">
                                        <i class="icon-user"></i> Pengaturan Akun </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('Master/bantuan'); ?>">
                                        <i class="icon-rocket"></i> Bantuan
                                        
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                
                                <li>
                                    <a href="<?php echo site_url('User/keluar'); ?>">
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
                                    <input type="text" class="form-control" placeholder="Cari...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                            <!-- END RESPONSIVE QUICK SEARCH FORM -->
                        </li>
                        <li class="nav-item <?php if($active=='beranda'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="<?php echo site_url('User/beranda'); ?>" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Beranda</span>
                                <?php if($active=='beranda'){echo '<span class="selected"></span>';}else{echo '';} ?>
                            </a>
                        </li>
                       
                        <li class="heading">
                            <h3 class="uppercase">Menu</h3>
                        </li>
                        <li class="nav-item <?php if($active=='master'){echo 'active open';}else{echo '';} ?> ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">Master</span>
                                <?php if($active=='master'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                <span class="arrow <?php if($active=='master'){echo 'open';}else{echo '';} ?>"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if($sub=='anggota'){echo 'active open';}else{echo '';} ?> ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">Anggota</span>
                                        <?php if($sub=='anggota'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                        <span class="arrow <?php if($sub=='anggota'){echo 'open';}else{echo '';} ?>"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item <?php if($sub2=='tambah_data'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Anggota/tambah_data'); ?>" class="nav-link">Tambah Data Dewan</a>
                                        </li>
                                        <li class="nav-item <?php if($sub2=='tambah_setwan'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Anggota/tambah_setwan'); ?>" class="nav-link">Tambah Data Setwan</a>
                                        </li>
                                        <li class="nav-item <?php if($sub2=='lihat_data'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Anggota/lihat_data'); ?>" class="nav-link">Lihat Data</a>
                                        </li>
                                    </ul>
                                </li> 
                                <li class="nav-item <?php if($sub=='skpd'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Master/skpd'); ?>" class="nav-link ">
                                        <span class="title">SKPD</span>
                                        <?php if($sub=='skpd'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>  
                                <li class="nav-item <?php if($sub=='alat_kelengkapan'){echo 'active open';}else{echo '';} ?> ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">Alat Kelengkapan</span>
                                        <?php if($sub=='alat_kelengkapan'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                        <span class="arrow <?php if($sub=='alat_kelengkapan'){echo 'open';}else{echo '';} ?>"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item <?php if($sub2=='pimpinan'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Master/pimpinan'); ?>" class="nav-link">Pimpinan</a>
                                        </li>
                                        <li class="nav-item <?php if($sub2=='komisi'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Master/lihat_komisi'); ?>" class="nav-link">Komisi</a>
                                        </li>
                                        <li class="nav-item <?php if($sub2=='pansus'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Master/lihat_pansus'); ?>" class="nav-link">PANSUS</a>
                                        </li>
                                        <li class="nav-item <?php if($sub2=='badan'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Master/lihat_badan'); ?>" class="nav-link">Badan</a>
                                        </li>
                                    </ul>
                                </li> 
                                <li class="nav-item <?php if($sub=='partai'){echo 'active open';}else{echo '';} ?> ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">Partai</span>
                                        <?php if($sub=='partai'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                        <span class="arrow <?php if($sub=='partai'){echo 'open';}else{echo '';} ?>"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item <?php if($sub2=='tambah_data'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Master/tambah_partai'); ?>" class="nav-link">Tambah Data</a>
                                        </li>
                                        <li class="nav-item <?php if($sub2=='lihat_data'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Master/lihat_partai'); ?>" class="nav-link">Lihat Data</a>
                                        </li>
                                    </ul>
                                </li>      
                                <li class="nav-item <?php if($sub=='nomor_surat'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Master/nomor_surat'); ?>" class="nav-link ">
                                        <span class="title">Nomor Surat</span>
                                        <?php if($sub=='nomor_surat'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                                <li class="nav-item <?php if($sub=='kode_rekening'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Master/kode_rekening'); ?>" class="nav-link ">
                                        <span class="title">Kode Rekening</span>
                                        <?php if($sub=='kode_rekening'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>  
                                <li class="nav-item <?php if($sub=='kategori_keperluan'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Master/kategori_keperluan'); ?>" class="nav-link ">
                                        <span class="title">Kategori Keperluan</span>
                                        <?php if($sub=='kategori_keperluan'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>                                              
                            </ul>
                        </li>
                        <li class="nav-item <?php if($active=='rapat'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">Rapat</span>
                                <?php if($active=='rapat'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                <span class="arrow <?php if($active=='rapat'){echo 'open';}else{echo '';} ?>"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if($sub=='tambah_data'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Rapat/tambah_data'); ?>" class="nav-link ">
                                        <span class="title">Tambah Data</span>
                                        <?php if($sub=='tambah_data'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                                <li class="nav-item <?php if($sub=='lihat_data'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Rapat/lihat_data'); ?>" class="nav-link ">
                                        <span class="title">Lihat Data</span>
                                        <?php if($sub=='lihat_data'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                                <li class="nav-item <?php if($sub=='timeline'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Rapat/timeline_calendar'); ?>" class="nav-link ">
                                        <span class="title">Timeline</span>
                                        <?php if($sub=='timeline'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if($active=='agenda'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="icon-notebook"></i>
                                <span class="title">Agenda</span>
                                <?php if($active=='rapat'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                <span class="arrow <?php if($active=='agenda'){echo 'open';}else{echo '';} ?>"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if($sub=='tambah_data'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Agenda/tambah_data'); ?>" class="nav-link ">
                                        <span class="title">Tambah Data</span>
                                        <?php if($sub=='tambah_data'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                                <li class="nav-item <?php if($sub=='lihat_data'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Agenda/lihat_data'); ?>" class="nav-link ">
                                        <span class="title">Lihat Data</span>
                                        <?php if($sub=='lihat_data'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                                <li class="nav-item <?php if($sub=='timeline'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Agenda/timeline_calendar'); ?>" class="nav-link ">
                                        <span class="title">Timeline</span>
                                        <?php if($sub=='timeline'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item <?php if($active=='cetak_surat'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="<?php echo site_url('Surat/cetak'); ?>" class="nav-link nav-toggle">
                                <i class="icon-envelope"></i>
                                <span class="title">Cetak Surat</span>
                                <?php if($active=='surat'){echo '<span class="selected"></span>';}else{echo '';} ?>
                            </a>
                           
                        </li> -->
                        <li class="nav-item <?php if($active=='jaldis'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="icon-paper-plane"></i>
                                <span class="title">JalDis</span>
                                <?php if($active=='jaldis'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                <span class="arrow <?php if($active=='jaldis'){echo 'open';}else{echo '';} ?>"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if($sub=='buat_jaldis'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Master/buat_jaldis'); ?>" class="nav-link ">
                                        <span class="title">Tambah Data</span>
                                        <?php if($sub=='buat_jaldis'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                                <li class="nav-item <?php if($sub=='lihat_jaldis'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Master/lihat_jaldis'); ?>" class="nav-link ">
                                        <span class="title">Lihat Data</span>
                                        <?php if($sub=='lihat_jaldis'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                                <li class="nav-item <?php if($sub=='timeline_jaldis'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Laporan/timeline_jaldis'); ?>" class="nav-link ">
                                        <span class="title">Timeline</span>
                                        <?php if($sub=='timeline_jaldis'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if($active=='laporan'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="icon-doc"></i>
                                <span class="title">Laporan</span>
                                <?php if($active=='laporan'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                <span class="arrow <?php if($active=='laporan'){echo 'open';}else{echo '';} ?>"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item <?php if($sub=='badan'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Laporan/rekap_badan'); ?>" class="nav-link ">
                                        <span class="title">BADAN</span>
                                        <?php if($sub=='badan'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                                <li class="nav-item <?php if($sub=='pansus'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Laporan/rekap_pansus'); ?>" class="nav-link ">
                                        <span class="title">PANSUS</span>
                                        <?php if($sub=='pansus'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                                <li class="nav-item <?php if($sub=='rekap'){echo 'active open';}else{echo '';} ?> ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <span class="title">Rekap JalDis</span>
                                        <?php if($sub=='rekap'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                        <span class="arrow <?php if($sub=='rekap'){echo 'open';}else{echo '';} ?>"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item <?php if($sub2=='keikutsertaan_anggota'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Laporan/keikutsertaan_anggota'); ?>" class="nav-link">Keikutsertaan Anggota</a>
                                        </li>
                                        <li class="nav-item <?php if($sub2=='jaldis'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Laporan/jaldis'); ?>" class="nav-link">Jaldis</a>
                                        </li>
                                        <li class="nav-item <?php if($sub2=='kategori_keperluan'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Laporan/kategori_keperluan'); ?>" class="nav-link">Per Kategori Keperluan</a>
                                        </li>
                                        <li class="nav-item <?php if($sub2=='anggaran'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('Laporan/anggaran'); ?>" class="nav-link">Anggaran</a>
										</li>
										<li class="nav-item <?php if($sub2=='by_date'){echo 'active open';}else{echo '';} ?>">
                                            <a href="<?php echo site_url('laporan_by_tanggal'); ?>" class="nav-link">Berdasarkan Waktu</a>
                                        </li>
                                    </ul>
                                </li> 
                                <li class="nav-item <?php if($sub=='rapat'){echo 'start active open';}else{echo '';} ?> ">
                                    <a href="<?php echo site_url('Laporan/rapat'); ?>" class="nav-link ">
                                        <span class="title">Rapat</span>
                                        <?php if($sub=='rapat'){echo '<span class="selected"></span>';}else{echo '';} ?>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?php if($active=='log_activity'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="<?php echo site_url('Master/log_activity'); ?>" class="nav-link nav-toggle">
                                <i class="icon-list"></i>
                                <span class="title">Log Aktifitas</span>
                                <?php if($active=='log_activity'){echo '<span class="selected"></span>';}else{echo '';} ?>
                            </a>
                           
                        </li>
                        <li class="nav-item <?php if($active=='tentang'){echo 'start active open';}else{echo '';} ?> ">
                            <a href="<?php echo site_url('User/tentang'); ?>" class="nav-link nav-toggle">
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
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                    <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Theme Style </span>
                                <select class="layout-style-option form-control input-sm">
                                    <option value="square" selected="selected">Square corners</option>
                                    <option value="rounded">Rounded corners</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-sm">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-sm">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Menu Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-sm">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-sm">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style </span>
                                <select class="sidebar-style-option form-control input-sm">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="light">Light</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-sm">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-sm">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="#">Dashboard</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>E-Jaldis</span>
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
                    
<script type="text/javascript">        
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
                   
<link href="<?=base_url('assets/global/plugins/cubeportfolio/css/cubeportfolio.css');?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url('assets/pages/css/portfolio.min.css');?>" rel="stylesheet" type="text/css" />
<style type="text/css">
    #slider-wrapper{
            width: 940px;
            height: 470px;
            margin: 50px auto;
            position: relative;
            margin-bottom: 0px;
            background: rgba(0,0,0,0.5);
            overflow: hidden;
        }
        
                #s1{
                    padding: 6px;
                    background: #FFFFFF;
                    position: absolute;
                    left: 50%;
                    bottom: 25px;
                    margin-left: -36px;
                    border-radius: 20px;
                    opacity: 0.3;
                    cursor: pointer;
                    z-index: 999;
                }
                
                #s2{
                    padding: 6px;
                    background: #FFFFFF;
                    position: absolute;
                    left: 50%;
                    bottom: 25px;
                    margin-left: -12px;
                    border-radius: 20px;
                    opacity: 0.3;
                    cursor: pointer;
                    z-index: 999;
                }
                
                #s3{
                    padding: 6px;
                    background: #FFFFFF;
                    position: absolute;
                    left: 50%;
                    bottom: 25px;
                    margin-left: 12px;
                    border-radius: 20px;
                    opacity: 0.3;
                    cursor: pointer;
                    z-index: 999;
                }
                
                #s4{
                    padding: 6px;
                    background: #FFFFFF;
                    position: absolute;
                    left: 50%;
                    bottom: 25px;
                    margin-left: 36px;
                    border-radius: 20px;
                    opacity: 0.3;
                    cursor: pointer;
                    z-index: 999;
                }


                #s1:hover, #s2:hover, #s3:hover, #s4:hover{ opacity: 1;}
                
            .inner-wrapper{
                width: 940px;
                height: 470px;
                position: absolute;
                top: 0;
                left: 0;
                margin-bottom: 0px;
                overflow: hidden;
            }
                .control{ display: none;}
                
                #Slide1:checked ~ .overflow-wrapper{ margin-left: 0%; }
                #Slide2:checked ~ .overflow-wrapper{ margin-left: -100%; }
                #Slide3:checked ~ .overflow-wrapper{ margin-left: -200%; }
                #Slide4:checked ~ .overflow-wrapper{ margin-left: -300%; }
               
                
                #Slide1:checked + #s1 { opacity: 1; }
                #Slide2:checked + #s2 { opacity: 1; }
                #Slide3:checked + #s3 { opacity: 1; }
                #Slide4:checked + #s4 { opacity: 1; }
               
                
            .overflow-wrapper{
                width: 400%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                overflow-y: hidden;
                z-index: 1;
                -webkit-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                -o-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            
                .slide img{
                    width: 25%;
                    float: left;
                }
                
</style>
        <script language="JavaScript">
            function selectAll1(source) {
              checkboxes = document.getElementsByName('nama1[]');
              for(var i in checkboxes)
                checkboxes[i].checked = source.checked;
            }
        </script>
        <script language="JavaScript">
            function selectAll2(source) {
              checkboxes = document.getElementsByName('nama2[]');
              for(var i in checkboxes)
                checkboxes[i].checked = source.checked;
            }
        </script>
        <script language="JavaScript">
            function selectAll3(source) {
              checkboxes = document.getElementsByName('nama3[]');
              for(var i in checkboxes)
                checkboxes[i].checked = source.checked;
            }
        </script>
<div class="portfolio-content">
    <div class="cbp-l-project-title">Hasil Rapat</div>
    <div class="cbp-l-project-subtitle">*silahkan perbaharui data setelah rapat, seperti kehadiran peserta dan kesimpulan dari rapat.</div>
    <!-- <div class="cbp-slider">
        <ul class="cbp-slider-wrap">
            <li class="cbp-slider-item">
                <a href="<?=base_url('assets/global/img/1200x900/13.jpg');?>" class="cbp-lightbox">
                    <img src="<?=base_url('assets/global/img/1200x900/13.jpg');?>" alt=""> </a>
            </li>
            <li class="cbp-slider-item">
                <a href="<?=base_url('assets/global/img/1200x900/14.jpg');?>" class="cbp-lightbox">
                    <img src="<?=base_url('assets/global/img/1200x900/14.jpg');?>" alt=""> </a>
            </li>
            <li class="cbp-slider-item">
                <a href="<?=base_url('assets/global/img/1200x900/01.jpg');?>" class="cbp-lightbox">
                    <img src="<?=base_url('assets/global/img/1200x900/01.jpg');?>" alt=""> </a>
            </li>
        </ul>
    </div> -->
    <?= $this->session->flashdata('sukses') ?>
    <?= $this->session->flashdata('gagal') ?>
    <div class="cbp-l-project-container">
        <?php
        foreach ($data_rapat as $key => $value) {
        ?>
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>Hasil Bahasan Rapat</span>
            </div>
            <div class="cbp-l-project-desc-text" style="text-align: justify;">
                <?php
                    if(empty($value->hasil_rapat)){
                        echo 'Belum ditambahkan hasil bahasan rapat';
                    }
                    else{
                        echo $value->hasil_rapat;   
                    }
                ?>
            </div>
        </div>
        <div class="cbp-l-project-details">
            <div class="cbp-l-project-details-title">
                <span>Data Rapat</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <li>
                    <strong>Nomor Surat</strong><?= $value->nomor_surat; ?></li>
                <li>
                    <strong>Nama Kegiatan</strong><?= $value->acara; ?></li>
                <li>
                    <strong>AKD</strong><?= $value->kategori; ?></li>
                <!-- <?php
                if($value->tanggal==$value->tanggal_selesai){
                    echo '<li>
                    <strong>Tanggal</strong>'.date('d-m-Y', strtotime($value->tanggal)).'</li>';
                }
                else{
                ?>
                <li>
                    <strong>Tanggal Mulai</strong><?= date('d-m-Y', strtotime($value->tanggal)); ?></li>
                <li>
                    <strong>Tanggal Selesai</strong><?= date('d-m-Y', strtotime($value->tanggal_selesai)); ?></li>
                <?php } ?> -->
                <li>
                    <strong>Tanggal</strong><?= date('d-m-Y', strtotime($value->tanggal)); ?></li>
                <li>
                    <strong>Jam</strong><?= substr($value->jam,0,5).'-'.substr($value->jam_berakhir,0,5); ?></li>
                <li>
                    <strong>Tempat</strong><?= $value->keterangan; ?></li>
                <li>
                    <strong>Materi</strong><?= $value->materi; ?></li>
                <li>
                    <strong>Pimpinan Rapat</strong><?= $value->nama; ?></li>
            </ul>
            <a data-toggle="modal" data-target="#ubah_hasil" class="cbp-l-project-details-visit btn red uppercase">Ubah Data</a>
        </div>
        <?php } ?>
    </div>
    <div class="row">
        <h4 style="text-align: center;">Peserta - Anggota Dewan</h4>
        <div class="col-md-6">
            <div class="cbp-l-project-details-title">
                <span>Rencana Kedatangan</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $no = 1;
                foreach ($peserta_dewan as $key => $value) {
                    echo '<li><strong>Peserta '.$no.'</strong>'.$value->nama.'</li>';
                $no ++;
                }
                ?>
                <!-- <li>
                    <strong>Client</strong>John Doe</li>
                <li>
                    <strong>Date</strong>22 December 2013</li>
                <li>
                    <strong>Categories</strong>Logo, Graphic</li> -->
            </ul>

        </div>
        <div class="col-md-6">
            <div class="cbp-l-project-details-title">
                <span>Realisasi Kedatangan</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $no = 1;
                foreach ($peserta_dewan as $key => $value) {
                    if($value->setelah=='0'){
                        echo '';
                    }
                    else{
                        echo '<li><strong>Peserta '.$no.'</strong>'.$value->nama.'</li>';
                    $no ++;
                    }
                }
                ?>
            </ul>
            <a data-toggle="modal" data-target="#kehadiran_dewan" class="cbp-l-project-details-visit btn red uppercase">Ubah Data</a>
        </div>
    </div>
    <div class="row">
        <h4 style="text-align: center;">Peserta - SKPD</h4>
        <div class="col-md-6">
            <div class="cbp-l-project-details-title">
                <span>Rencana Kedatangan</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $no = 1;
                foreach ($peserta_skpd as $key => $value) {
                    echo '<li><strong>Peserta '.$no.'</strong>'.$value->nama.'</li>';
                $no ++;
                }
                ?>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="cbp-l-project-details-title">
                <span>Realisasi Kedatangan</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $no = 1;
                foreach ($peserta_skpd as $key => $value) {
                    if($value->setelah=='0'){
                        echo '';
                    }
                    else{
                        echo '<li><strong>Peserta '.$no.'</strong>'.$value->nama.'</li>';
                    $no ++;
                    }
                
                }
                ?>
            </ul>
            <a data-toggle="modal" data-target="#kehadiran_skpd" class="cbp-l-project-details-visit btn red uppercase">Ubah Data</a>
        </div>
    </div>
    <div class="row">
        <h4 style="text-align: center;">Peserta - Umum</h4>
        <div class="col-md-6">
            <div class="cbp-l-project-details-title">
                <span>Rencana Kedatangan</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $no = 1;
                foreach ($peserta_umum as $key => $value) {
                    echo '<li><strong>Peserta '.$no.'</strong>'.$value->anggota.'</li>';
                $no ++;
                }
                ?>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="cbp-l-project-details-title">
                <span>Realisasi Kedatangan</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $no = 1;
                foreach ($peserta_umum as $key => $value) {
                    if($value->setelah=='0'){
                        echo '';
                    }
                    else{
                        echo '<li><strong>Peserta '.$no.'</strong>'.$value->anggota.'</li>';
                    $no ++;
                    }
                
                }
                ?>
            </ul>
            <a data-toggle="modal" data-target="#kehadiran_umum" class="cbp-l-project-details-visit btn red uppercase">Ubah Data</a>
        </div>
    </div>
    <!-- <div class="cbp-l-project-container">
        <div class="cbp-l-project-related">
            <div class="cbp-l-project-desc-title">
                <span>Related Projects</span>
            </div>
            <ul class="cbp-l-project-related-wrap">
                <li class="cbp-l-project-related-item">
                    <a href="ajax-juicy-projects/project1.html" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                        <img src="<?=base_url('assets/global/img/600x600/19.jpg');?>" alt="">
                        <div class="cbp-l-project-related-title">Dashboard</div>
                    </a>
                </li>
                <li class="cbp-l-project-related-item">
                    <a href="ajax-juicy-projects/project3.html" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                        <img src="<?=base_url('assets/global/img/600x600/21.jpg');?>" alt="">
                        <div class="cbp-l-project-related-title">To-Do Dashboard</div>
                    </a>
                </li>
                <li class="cbp-l-project-related-item">
                    <a href="ajax-juicy-projects/project4.html" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                        <img src="<?=base_url('assets/global/img/600x600/65.jpg');?>" alt="">
                        <div class="cbp-l-project-related-title">Events and More</div>
                    </a>
                </li>
            </ul>
        </div>
    </div> -->
    <br>
    <br>
    <br> </div>
                    <div class="row">
                        <div class="col-md-12">
                        
                            <div class="portlet light form-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-picture font-dark"></i>
                                        <span class="caption-subject font-dark sbold">File Foto</span>
                                    </div>
                                   
                                </div>
                                <div class="portlet-body form">
                                <!-- <div class="portfolio-content portfolio-1">
                                    <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
                                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn dark btn-outline uppercase"> All
                                            <div class="cbp-filter-counter">12</div>
                                        </div>
                                        <div data-filter=".identity" class="cbp-filter-item btn dark btn-outline uppercase"> Identity
                                            <div class="cbp-filter-counter">5</div>
                                        </div>
                                        <div data-filter=".web-design" class="cbp-filter-item btn dark btn-outline uppercase"> Web Design
                                            <div class="cbp-filter-counter">7</div>
                                        </div>
                                        <div data-filter=".graphic" class="cbp-filter-item btn dark btn-outline uppercase"> Graphic
                                            <div class="cbp-filter-counter">7</div>
                                        </div>
                                        <div data-filter=".logos" class="cbp-filter-item btn dark btn-outline uppercase"> Logo
                                            <div class="cbp-filter-counter">4</div>
                                        </div>
                                    </div>
                                    
                                </div> -->
                                    <div class="note note-info">
                                        <p>Ukuran maksimal file foto adalah 4MB </p>
                                        <p>Ekstensi yang diizinkan adalah jpg, jpeg, png, bmp </p>
                                    </div>
                                    <form action="<?php echo site_url('Rapat/foto_rapat'); ?>" enctype='multipart/form-data' class="form-horizontal form-bordered" method='post'>
                                        <input type="hidden" name="kode_rapat" value="<?= $this->uri->segment(3); ?>">
                                        
                                        <div class="form-body">
                                            <div class="form-group">
                                            <div class="row fileupload-buttonbar">
                                            <label class="control-label col-md-2">File Foto</label>
                                                <div class="col-md-3">
                                                   
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Pilih gambar </span>
                                                                <span class="fileinput-exists"> Ganti</span>
                                                                <input type="file" name="foto[]" multiple="" required accept="image/*"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Batal </a>
                                                        </div>
                                                    </div>
                                                   
                                               
                                                </div>
                                                <div class="col-md-3">
                                                   
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Pilih gambar </span>
                                                                <span class="fileinput-exists"> Ganti</span>
                                                                <input type="file" name="foto[]" multiple="" accept="image/*"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Batal </a>
                                                        </div>
                                                    </div>
                                                  
                                               
                                                </div>
                                                <div class="col-md-3">
                                                   
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Pilih gambar </span>
                                                                <span class="fileinput-exists"> Ganti</span>
                                                                <input type="file" name="foto[]" multiple="" accept="image/*"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Batal </a>
                                                        </div>
                                                    </div>
                                                  
                                               
                                                </div>
                                            </div>
                                            <div class="col-md-offset-2 col-md-10">
                                                    <button type="submit" class="btn red">
                                                        <i class="fa fa-check"></i> Simpan</button>
                                                    <button type="button" class="btn grey-salsa btn-outline">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                            
                                    </form>
                                  
                                </div>
                            </div>
                        
                        </div>
                    </div>    

<?php
if($data_foto==NULL){
                echo '<div class="cbp-l-project-subtitle">Galeri Foto Rapat (Tidak ada file foto)</div>';
            }
            else{
?>
<div class="cbp-l-project-subtitle">Galeri Foto Rapat</div>
<div id="slider-wrapper">
        <div class="inner-wrapper">
            <!-- <input checked type="radio" name="slide" class="control" id="Slide1"/>
                <label for="Slide1" id="s1"></label>
            <input type="radio" name="slide" class="control" id="Slide2"/>
                <label for="Slide2" id="s2"></label>
            <input type="radio" name="slide" class="control" id="Slide3"/>
                <label for="Slide3" id="s3"></label>
            <input type="radio" name="slide" class="control" id="Slide4"/>
                <label for="Slide4" id="s4"></label>
            <div class="overflow-wrapper">
                <a class="slide" href="#"><img src="<?=base_url('assets/global/img/1200x900/13.jpg');?>"/></a>
                <a class="slide" href="#"><img src="<?=base_url('assets/global/img/1200x900/14.jpg');?>"/></a>
                <a class="slide" href="#"><img src="<?=base_url('assets/global/img/1200x900/12.jpg');?>"/></a>
                <a class="slide" href="#"><img src="<?=base_url('assets/global/img/1200x900/11.jpg');?>"/></a>
            </div> -->
            <?php
            $no = 1;
            
                foreach ($data_foto as $key => $df) {
                    echo'<input checked type="radio" name="slide" class="control" id="Slide'.$no.'"/>
                    <label for="Slide'.$no.'" id="s'.$no.'"></label>';
                    $no++;
                }
                echo '<div class="overflow-wrapper">';
                foreach ($data_foto as $key => $df) {
                    echo '<a class="slide" href="#"><img src="'.base_url('assets/hasil_rapat/'.$df->nama_file).'"/></a>';
                }
                echo '</div>';
            
            ?>
</div>
<?php } ?>
<script src="<?=base_url('assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('assets/pages/scripts/portfolio-1.min.js');?>" type="text/javascript"></script>
<?php
                                            foreach ($data_rapat as $row) {
?>
<div class="modal fade" id="ubah_hasil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?php echo site_url('Rapat/update_hasil'); ?>">
            <input type="hidden" name="id" value="<?= $row->id; ?>">
            <!-- <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                          
                                                            <textarea name="hasil" class="form-control" rows="3" maxlength="10000" required><?= $row->hasil_rapat; ?></textarea>

                                                            <label for="form_control_1">Hasil/ Kesimpulan</label>
                                                            <span class="help-block">&nbsp; &nbsp; &nbsp; &nbsp;Tuliskan secara jelas hasil/ kesimpulan dari rapat.</span>
                                                            <i class="icon-pencil"></i>
                                                        </div>
                                                        </div> -->
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-2">Hasil/ Kesimpulan</label>
                                                                <div class="col-md-10">
                                                                    <textarea class="wysihtml5 form-control" name="hasil" rows="3" maxlength="10000">
                                                                       <?= $row->hasil_rapat; ?>
                                                                    </textarea>
                                                                </div>
                                                                <br>
                                                                <label class="control-label col-md-2">Waktu Berakhir</label>
                                                                <div class="col-md-3">
                                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                        <div class="input-icon">
                                                                           
                                                                            <input type="time" name="jam2" value="<?= $row->jam_berakhir; ?>" class="form-control" required>
                                                                            
                                                                            <span class="help-block">Format : 12 Jam</span>
                                                                            <i class="icon-speedometer"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                          
                                                        </div>
            
            <br>
            <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Simpan</button>
                                            <button type="reset" class="btn default">Batal</button>
            </div>
          </form>
        </div>
      </div>     
    </div>
  </div>
</div> 
<?php } ?>

<div class="modal fade" id="kehadiran_dewan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?php echo site_url('Rapat/kehadiran_dewan'); ?>">
            
                 <div class="form-group form-md-checkboxes">
                                         
                                                    <div class="col-md-12">
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="selectall1" onClick="selectAll1(this)" class="md-check">
                                                                <label for="selectall1">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Select All </label>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            <div class="form-group form-md-checkboxes">
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;Berikut daftar peserta, jika ada yg tidak hadir silahkan tidak usah dicentang</label>
                                                
                                            </div>
                                            <div class="form-group form-md-checkboxes">
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($peserta_dewan as $key => $value) {

                                                    ?>
                                                    <input type="hidden" name="id" value="<?= $value->id; ?>">
                                                    <input type="hidden" name="kode_rapat" value="<?= $value->kode_rapat; ?>">
                                                    <input type="hidden" name="ak" value="<?= $value->alat_kelengkapan; ?>">
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="pd<?= $value->id_peserta; ?>" name="nama1[]" value="<?= $value->id_peserta; ?>" class="md-check" <?php if($value->setelah=='1'){echo'checked';}else{echo'';}?>>
                                                            <label for="pd<?= $value->id_peserta; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                            <br>
            <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Simpan</button>
                                            <button type="reset" class="btn default">Batal</button>
            </div>
          </form>
        </div>
      </div>     
    </div>
  </div>
</div> 
<div class="modal fade" id="kehadiran_skpd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?php echo site_url('Rapat/kehadiran_skpd'); ?>">
            
                 <div class="form-group form-md-checkboxes">
                                         
                                                    <div class="col-md-12">
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="selectall2" onClick="selectAll2(this)" class="md-check">
                                                                <label for="selectall2">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Select All </label>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            <div class="form-group form-md-checkboxes">
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;Berikut daftar peserta, jika ada yg tidak hadir silahkan tidak usah dicentang</label>
                                                
                                            </div>
                                            <div class="form-group form-md-checkboxes">
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($peserta_skpd as $key => $value) {

                                                    ?>
                                                    <input type="hidden" name="id" value="<?= $value->id; ?>">
                                                    <input type="hidden" name="kode_rapat" value="<?= $value->kode_rapat; ?>">
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="ps<?= $value->id_peserta; ?>" name="nama2[]" value="<?= $value->id_peserta; ?>" class="md-check" <?php if($value->setelah=='1'){echo'checked';}else{echo'';}?>>
                                                            <label for="ps<?= $value->id_peserta; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                            <br>
            <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Simpan</button>
                                            <button type="reset" class="btn default">Batal</button>
            </div>
          </form>
        </div>
      </div>     
    </div>
  </div>
</div>
<div class="modal fade" id="kehadiran_umum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?php echo site_url('Rapat/kehadiran_umum'); ?>">
            
                 <div class="form-group form-md-checkboxes">
                                         
                                                    <div class="col-md-12">
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="selectall3" onClick="selectAll3(this)" class="md-check">
                                                                <label for="selectall3">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Select All </label>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            <div class="form-group form-md-checkboxes">
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;Berikut daftar peserta, jika ada yg tidak hadir silahkan tidak usah dicentang</label>
                                                
                                            </div>
                                            <div class="form-group form-md-checkboxes">
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($peserta_umum as $key => $value) {

                                                    ?>
                                                    <input type="hidden" name="id" value="<?= $value->id; ?>">
                                                    <input type="hidden" name="kode_rapat" value="<?= $value->kode_rapat; ?>">
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="pu<?= $value->id_peserta; ?>" name="nama3[]" value="<?= $value->id_peserta; ?>" class="md-check" <?php if($value->setelah=='1'){echo'checked';}else{echo'';}?>>
                                                            <label for="pu<?= $value->id_peserta; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->anggota; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                            <br>
            <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Simpan</button>
                                            <button type="reset" class="btn default">Batal</button>
            </div>
          </form>
        </div>
      </div>     
    </div>
  </div>
</div>
                </div>
        
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; DPRD Kota Semarang.
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/js.cookie.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/jquery.blockui.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js');?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?=base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/bootstrap-markdown/lib/markdown.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/global/plugins/bootstrap-summernote/summernote.min.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?=base_url('assets/global/scripts/app.min.js');?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?=base_url('assets/pages/scripts/components-editors.min.js');?>" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?=base_url('assets/layouts/layout/scripts/layout.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/layouts/layout/scripts/demo.min.js');?>" type="text/javascript"></script>
        <script src="<?=base_url('assets/layouts/global/scripts/quick-sidebar.min.js');?>" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
<?php}?>