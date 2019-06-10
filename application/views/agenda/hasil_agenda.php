<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
<link href="<?=base_url('assets/global/plugins/cubeportfolio/css/cubeportfolio.css');?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url('assets/pages/css/portfolio.min.css');?>" rel="stylesheet" type="text/css" />
<style type="text/css">
    #slider-wrapper{
            width: 940px;
            height: 470px;
            margin: 50px auto;
            position: relative;
            margin-bottom: 0px;
            background: rgba(0,0,0,0.5);
            overflow: hidden;
        }
        
                #s1{
                    padding: 6px;
                    background: #FFFFFF;
                    position: absolute;
                    left: 50%;
                    bottom: 25px;
                    margin-left: -36px;
                    border-radius: 20px;
                    opacity: 0.3;
                    cursor: pointer;
                    z-index: 999;
                }
                
                #s2{
                    padding: 6px;
                    background: #FFFFFF;
                    position: absolute;
                    left: 50%;
                    bottom: 25px;
                    margin-left: -12px;
                    border-radius: 20px;
                    opacity: 0.3;
                    cursor: pointer;
                    z-index: 999;
                }
                
                #s3{
                    padding: 6px;
                    background: #FFFFFF;
                    position: absolute;
                    left: 50%;
                    bottom: 25px;
                    margin-left: 12px;
                    border-radius: 20px;
                    opacity: 0.3;
                    cursor: pointer;
                    z-index: 999;
                }
                
                #s4{
                    padding: 6px;
                    background: #FFFFFF;
                    position: absolute;
                    left: 50%;
                    bottom: 25px;
                    margin-left: 36px;
                    border-radius: 20px;
                    opacity: 0.3;
                    cursor: pointer;
                    z-index: 999;
                }


                #s1:hover, #s2:hover, #s3:hover, #s4:hover{ opacity: 1;}
                
            .inner-wrapper{
                width: 940px;
                height: 470px;
                position: absolute;
                top: 0;
                left: 0;
                margin-bottom: 0px;
                overflow: hidden;
            }
                .control{ display: none;}
                
                #Slide1:checked ~ .overflow-wrapper{ margin-left: 0%; }
                #Slide2:checked ~ .overflow-wrapper{ margin-left: -100%; }
                #Slide3:checked ~ .overflow-wrapper{ margin-left: -200%; }
                #Slide4:checked ~ .overflow-wrapper{ margin-left: -300%; }
               
                
                #Slide1:checked + #s1 { opacity: 1; }
                #Slide2:checked + #s2 { opacity: 1; }
                #Slide3:checked + #s3 { opacity: 1; }
                #Slide4:checked + #s4 { opacity: 1; }
               
                
            .overflow-wrapper{
                width: 400%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                overflow-y: hidden;
                z-index: 1;
                -webkit-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                -o-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            
                .slide img{
                    width: 25%;
                    float: left;
                }
                
</style>
        <script language="JavaScript">
            function selectAll1(source) {
              checkboxes = document.getElementsByName('nama1[]');
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
<div class="portfolio-content">
    <div class="cbp-l-project-title">Hasil Rapat</div>
    <div class="cbp-l-project-subtitle">*silahkan perbaharui data setelah rapat, seperti kehadiran peserta dan kesimpulan dari rapat.</div>
    <!-- <div class="cbp-slider">
        <ul class="cbp-slider-wrap">
            <li class="cbp-slider-item">
                <a href="<?=base_url('assets/global/img/1200x900/13.jpg');?>" class="cbp-lightbox">
                    <img src="<?=base_url('assets/global/img/1200x900/13.jpg');?>" alt=""> </a>
            </li>
            <li class="cbp-slider-item">
                <a href="<?=base_url('assets/global/img/1200x900/14.jpg');?>" class="cbp-lightbox">
                    <img src="<?=base_url('assets/global/img/1200x900/14.jpg');?>" alt=""> </a>
            </li>
            <li class="cbp-slider-item">
                <a href="<?=base_url('assets/global/img/1200x900/01.jpg');?>" class="cbp-lightbox">
                    <img src="<?=base_url('assets/global/img/1200x900/01.jpg');?>" alt=""> </a>
            </li>
        </ul>
    </div> -->
    <?= $this->session->flashdata('sukses') ?>
    <?= $this->session->flashdata('gagal') ?>
    <div class="cbp-l-project-container">
        <?php
        foreach ($data_rapat as $key => $value) {
        ?>
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>Hasil Bahasan Rapat</span>
            </div>
            <div class="cbp-l-project-desc-text" style="text-align: justify;">
                <?php
                    if(empty($value->hasil_rapat)){
                        echo 'Belum ditambahkan hasil bahasan rapat';
                    }
                    else{
                        echo $value->hasil_rapat;   
                    }
                ?>
            </div>
        </div>
        <div class="cbp-l-project-details">
            <div class="cbp-l-project-details-title">
                <span>Data Rapat</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <li>
                    <strong>Nomor Surat</strong><?= $value->nomor_surat; ?></li>
                <li>
                    <strong>Nama Kegiatan</strong><?= $value->acara; ?></li>
                <li>
                    <strong>AKD</strong><?= $value->kategori; ?></li>
                <?php
                if($value->tanggal==$value->tanggal_selesai){
                    echo '<li>
                    <strong>Tanggal</strong>'.date('d-m-Y', strtotime($value->tanggal)).'</li>';
                }
                else{
                ?>
                <li>
                    <strong>Tanggal Mulai</strong><?= date('d-m-Y', strtotime($value->tanggal)); ?></li>
                <li>
                    <strong>Tanggal Selesai</strong><?= date('d-m-Y', strtotime($value->tanggal_selesai)); ?></li>
                <?php } ?>
                <li>
                    <strong>Jam</strong><?= $value->jam; ?></li>
                <li>
                    <strong>Tempat</strong><?= $value->keterangan; ?></li>
                <li>
                    <strong>Materi</strong><?= $value->materi; ?></li>
                <li>
                    <strong>Pimpinan Rapat</strong><?= $value->nama; ?></li>
            </ul>
            <a data-toggle="modal" data-target="#ubah_hasil" class="cbp-l-project-details-visit btn red uppercase">Ubah Data</a>
        </div>
        <?php } ?>
    </div>
    <div class="row">
        <h4 style="text-align: center;">Peserta - Anggota Dewan</h4>
        <div class="col-md-6">
            <div class="cbp-l-project-details-title">
                <span>Rencana Kedatangan</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $no = 1;
                foreach ($peserta_dewan as $key => $value) {
                    echo '<li><strong>Peserta '.$no.'</strong>'.$value->nama.'</li>';
                $no ++;
                }
                ?>
                <!-- <li>
                    <strong>Client</strong>John Doe</li>
                <li>
                    <strong>Date</strong>22 December 2013</li>
                <li>
                    <strong>Categories</strong>Logo, Graphic</li> -->
            </ul>

        </div>
        <div class="col-md-6">
            <div class="cbp-l-project-details-title">
                <span>Realisasi Kedatangan</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $no = 1;
                foreach ($peserta_dewan as $key => $value) {
                    if($value->setelah=='0'){
                        echo '';
                    }
                    else{
                        echo '<li><strong>Peserta '.$no.'</strong>'.$value->nama.'</li>';
                    $no ++;
                    }
                }
                ?>
            </ul>
            <a data-toggle="modal" data-target="#kehadiran_dewan" class="cbp-l-project-details-visit btn red uppercase">Ubah Data</a>
        </div>
    </div>
    <div class="row">
        <h4 style="text-align: center;">Peserta - SKPD</h4>
        <div class="col-md-6">
            <div class="cbp-l-project-details-title">
                <span>Rencana Kedatangan</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $no = 1;
                foreach ($peserta_skpd as $key => $value) {
                    echo '<li><strong>Peserta '.$no.'</strong>'.$value->nama.'</li>';
                $no ++;
                }
                ?>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="cbp-l-project-details-title">
                <span>Realisasi Kedatangan</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $no = 1;
                foreach ($peserta_skpd as $key => $value) {
                    if($value->setelah=='0'){
                        echo '';
                    }
                    else{
                        echo '<li><strong>Peserta '.$no.'</strong>'.$value->nama.'</li>';
                    $no ++;
                    }
                
                }
                ?>
            </ul>
            <a data-toggle="modal" data-target="#kehadiran_skpd" class="cbp-l-project-details-visit btn red uppercase">Ubah Data</a>
        </div>
    </div>
    <div class="row">
        <h4 style="text-align: center;">Peserta - Umum</h4>
        <div class="col-md-6">
            <div class="cbp-l-project-details-title">
                <span>Rencana Kedatangan</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $no = 1;
                foreach ($peserta_umum as $key => $value) {
                    echo '<li><strong>Peserta '.$no.'</strong>'.$value->anggota.'</li>';
                $no ++;
                }
                ?>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="cbp-l-project-details-title">
                <span>Realisasi Kedatangan</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $no = 1;
                foreach ($peserta_umum as $key => $value) {
                    if($value->setelah=='0'){
                        echo '';
                    }
                    else{
                        echo '<li><strong>Peserta '.$no.'</strong>'.$value->anggota.'</li>';
                    $no ++;
                    }
                
                }
                ?>
            </ul>
            <a data-toggle="modal" data-target="#kehadiran_umum" class="cbp-l-project-details-visit btn red uppercase">Ubah Data</a>
        </div>
    </div>
    <!-- <div class="cbp-l-project-container">
        <div class="cbp-l-project-related">
            <div class="cbp-l-project-desc-title">
                <span>Related Projects</span>
            </div>
            <ul class="cbp-l-project-related-wrap">
                <li class="cbp-l-project-related-item">
                    <a href="ajax-juicy-projects/project1.html" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                        <img src="<?=base_url('assets/global/img/600x600/19.jpg');?>" alt="">
                        <div class="cbp-l-project-related-title">Dashboard</div>
                    </a>
                </li>
                <li class="cbp-l-project-related-item">
                    <a href="ajax-juicy-projects/project3.html" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                        <img src="<?=base_url('assets/global/img/600x600/21.jpg');?>" alt="">
                        <div class="cbp-l-project-related-title">To-Do Dashboard</div>
                    </a>
                </li>
                <li class="cbp-l-project-related-item">
                    <a href="ajax-juicy-projects/project4.html" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                        <img src="<?=base_url('assets/global/img/600x600/65.jpg');?>" alt="">
                        <div class="cbp-l-project-related-title">Events and More</div>
                    </a>
                </li>
            </ul>
        </div>
    </div> -->
    <br>
    <br>
    <br> </div>
                    <div class="row">
                        <div class="col-md-12">
                        
                            <div class="portlet light form-fit bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-picture font-dark"></i>
                                        <span class="caption-subject font-dark sbold">File Foto</span>
                                    </div>
                                   
                                </div>
                                <div class="portlet-body form">
                                <!-- <div class="portfolio-content portfolio-1">
                                    <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
                                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn dark btn-outline uppercase"> All
                                            <div class="cbp-filter-counter">12</div>
                                        </div>
                                        <div data-filter=".identity" class="cbp-filter-item btn dark btn-outline uppercase"> Identity
                                            <div class="cbp-filter-counter">5</div>
                                        </div>
                                        <div data-filter=".web-design" class="cbp-filter-item btn dark btn-outline uppercase"> Web Design
                                            <div class="cbp-filter-counter">7</div>
                                        </div>
                                        <div data-filter=".graphic" class="cbp-filter-item btn dark btn-outline uppercase"> Graphic
                                            <div class="cbp-filter-counter">7</div>
                                        </div>
                                        <div data-filter=".logos" class="cbp-filter-item btn dark btn-outline uppercase"> Logo
                                            <div class="cbp-filter-counter">4</div>
                                        </div>
                                    </div>
                                    
                                </div> -->
                                    <div class="note note-info">
                                        <p>Ukuran maksimal file foto adalah 4MB </p>
                                        <p>Ekstensi yang diizinkan adalah jpg, jpeg, png, bmp </p>
                                    </div>
                                    <form action="<?php echo site_url('Rapat/foto_rapat'); ?>" enctype='multipart/form-data' class="form-horizontal form-bordered" method='post'>
                                        <input type="hidden" name="kode_rapat" value="<?= $this->uri->segment(3); ?>">
                                        
                                        <div class="form-body">
                                            <div class="form-group">
                                            <div class="row fileupload-buttonbar">
                                            <label class="control-label col-md-2">File Foto</label>
                                                <div class="col-md-3">
                                                   
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="foto[]" multiple="" required accept="image/*"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                   
                                               
                                                </div>
                                                <div class="col-md-3">
                                                   
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="foto[]" multiple="" accept="image/*"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                  
                                               
                                                </div>
                                                <div class="col-md-3">
                                                   
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="foto[]" multiple="" accept="image/*"> </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                  
                                               
                                                </div>
                                            </div>
                                            <div class="col-md-offset-2 col-md-10">
                                                    <button type="submit" class="btn red">
                                                        <i class="fa fa-check"></i> Submit</button>
                                                    <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                            
                                    </form>
                                  
                                </div>
                            </div>
                        
                        </div>
                    </div>    

<?php
if($data_foto==NULL){
                echo '<div class="cbp-l-project-subtitle">Galeri Foto Rapat (Tidak ada file foto)</div>';
            }
            else{
?>
<div class="cbp-l-project-subtitle">Galeri Foto Rapat</div>
<div id="slider-wrapper">
        <div class="inner-wrapper">
            <!-- <input checked type="radio" name="slide" class="control" id="Slide1"/>
                <label for="Slide1" id="s1"></label>
            <input type="radio" name="slide" class="control" id="Slide2"/>
                <label for="Slide2" id="s2"></label>
            <input type="radio" name="slide" class="control" id="Slide3"/>
                <label for="Slide3" id="s3"></label>
            <input type="radio" name="slide" class="control" id="Slide4"/>
                <label for="Slide4" id="s4"></label>
            <div class="overflow-wrapper">
                <a class="slide" href="#"><img src="<?=base_url('assets/global/img/1200x900/13.jpg');?>"/></a>
                <a class="slide" href="#"><img src="<?=base_url('assets/global/img/1200x900/14.jpg');?>"/></a>
                <a class="slide" href="#"><img src="<?=base_url('assets/global/img/1200x900/12.jpg');?>"/></a>
                <a class="slide" href="#"><img src="<?=base_url('assets/global/img/1200x900/11.jpg');?>"/></a>
            </div> -->
            <?php
            $no = 1;
            
                foreach ($data_foto as $key => $df) {
                    echo'<input checked type="radio" name="slide" class="control" id="Slide'.$no.'"/>
                    <label for="Slide'.$no.'" id="s'.$no.'"></label>';
                    $no++;
                }
                echo '<div class="overflow-wrapper">';
                foreach ($data_foto as $key => $df) {
                    echo '<a class="slide" href="#"><img src="'.base_url('assets/hasil_rapat/'.$df->nama_file).'"/></a>';
                }
                echo '</div>';
            
            ?>
</div>
<?php } ?>
<script src="<?=base_url('assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('assets/pages/scripts/portfolio-1.min.js');?>" type="text/javascript"></script>
<?php
                                            foreach ($data_rapat as $row) {
?>
<div class="modal fade" id="ubah_hasil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?php echo site_url('Rapat/update_hasil'); ?>">
            <input type="hidden" name="id" value="<?= $row->id; ?>">
            <div class="form-group form-md-line-input has-error form-md-floating-label">
                                                        <div class="input-icon">
                                                          
                                                            <textarea name="hasil" class="form-control" rows="3" maxlength="1000" required><?= $row->hasil_rapat; ?></textarea>
                                                            <label for="form_control_1">Hasil/ Kesimpulan</label>
                                                            <span class="help-block">&nbsp; &nbsp; &nbsp; &nbsp;Tuliskan secara jelas hasil/ kesimpulan dari rapat.</span>
                                                            <i class="icon-pencil"></i>
                                                        </div>
            </div>
            <br>
            <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="reset" class="btn default">Reset</button>
            </div>
          </form>
        </div>
      </div>     
    </div>
  </div>
</div> 
<?php } ?>

<div class="modal fade" id="kehadiran_dewan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?php echo site_url('Rapat/kehadiran_dewan'); ?>">
            
                 <div class="form-group form-md-checkboxes">
                                         
                                                    <div class="col-md-12">
                                                        <div class="md-checkbox-inline">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" id="selectall1" onClick="selectAll1(this)" class="md-check">
                                                                <label for="selectall1">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Select All </label>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            <div class="form-group form-md-checkboxes">
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;Berikut daftar peserta, jika ada yg tidak hadir silahkan tidak usah dicentang</label>
                                                
                                            </div>
                                            <div class="form-group form-md-checkboxes">
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($peserta_dewan as $key => $value) {

                                                    ?>
                                                    <input type="hidden" name="id" value="<?= $value->id; ?>">
                                                    <input type="hidden" name="kode_rapat" value="<?= $value->kode_rapat; ?>">
                                                    <input type="hidden" name="ak" value="<?= $value->alat_kelengkapan; ?>">
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="pd<?= $value->id_peserta; ?>" name="nama1[]" value="<?= $value->id_peserta; ?>" class="md-check" <?php if($value->setelah=='1'){echo'checked';}else{echo'';}?>>
                                                            <label for="pd<?= $value->id_peserta; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                            <br>
            <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="reset" class="btn default">Reset</button>
            </div>
          </form>
        </div>
      </div>     
    </div>
  </div>
</div> 
<div class="modal fade" id="kehadiran_skpd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?php echo site_url('Rapat/kehadiran_skpd'); ?>">
            
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
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;Berikut daftar peserta, jika ada yg tidak hadir silahkan tidak usah dicentang</label>
                                                
                                            </div>
                                            <div class="form-group form-md-checkboxes">
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($peserta_skpd as $key => $value) {

                                                    ?>
                                                    <input type="hidden" name="id" value="<?= $value->id; ?>">
                                                    <input type="hidden" name="kode_rapat" value="<?= $value->kode_rapat; ?>">
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="ps<?= $value->id_peserta; ?>" name="nama2[]" value="<?= $value->id_peserta; ?>" class="md-check" <?php if($value->setelah=='1'){echo'checked';}else{echo'';}?>>
                                                            <label for="ps<?= $value->id_peserta; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->nama; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                            <br>
            <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="reset" class="btn default">Reset</button>
            </div>
          </form>
        </div>
      </div>     
    </div>
  </div>
</div>
<div class="modal fade" id="kehadiran_umum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Form Ubah Data</h4>
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?php echo site_url('Rapat/kehadiran_umum'); ?>">
            
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
                                                <label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;Berikut daftar peserta, jika ada yg tidak hadir silahkan tidak usah dicentang</label>
                                                
                                            </div>
                                            <div class="form-group form-md-checkboxes">
                                                <div class="md-checkbox-inline">
                                                    <?php
                                                    foreach ($peserta_umum as $key => $value) {

                                                    ?>
                                                    <input type="hidden" name="id" value="<?= $value->id; ?>">
                                                    <input type="hidden" name="kode_rapat" value="<?= $value->kode_rapat; ?>">
                                                    <div class="col-md-3">
                                                        <div class="md-checkbox">
                                                            <input type="checkbox" id="pu<?= $value->id_peserta; ?>" name="nama3[]" value="<?= $value->id_peserta; ?>" class="md-check" <?php if($value->setelah=='1'){echo'checked';}else{echo'';}?>>
                                                            <label for="pu<?= $value->id_peserta; ?>">
                                                                <span class="inc"></span>
                                                                <span class="check"></span>
                                                                <span class="box"></span> <?= $value->anggota; ?> </label>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                                
                                            </div>
                                            <br>
            <div class="form-actions noborder">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="reset" class="btn default">Reset</button>
            </div>
          </form>
        </div>
      </div>     
    </div>
  </div>
</div>