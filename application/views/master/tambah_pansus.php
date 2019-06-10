<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
<script type="text/javascript">

$(function(){

$.ajaxSetup({
type:"POST",
url: "<?php echo site_url('Anggota/ambil_data')?>",
cache: false,
});

$("#anggota").change(function(){

var value=$(this).val();
if(value>0){
$.ajax({
data:{id:value},
success: function(respond){
$("#list_anggota").html(respond);
}
})
}

});

})

</script>
        <script language="JavaScript">
            function selectAll(source) {
              checkboxes = document.getElementsByName('nama[]');
              for(var i in checkboxes)
                checkboxes[i].checked = source.checked;
            }
        </script>
					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Tambah Data
                        <small>Pembentukan Pansus</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('gagal') ?>
              					 <div class="portlet-title">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Catatan</h3>
                                        </div>
                                        <div class="panel-body">
                                            <ul>
                                                <li>Untuk memasukkan daftar anggota silahkan pilih status anggota terlebih dahulu. </li>
                                                <li>Untuk jabatan/ posisi masing-masing anggota dalam Pansus bisa ditambahkan setelah menyelesaikan inputan data Pansus. </li>
                                                <li>Untuk penamaan tidak perlu ditambahi kata "Pansus"</li>
                                                <!-- <li> Uploaded files will be deleted automatically after
                                                    <strong>5 minutes</strong> (demo setting). </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" role="form" action="<?php echo site_url('Master/simpan_pansus'); ?>" method="post" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="nama_pansus" class="form-control" maxlength="200" required>
                                                            <label for="form_control_1">Nama Pansus</label>
                                                            <span class="help-block">Tidak usah menyertakan nama Pansus didepannya.</span>
                                                            <i class="icon-pin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <textarea name="perihal" class="form-control" maxlength="1000" required></textarea> 
                                                            <label for="form_control_1">Tujuan</label>
                                                            <span class="help-block">Paparkan alasan terkait pembentukan Pansus.</span>
                                                            <i class="icon-directions"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="form-group form-md-checkboxes">
                                            
                                                &nbsp;&nbsp;&nbsp;&nbsp;<label for="form_control_1">List Anggota</label>
                                                <div class="form-group form-md-checkboxes">
                                         
                                                    <div class="col-md-12">
                                                        <div class="md-checkbox-inline">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="md-checkbox">
                                                                <input type="checkbox" id="selectall" onClick="selectAll(this)" class="md-check">
                                                                <label for="selectall">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Select All </label>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($data_anggota as $key => $value) {
                                                    ?>
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="<?= $value->id; ?>" name="nama[]" value="<?= $value->id; ?>" class="md-check">
                                                            <label for="<?= $value->id; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>                                            
                                            <br>                                           
                                            <div class="form-group form-md-checkboxes">
                                                <label for="form_control_1">Periode Pansus</label>
                                                <div>
                                                    <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                        <input type="date" class="form-control" name="from" required>
                                                        <span class="input-group-addon"> to </span>
                                                        <input type="date" class="form-control" name="to" required> </div>
                                                    <!-- /input-group -->
                                                    <span class="help-block"> Select date range </span>
                                                </div>
                                              
                                            </div>
                                                                                                                                    
                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div> 