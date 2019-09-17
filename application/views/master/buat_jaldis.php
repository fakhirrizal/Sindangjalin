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

$("#anggota_panja").change(function(){

var value=$(this).val();

$.ajax({
data:{id:value,modul:'anggota_panja'},
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
if(value==5){
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
<script type="text/javascript">
    // $(function() {
    //  $('#loading').ajaxStart(function(){
    //      $(this).fadeIn();
    //  }).ajaxStop(function(){
    //      $(this).fadeOut();
    //  });
    // });

    function cariAnggota(namaAnggota) {
        if(namaAnggota.length == 0) {
            $('#hasilPencarian').hide();
        } else {
            $.post("<?php echo base_url(); ?>Rapat/autocomplete", {kirimNama: ""+namaAnggota+""}, function(data){
                if(data.length >0) {
                    $('#hasilPencarian').fadeIn();
                    $('#dataPencarian').html(data);
                }
            });
        }
    } 
    
    function pilih(thisValue) {
        $('#namaAnggota').val(thisValue);
        //$('#tes').val(thisValue);
        setTimeout("$('#hasilPencarian').fadeOut();", 100);
    }
</script>
<script>
$(document).ready(function(){
    $("#alat_kelengkapan").change(function(){
        var value=$(this).val();
        if(value==2){
            $('#sub1').show('fast');
            $('#sub2').hide('fast');
            $('#sub3').hide('fast');
            $('#sub4').hide('fast');
        }
        else if(value==1){
            $('#sub2').show('fast');
            $('#sub1').hide('fast');
            $('#sub3').hide('fast');
            $('#sub4').hide('fast');
        }
        else if(value==3){
            $('#sub3').show('fast');
            $('#sub1').hide('fast');
            $('#sub2').hide('fast');
            $('#sub4').hide('fast');
        }
        else if(value==6){
            $('#sub4').show('fast');
            $('#sub1').hide('fast');
            $('#sub2').hide('fast');
            $('#sub3').hide('fast');
        }
        else{
            $('#sub3').hide('fast');
            $('#sub1').hide('fast');
            $('#sub2').hide('fast');
            $('#sub4').hide('fast');
        }
       
    });
});
</script>
					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Tambah Data
                        <small>Perjalanan Dinas</small>
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
                                                <li>Untuk memilih anggota dewan silahkan pilih terdahulu alat kelengkapannya. </li>
                                                <li>Untuk tanggal kunjungan per masing-masing anggota silahkan diatur dihalaman setelah ini. </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" role="form" action="<?php echo site_url('Master/simpan_jaldis'); ?>" method="post" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <div id='ak'>
                                            </div>
                                            <div class="row" >
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" required name="kategori">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($kategori_keperluan as $key => $value) {
                                                                                                        echo '<option value="'.$value->id.'">'.$value->nama_keperluan.'</option>';
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
                                            
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                          
                                                            <textarea name="keperluan" class="form-control" maxlength="30000" required></textarea>
                                                            <label for="form_control_1">Materi</label>
                                                            <span class="help-block">Tuliskan materi apa yg akan jadi pembahasan secara jelas.</span>
                                                            <i class="icon-pencil"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
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
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                     
                                                            <textarea name="dasar_hukum[]" class="form-control" maxlength="30000" required></textarea>
                                                            <label for="form_control_1">Dasar Hukum</label>
                                                            <span class="help-block">Tuliskan secara jelas.</span>
                                                            <i class="icon-book-open"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
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
                                                    foreach ($data_pimpinan as $key => $value) {
                                                    ?>
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="<?= 'p'.$value->id; ?>" name="nama3[]" value="<?= $value->id; ?>" class="md-check">
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
                                            <div class="row" >
                                          
                                                
                                           
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" name='stts_ak' id="alat_kelengkapan">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <option value="4">DPRD</option>

                                                                                                    <option value="5">Pimpinan</option>
                                                                                                    <option value="1">Komisi</option>
                                                                                                    <option value="2">Badan</option>
                                                                                                    <option value="3">Pansus</option>
                                                                                                    <option value="6">Panja</option>
                                                                                                    
                                                                                                </select>
                                                                                                <label for="form_control_1">Alat Kelengkapan</label>
                                                                                                <span class="help-block">Pilih sesuai kondisi</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>
                                                </div>
                                                <div class="col-md-6" id="sub1" style="display:none">
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" id="anggota_badan">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($data_badan as $key => $value) {
                                                                                                        echo '<option value="'.$value->id_badan.'">'.$value->nama_badan.'</option>';
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih Badan</label>
                                                                                                <span class="help-block">Sesuaikan dengan kondisinya</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>                                 
                                                </div>
                                                <div class="col-md-6" id="sub2" style="display:none">
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" id="anggota_komisi">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($data_komisi as $key => $value) {
                                                                                                        echo '<option value="'.$value->id_komisi.'">'.$value->nama_komisi.'</option>';
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih Komisi</label>
                                                                                                <span class="help-block">Sesuaikan dengan kondisinya</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>                       
                                                </div>
                                                <div class="col-md-6" id="sub3" style="display:none">
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" id="anggota_pansus">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($data_pansus as $key => $value) {
                                                                                                        echo '<option value="'.$value->kode_pansus.'">'.$value->nama_pansus.'</option>';
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih Pansus</label>
                                                                                                <span class="help-block">Sesuaikan dengan kondisinya</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>                
                                                </div>
                                                <div class="col-md-6" id="sub4" style="display:none">
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" id="anggota_panja">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($data_panja as $key => $value) {
                                                                                                        echo '<option value="'.$value->kode_panja.'">'.$value->nama_panja.'</option>';
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                                <label for="form_control_1">Pilih Panja</label>
                                                                                                <span class="help-block">Sesuaikan dengan kondisinya</span>
                                                                                                <i class="icon-layers"></i>
                                                                                            </div>
                                                                                        </div>                
                                                </div>
                                            </div>
                                            <br>
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
                                                            <input type="checkbox" id="<?= $value->id; ?>" name="nama2[]" value="<?= $value->id; ?>" class="md-check">
                                                            <label for="<?= $value->id; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Pimpinan Rombongan</label>
                                                        <div class="input-icon">
                                                            <i class="icon-user"></i>
                                                            <input type="text" name="pimpinan" class="form-control" id="namaAnggota" onkeyup="cariAnggota(this.value);" onblur="pilih();" placeholder="Pilih salah satu nama yg akan memimpin" onfocus="if(this.value=='Pencarian....') this.value='';" required=""> </div>
                                                        <div id="hasilPencarian" style="display: none;">
                                                            <div id="dataPencarian">
                                                                
                                                            </div>
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="tujuan" class="form-control" maxlength="1000" required>
                                                            <label for="form_control_1">Tempat Tujuan</label>
                                                            <span class="help-block">Tuliskan nama instansi.</span>
                                                            <i class="icon-pin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="form-group form-md-checkboxes">
                                                <label for="form_control_1">Waktu Perjalanan</label>
                                                <div>
                                                    <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                                        <input type="date" class="form-control" name="from">
                                                        <span class="input-group-addon"> to </span>
                                                        <input type="date" class="form-control" name="to"> </div>
                                                    <!-- /input-group -->
                                                    <span class="help-block"> Select date range </span>
                                                </div>
                                              
                                            </div>
                                            <br>
                                            <div class="row" >
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" required name="transportasi">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <option value="Kendaraan Roda Empat">Kendaraan Roda Empat</option>
                                                                                                    <option value="Kereta Api">Kereta Api</option>
                                                                                                    <option value="Pesawat Terbang">Pesawat Terbang</option>
                                                                                                </select>
                                                                                                <label for="form_control_1">Transportasi</label>
                                                                                                <span class="help-block">Tuliskan moda transportasi yang digunakan.</span>
                                                                                                <i class="icon-rocket"></i>
                                                                                            </div>
                                                                                        </div>       
                                                </div> 
                                               
                                            </div>
                                            <br>
                                            
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
                                                            $(container).append('<br/><div class="row" id=tb' + iCi + ' ' + '><div class="col-md-6"><div class="form-group form-md-line-input has-info form-md-floating-label"><div class="input-icon"><select class="form-control edited" name="kode_rekening[]"><option value="">-- Pilih --</option><?php
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
                                            <br>
                                            <div class="row" id="akun">
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" name="kode_rekening[]">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <?php
                                                                                                    foreach ($kode_rekening as $key => $value) {
                                                                                                        echo '<option value="'.$value->id.'">'.$value->kode_rekening.' (pptk : '.$value->pptk.')</option>';
                                                                                                    }
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
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Tanggal Penanda Tanganan</label>
                                                            <input type="date" name="tanggal_ttd" class="form-control" required>
                                                            
                                                            <span class="help-block">Format : tanggal/bulan/tahun.</span>
                                                            <i class="icon-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Simpan</button>
                                            <button type="reset" class="btn default">Batal</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>