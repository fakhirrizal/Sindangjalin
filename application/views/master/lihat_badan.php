                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Data
                        <small>Badan</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                    <div class="row">
                      
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit bg-inverse ">
                                                <div class="panel-body">
                                                    <p> Dibawah ini merupakan Badan yang masih aktif, untuk melihat riwayat panitia dalam badan silhkan masuk ke menu laporan. Untuk menambahkan data silahkan klik link dibawah ini. </p>
                                                    <p>Jika badan ini telah selesai masa baktinya, silahkan klik "Selesai". Waktu berakhirnya berdasar tanggal ketika klik.</p>
                                                    <p>
                                                        <a class="btn green" href="<?php echo site_url('Master/tambah_badan')?>" target="_blank"> Tambah Data </a>
                                                    </p>
                                                </div>
                                <div class="portlet-body">
                                    <div class="timeline  white-bg ">
                                        <?php
                                        foreach ($data_badan as $key => $value) {
                                        ?>
                                        <!-- TIMELINE ITEM -->
                                        <div class="timeline-item">
                                            <div class="timeline-badge">
                                                <div class="timeline-icon">
                                                    <i class="icon-bag font-green-haze"></i>
                                                </div>
                                            </div>
                                            <div class="timeline-body">
                                                <div class="timeline-body-arrow"> </div>
                                                <div class="timeline-body-head">
                                                    <div class="timeline-body-head-caption">
                                                        <span class="timeline-body-alerttitle font-red-intense"><?= $value->nama_badan; ?></span>
                                                        <span class="timeline-body-time font-grey-cascade">Diresmikan pada tanggal <?= date('d-m-Y', strtotime($value->tanggal_buat)); ?> </span>
                                                    </div>
                                                    <div class="timeline-body-head-actions">
                                                        <div class="btn-group">
                                                            <button class="btn btn-circle green btn-outline btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Aksi
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-right" role="menu">
                                                                <li>
                                                                    <a href="<?php echo site_url('Master/detail_badan/'.$value->id_badan)?>">Detail </a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?php echo site_url('Master/ubah_badan/'.$value->id_badan)?>">Ubah </a>
                                                                </li>
                                                                <li class="divider"> </li>
                                                                <li>
                                                                    <a href="<?php echo site_url('Master/selesai_badan/'.$value->id_badan)?>" onclick="return confirm('Akan dinyatakan selesai?')">Selesai</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="timeline-body-content">
                                                    <span class="font-grey-cascade">  </span>
                                                    <br>
                                                    <span class="font-grey-cascade"> Jumlah anggota : <?= $value->jumlah_anggota; ?> orang </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END TIMELINE ITEM -->
                                        <?php
                                        }
                                        ?>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>