                    
                    <script src="<?=base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>
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
                        <small>Rapat</small>
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
                                                <li>Ukuran maksimal file bukti surat adalah 4MB </li>
                                                <li>Ekstensi yang diizinkan adalah pdf, jpg, png, jpeg, dan bmp </li>
                                                <li>Untuk memilih anggota dewan silahkan pilih terdahulu alat kelengkapannya. </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" role="form" action="<?php echo site_url('Rapat/simpan_data'); ?>" method="post" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                <h4>Bukti Surat*</h4>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <span class="btn green btn-file">
                                                            <span class="fileinput-new"> Pilih berkas </span>
                                                            <span class="fileinput-exists"> Ganti</span>
                                                            <input type="file" name="bukti_surat" accept="application/pdf"> </span>
                                                        <span class="fileinput-filename"> </span> &nbsp;
                                                        <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="nomor_surat" class="form-control" maxlength="20" required>
                                                            <label for="form_control_1">Nomor Surat</label>
                                                            <span class="help-block">Tuliskan nomor surat yang valid.</span>
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
                                                            <input type="text" name="acara" class="form-control" maxlength="1000" required>
                                                            <label for="form_control_1">Nama Kegiatan</label>
                                                            <span class="help-block">Deskripsikan secara lengkap dan jelas.</span>
                                                            <i class="icon-note"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Tanggal</label>
                                                            <input type="date" name="tanggal" class="form-control" required>
                                                            
                                                            <span class="help-block">Format : tanggal/bulan/tahun</span>
                                                            <i class="fa fa-calendar-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Tanggal berakhir</label>
                                                            <input type="date" name="tanggal_selesai" class="form-control" required>
                                                            
                                                            <span class="help-block">Format : tanggal/bulan/tahun</span>
                                                            <i class="fa fa-calendar-o"></i>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Waktu mulai</label>
                                                            <input type="time" name="jam" class="form-control" required>
                                                            
                                                            <span class="help-block">Format : 12 Jam</span>
                                                            <i class="icon-speedometer"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- </div>
                                            <div class="row"> -->
                                                
                                                <!-- <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Waktu berakhir</label>
                                                            <input type="time" name="jam2" class="form-control" required>
                                                            
                                                            <span class="help-block">Format : 12 Jam</span>
                                                            <i class="icon-speedometer"></i>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="keterangan" class="form-control" maxlength="100" required>
                                                            <label for="form_control_1">Tempat</label>
                                                            <span class="help-block">Rincikan tempat pelaksanaan rapat.</span>
                                                            <i class="icon-pointer"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                          
                                                            <textarea name="materi" class="form-control" maxlength="1000" required></textarea>
                                                            <label for="form_control_1">Materi</label>
                                                            <span class="help-block">Tuliskan materi yg akan disampaikan secara jelas.</span>
                                                            <i class="icon-pencil"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            
                                            

                                            <!-- <div class="form-group form-md-radios">
                                                <h4>Pilih Label</h4><label> *berguna untuk menandai kegiatan di kalender.</label>
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="radio14" name="warna" class="md-radiobtn" value="#000000">
                                                        <label for="radio14">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Hitam </label>
                                                    </div>
                                                    <div class="md-radio has-error">
                                                        <input type="radio" id="radio15" name="warna" class="md-radiobtn" value="#FF0000" checked="">
                                                        <label for="radio15">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Merah </label>
                                                    </div>
                                                    <div class="md-radio has-warning">
                                                        <input type="radio" id="radio16" name="warna" class="md-radiobtn" value="#FFFF00">
                                                        <label for="radio16">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Kuning </label>
                                                    </div>
                                                    <div class="md-radio has-info">
                                                        <input type="radio" id="radio17" name="warna" class="md-radiobtn" value="#0000FF">
                                                        <label for="radio17">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Biru </label>
                                                    </div>
                                                </div>
                                            </div> -->
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Pimpinan Rapat</label>
                                                        <div class="input-icon">
                                                            <i class="icon-user"></i>
                                                            <input type="text" name="pimpinan" class="form-control" id="namaAnggota" onkeyup="cariAnggota(this.value);" onblur="pilih();" placeholder="Pilih salah satu nama yg akan memimpin rapat" onfocus="if(this.value=='Pencarian....') this.value='';" required=""> </div>
                                                        <div id="hasilPencarian" style="display: none;">
                                                            <div id="dataPencarian">
                                                                
                                                            </div>
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <h4>Peserta Rapat</h4>
                                            <br>
                                            <div class="row" >
                                          
                                                
                                           
                                                <div class="col-md-6">
                                                                                        <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                                                            <div class="input-icon">
                                                                                                <select class="form-control edited" name='stts_ak' id="alat_kelengkapan">
                                                                                                    <option value="">-- Pilih --</option>
                                                                                                    <option value="1">Komisi</option>
                                                                                                    <option value="2">Badan</option>
                                                                                                    <option value="3">Pansus</option>
                                                                                                    <option value="6">Panja</option>
                                                                                                    <option value="5">Pimpinan</option>
                                                                                                    <option value="4">DPRD</option>
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
                                            
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;List Anggota SKPD</label>
                                            </div>  
                                            <div class="form-group form-md-checkboxes">
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($data_skpd as $key => $value) {
                                                    ?>
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="<?= 'skpd'.$value->id; ?>" name="nama2[]" value="<?= $value->id; ?>" class="md-check">
                                                            <label for="<?= 'skpd'.$value->id; ?>">
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
                                            
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;Umum&nbsp;&nbsp;</label>
                                                <a href="#" class="dropdown-toggle" id="TambahDH" title="Tambah" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-plus"></i></a> &nbsp;
                                                <a href="#" class="dropdown-toggle" id="HapusDH" title="Hapus" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-minus"></i></a>
                                            </div>
                                            <script>
                                                $(document).ready(function() {
                                                    var iC = 0;
                                                    // CREATE A "DIV" ELEMENT AND DESIGN IT USING jQuery ".css()" CLASS.
                                                    var container = $(document.createElement('div'));
                                                    $('#TambahDH').click(function() {
                                                        if (iC <= 2) {

                                                            iC = iC + 1;

                                                            // ADD TEXTBOX.
                                                            $(container).append('<br/><div class="row" id=tb' + iC + ' ' + '><div class="col-md-12">                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">                                                          <div class="input-icon">                                                                                                                 <input name="nama3[]" class="form-control" onkeyup="validHuruf(this)" maxlength="200" required>                                    <label for="form_control_1">Nama</label>                                                            <span class="help-block">Tuliskan nama beserta gelar.</span>                                                            <i class="icon-user"></i>                                                        </div>                                                    </div>                                                </div></div>');
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
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                     
                                                            <input name="nama3[]" class="form-control" onkeyup="validHuruf(this)" maxlength="200" required>
                                                            <label for="form_control_1">Nama</label>
                                                            <span class="help-block">Tuliskan nama beserta gelar.</span>
                                                            <i class="icon-user"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            
                                            
                                            <div id="ak" style="display:none">
                                            </div>
                                        <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Simpan</button>
                                            <button type="reset" class="btn default">Batal</button>
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
<script language='javascript'>

                    function validHuruf(a)

                    {

                        if(!/^[a-z, A-Z.']+$/.test(a.value))

                        {

                        a.value = a.value.substring(0,a.value.length-1000);

                        }

                    }

</script>