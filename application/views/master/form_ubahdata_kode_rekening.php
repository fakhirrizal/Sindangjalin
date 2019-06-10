                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Ubah Data
                        <small>Kode Rekening</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->

        <!-- <h4>Form Ubah Data</h4>   -->  

      <div class="portlet light bordered">
                                
        <div class="portlet-body form">
          <form class="form-horizontal" method="post" action="<?php echo base_url()."Master/update_kode_rekening"; ?>">

                     
                <?php
                foreach ($kode_rekening as $key => $value) {
                ?>
                <input name="id" type="hidden" value="<?= $value->id; ?>">
                <h5>Nomor Surat</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-paper-clip"></i></span>

                    <input name="kode_rekening" type="text" value="<?= $value->kode_rekening; ?>" class="form-control">
                
                  </div>
                <h5>PPTK</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="icon-user"></i></span>

                    <input name="pptk" type="text" required maxlength="50" value="<?= $value->pptk; ?>" class="form-control">
                
                  </div>
                <h5>Jumlah Anggaran</h5>

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>

                    <input name="anggaran" onkeyup="validAngka(this)" type="text" required maxlength="20" value="<?= $value->anggaran; ?>" class="form-control">
                
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
<script language='javascript'>

                    function validAngka(a)

                    {

                        if(!/^[0-9]+$/.test(a.value))

                        {

                        a.value = a.value.substring(0,a.value.length-1000);

                        }

                    }

</script>  