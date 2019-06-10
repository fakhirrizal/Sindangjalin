                    <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
                    <!-- END THEME PANEL -->
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
                            <div id="dashboard-report-range" class="pull-right tooltips btn btn-sm" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                                <i class="icon-calendar"></i>&nbsp;
                                <span class="thin uppercase hidden-xs"></span>&nbsp;
                                <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Pengguna
                        <small>Daftar Pengguna Terdaftar</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <table id="tabel1" class="table table-bordered table-striped">

                        <thead>

                            <tr>
                                <th>#</th>
                                <th>Nama Lengkap</th>

                                <th>Jabatan</th>

                                <th>Unit Kerja</th>
                                <th>Alamat</th>
                                <th>Aksi</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php

                                $no=1;

                                if(isset($data_dokumen)){

                                foreach($data_dokumen as $row){

                            ?>

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row->nama_lengkap; ?></td>

                                <td><?php echo $row->jabatan; ?></td>

                                <td><?php echo $row->unit_kerja; ?></td>
                                <td><?php echo $row->alamat; ?></td>
                                <!-- button aksi edit dan hapus admin-->

                                <td >
                             
                                    <a class="btn btn-mini" title="lihat detail pengguna" href="<?php echo site_url('User/detail/'.$row->kd_user); ?>"> 
                                        <span class="icon-eyeglasses"></span>     
                                    </a>
                                    <a class="btn btn-mini" title="kirim email ke pengguna" href=""> 
                                        <span class="fa fa-paper-plane-o"></span>     
                                    </a>
                              
                                </td>
                            </tr>
                                   
                                <?php }} ?>

                                                             

                        </tbody>

                    </table>
                    <script>
                      $(function () {
                        $("#tabel1").DataTable({
                          "paging": true,
                          "lengthChange": false,
                          "searching": true,
                          "ordering": true,
                          "info": true,
                          "autoWidth": false
                        });
                      });
                    </script>