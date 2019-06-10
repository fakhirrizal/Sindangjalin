                    <link href="<?=base_url('assets/pages/css/profile.min.css');?>" rel="stylesheet" type="text/css" />
                    <link href="<?=base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css');?>" rel="stylesheet" type="text/css" />
                    <script src="<?=base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
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
                                            echo '<img src="'.base_url('assets/global/img/profile/').$value->foto.'" class="img-responsive" alt="">';
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
                                            <li class="active">
                                                <a href="#">
                                                    <i class="icon-user"></i> Pengaturan Profil </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo site_url('User/ganti_sandi'); ?>">
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
                                                    <span class="caption-subject font-blue-madison bold uppercase">Pengaturan Profil</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">Ganti Foto Profil</a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" action="<?php echo site_url('User/ubah_profil'); ?>" method="post">
                                                            <div class="form-group">
                                                                <label class="control-label">Nama</label>
                                                                <div class="input-icon">
                                                                <i class="fa fa-user"></i>
                                                                <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $value->nama_lengkap; ?>" required/> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Tempat Lahir</label>
                                                                <div class="input-icon">
                                                                <i class="glyphicon glyphicon-map-marker"></i>
                                                                <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $value->tempat_lahir; ?>" placeholder="Masukkan nama daerah tempat lahir Anda" maxlength="50" required/> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Tanggal Lahir</label>
                                                                <div class="input-icon">
                                                                <i class="fa fa-calendar"></i>
                                                                <input type="date" class="form-control" value="<?php echo $value->tanggal_lahir; ?>" name="tanggal_lahir" required/> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Nomor Telpon</label>
                                                                <div class="input-icon">
                                                                <i class="fa fa-phone"></i>
                                                                <input type="text" placeholder="+1 646 580 DEMO (6284)" name="no_hp" class="form-control" value="<?php echo $value->no_hp; ?>" required/> </div>
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                <label class="control-label">Alamat Rumah</label>
                                                                <div class="input-icon">
                                                                <i class="fa fa-road"></i>
                                                                <input type="text" placeholder="Isi alamat sesuai KTP Anda" value="<?php echo $value->alamat; ?>" name="alamat" maxlength="100" class="form-control" required/> </div>
                                                            </div>
                                                           
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn green"> Save Changes </button>
                                                                <button type="reset" class="btn default"> Reset </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                        <div class="m-heading-1 border-green m-bordered">
                                                            <h3>Catatan</h3>
                                                            <p> Ekstensi yang diijinkan : jpg, png, jpeg, dan bmp </p>
                                                            <p> Ukuran maksimal file : 3MB </p>
                                                        </div>
                                                        <form action="<?php echo site_url('User/ubah_foto'); ?>" role="form" enctype='multipart/form-data' method="post">
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Select image </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="foto"> </span>
                                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn green"> Submit </button>
                                                                <button type="reset" class="btn default"> Reset </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    
                                                    
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!-- memulai untuk konten dinamis -->
                <div class="modal-body" id="data_pend" style="text-align: left;">
                </div>
                <!-- selesai konten dinamis -->
            </div>
        </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!-- memulai untuk konten dinamis -->
                <div class="modal-body" id="data_peker" style="text-align: left;">
                </div>
                <!-- selesai konten dinamis -->
            </div>
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
<script>
    $(document).ready(function(){
        $('.edit_data').click(function(){
            var id = $(this).attr("id");
            $.ajax({
                url: '<?php echo base_url(); ?>User/ajax_edit',
                method: 'post',    
                data: {id:id}, 
                success:function(data){    
                    $('#data_pend').html(data); 
                    $('#myModal').modal("show");    
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.ubah_data').click(function(){
            var id = $(this).attr("id");
            $.ajax({
                url: '<?php echo base_url(); ?>User/ajax_ubah',
                method: 'post',    
                data: {id:id}, 
                success:function(data){    
                    $('#data_peker').html(data); 
                    $('#myModal2').modal("show");    
                }
            });
        });
    });
</script>