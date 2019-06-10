                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Data
                        <small>Kode Rekening</small>
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
                <a data-toggle="modal" data-target="#tambahdata" class="btn red btn-outline" >+ Tambah Data Kode Rekening</a>                
                <br>
                <br>
                <table class="table table-bordered table-striped" id="kode_rekening">
                    <thead>
                      <tr>
                        <th style="text-align: center" >#</th>
                        <th style="text-align: center" >Kode Rekening</th>
                        <th style="text-align: center" >PPTK</th>             
                        <th style="text-align: center" >Jumlah Anggaran</th>                                             
                        <th style="text-align: center" >Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                                  
                    <?php
                    $no=1;
                    foreach($kode_rekening as $content)
                    {
                        foreach ($content as $key => $value ) {
                        $$key=$value;
                    }
                   
                    ?>
                    <tr class="gradeX">
                        <td style="text-align: center"><?= $no++."."; ?></td>
                        <td><?php echo $kode_rekening; ?></td>
                        <td><?php echo $pptk; ?></td>   
                        <td><?php echo 'Rp '.number_format($anggaran,2); ?></td>                   
                        <td style="text-align: center">
                         
                            <a class="btn btn-circle btn-icon-only green" href="<?php echo site_url('Master/form_ubahdata_kode_rekening/'.$id)?>" title="ubah data">
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only red" href="<?php echo site_url('Master/delete_kode_rekening/'.$id)?>" title="hapus data" onclick="return confirm('Anda yakin?')">
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
        $("#kode_rekening").DataTable({
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

        <h4 class="modal-title" id="myModalLabel">Tambah Data Kode Rekening</h4>

      </div>

      <div class="modal-body">

       

        <div class="box box-primary">

            <!-- form start -->

          <form class="form-horizontal" method="post" action="<?php echo base_url()."Master/add_kode_rekening"; ?>">

                <div class="box-body">                 

             

                <h5>Kode Rekening</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-paper-clip"></i></span>

                    <input name="kode_rekening" type="text" required maxlength="50" class="form-control">
                
                  </div>
                <h5>PPTK</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-user"></i></span>

                    <input name="pptk" type="text" required maxlength="50" class="form-control">
                
                  </div>
                <h5>Jumlah Anggaran</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>

                    <input name="anggaran" onkeyup="validAngka(this)" type="text" required maxlength="20" class="form-control">
                
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
<script language='javascript'>

                    function validAngka(a)

                    {

                        if(!/^[0-9]+$/.test(a.value))

                        {

                        a.value = a.value.substring(0,a.value.length-1000);

                        }

                    }

</script>  