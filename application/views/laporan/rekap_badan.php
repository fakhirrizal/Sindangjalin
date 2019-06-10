                    <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Rekap Data
                        <small>BADAN</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                     
                <table class="table table-bordered table-striped" id="rekap_badan">
                    <thead>
                      <tr>
                        <th style="text-align: center" >#</th>
                        <th style="text-align: center" >Nama BADAN</th>
                        <th style="text-align: center" >Periode</th>
                        <th style="text-align: center" >Hasil Kerja</th>      
                        <!-- <th style="text-align: center" >Status</th>                      
                        <th style="text-align: center" >Aksi</th> -->
                      </tr>
                    </thead>
                    <tbody>
                                  
                    <?php
                    $no=1;
                    foreach($rekap_badan as $content)
                    {
                        foreach ($content as $key => $value ) {
                        $$key=$value;
                    }
                    ?>
                    <tr class="gradeX">
                        <td style="text-align: center"><?= $no++."."; ?></td>
                        <td><?php echo $nama_badan; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($tanggal_buat)).' sampai '.date('d-m-Y', strtotime($tanggal_selesai)); ?></td>
                        <td style="text-align: center">
                            <a class="btn btn-circle btn-icon-only yellow" href="<?php echo site_url('Laporan/detail_badan/'.$id_badan)?>" title="detail data">
                                <i class="icon-eye"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only green" href="<?php echo site_url('Laporan/badan/'.$id_badan)?>" title="ubah data">
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
        $("#rekap_badan").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
      </script>