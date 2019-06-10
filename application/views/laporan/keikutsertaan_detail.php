                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Detail
                        <small>Keikutsertaan Anggota</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="portlet light portlet-fit bordered">
                        
                        <div class="portlet-body">
                            <div class="mt-timeline-2">
                                <div class="mt-timeline-line border-grey-steel"></div>
                                <ul class="mt-container">
                                    
                                    
                                    <?php
                                    $no = 1;
                                    foreach ($data_keikutsertaan as $key => $value) {
                                        if($no % 2 == 0){
                                    ?>
                                            <li class="mt-item">
                                                <div class="mt-timeline-icon bg-purple bg-font-red border-grey-steel">
                                                    <i class="icon-calendar"></i>
                                                </div>
                                                <div class="mt-timeline-content">
                                                    <div class="mt-content-container">
                                                        <div class="mt-title">
                                                            <h3 class="mt-content-title"><?= $value->tujuan; ?></h3>
                                                        </div>
                                                        <div class="mt-author">
                                                            <div class="mt-avatar">
                                                                <?php
                                                                if($value->transportasi=='Kereta Api'){
                                                                    echo '<img src="'.base_url().'assets/images/images2.png" />';
                                                                }
                                                                elseif ($value->transportasi=='Pesawat Terbang') {
                                                                    echo '<img src="'.base_url().'assets/images/images.png" />';
                                                                }
                                                                else{
                                                                    echo '<img src="'.base_url().'assets/images/images3.png" />';
                                                                }
                                                                ?>
                                                                
                                                            </div>
                                                            <div class="mt-author-name">
                                                                <a href="javascript:;" class="font-blue-madison">Transportasi : <?= $value->transportasi; ?></a>
                                                            </div>
                                                            <!-- <div class="mt-author-notes font-grey-mint">10 March 2016 : 7:45 PM</div> -->
                                                        </div>
                                                        <div class="mt-content border-grey-salt">
                                                            <p><b>Katerogri Keperluan</b> : <?= $value->nama_keperluan; ?>
                                                                <br>
                                                                <b>Tujuan Perjalanan Dinas</b> : <?= $value->tujuan; ?>
                                                                <br>
                                                                <b>Alat Kelengkapan</b> : <?php
                                                                $alat_kelengkapan = $value->alat_kelengkapan;
                                                                $ak = substr($alat_kelengkapan, 0,1);
                                                                if($ak=='B'){
                                                                    $where1['id_badan'] = $alat_kelengkapan;
                                                                    $data_ak1 = $this->Main_model->getSelectedData('badan',$where1);
                                                                    foreach ($data_ak1 as $key => $value1) {
                                                                      echo $value1->nama_badan;
                                                                    }
                                                                }
                                                                elseif($ak=='P'){
                                                                    $where2['kode_pansus'] = $alat_kelengkapan;
                                                                    $data_ak2 = $this->Main_model->getSelectedData('pansus',$where2);
                                                                    foreach ($data_ak2 as $key => $value2) {
                                                                      echo $value2->nama_pansus;
                                                                    }
                                                                }
                                                                elseif($ak=='K'){
                                                                    $where3['id_komisi'] = $alat_kelengkapan;
                                                                    $data_ak3 = $this->Main_model->getSelectedData('komisi',$where3);
                                                                    foreach ($data_ak3 as $key => $value3) {
                                                                      echo $value3->nama_komisi;
                                                                    }
                                                                }
                                                                elseif($ak=='J'){
                                                                    $where4['kode_panja'] = $alat_kelengkapan;
                                                                    $data_ak4 = $this->Main_model->getSelectedData('panja',$where4);
                                                                    foreach ($data_ak4 as $key => $value4) {
                                                                      echo $value4->nama_panja;
                                                                    }
                                                                }
                                                                elseif($ak=='s'){
                                                                    echo 'DPRD';
                                                                }
                                                                elseif($ak=='a'){
                                                                    echo 'Anggota Setwan';
                                                                }
                                                                elseif($ak=='i'){
                                                                    echo 'Pimpinan';
                                                                }
                                                                else{
                                                                    echo 'Masukan tidak valid';
                                                                }
                                                                ?>
                                                                <br>
                                                               <b>Waktu</b> : <?php
                                                               if($value->start_date==$value->end_date){
                                                                                        echo date('d-m-Y', strtotime($value->start_date));
                                                                                      }
                                                                                      else{
                                                               echo date('d-m-Y', strtotime($value->start_date)).' sampai '.date('d-m-Y', strtotime($value->end_date)); }?>
                                                               <br>
                                                               <b>Jumlah Anggota yang Ikut Serta</b> : <?= $value->jumlah_anggota.' Anggota. '; ?>
                                                            </p>
                                                            <!-- <a href="javascript:;" class="btn btn-circle green">Lihat Detail Jaldis</a> -->
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                    <?php
                                        }
                                        else{
                                    ?>
                                            <li class="mt-item">
                                                <div class="mt-timeline-icon bg-blue bg-font-blue border-grey-steel">
                                                    <i class="icon-calendar"></i>
                                                </div>
                                                <div class="mt-timeline-content">
                                                    <div class="mt-content-container bg-white border-grey-steel">
                                                        <div class="mt-title">
                                                            <h3 class="mt-content-title"><?= $value->tujuan; ?></h3>
                                                        </div>
                                                        <div class="mt-author">
                                                            <div class="mt-avatar">
                                                                <?php
                                                                if($value->transportasi=='Kereta Api'){
                                                                    echo '<img src="'.base_url().'assets/images/images2.png" />';
                                                                }
                                                                elseif ($value->transportasi=='Pesawat Terbang') {
                                                                    echo '<img src="'.base_url().'assets/images/images.png" />';
                                                                }
                                                                else{
                                                                    echo '<img src="'.base_url().'assets/images/images3.png" />';
                                                                }
                                                                ?>
                                                            </div>
                                                            <div class="mt-author-name">
                                                                <a href="javascript:;" class="font-blue-madison">Transportasi : <?= $value->transportasi; ?></a>
                                                            </div>
                                                            <!-- <div class="mt-author-notes font-grey-mint">11 March 2016 : 10:15 AM</div> -->
                                                        </div>
                                                        <div class="mt-content border-grey-steel">
                                                            <p><b>Katerogri Keperluan</b> : <?= $value->nama_keperluan; ?>
                                                                <br>
                                                                <b>Tujuan Perjalanan Dinas</b> : <?= $value->tujuan; ?>
                                                                <br>
                                                                <b>Alat Kelengkapan</b> : <?php
                                                                $alat_kelengkapan = $value->alat_kelengkapan;
                                                                $ak = substr($alat_kelengkapan, 0,1);
                                                                if($ak=='B'){
                                                                    $where1['id_badan'] = $alat_kelengkapan;
                                                                    $data_ak1 = $this->Main_model->getSelectedData('badan',$where1);
                                                                    foreach ($data_ak1 as $key => $value1) {
                                                                      echo $value1->nama_badan;
                                                                    }
                                                                }
                                                                elseif($ak=='P'){
                                                                    $where2['kode_pansus'] = $alat_kelengkapan;
                                                                    $data_ak2 = $this->Main_model->getSelectedData('pansus',$where2);
                                                                    foreach ($data_ak2 as $key => $value2) {
                                                                      echo $value2->nama_pansus;
                                                                    }
                                                                }
                                                                elseif($ak=='J'){
                                                                    $where4['kode_panja'] = $alat_kelengkapan;
                                                                    $data_ak4 = $this->Main_model->getSelectedData('panja',$where4);
                                                                    foreach ($data_ak4 as $key => $value4) {
                                                                      echo $value4->nama_panja;
                                                                    }
                                                                }
                                                                elseif($ak=='K'){
                                                                    $where3['id_komisi'] = $alat_kelengkapan;
                                                                    $data_ak3 = $this->Main_model->getSelectedData('komisi',$where3);
                                                                    foreach ($data_ak3 as $key => $value3) {
                                                                      echo $value3->nama_komisi;
                                                                    }
                                                                }
                                                                elseif($ak=='s'){
                                                                    echo 'DPRD';
                                                                }
                                                                elseif($ak=='a'){
                                                                    echo 'Anggota Setwan';
                                                                }
                                                                elseif($ak=='i'){
                                                                    echo 'Pimpinan';
                                                                }
                                                                else{
                                                                    echo 'Masukan tidak valid';
                                                                }
                                                                ?>
                                                                <br>
                                                               <b>Waktu</b> : <?php
                                                               if($value->start_date==$value->end_date){
                                                                                        echo date('d-m-Y', strtotime($value->start_date));
                                                                                      }
                                                                                      else{
                                                                                        echo date('d-m-Y', strtotime($value->start_date)).' sampai '.date('d-m-Y', strtotime($value->end_date)); }?>
                                                               <br>
                                                               <b>Jumlah Anggota yang Ikut Serta</b> : <?= $value->jumlah_anggota.' Anggota. '; ?>
                                                            </p>
                                                            <!-- <div class="btn-group pull-right">
                                                                <a href="javascript:;" class="btn btn-circle yellow">Lihat Detail Jaldis</a>
                                                            </div> -->
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                    <?php
                                        }
                                   
                                        $no++;
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                  