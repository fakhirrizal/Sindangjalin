<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
<link href="<?=base_url('assets/pages/css/pricing.min.css');?>" rel="stylesheet" type="text/css" />                
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Laporan
                        <small>JalDis</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>    
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <ul class="nav nav-tabs tabs-left">
                                                <li class="active">
                                                    <a href="#tab_6_1" data-toggle="tab"> KOMISI </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_6_2" data-toggle="tab"> BADAN </a>
                                                </li>
                                              
                                                <li>
                                                    <a href="#tab_6_3" data-toggle="tab"> PANSUS </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_6_5" data-toggle="tab"> PANJA </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_6_4" data-toggle="tab"> PIMPINAN DPRD </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_6_6" data-toggle="tab"> DPRD </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_6_1">
                                                    <div class="alert alert-info no-margin margin-top-10"> Note! Disini merupakan rekapan dari alat kelengkapan Komisi. </div>
                                                    <div class="portlet light bordered">
                                                      <div class="portlet-body">
                                                        <div class="pricing-content-1">
                                                            <div class="row">
                                                              <?php
                                                              foreach ($komisi as $key => $value) {
                                                              $q_0 = "SELECT * from jaldis where alat_kelengkapan='".$value->id_komisi."'";
                                                              $data_0 = $this->User_model->manualQuery($q_0)->result();
                                                              
                                                              ?>
                                                                <div class="col-md-3">
                                                                    <div class="price-column-container border-active">
                                                                        <div class="price-table-head bg-purple">
                                                                            <h2 class="no-margin"><?= $value->nama_komisi; ?></h2>
                                                                        </div>
                                                                        <div class="arrow-down border-top-purple"></div>
                                                                        <div class="price-table-pricing">
                                                                                                                                                           
                                                                            <p><?php echo '<b>Jumlah</b> : '.count($data_0).'x Perjalanan'; ?></p>
                                                                        </div>
                                                                        <?php
                                                                        foreach ($kategori_keperluan as $key => $kp) {
                                                                        $q = "SELECT * from jaldis where alat_kelengkapan='".$value->id_komisi."' and kategori='".$kp->id."'";
                                                                        $data = $this->User_model->manualQuery($q)->result();
                                                                        
                                                            
                                                                        ?>
                                                                        <div class="price-table-content">
                                                                            <div class="row mobile-padding">
                                                                                <div class="col-xs-3 text-right mobile-padding">
                                                                                    <i class="icon-direction"></i>
                                                                                </div>
                                                                                <div class="col-xs-9 text-left mobile-padding"><?php echo '<b>'.$kp->nama_keperluan.'</b> : '.count($data).'x Perjalanan'; ?></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                              <?php } ?>
                                                            </div>
                                                        </div>
                                                      </div>   
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab_6_2">
                                                    <div class="alert alert-info no-margin margin-top-10"> Note! Disini merupakan rekapan dari alat kelengkapan Badan. </div>
                                                    <div class="portlet light bordered">
                                                      <div class="portlet-body">
                                                        <div class="pricing-content-1">
                                                            <div class="row">
                                                              <?php
                                                              foreach ($badan as $key => $value) {
                                                              $q_0 = "SELECT * from jaldis where alat_kelengkapan='".$value->id_badan."'";
                                                              $data_0 = $this->User_model->manualQuery($q_0)->result();
                                                              
                                                              ?>
                                                                <div class="col-md-3">
                                                                    <div class="price-column-container border-active">
                                                                        <div class="price-table-head bg-red">
                                                                            <h2 class="no-margin"><?= $value->nama_badan; ?></h2>
                                                                        </div>
                                                                        <div class="arrow-down border-top-red"></div>
                                                                        <div class="price-table-pricing">
                                                                        
                                                                            <p><?php echo '<b>Jumlah</b> : '.count($data_0).'x Perjalanan'; ?></p>
                                                                        </div>
                                                                        <?php
                                                                        foreach ($kategori_keperluan as $key => $kp) {
                                                                        $q = "SELECT * from jaldis where alat_kelengkapan='".$value->id_badan."' and kategori='".$kp->id."'";
                                                                        $data = $this->User_model->manualQuery($q)->result();
                                                                        
                                                            
                                                                        ?>
                                                                        <div class="price-table-content">
                                                                            <div class="row mobile-padding">
                                                                                <div class="col-xs-3 text-right mobile-padding">
                                                                                    <i class="icon-direction"></i>
                                                                                </div>
                                                                                <div class="col-xs-9 text-left mobile-padding"><?php echo '<b>'.$kp->nama_keperluan.'</b> : '.count($data).'x Perjalanan'; ?></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                              <?php } ?>
                                                            </div>
                                                        </div>
                                                      </div>
                                                     
                                                       
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab_6_3">
                                                    <div class="alert alert-info no-margin margin-top-10"> Note! Disini merupakan rekapan dari alat kelengkapan Pansus (Panitia Khusus). </div>
                                                    <div class="portlet light bordered">
                                                     
                                                      <div class="portlet-body">
                                                        <div class="pricing-content-1">
                                                            <div class="row">
                                                              <?php
                                                              foreach ($pansus as $key => $value) {
                                                              $q_0 = "SELECT * from jaldis where alat_kelengkapan='".$value->kode_pansus."'";
                                                              $data_0 = $this->User_model->manualQuery($q_0)->result();
                                                              
                                                              ?>
                                                                <div class="col-md-3">
                                                                    <div class="price-column-container border-active">
                                                                        <div class="price-table-head bg-blue">
                                                                            <h2 class="no-margin"><?= $value->nama_pansus; ?></h2>
                                                                        </div>
                                                                        <div class="arrow-down border-top-blue"></div>
                                                                        <div class="price-table-pricing">
                                                                                                                                                           
                                                                            <p><?php echo '<b>Jumlah</b> : '.count($data_0).'x Perjalanan'; ?></p>
                                                                        </div>
                                                                        <?php
                                                                        foreach ($kategori_keperluan as $key => $kp) {
                                                                        $q = "SELECT * from jaldis where alat_kelengkapan='".$value->kode_pansus."' and kategori='".$kp->id."'";
                                                                        $data = $this->User_model->manualQuery($q)->result();
                                                                        
                                                            
                                                                        ?>
                                                                        <div class="price-table-content">
                                                                            <div class="row mobile-padding">
                                                                                <div class="col-xs-3 text-right mobile-padding">
                                                                                    <i class="icon-direction"></i>
                                                                                </div>
                                                                                <div class="col-xs-9 text-left mobile-padding"><?php echo '<b>'.$kp->nama_keperluan.'</b> : '.count($data).'x Perjalanan'; ?></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                              <?php } ?>
                                                            </div>
                                                        </div>
                                                      </div>
                                                       
                                                       
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab_6_5">
                                                    <div class="alert alert-info no-margin margin-top-10"> Note! Disini merupakan rekapan dari alat kelengkapan Panja (Panitia Kerja). </div>
                                                    <div class="portlet light bordered">
                                                     
                                                      <div class="portlet-body">
                                                        <div class="pricing-content-1">
                                                            <div class="row">
                                                              <?php
                                                              foreach ($panja as $key => $value) {
                                                              $q_0 = "SELECT * from jaldis where alat_kelengkapan='".$value->kode_panja."'";
                                                              $data_0 = $this->User_model->manualQuery($q_0)->result();
                                                              
                                                              ?>
                                                                <div class="col-md-3">
                                                                    <div class="price-column-container border-active">
                                                                        <div class="price-table-head bg-blue">
                                                                            <h2 class="no-margin"><?= $value->nama_panja; ?></h2>
                                                                        </div>
                                                                        <div class="arrow-down border-top-blue"></div>
                                                                        <div class="price-table-pricing">
                                                                                                                                                           
                                                                            <p><?php echo '<b>Jumlah</b> : '.count($data_0).'x Perjalanan'; ?></p>
                                                                        </div>
                                                                        <?php
                                                                        foreach ($kategori_keperluan as $key => $kp) {
                                                                        $q = "SELECT * from jaldis where alat_kelengkapan='".$value->kode_panja."' and kategori='".$kp->id."'";
                                                                        $data = $this->User_model->manualQuery($q)->result();
                                                                        
                                                            
                                                                        ?>
                                                                        <div class="price-table-content">
                                                                            <div class="row mobile-padding">
                                                                                <div class="col-xs-3 text-right mobile-padding">
                                                                                    <i class="icon-direction"></i>
                                                                                </div>
                                                                                <div class="col-xs-9 text-left mobile-padding"><?php echo '<b>'.$kp->nama_keperluan.'</b> : '.count($data).'x Perjalanan'; ?></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                              <?php } ?>
                                                            </div>
                                                        </div>
                                                      </div>
                                                       
                                                       
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab_6_4">
                                                    <div class="alert alert-info no-margin margin-top-10"> Note! Disini merupakan rekapan dari alat kelengkapan Pimpinan DPRD. </div>
                                                    <div class="portlet light bordered">
                                                     
                                                      <div class="portlet-body">
                                                        <div class="pricing-content-1">
                                                            <div class="row">
                                                              <?php
                                                             
                                                              $q_0 = "SELECT * from jaldis where alat_kelengkapan='intek'";
                                                              $data_0 = $this->User_model->manualQuery($q_0)->result();
                                                              
                                                              ?>
                                                                <div class="col-md-3">
                                                                    <div class="price-column-container border-active">
                                                                        <div class="price-table-head bg-yellow">
                                                                            <h2 class="no-margin">Pimpinan</h2>
                                                                        </div>
                                                                        <div class="arrow-down border-top-yellow"></div>
                                                                        <div class="price-table-pricing">
                                                                                                                                                           
                                                                            <p><?php echo '<b>Jumlah</b> : '.count($data_0).'x Perjalanan'; ?></p>
                                                                        </div>
                                                                        <?php
                                                                        foreach ($kategori_keperluan as $key => $kp) {
                                                                        $q = "SELECT * from jaldis where alat_kelengkapan='intek' and kategori='".$kp->id."'";
                                                                        $data = $this->User_model->manualQuery($q)->result();
                                                                        
                                                            
                                                                        ?>
                                                                        <div class="price-table-content">
                                                                            <div class="row mobile-padding">
                                                                                <div class="col-xs-3 text-right mobile-padding">
                                                                                    <i class="icon-direction"></i>
                                                                                </div>
                                                                                <div class="col-xs-9 text-left mobile-padding"><?php echo '<b>'.$kp->nama_keperluan.'</b> : '.count($data).'x Perjalanan'; ?></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                              
                                                            </div>
                                                        </div>
                                                      </div>
                                                       
                                                       
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab_6_6">
                                                    <div class="alert alert-info no-margin margin-top-10"> Note! Disini merupakan rekapan dari alat kelengkapan DPRD. </div>
                                                    <div class="portlet light bordered">
                                                     
                                                      <div class="portlet-body">
                                                        <div class="pricing-content-1">
                                                            <div class="row">
                                                              <?php
                                                             
                                                              $q_0 = "SELECT * from jaldis where alat_kelengkapan='semua'";
                                                              $data_0 = $this->User_model->manualQuery($q_0)->result();
                                                              
                                                              ?>
                                                                <div class="col-md-3">
                                                                    <div class="price-column-container border-active">
                                                                        <div class="price-table-head bg-yellow">
                                                                            <h2 class="no-margin">Anggota Dewan</h2>
                                                                        </div>
                                                                        <div class="arrow-down border-top-yellow"></div>
                                                                        <div class="price-table-pricing">
                                                                                                                                                           
                                                                            <p><?php echo '<b>Jumlah</b> : '.count($data_0).'x Perjalanan'; ?></p>
                                                                        </div>
                                                                        <?php
                                                                        foreach ($kategori_keperluan as $key => $kp) {
                                                                        $q = "SELECT * from jaldis where alat_kelengkapan='semua' and kategori='".$kp->id."'";
                                                                        $data = $this->User_model->manualQuery($q)->result();
                                                                        
                                                            
                                                                        ?>
                                                                        <div class="price-table-content">
                                                                            <div class="row mobile-padding">
                                                                                <div class="col-xs-3 text-right mobile-padding">
                                                                                    <i class="icon-direction"></i>
                                                                                </div>
                                                                                <div class="col-xs-9 text-left mobile-padding"><?php echo '<b>'.$kp->nama_keperluan.'</b> : '.count($data).'x Perjalanan'; ?></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                              <?php
                                                             
                                                              $q_1 = "SELECT * from jaldis where alat_kelengkapan='anggota'";
                                                              $data_1 = $this->User_model->manualQuery($q_1)->result();
                                                              
                                                              ?>
                                                                <div class="col-md-3">
                                                                    <div class="price-column-container border-active">
                                                                        <div class="price-table-head bg-yellow">
                                                                            <h2 class="no-margin">Anggota Setwan</h2>
                                                                        </div>
                                                                        <div class="arrow-down border-top-yellow"></div>
                                                                        <div class="price-table-pricing">
                                                                                                                                                           
                                                                            <p><?php echo '<b>Jumlah</b> : '.count($data_1).'x Perjalanan'; ?></p>
                                                                        </div>
                                                                        <?php
                                                                        foreach ($kategori_keperluan as $key => $kp) {
                                                                        $q = "SELECT * from jaldis where alat_kelengkapan='anggota' and kategori='".$kp->id."'";
                                                                        $data = $this->User_model->manualQuery($q)->result();
                                                                        
                                                            
                                                                        ?>
                                                                        <div class="price-table-content">
                                                                            <div class="row mobile-padding">
                                                                                <div class="col-xs-3 text-right mobile-padding">
                                                                                    <i class="icon-direction"></i>
                                                                                </div>
                                                                                <div class="col-xs-9 text-left mobile-padding"><?php echo '<b>'.$kp->nama_keperluan.'</b> : '.count($data).'x Perjalanan'; ?></div>
                                                                            </div>
                                                                        </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                              
                                                            </div>
                                                        </div>
                                                      </div>
                                                       
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>