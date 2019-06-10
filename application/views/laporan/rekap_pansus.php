                    <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Rekap Data
                        <small>Pansus</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                     
                <table class="table table-bordered table-striped" id="rekap_p">
                    <thead>
                      <tr>
                        <th style="text-align: center" >#</th>
                        <th style="text-align: center" >Nama Pansus</th>
                        <th style="text-align: center" >Periode</th>
                        <th style="text-align: center" >Hasil Kerja</th>
                      </tr>
                    </thead>
                    <tbody>
                                  
                    <?php
                    $no=1;
                    foreach($rekap_pansus as $content)
                    {
                        foreach ($content as $key => $value ) {
                        $$key=$value;
                    }
                    ?>
                    <tr class="gradeX">
                        <td style="text-align: center"><?= $no++."."; ?></td>
                        <td><?php echo $nama_pansus; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($awal_periode)).' sampai '.date('d-m-Y', strtotime($akhir_periode)); ?></td>
                        <td style="text-align: center">
                            <a class="btn btn-circle btn-icon-only yellow" href="<?php echo site_url('Laporan/detail_pansus/'.$kode_pansus)?>" title="detail data">
                                <i class="icon-eye"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only green" href="<?php echo site_url('Laporan/pansus/'.$kode_pansus)?>" title="ubah data">
                                <i class="icon-pencil"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
               
                </table>
      <script>
      $(function () {
        $("#rekap_p").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
      </script>