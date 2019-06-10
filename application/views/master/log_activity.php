					<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Rekap
                        <small>Log Activity</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                          
                        <div class="col-md-12">
                            <div class="note note-danger note-bordered">
                                <h4 class="block">Catatan</h4>
                                <p> Untuk kebutuhan beban sistem, jika data telah banyak harap mengosongkan data dengan meng-klik icon dibawah ini. Jika data masih sedikit dan Anda akan mengosongkan, dipersilahkan.
                                    <a class="btn btn-circle btn-icon-only green" href="<?php echo site_url('Master/kosongkan_log/')?>" title="Kosongkan data">
                                        <i class="icon-trash"></i>
                                    </a>
                                </p>
                            </div>
                        </div>
                  <table class="table table-bordered table-striped" id="log_activity">
                    <thead>
                      <tr>
                        <th style="text-align: center" >#</th>
                        <th style="text-align: center" >Aktor</th>
                        <th style="text-align: center" >Keterangan</th>
                        <th style="text-align: center" >Waktu</th>
                      </tr>
                    </thead>
                    <tbody>
                                  
                    <?php
                    $no=1;
                    foreach($log_activity as $content)
                    {
                        foreach ($content as $key => $value ) {
                        $$key=$value;
                    }
                        
                        $data = explode(' ', $waktu);           
                    ?>
                    <tr class="gradeX">
                        <td style="text-align: center"><?= $no++."."; ?></td>
                        <td><?php echo $nama_lengkap; ?></td>
                        <td><?php echo $keterangan; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($data[0])).' pukul '.$data[1]; ?></td>
                       
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
               
                  </table>

      <script>
      $(function () {
        $("#log_activity").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
      </script>