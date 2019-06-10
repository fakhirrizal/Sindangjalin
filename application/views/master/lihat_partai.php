					<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Data
                        <small>Partai Politik</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                    <table class="table table-bordered table-striped" id="partai">
                    <thead>
                      <tr>
                        <th style="text-align: center" >#</th>
                        <th style="text-align: center" >Nama Partai</th>
                    
                 
                      
                        <th style="text-align: center" >Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                                  
                    <?php
                    $no=1;
                    foreach($partai as $content)
                    {
                        foreach ($content as $key => $value ) {
                        $$key=$value;
                    }
                   
                    ?>
                    <tr class="gradeX">
                        <td style="text-align: center"><?= $no++."."; ?></td>
                        <td><?php echo $nm_partai.' ('.$singkatan.')'; ?></td>
      
                  
                        <td style="text-align: center">
                            <a class="btn btn-circle btn-icon-only yellow" href="<?php echo site_url('Master/detail_partai/'.$id_partai)?>" title="detail data">
                                <i class="icon-eye"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only green" href="<?php echo site_url('Master/ubah_partai/'.$id_partai)?>" title="ubah data">
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only red" href="<?php echo site_url('Master/hapus_partai/'.$id_partai)?>" title="hapus data" onclick="return confirm('Anda yakin?')">
                                <i class="icon-trash"></i>
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
        $("#partai").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
      </script>