                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Data
                        <small>Nomor Surat</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                    <?= $this->session->flashdata('gagal') ?>
                               
                                <!-- <div class="m-heading-1 border-green m-bordered">
                                    <h3>jQuery Validation Plugin</h3>
                                    <p> 
                                        
                                    </p>
                                </div> -->
                                <a data-toggle="modal" data-target="#tambahdata" class="btn red btn-outline" >+ Tambah Data Nomor Surat</a>
                  <br>
                  <br>
                  <!-- <?php
                  $no = 1;
                  foreach ($nomor_surat as $key => $value) {
                  ?>
                  <table class="table table-hover" >
                  <form class="form-horizontal" role="form" action="<?php echo site_url('Master/update_nomor_surat'); ?>" method="post">
                    <tr> 
                     <h5><?= $no++.'. '.$value->keterangan; ?>&nbsp;<a onclick="return confirm('Anda yakin?')" href="<?php echo site_url('Master/delete_nomor_surat/'.$value->id); ?>"><i class="icon-trash" title="Hapus data"></i></a></h5>
                    </tr>  
                    <tr>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon"><i class="icon-paper-clip"></i></span>
                          <input type="hidden" name="id" value="<?= $value->id; ?>">
                          <input name="nomor" type="text" required value="<?= $value->nomor_surat; ?>" maxlength="10" class="form-control">
                       </div>
                      </td>
                      <td style="text-align: left">
                        <button type="submit" class="btn btn-primary">Update</button>
                        
                      </td>
                    </tr>         
                  </form>          
                  </table>     
                  <?php } ?> -->
                <table class="table table-bordered table-striped" id="nomor_surat">
                    <thead>
                      <tr>
                        <th style="text-align: center" >#</th>
                        <th style="text-align: center" >Nomor Surat</th>
                        <th style="text-align: center" >Yang Bertanda Tangan</th>                                             
                        <th style="text-align: center" >Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                                  
                    <?php
                    $no=1;
                    foreach($nomor_surat as $content)
                    {
                        foreach ($content as $key => $value ) {
                        $$key=$value;
                    }
                   
                    ?>
                    <tr class="gradeX">
                        <td style="text-align: center"><?= $no++."."; ?></td>
                        <td><?php echo $nomor_surat.' ('.$keterangan.')'; ?></td>
                        <td><?php echo $ttd.' ('.$nip.')'; ?></td>                   
                        <td style="text-align: center">
                            <!-- <a class="btn btn-circle btn-icon-only yellow" href="<?php echo site_url('Anggota_legislatif/detail_data/'.$id)?>" title="detail data">
                                <i class="icon-eye"></i>
                            </a> -->
                            <a class="btn btn-circle btn-icon-only green" href="<?php echo site_url('Master/form_ubahdata_nomor_surat/'.$id)?>" title="ubah data">
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only red" href="<?php echo site_url('Master/delete_nomor_surat/'.$id)?>" title="hapus data" onclick="return confirm('Anda yakin?')">
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
        $("#nomor_surat").DataTable({
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

        <h4 class="modal-title" id="myModalLabel">Tambah Data Nomor Surat</h4>

      </div>

      <div class="modal-body">

       

        <div class="box box-primary">

            <!-- form start -->

          <form class="form-horizontal" method="post" action="<?php echo base_url()."Master/add_nomor_surat"; ?>">

                <div class="box-body">                 

             

                <h5>Nomor Surat</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-paper-clip"></i></span>

                    <input name="nomor_surat" type="text" required maxlength="10" class="form-control">
                
                  </div>
                <h5>Yang Bertanda Tangah</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-user"></i></span>

                    <input name="ttd" type="text" required maxlength="100" class="form-control">
                
                  </div>
                <h5>NIP</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-info"></i></span>

                    <input name="nip" onkeyup="validAngka(this)" type="text" required maxlength="50" class="form-control">
                
                  </div>
                <h5>Jabatan</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-briefcase"></i></span>

                    <input name="jabatan" type="text" required maxlength="100" class="form-control">
                
                  </div>
                <h5>Keterangan</h5>        
                  <div class="input-group">
                    <span class="input-group-addon"><i class="icon-notebook"></i></span>
                    <input name="keterangan" type="text" required maxlength="50" class="form-control">
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