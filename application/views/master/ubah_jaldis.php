<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
        <script language="JavaScript">
            function selectAll(source) {
              checkboxes = document.getElementsByName('nama[]');
              for(var i in checkboxes)
                checkboxes[i].checked = source.checked;
            }
        </script>
        <script language="JavaScript">
            function selectAll2(source) {
              checkboxes = document.getElementsByName('nama2[]');
              for(var i in checkboxes)
                checkboxes[i].checked = source.checked;
            }
        </script>
        <script language="JavaScript">
            function selectAll3(source) {
              checkboxes = document.getElementsByName('nama3[]');
              for(var i in checkboxes)
                checkboxes[i].checked = source.checked;
            }
        </script>
<script type="text/javascript">

$(function(){

$.ajaxSetup({
type:"POST",
url: "<?php echo site_url('Anggota/alat_kelengkapan')?>",
cache: false,
});

$("#anggota_badan").change(function(){

var value=$(this).val();

$.ajax({
data:{id:value,modul:'anggota_badan'},
success: function(respond){
$("#anggota_ak").html(respond);
$("#ak").html('<input type="hidden" name="ak" value="'+value+'">');
}
})


});

$("#anggota_pansus").change(function(){

var value=$(this).val();

$.ajax({
data:{id:value,modul:'anggota_pansus'},
success: function(respond){
$("#anggota_ak").html(respond);
$("#ak").html('<input type="hidden" name="ak" value="'+value+'">');
}
})


});

$("#anggota_komisi").change(function(){

var value=$(this).val();

$.ajax({
data:{id:value,modul:'anggota_komisi'},
success: function(respond){
$("#anggota_ak").html(respond);
$("#ak").html('<input type="hidden" name="ak" value="'+value+'">');
}
})


});

$("#alat_kelengkapan").change(function(){

var value=$(this).val();
if(value==4){
$.ajax({
data:{id:value,modul:'semua_anggota'},
success: function(respond){
$("#anggota_ak").html(respond);
$("#ak").html('<input type="hidden" name="ak" value="semua">');
}
})
}

});

$("#alat_kelengkapan").change(function(){

var value=$(this).val();
if(value==4){
$.ajax({
data:{id:value,modul:'semua_anggota'},
success: function(respond){
$("#anggota_ak").html(respond);
$("#ak").html('<input type="hidden" name="ak" value="intek">');
}
})
}

});

})

</script>
<script>
$(document).ready(function(){
    $("#alat_kelengkapan").change(function(){
        var value=$(this).val();
        if(value==2){
            $('#sub1').show('fast');
            $('#sub2').hide('fast');
            $('#sub3').hide('fast');
        }
        else if(value==1){
            $('#sub2').show('fast');
            $('#sub1').hide('fast');
            $('#sub3').hide('fast');
        }
        else if(value==3){
            $('#sub3').show('fast');
            $('#sub1').hide('fast');
            $('#sub2').hide('fast');
        }
        else{
            $('#sub3').hide('fast');
            $('#sub1').hide('fast');
            $('#sub2').hide('fast');
        }
       
    });
});
</script>
					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Tambah Data
                        <small>Surat</small>
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
                                                <li>List anggota dewan disini sesuai dengan alat kelengkapan yang dipilih saat membuat data JalDis baru. </li>
                                                <!-- <li>Untuk tanggal kunjungan per masing-masing anggota silahkan diatur dihalaman setelah ini. </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" role="form" action="<?php echo site_url('Master/updateJaldis'); ?>" method="post" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <div id='ak'>
                                            </div>
                                            <h4>Tambah Dasar Hukum
                                                <a href="#" class="dropdown-toggle" id="TambahDH" title="Tambah" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-plus"></i></a> &nbsp;
                                                <a href="#" class="dropdown-toggle" id="HapusDH" title="Hapus" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-minus"></i></a>
                                            </h4>
                                            <script>
                                                $(document).ready(function() {
                                                    var iC = 0;
                                                    // CREATE A "DIV" ELEMENT AND DESIGN IT USING jQuery ".css()" CLASS.
                                                    var container = $(document.createElement('div'));
                                                    $('#TambahDH').click(function() {
                                                        if (iC <= 2) {

                                                            iC = iC + 1;

                                                            // ADD TEXTBOX.
                                                            $(container).append('<br/><div class="row" id=tb' + iC + ' ' + '><div class="col-md-12">                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">                                                          <div class="input-icon">                                                                                                                 <textarea name="dasar_hukum[]" class="form-control" maxlength="30000" required></textarea>                                                            <label for="form_control_1">Dasar Hukum</label>                                                            <span class="help-block">Tuliskan secara jelas.</span>                                                            <i class="icon-book-open"></i>                                                        </div>                                                    </div>                                                </div></div>');
                                                            // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
                                                            if (iC == 1) {

                                                                var divSubmit = $(document.createElement('div'));
                                                                $(divSubmit).append('<input type="hidden" class="bt"' +
                                                                    'onclick="GetTextValue()"' +
                                                                    'id=btSubmit value=Submit />');
                                                            }
                                                            // ADD BOTH THE DIV ELEMENTS TO THE "main" CONTAINER.
                                                            $('#ds').after(container, divSubmit);
                                                        }
                                                        // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON.
                                                        // (20 IS THE LIMIT WE HAVE SET)
                                                        else {
                                                            $(container).append('<label>Reached the limit</label><br>');
                                                            $('#TambahDH').attr('class', 'bt-disable');
                                                            $('#TambahDH').attr('disabled', 'disabled');
                                                        }
                                                    });
                                                    // REMOVE ONE ELEMENT PER CLICK.
                                                    $('#HapusDH').click(function() {
                                                        if (iC != 0) {
                                                            $('#tb' + iC).remove();
                                                            iC = iC - 1;
                                                        }
                                                        if (iC == 0) {
                                                            $(container)
                                                                .empty()
                                                                .remove();
                                                            $('#btSubmit').remove();
                                                            $('#TambahDH')
                                                                .removeAttr('disabled')
                                                                .attr('class="btn btn-clear"', 'bt');
                                                        }
                                                    });
                                                });
                                                // PICK THE VALUES FROM EACH TEXTBOX WHEN "SUBMIT" BUTTON IS CLICKED.
                                                var divValue, values = '';
                                            </script>
                                            
                                           
                                            <div class="row" id="ds">
                                                
                                            </div>
                                            <br>
                                            
                                            <table class="table">
                                                        <label>Dasar Hukum</label>
                                                          <tbody>
                                                            <?php
                                                            if(isset($dasar_hukum)){
                                                                $no = 1;
                                                                foreach($dasar_hukum as $row3)
                                                                {
                                                            ?>                                                    
                                                            <tr>                         
                                                                            <td><?php echo $no++; ?></td>
                                                                            <td><?php echo $row3->dasar_hukum;?></td>
                                                                            <td>
                                                                                <a class="btn btn-mini" data-toggle="modal" data-target="#ds<?php echo $row3->id; ?>"> 
                                                                                    <span class="glyphicon glyphicon-pencil"></span>     
                                                                                </a>
                                                                                <a class="btn btn-mini" href="<?php echo site_url('Master/hapus_dasarhukum/'.$row3->id.'/'.$row3->kode_jaldis); ?>" onclick="return confirm('Anda yakin?')"> 
                                                                                    <span><i class="glyphicon glyphicon-trash"></i></span>  
                                                                                </a>
                                                                            </td>
                                                            </tr>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                          </tbody>
                                            </table>
                                            
                                                <div class="form-group form-md-checkboxes">
                                         
                                                    <div class="col-md-12">
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="selectall3" onClick="selectAll3(this)" class="md-check">
                                                                <label for="selectall3">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Select All </label>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            <div class="form-group form-md-checkboxes">
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;List Pimpinan Anggota Dewan</label>
                                                
                                            </div>
                                            <div class="form-group form-md-checkboxes">
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($pimpinan as $key => $value) {
                                                    ?>
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="<?= 'p'.$value->id; ?>" name="nama3[]" value="<?= $value->id; ?>" class="md-check" <?php if(!empty($value->cek)){echo'checked';}else{echo'';}?>>
                                                            <label for="<?= 'p'.$value->id; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <!-- <div class="row">
                                            <?php
                                            foreach ($data_jaldis as $key => $value) {
                                            $alat_kelengkapan = substr($value->alat_kelengkapan, 0,1);
                                            ?>
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" id="alat_kelengkapan">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <option value="1" <?php if($alat_kelengkapan=='K'){echo'selected';}else{echo'';}?>>Komisi</option>
                                                                                                    <option value="2" <?php if($alat_kelengkapan=='B'){echo'selected';}else{echo'';}?>>Badan</option>
                                                                                                    <option value="3" <?php if($alat_kelengkapan=='P'){echo'selected';}else{echo'';}?>>PANSUS</option>
                                                                                                    <option value="5" <?php if($alat_kelengkapan=='i'){echo'selected';}else{echo'';}?>>Bintek</option>
                                                                                                    <option value="4" <?php if($alat_kelengkapan=='s'){echo'selected';}else{echo'';}?>>Semua Anggota Dewan</option>
                                                                                                </select>
                                                                                                <label for="form_control_1">Alat Kelengkapan</label>
                                                                                                <span class="help-block">Pilih sesuai kondisi</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>
                                                </div>
                                                <div class="col-md-6" id="sub1" <?php if($alat_kelengkapan=='B'){echo'';}else{echo'style="display:none"';}?>>
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" id="anggota_badan">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($data_badan as $key => $nilai) {
                                                                                                    ?>    
                                                                                                        <option  value="<?= $nilai->id_badan;?>" <?php if($value->alat_kelengkapan==$nilai->id_badan){echo'selected';}else{echo'';}?>><?=$nilai->nama_badan;?></option>
                                                                                                    <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih Badan</label>
                                                                                                <span class="help-block">Sesuaikan dengan kondisinya</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>                                 
                                                </div>
                                                <div class="col-md-6" id="sub2" <?php if($alat_kelengkapan=='K'){echo'';}else{echo'style="display:none"';}?>>
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" id="anggota_komisi">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($data_komisi as $key => $nilai) {
                                                                                                    ?>    
                                                                                                        <option  value="<?= $nilai->id_komisi;?>" <?php if($value->alat_kelengkapan==$nilai->id_komisi){echo'selected';}else{echo'';}?>><?=$nilai->nama_komisi;?></option>
                                                                                                    <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                    
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih Komisi</label>
                                                                                                <span class="help-block">Sesuaikan dengan kondisinya</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>                       
                                                </div>
                                                <div class="col-md-6" id="sub3" <?php if($alat_kelengkapan=='P'){echo'';}else{echo'style="display:none"';}?>>
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" id="anggota_pansus">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($data_pansus as $key => $nilai) {
                                                                                                    ?>    
                                                                                                        <option  value="<?= $nilai->kode_pansus;?>" <?php if($value->alat_kelengkapan==$nilai->kode_pansus){echo'selected';}else{echo'';}?>><?=$nilai->nama_pansus;?></option>
                                                                                                    <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                    
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih PANSUS</label>
                                                                                                <span class="help-block">Sesuaikan dengan kondisinya</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>                
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <br> -->
                                                <div class="form-group form-md-checkboxes">
                                         
                                                    <div class="col-md-12">
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
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
                                            <div class="form-group form-md-checkboxes">
                                            
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;List Anggota Dewan</label>
                                            </div>    
                                            <div class="form-group form-md-checkboxes" id="anggota_ak">    
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($dataanggota as $key => $value) {
                                                    ?>
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="<?= $value->id; ?>" name="nama[]" value="<?= $value->id; ?>" class="md-check" <?php if(!empty($value->cek)){echo'checked';}else{echo'';}?>>
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
                                         
                                                    <div class="col-md-12">
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="selectall2" onClick="selectAll2(this)" class="md-check">
                                                                <label for="selectall2">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Select All </label>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            <div class="form-group form-md-checkboxes">
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;List Anggota Sekretariat Dewan</label>
                                                
                                            </div>
                                            <div class="form-group form-md-checkboxes">
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($setwan as $key => $value) {
                                                    ?>
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="<?= $value->id; ?>" name="nama2[]" value="<?= $value->id; ?>" class="md-check" <?php if(!empty($value->cek)){echo'checked';}else{echo'';}?>>
                                                            <label for="<?= $value->id; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                            <?php
                                            foreach ($data_jaldis as $key => $value) {
                                            ?>
                                            <input type="hidden" name="kode_jaldis" value="<?= $value->kode_jaldis; ?>">
                                            <input type="hidden" name="alat_kelengkapan" value="<?= $value->alat_kelengkapan; ?>">
                                            <div class="form-group form-md-checkboxes">
                                                <label for="form_control_1">Waktu Perjalanan</label>
                                                <div>
                                                    <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                        <input type="date" class="form-control" name="from" value="<?= $value->start_date; ?>">
                                                        <span class="input-group-addon"> to </span>
                                                        <input type="date" class="form-control" name="to" value="<?= $value->end_date; ?>"> </div>
                                                    <!-- /input-group -->
                                                    <span class="help-block"> Select date range </span>
                                                </div>
                                              
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="tujuan" class="form-control" value="<?= $value->tujuan; ?>" maxlength="50" required>
                                                            <label for="form_control_1">Tempat Tujuan</label>
                                                            <span class="help-block">Tuliskan nama instansi.</span>
                                                            <i class="icon-pin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                          
                                                            <textarea name="keperluan" class="form-control" maxlength="30000" required><?= $value->keperluan; ?></textarea>
                                                            <label for="form_control_1">Materi</label>
                                                            <span class="help-block">Tuliskan materi apa yg akan jadi pembahasan secara jelas.</span>
                                                            <i class="icon-pencil"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            
                                            <div class="row" >
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" required name="kategori">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($kategori_keperluan as $key => $kp) {
                                                                                                        ?>
                                                                                                        <option value="<?= $kp->id; ?>" <?php if($kp->id==$value->kategori){echo'selected';}else{echo"";} ?>><?= $kp->nama_keperluan; ?></option>
                                                                                                        <?php
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Jenis Kegiatan</label>
                                                                                                <span class="help-block">Pilih salah satu jenis kegiatan yg akan dilaksanakan dalam perjalanan dinas.</span>
                                                                                                <i class="icon-grid"></i>
                                                                                            </div>
                                                                                        </div>       
                                                </div> 
                                               
                                            </div>
                                            <br>
                                            <div class="row" >
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" required name="transportasi">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <option value="Kendaraan Roda Empat" <?php if($value->transportasi=='Kendaraan Roda Empat'){echo'selected';}else{echo'';}?>>Kendaraan Roda Empat</option>
                                                                                                    <option value="Kereta Api" <?php if($value->transportasi=='Kereta Api'){echo'selected';}else{echo'';}?>>Kereta Api</option>
                                                                                                    <option value="Pesawat Terbang" <?php if($value->transportasi=='Pesawat Terbang'){echo'selected';}else{echo'';}?>>Pesawat Terbang</option>
                                                                                                </select>
                                                                                                <label for="form_control_1">Transportasi</label>
                                                                                                <span class="help-block">Tuliskan moda transportasi yang digunakan.</span>
                                                                                                <i class="icon-rocket"></i>
                                                                                            </div>
                                                                                        </div>       
                                                </div> 
                                               
                                            </div>
                                            <br>
                                            <?php } ?>
                                            <h4>Anggaran
                                                <a href="#" class="dropdown-toggle" id="Tambah" title="Tambah" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-plus"></i></a> &nbsp;
                                                <a href="#" class="dropdown-toggle" id="Hapus" title="Hapus" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-minus"></i></a>
                                            </h4>
                                            <script>
                                                $(document).ready(function() {
                                                    var iCi = 0;
                                                    // CREATE A "DIV" ELEMENT AND DESIGN IT USING jQuery ".css()" CLASS.
                                                    var container = $(document.createElement('div'));
                                                    $('#Tambah').click(function() {
                                                        if (iCi <= 2) {

                                                            iCi = iCi + 1;

                                                            // ADD TEXTBOX.
                                                            $(container).append('<br/><div class="row" id=tb' + iCi + ' ' + '><div class="col-md-6"><div class="form-group form-md-line-input has-error form-md-floating-label"><div class="input-icon"><select class="form-control edited" name="kode_rekening[]"><option value="">-- Pilih --</option><?php
                                                                                                                    foreach ($kode_rekening as $key => $value) {
                                                                                                                        echo '<option value="'.$value->id.'">'.$value->kode_rekening.'</option>';
                                                                                                                    }
                                                                                                                    ?></select><label for="form_control_1">Pilih Kode Rekening</label><span class="help-block">Sesuaikan dengan pembebanan anggaran</span><i class="icon-credit-card"></i></div></div></div></div>');
                                                            // SHOW SUBMIT BUTTON IF ATLEAST "1" ELEMENT HAS BEEN CREATED.
                                                            if (iCi == 1) {

                                                                var divSubmit = $(document.createElement('div'));
                                                                $(divSubmit).append('<input type="hidden" class="bt"' +
                                                                    'onclick="GetTextValue()"' +
                                                                    'id=btSubmit value=Submit />');
                                                            }
                                                            // ADD BOTH THE DIV ELEMENTS TO THE "main" CONTAINER.
                                                            $('#akun').after(container, divSubmit);
                                                        }
                                                        // AFTER REACHING THE SPECIFIED LIMIT, DISABLE THE "ADD" BUTTON.
                                                        // (20 IS THE LIMIT WE HAVE SET)
                                                        else {
                                                            $(container).append('<label>Reached the limit</label><br>');
                                                            $('#Tambah').attr('class', 'bt-disable');
                                                            $('#Tambah').attr('disabled', 'disabled');
                                                        }
                                                    });
                                                    // REMOVE ONE ELEMENT PER CLICK.
                                                    $('#Hapus').click(function() {
                                                        if (iCi != 0) {
                                                            $('#tb' + iCi).remove();
                                                            iCi = iCi - 1;
                                                        }
                                                        if (iCi == 0) {
                                                            $(container)
                                                                .empty()
                                                                .remove();
                                                            $('#btSubmit').remove();
                                                            $('#Tambah')
                                                                .removeAttr('disabled')
                                                                .attr('class="btn btn-clear"', 'bt');
                                                        }
                                                    });
                                                });
                                                // PICK THE VALUES FROM EACH TEXTBOX WHEN "SUBMIT" BUTTON IS CLICKED.
                                                var divValue, values = '';
                                            </script>
                                           
                                            <div class="row" id="akun">
                                                 
                                            </div>
                                            <br>         
                                            <table class="table">
                                                        <label>Kode Anggaran</label>
                                                          <tbody>
                                                            <?php
                                                            if(isset($akun)){
                                                                $no = 1;
                                                                foreach($akun as $row3)
                                                                {
                                                            ?>                                                    
                                                            <tr>                         
                                                                            <td><?php echo $no++; ?></td>
                                                                            <td><?php echo $row3->kr;?></td>
                                                                            <td>
                                                                                <a class="btn btn-mini" data-toggle="modal" data-target="#kr<?php echo $row3->id; ?>"> 
                                                                                    <span class="glyphicon glyphicon-pencil"></span>     
                                                                                </a>
                                                                                <a class="btn btn-mini" href="<?php echo site_url('Master/hapus_nomorakun/'.$row3->id.'/'.$row3->kode_jaldis); ?>" onclick="return confirm('Anda yakin?')"> 
                                                                                    <span><i class="glyphicon glyphicon-trash"></i></span>  
                                                                                </a>
                                                                            </td>
                                                            </tr>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                          </tbody>
                                            </table>
                                            <?php
                                            foreach ($data_jaldis as $key => $value) {
                                            ?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="date" name="tanggal_ttd" class="form-control" value="<?= $value->tanggal_ttd; ?>" required>
                                                            <label for="form_control_1">Tanggal Penanda Tanganan</label>
                                                            <span class="help-block">Format : tanggal/bulan/tahun.</span>
                                                            <i class="icon-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <?php } ?>
                                            <br>                             
                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Simpan</button>
                                            <button type="reset" class="btn default">Batal</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
<?php
foreach ($dasar_hukum as $key => $value) {
?>
<div class="modal fade" id="ds<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="text-align: center;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Form Ubah</h4>
                </div>
                <!-- memulai untuk konten dinamis -->
                <div class="modal-body" style="text-align: left;">
                    <form class="form-horizontal" role="form" action="<?php echo site_url('Master/ubah_dasarhukum'); ?>" method="post">
                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                                            <input type="hidden" name="kode_jaldis" value="<?php echo $value->kode_jaldis; ?>">
                                                            <textarea name="dasar_hukum" class="form-control" maxlength="30000" required><?php echo $value->dasar_hukum; ?></textarea>
                                                            <label for="form_control_1">Dasar Hukum</label>
                                                            <span class="help-block">Tuliskan secara jelas.</span>
                                                            <i class="icon-book-open"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                        </div>
                        <br>
                        <div class="box-footer">

                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Save Change</button>
                                            <button type="reset" data-dismiss="modal" class="btn default">Cancel</button>
                                        </div>
                        </div>
                    </form>
                </div>
                <!-- selesai konten dinamis -->
            </div>
        </div>
</div>
<?php } ?> 
<?php
foreach ($akun as $key => $value) {
?>
<div class="modal fade" id="kr<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="text-align: center;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Form Ubah</h4>
                </div>
                <!-- memulai untuk konten dinamis -->
                <div class="modal-body" style="text-align: left;">
                    <form class="form-horizontal" role="form" action="<?php echo site_url('Master/ubah_nomorakun'); ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                        <input type="hidden" name="kode_jaldis" value="<?php echo $value->kode_jaldis; ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" name="kode_rekening">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($kode_rekening as $key => $nilai) {
                                                                                                        ?>
                                                                                                        <option value="<?= $nilai->id; ?>" <?php if($nilai->id==$value->kode_rekening){echo'selected';}else{echo'';} ?>><?= $nilai->kode_rekening; ?></option>
                                                                                                    <?php }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih Kode Rekening</label>
                                                                                                <span class="help-block">Sesuaikan dengan pembebanan anggaran</span>
                                                                                                <i class="icon-credit-card"></i>
                                                                                            </div>
                                </div>
                            </div>             
                        </div>
                        <br>
                        <div class="box-footer">

                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Save Change</button>
                                            <button type="reset" data-dismiss="modal" class="btn default">Cancel</button>
                                        </div>
                        </div>
                    </form>
                </div>
                <!-- selesai konten dinamis -->
            </div>
        </div>
</div>
<?php } ?> 