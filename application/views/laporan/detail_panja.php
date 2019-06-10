                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Data Detail
                        <small>Panja</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                    <?php
                    foreach ($detail_panja as $key => $row) {
                        echo '
                            <div class="m-heading-1 border-green m-bordered">
                                                            <h3>'.$row->nama_panja.'</h3>
                                                            <p style="text-align: justify;"> Perihal : '.$row->perihal.'. </p>
                                                            <p style="text-align: justify;"> Periode : '.date('d-m-Y', strtotime($row->awal_periode)).' sampai '.date('d-m-Y', strtotime($row->akhir_periode)).'. </p>
                                                            <p style="text-align: justify;"> Jumlah Anggota : '.count($data_panja).' orang. </p>
                                                            <p style="font-size: 11px">Berikut adalah hasil kerja dari dibentuknya Panja ini.</p>';
                                                            if(empty($row->hasil)){
                                                              echo '<p>Data masih kosong.</p>';
                                                            }
                                                            else{
                                                              echo '<p>'.$row->hasil.'</p>';
                                                            }
                                                            
                                                           
                            echo '</div>';
                        ;
                    }
                    ?>
                    
                            <div class="portlet box yellow">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-social-dropbox"></i>Anggota Panja (Jabatan di Panja)</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                        <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body" style="">
                                    <div class="panel-group accordion" id="accordion3">
                                        <?php
                                        foreach ($data_panja as $key => $value) {
                                        ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#<?= $value->id; ?>" aria-expanded="false"> <?= $value->nama.' ('.$value->jabatan.')'; ?> </a>
                                                </h4>
                                            </div>
                                            <div id="<?= $value->id; ?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">
                                                    <table class="table">

                                                      <tbody>

                                                      <tr>

                                                      <td> Nama Anggota </td>

                                                      <td> : </td>

                                                      <td><?php echo $value->nama; ?></td> 

                                                      </tr>  

                                                     
                                                      
                                                      <?php
                                                      
                                                        echo '
                                                         
                                                          <tr>
                                                          <td> Fraksi </td>
                                                          <td> : </td>
                                                          <td>'.$value->asalfraksi.'</td> 
                                                          </tr> 
                                                        ';
                                                     
                                                      ?>
                                                      <tr>

                                                      <td> Jabatan </td>

                                                      <td> : </td>

                                                      <td><?php echo $value->jabatan_anggota; ?></td> 

                                                      </tr>  
                                                      <tr>

                                                      <td> Email </td>

                                                      <td> : </td>

                                                      <td><?php echo $value->email; ?></td> 

                                                      </tr>  

                                                      <tr>

                                                      <td> Nomor HP </td>

                                                      <td> : </td>

                                                      <td><?php echo $value->no_hp; ?></td> 

                                                      </tr> 
                                                      </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>