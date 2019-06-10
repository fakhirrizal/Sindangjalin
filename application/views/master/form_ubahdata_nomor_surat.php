                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Ubah Data
                        <small>Nomor Surat</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->

        <!-- <h4>Form Ubah Data</h4>   -->  

      <div class="portlet light bordered">
                                
        <div class="portlet-body form">
          <form class="form-horizontal" method="post" action="<?php echo base_url()."Master/update_nomor_surat"; ?>">

                     
                <?php
                foreach ($nomor_surat as $key => $value) {
                ?>
                <input name="id" type="hidden" value="<?= $value->id; ?>">
                <h5>Nomor Surat</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-paper-clip"></i></span>

                    <input name="nomor_surat" type="text" value="<?= $value->nomor_surat; ?>" class="form-control" readonly>
                
                  </div>
                <h5>Yang Bertanda Tangan</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-user"></i></span>

                    <input name="ttd" type="text" required maxlength="100" value="<?= $value->ttd; ?>" class="form-control">
                
                  </div>
                <h5>NIP</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-info"></i></span>

                    <input name="nip" type="text" required maxlength="50" value="<?= $value->nip; ?>" class="form-control">
                
                  </div>
                <h5>Jabatan</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-briefcase"></i></span>

                    <input name="jabatan" type="text" required maxlength="100" value="<?= $value->jabatan; ?>" class="form-control">
                
                  </div>
                <h5>Keterangan</h5>        
                  <div class="input-group">
                    <span class="input-group-addon"><i class="icon-notebook"></i></span>
                    <input name="keterangan" type="text" required maxlength="50" value="<?= $value->keterangan; ?>" class="form-control">
                  </div>  
                <?php }             
                ?>
             

           
            <br>
            <div class="box-footer">

                    <button type="submit" class="btn btn-primary">Simpan</button>
 

            </div>

          </form>
        </div>
      </div>