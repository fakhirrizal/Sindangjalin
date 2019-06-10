                    <link href="<?=base_url('assets/pages/css/profile.min.css');?>" rel="stylesheet" type="text/css" />
                    <link href="<?=base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css');?>" rel="stylesheet" type="text/css" />
                    <script src="<?=base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
                    
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Pengguna</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Pengguna
                        <small>profil pengguna</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                   

                    <div class="invoice-content-2 bordered">
                        <?php foreach ($data_profil as $key => $value) {?>
                        <div class="row invoice-head">
                            <div class="col-md-7 col-xs-6">
                                <div class="invoice-logo">
                                    <?php
                                        if(empty($value->foto)){
                                            echo '<img src="'.base_url('assets/pages/img/avatars/kosong.jpeg').'" class="img-responsive" alt="">';
                                        }
                                        else{
                                            echo '<img src="'.base_url('assets/uploads/foto/').$value->foto.'" class="img-responsive" alt="">';
                                        }
                                    ?>
                                    
                                </div>
                            </div>
                            <div class="col-md-5 col-xs-6">
                                <div class="company-address">
                                    <h1><?php echo $value->nama_lengkap; ?></h1>
                                    <br> <?php echo $value->alamat; ?>
                                    <br>
                                    <span class="bold">T</span> <?php echo $value->no_hp; ?>
                                    <br>
                                    <span class="bold">E</span> <?php echo $value->email; ?>
                                    <br>
                                    Tempat, tanggal lahir : <?php echo $value->tempat_lahir.", ".date('d-m-Y', strtotime($value->tanggal_lahir)); ?>
                                    <br>
                                    Status perkawinan : <?php echo $value->status_perkawinan; ?>

                            </div>
                        </div>
                        <?php } ?>
                        
                        <div class="row invoice-body">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="invoice-title uppercase">Riwayat Pendidikan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Jenjang Pendidikan</th>
                                            <th>Nama Sekolah</th>
                                            <th>Tahun</th>
                                        </tr>
                                    <?php
                                        if(isset($data_pendidikan)){
                                            foreach($data_pendidikan as $row3)
                                            {
                                    ?>  
                                        <tr>
                                                <td><?php echo $row3->jenjang;?></td>         
                                                <td><?php echo $row3->instansi;?></td>
                                                <td><?php echo $row3->tahun;?></td>
                                            
                                        </tr>
                                    <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row invoice-body">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="invoice-title uppercase">Riwayat Pekerjaan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Nama Perusahaan/ Instansi</th>
                                            <th>Jabatan</th>
                                            <th>Tahun Bekerja</th>
                                        </tr>
                                    <?php
                                        if(isset($data_pekerjaan)){
                                            foreach($data_pekerjaan as $row2)
                                            {
                                    ?>  
                                        <tr>
                                                <td><?php echo $row2->perusahaan;?></td>         
                                                <td><?php echo $row2->jabatan;?></td>
                                                <td><?php echo $row2->tahun;?></td>
                                            
                                        </tr>
                                    <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>