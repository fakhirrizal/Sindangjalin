        <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>

                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Data
                        <small>Kategori Keperluan</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                    <?= $this->session->flashdata('gagal') ?>
                               
                                <!-- <div class="m-heading-1 border-green m-bordered">
                                    <h3>jQuery Validation Plugin</h3>
                                    <p> This jQuery plugin makes simple clientside form validation easy, whilst still offering plenty of customization options. For more info please check out
                                        <a data-toggle="modal" data-target="#tambahdata" class="btn red btn-outline" >+ Tambah Data Kode Rekening</a>
                                    </p>
                                </div> -->
                <a data-toggle="modal" data-target="#tambahdata" class="btn red btn-outline" >+ Tambah Data Kategori Keperluan</a>                
                <br>
                <br>
                <table class="table table-bordered table-striped" id="kk">
                    <thead>
                      <tr>
                        <th style="text-align: center" >#</th>
                        <th style="text-align: center" >Jenis Keperluan</th>                                            
                        <th style="text-align: center" >Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                                  
                    <?php
                    $no=1;
                    foreach($kategori_keperluan as $content)
                    {
                        foreach ($content as $key => $value ) {
                        $$key=$value;
                    }
                   
                    ?>
                    <tr class="gradeX">
                        <td style="text-align: center" width="5%"><?= $no++."."; ?></td>
                        <td><?php echo $nama_keperluan; ?></td>                 
                        <td style="text-align: center" width="10%">
                         
                            <a class="btn btn-circle btn-icon-only green" data-toggle="modal" data-target="#ubah<?= $id; ?>" title="ubah data">
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only red" href="<?php echo site_url('Master/hapus_keperluan/'.$id)?>" title="hapus data" onclick="return confirm('Anda yakin?')">
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
        $("#kk").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
      </script>
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Tambah Data Kategori Keperluan</h4>

      </div>

      <div class="modal-body">

       

        <div class="box box-primary">

            <!-- form start -->

          <form class="form-horizontal" method="post" action="<?php echo base_url()."Master/simpan_keperluan"; ?>">

                <div class="box-body">                 

             

                <h5>Jenis Keperluan</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-pencil"></i></span>

                    <input name="keperluan" type="text" required maxlength="100" class="form-control">
                
                  </div> 
                                          
                </div>

           
            <br>
            <div class="box-footer">

                    <button type="submit" class="btn btn-primary">Simpan</button>
 

            </div>

          </form>

        </div>







      </div>

      

    </div>

  </div>

</div> 
                  <?php
                    foreach($kategori_keperluan as $content)
                    {
                        foreach ($content as $key => $value ) {
                        $$key=$value;
                    }
                   
                  ?>
<div class="modal fade" id="ubah<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Tambah Data Kategori Keperluan</h4>

      </div>

      <div class="modal-body">

       

        <div class="box box-primary">

            <!-- form start -->

          <form class="form-horizontal" method="post" action="<?php echo base_url()."Master/ubah_keperluan"; ?>">

                <div class="box-body">                 

             
                <input name="id" type="hidden" value="<?= $id; ?>">
                <h5>Jenis Keperluan</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-pencil"></i></span>

                    <input name="keperluan" type="text" value="<?= $nama_keperluan; ?>" required maxlength="100" class="form-control">
                
                  </div>            
                </div>

           
            <br>
            <div class="box-footer">

                    <button type="submit" class="btn btn-primary">Simpan</button>
 

            </div>

          </form>

        </div>







      </div>

      

    </div>

  </div>

</div> 
<?php } ?>