                    <link href="<?=base_url('assets/pages/css/profile.min.css');?>" rel="stylesheet" type="text/css" />
                    <link href="<?=base_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css');?>" rel="stylesheet" type="text/css" />
                    <script src="<?=base_url('assets/global/plugins/jquery-validation/js/jquery.validate.min.js');?>" type="text/javascript"></script>
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
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
                        <small>Rapat</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
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
                                                <li>List anggota dewan disini sesuai dengan alat kelengkapan yang dipilih saat membuat data rapat baru. </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="portlet light bordered">
                                
                                <div class="portlet-body form">
                                    <form class="form-horizontal" role="form" action="<?php echo site_url('Rapat/update_data'); ?>" method="post" enctype='multipart/form-data'>
                                        <div class="form-body">
                                            <?php
                                            foreach ($data_rapat as $key => $value) {
                                            ?>
                                            <input type="hidden" name="id" value="<?= $value->id; ?>">
                                            <input type="hidden" name="kode_rapat" value="<?= $value->kode_rapat; ?>">
                                            <input type="hidden" name="alat_kelengkapan" value="<?= $value->alat_kelengkapan; ?>">
                                            <div class="row">
                                                <div class="col-md-2">
                                                <h4>Bukti Surat*</h4>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <span class="btn green btn-file">
                                                            <span class="fileinput-new" data-toggle="modal" data-target="#ubah_file"> Ubah File </span>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php
                                                    if($value->nama_file==NULL){
                                                        echo 'File tidak tersedia.';
                                                    }
                                                    else{
                                                        $ext3 = substr(strrchr($value->nama_file, '.'), 1);
                                                        if($ext3=='pdf'){
                                                            echo '<iframe src="'.base_url().'assets/surat_rapat/'.$value->nama_file.'" width="1027" height="500" frameborder="0" allowfullscreen scrolling="no"></iframe>';
                                                        }
                                                        else{
                                                            echo '<img src="'.base_url().'assets/surat_rapat/'.$value->nama_file.'" width="100%" height="100%">';
                                                        }
                                                    }
                                                    ?>
                                                    <!-- <iframe width="1027" height="500" frameborder="0" allowfullscreen scrolling="no" src="<?=base_url()?>assets/surat_rapat/<?= $value->nama_file; ?>"></iframe> -->
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" value="<?= $value->nomor_surat; ?>" name="nomor_surat" class="form-control" maxlength="20" required>
                                                            <label for="form_control_1">Nomor Surat</label>
                                                            <span class="help-block">Tuliskan nomor surat yang valid.</span>
                                                            <i class="icon-pin"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Tanggal</label>
                                                            <input type="date" name="tanggal" value="<?= $value->tanggal; ?>" class="form-control" required>
                                                            
                                                            <span class="help-block">Format : tanggal/bulan/tahun</span>
                                                            <i class="fa fa-calendar-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-warning form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Tanggal berakhir</label>
                                                            <input type="date" name="tanggal_selesai" value="<?= $value->tanggal_selesai; ?>" class="form-control" required>
                                                            
                                                            <span class="help-block">Format : tanggal/bulan/tahun</span>
                                                            <i class="fa fa-calendar-o"></i>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <br>
                                            <div class="row">
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Waktu mulai</label>
                                                            <input type="time" name="jam" value="<?= $value->jam; ?>" class="form-control" required>
                                                            
                                                            <span class="help-block">Format : 12 Jam</span>
                                                            <i class="icon-speedometer"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                                                        <div class="input-icon">
                                                            <label for="form_control_1">Waktu berakhir</label>
                                                            <input type="time" name="jam2" value="<?= $value->jam_berakhir; ?>" class="form-control" required>
                                                            
                                                            <span class="help-block">Format : 12 Jam</span>
                                                            <i class="icon-speedometer"></i>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-success form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="acara" value="<?= $value->acara; ?>" class="form-control" maxlength="1000" required>
                                                            <label for="form_control_1">Nama Kegiatan</label>
                                                            <span class="help-block">Deskripsikan secara lengkap dan jelas.</span>
                                                            <i class="icon-note"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="text" name="keterangan" value="<?= $value->keterangan; ?>" class="form-control" maxlength="100" required>
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
                                                          
                                                            <textarea name="materi" class="form-control" maxlength="1000" required><?= $value->materi; ?></textarea>
                                                            <label for="form_control_1">Materi</label>
                                                            <span class="help-block">Tuliskan materi yg akan disampaikan secara jelas.</span>
                                                            <i class="icon-pencil"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Pimpinan Rapat</label>
                                                        <div class="input-icon">
                                                            <i class="icon-user"></i>
                                                            <?php
                                                            foreach ($pimpinan as $key => $pmpnn) {
                                                            ?>
                                                            <input type="text" name="pimpinan" class="form-control" id="namaAnggota" onkeyup="cariAnggota(this.value);" value="<?= $pmpnn->nama.'-'.$pmpnn->id; ?>" onblur="pilih();" placeholder="Pilih salah satu nama yg akan memimpin rapat" onfocus="if(this.value=='Pencarian....') this.value='';" required=""><?php } ?> </div>
                                                        <div id="hasilPencarian" style="display: none;">
                                                            <div id="dataPencarian">
                                                                
                                                            </div>
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <br>
                                            <div class="form-group form-md-radios">
                                                <h4>Pilih Label</h4><label> *berguna untuk menandai kegiatan di kalender.</label>
                                                <div class="md-radio-inline">
                                                    <div class="md-radio">
                                                        <input type="radio" id="radio14" <?php if($value->warna=='#000000'){echo'checked';}else{echo'';} ?> name="warna" class="md-radiobtn" value="#000000">
                                                        <label for="radio14">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Hitam </label>
                                                    </div>
                                                    <div class="md-radio has-error">
                                                        <input type="radio" <?php if($value->warna=='#FF0000'){echo'checked';}else{echo'';} ?> id="radio15" name="warna" class="md-radiobtn" value="#FF0000">
                                                        <label for="radio15">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Merah </label>
                                                    </div>
                                                    <div class="md-radio has-warning">
                                                        <input type="radio" id="radio16" name="warna" <?php if($value->warna=='#FFFF00'){echo'checked';}else{echo'';} ?> class="md-radiobtn" value="#FFFF00">
                                                        <label for="radio16">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Kuning </label>
                                                    </div>
                                                    <div class="md-radio has-info">
                                                        <input type="radio" id="radio17" name="warna" class="md-radiobtn" <?php if($value->warna=='#0000FF'){echo'checked';}else{echo'';} ?> value="#0000FF">
                                                        <label for="radio17">
                                                            <span class="inc"></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Biru </label>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <br>
                                            <!-- <div class="row">
                                            <?php
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
                                                    foreach ($dataanggota as $key => $row) {
                                                    ?>
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="<?= 'ad'.$row->id; ?>" name="nama[]" value="<?= $row->id; ?>" class="md-check" <?php if(!empty($row->cek)){echo'checked';}else{echo'';}?>>
                                                            <label for="<?= 'ad'.$row->id; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $row->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
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
                                                    foreach ($peserta_skpd as $key => $value2) {
                                                    ?>
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="<?= 'p'.$value2->id; ?>" name="nama2[]" value="<?= $value2->id; ?>" class="md-check" <?php if(!empty($value2->cek)){echo'checked';}else{echo'';}?>>
                                                            <label for="<?= 'p'.$value2->id; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value2->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                            
                                            <br>
                                            <h4>Tambah peserta dari kalangan umum
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
                                                            $(container).append('<br/><div class="row" id=tb' + iC + ' ' + '><div class="col-md-12">                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">                                                          <div class="input-icon">                                                                                                                 <input name="nama3[]" class="form-control" onkeyup="validHuruf(this)" maxlength="200" required>                                    <label for="form_control_1">Nama</label>                                                            <span class="help-block">Tuliskan nama beserta gelar.</span>                                                            <i class="icon-user"></i>                                                        </div>                                                    </div>                                                </div></div>');
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
                                                        <label>Peserta dari kalangan umum</label>
                                                          <tbody>
                                                            <?php
                                                            if(isset($peserta_umum)){
                                                                $no = 1;
                                                                foreach($peserta_umum as $row3)
                                                                {
                                                            ?>                                                    
                                                            <tr>                         
                                                                            <td><?php echo $no++; ?></td>
                                                                            <td><?php echo $row3->anggota;?></td>
                                                                            <td>
                                                                                <a class="btn btn-mini" data-toggle="modal" data-target="#ds<?php echo $row3->id; ?>"> 
                                                                                    <span class="glyphicon glyphicon-pencil"></span>     
                                                                                </a>
                                                                                <a class="btn btn-mini" href="<?php echo site_url('Rapat/hapus_pesertaumum/'.$row3->id.'/'.$row3->kode_rapat); ?>" onclick="return confirm('Anda yakin?')"> 
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
                                            
                                            <?php } ?>
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
<div class="modal fade" id="ubah_file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="text-align: center;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Form Ubah</h4>
                </div>
                <!-- memulai untuk konten dinamis -->
                <div class="modal-body" style="text-align: left;">
                    <form class="form-horizontal" role="form" action="<?php echo site_url('Rapat/ubah_bukti'); ?>" enctype='multipart/form-data' method="post">
    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-md-line-input has-info form-md-floating-label">
                                    <input type="hidden" name="id_rapat" value="<?= $this->uri->segment(3); ?>">
                                    <input type="file" name="bukti_surat" class="buttonFinish buttonDisabled btn btn-default" required accept="application/pdf">                                                      
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
<?php
foreach ($peserta_umum as $key => $value) {
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
                    <form class="form-horizontal" role="form" action="<?php echo site_url('Rapat/ubah_pesertaumum'); ?>" method="post">
                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                            <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                                                            <input type="hidden" name="kode_rapat" value="<?php echo $value->kode_rapat; ?>">
                                                            <input name="nama" value="<?php echo $value->anggota; ?>" class="form-control" onkeyup="validHuruf(this)" maxlength="200" required>                                    
                                                            <label for="form_control_1">Nama</label>
                                                            <span class="help-block">Tuliskan nama beserta gelar.</span>
                                                            <i class="icon-user"></i>
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