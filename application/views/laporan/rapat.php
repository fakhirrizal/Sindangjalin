                    <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Data
                        <small>Rapat</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                    <div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="portlet light portlet-fit bordered">
     
            <div class="portlet-body">
                <div class="table-responsive" style="overflow-y: hidden!important">
                              
                    <table class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%" id="tabel_rapat">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 15%"> Nomor Surat </th>
                                <th class="text-center" style="width: 18%"> Nama Kegiatan </th>
                                <th class="text-center" style="width: 18%"> Tempat </th>
                                <th class="text-center" style="width: 17%"> Tanggal  </th>
                                
                                <th class="text-center" style="width: 15%"> Laporan </th>
                            </tr>
                        </thead>
                        
                            <tbody>
                                <?php
              
                                foreach($data_rapat as $content)
                                {
                                    foreach ($content as $key => $value ) {
                                    $$key=$value;
                                }
                                if($tanggal_selesai>date('Y-m-d')){
                                                                echo '';
                                                            }
                                else{
                                ?>
                                <tr>
                                 
                                    <td><?php echo $nomor_surat; ?></td>
                                    <td><?php echo $acara; ?></td>
                                    <td><?php echo $keterangan; ?></td>
                                    <?php
                                    if($tanggal==$tanggal_selesai){
                                        echo '<td style="text-align: center;">'.date('d-m-Y', strtotime($tanggal)).'</td>';
                                    }
                                    else{
                                    ?>
                                    <td><?php echo date('d-m-Y', strtotime($tanggal)).' sampai '.date('d-m-Y', strtotime($tanggal_selesai)); ?></td>
                                    <?php } ?>
                                    <td class="text-left" style="text-align: center;" width="14%">
                                        
                                            <a class="dt-button buttons-print btn yellow btn-outline" href='<?= base_url() ?>Laporan/hasil_rapat/<?= $id ?>' tabindex="0" aria-controls="sample_1"><span>Lihat</span></a>
                                            
                                        
                                                    <!-- <div class="mt-action-buttons ">
                                                        <div class="btn-group">
                                                            <?php
                                                            if($tanggal_selesai>date('Y-m-d')){
                                                                echo '<button type="button" title="Hasil Rapat" class="btn btn-outline dark btn-sm" value="Detail"><i class="icon-doc"></i></button>';
                                                            }
                                                            else{
                                                            ?>
                                                                <button type="button" title="Hasil Rapat" class="btn btn-outline dark btn-sm" value="Detail" onclick="location.href='<?= base_url() ?>Rapat/hasil_rapat/<?= $id ?>'"><i class="icon-doc"></i></button>
                                                            <?php } ?> 
                                                               
                                                        </div>
                                                    </div> -->
                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        
                    </table>

                 <!--    Page 1 of 1
                    <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li></ul></div> -->

                </div>
            </div>
        </div>

    </div>
</div>

      <script>
      $(function () {
        $("#tabel_rapat").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
      </script>                 