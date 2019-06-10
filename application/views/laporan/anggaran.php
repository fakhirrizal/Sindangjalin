<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
<link href="<?=base_url('assets/global/plugins/cubeportfolio/css/cubeportfolio.css');?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url('assets/pages/css/portfolio.min.css');?>" rel="stylesheet" type="text/css" />

<div class="portfolio-content">
    
    <h3 style="text-align: center;">Rekapitulasi Anggaran Perjalanan Dinas Tahun <?= date('Y'); ?></h3>
   
    <?= $this->session->flashdata('sukses') ?>
    <?= $this->session->flashdata('gagal') ?>
    <div class="tabbable-custom ">
                                        <ul class="nav nav-tabs ">
                                            <li class="active">
                                                <a href="#tab_5_1" data-toggle="tab"> Rekapan per bulan </a>
                                            </li>
                                            <li>
                                                <a href="#tab_5_2" data-toggle="tab"> Rekapan per kode rekening </a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_5_1">
    <div class="cbp-l-project-container">
      
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>Januari</span>
            </div>
            <ul class="cbp-l-project-details-list">
                
                
                <?php
                $where_bulan = date('Y').'-01';
                                $q = "SELECT * FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $q2 = "SELECT count(id) as jum_jaldis, sum(anggaran) as jum_anggaran FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $data = $this->User_model->manualQuery($q)->result();
                                $data2 = $this->User_model->manualQuery($q2)->result();
                                    foreach ($data2 as $key => $value2) {
                                        echo '
                                        <li><strong>Total Anggaran Terpakai&nbsp; &nbsp; &nbsp; &nbsp;</strong>Rp. '.number_format($value2->jum_anggaran,2).' ('.$value2->jum_jaldis.' Perjalanan)</li>
                                        ';
                                    }
                                    foreach ($data as $key => $value) {
                                        
                                    }
                ?>
            </ul>
        </div>
       
       
    </div>
    <div class="cbp-l-project-container">
      
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>Februari</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $where_bulan = date('Y').'-02';
                                $q = "SELECT * FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $q2 = "SELECT count(id) as jum_jaldis, sum(anggaran) as jum_anggaran FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $data = $this->User_model->manualQuery($q)->result();
                                $data2 = $this->User_model->manualQuery($q2)->result();
                                    foreach ($data2 as $key => $value2) {
                                        echo '
                                        <li><strong>Total Anggaran Terpakai&nbsp; &nbsp; &nbsp; &nbsp;</strong>Rp. '.number_format($value2->jum_anggaran,2).' ('.$value2->jum_jaldis.' Perjalanan)</li>
                                        ';
                                    }
                                    foreach ($data as $key => $value) {
                                        
                                    }
                ?>
            </ul>
        </div>
       
       
    </div>
    <div class="cbp-l-project-container">
      
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>Maret</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $where_bulan = date('Y').'-03';
                                $q = "SELECT * FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $q2 = "SELECT count(id) as jum_jaldis, sum(anggaran) as jum_anggaran FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $data = $this->User_model->manualQuery($q)->result();
                                $data2 = $this->User_model->manualQuery($q2)->result();
                                    foreach ($data2 as $key => $value2) {
                                        echo '
                                        <li><strong>Total Anggaran Terpakai&nbsp; &nbsp; &nbsp; &nbsp;</strong>Rp. '.number_format($value2->jum_anggaran,2).' ('.$value2->jum_jaldis.' Perjalanan)</li>
                                        ';
                                    }
                                    foreach ($data as $key => $value) {
                                        
                                    }
                ?>
            </ul>
        </div>
       
       
    </div>
    
    <div class="cbp-l-project-container">
      
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>April</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $where_bulan = date('Y').'-04';
                                $q = "SELECT * FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $q2 = "SELECT count(id) as jum_jaldis, sum(anggaran) as jum_anggaran FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $data = $this->User_model->manualQuery($q)->result();
                                $data2 = $this->User_model->manualQuery($q2)->result();
                                    foreach ($data2 as $key => $value2) {
                                        echo '
                                        <li><strong>Total Anggaran Terpakai&nbsp; &nbsp; &nbsp; &nbsp;</strong>Rp. '.number_format($value2->jum_anggaran,2).' ('.$value2->jum_jaldis.' Perjalanan)</li>
                                        ';
                                    }
                                    foreach ($data as $key => $value) {
                                        
                                    }
                ?>
            </ul>
        </div>

       
    </div>
    <div class="cbp-l-project-container">
      
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>Mei</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $where_bulan = date('Y').'-05';
                                $q = "SELECT * FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $q2 = "SELECT count(id) as jum_jaldis, sum(anggaran) as jum_anggaran FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $data = $this->User_model->manualQuery($q)->result();
                                $data2 = $this->User_model->manualQuery($q2)->result();
                                    foreach ($data2 as $key => $value2) {
                                        echo '
                                        <li><strong>Total Anggaran Terpakai&nbsp; &nbsp; &nbsp; &nbsp;</strong>Rp. '.number_format($value2->jum_anggaran,2).' ('.$value2->jum_jaldis.' Perjalanan)</li>
                                        ';
                                    }
                                    foreach ($data as $key => $value) {
                                        
                                    }
                ?>
            </ul>
        </div>
       
       
    </div>
    <div class="cbp-l-project-container">
      
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>Juni</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $where_bulan = date('Y').'-06';
                                $q = "SELECT * FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $q2 = "SELECT count(id) as jum_jaldis, sum(anggaran) as jum_anggaran FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $data = $this->User_model->manualQuery($q)->result();
                                $data2 = $this->User_model->manualQuery($q2)->result();
                                    foreach ($data2 as $key => $value2) {
                                        echo '
                                        <li><strong>Total Anggaran Terpakai&nbsp; &nbsp; &nbsp; &nbsp;</strong>Rp. '.number_format($value2->jum_anggaran,2).' ('.$value2->jum_jaldis.' Perjalanan)</li>
                                        ';
                                    }
                                    foreach ($data as $key => $value) {
                                        
                                    }
                ?>
            </ul>
        </div>
       
       
    </div>
    <div class="cbp-l-project-container">
      
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>Juli</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $where_bulan = date('Y').'-07';
                                $q = "SELECT * FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $q2 = "SELECT count(id) as jum_jaldis, sum(anggaran) as jum_anggaran FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $data = $this->User_model->manualQuery($q)->result();
                                $data2 = $this->User_model->manualQuery($q2)->result();
                                    foreach ($data2 as $key => $value2) {
                                        echo '
                                        <li><strong>Total Anggaran Terpakai&nbsp; &nbsp; &nbsp; &nbsp;</strong>Rp. '.number_format($value2->jum_anggaran,2).' ('.$value2->jum_jaldis.' Perjalanan)</li>
                                        ';
                                    }
                                    foreach ($data as $key => $value) {
                                        
                                    }
                ?>
            </ul>
        </div>
       
       
    </div>
    <div class="cbp-l-project-container">
      
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>Agustus</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $where_bulan = date('Y').'-08';
                                $q = "SELECT * FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $q2 = "SELECT count(id) as jum_jaldis, sum(anggaran) as jum_anggaran FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $data = $this->User_model->manualQuery($q)->result();
                                $data2 = $this->User_model->manualQuery($q2)->result();
                                    foreach ($data2 as $key => $value2) {
                                        echo '
                                        <li><strong>Total Anggaran Terpakai&nbsp; &nbsp; &nbsp; &nbsp;</strong>Rp. '.number_format($value2->jum_anggaran,2).' ('.$value2->jum_jaldis.' Perjalanan)</li>
                                        ';
                                    }
                                    foreach ($data as $key => $value) {
                                        
                                    }
                ?>
            </ul>
        </div>
       
       
    </div>
    <div class="cbp-l-project-container">
      
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>September</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $where_bulan = date('Y').'-09';
                                $q = "SELECT * FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $q2 = "SELECT count(id) as jum_jaldis, sum(anggaran) as jum_anggaran FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $data = $this->User_model->manualQuery($q)->result();
                                $data2 = $this->User_model->manualQuery($q2)->result();
                                    foreach ($data2 as $key => $value2) {
                                        echo '
                                        <li><strong>Total Anggaran Terpakai&nbsp; &nbsp; &nbsp; &nbsp;</strong>Rp. '.number_format($value2->jum_anggaran,2).' ('.$value2->jum_jaldis.' Perjalanan)</li>
                                        ';
                                    }
                                    foreach ($data as $key => $value) {
                                        
                                    }
                ?>
            </ul>
        </div>
       
       
    </div>
    <div class="cbp-l-project-container">
      
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>Oktober</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $where_bulan = date('Y').'-10';
                                $q = "SELECT * FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $q2 = "SELECT count(id) as jum_jaldis, sum(anggaran) as jum_anggaran FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $data = $this->User_model->manualQuery($q)->result();
                                $data2 = $this->User_model->manualQuery($q2)->result();
                                    foreach ($data2 as $key => $value2) {
                                        echo '
                                        <li><strong>Total Anggaran Terpakai&nbsp; &nbsp; &nbsp; &nbsp;</strong>Rp. '.number_format($value2->jum_anggaran,2).' ('.$value2->jum_jaldis.' Perjalanan)</li>
                                        ';
                                    }
                                    foreach ($data as $key => $value) {
                                        
                                    }
                ?>
            </ul>
        </div>
       
       
    </div>
    <div class="cbp-l-project-container">
      
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>November</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $where_bulan = date('Y').'-11';
                                $q = "SELECT * FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $q2 = "SELECT count(id) as jum_jaldis, sum(anggaran) as jum_anggaran FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $data = $this->User_model->manualQuery($q)->result();
                                $data2 = $this->User_model->manualQuery($q2)->result();
                                    foreach ($data2 as $key => $value2) {
                                        echo '
                                        <li><strong>Total Anggaran Terpakai&nbsp; &nbsp; &nbsp; &nbsp;</strong>Rp. '.number_format($value2->jum_anggaran,2).' ('.$value2->jum_jaldis.' Perjalanan)</li>
                                        ';
                                    }
                                    foreach ($data as $key => $value) {
                                        
                                    }
                ?>
            </ul>
        </div>
       
       
    </div>
    <div class="cbp-l-project-container">
      
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>Desember</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <?php
                $where_bulan = date('Y').'-12';
                                $q = "SELECT * FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $q2 = "SELECT count(id) as jum_jaldis, sum(anggaran) as jum_anggaran FROM `jaldis` WHERE `end_date` LIKE '%".$where_bulan."%'";
                                $data = $this->User_model->manualQuery($q)->result();
                                $data2 = $this->User_model->manualQuery($q2)->result();
                                    foreach ($data2 as $key => $value2) {
                                        echo '
                                        <li><strong>Total Anggaran Terpakai&nbsp; &nbsp; &nbsp; &nbsp;</strong>Rp. '.number_format($value2->jum_anggaran,2).' ('.$value2->jum_jaldis.' Perjalanan)</li>
                                        ';
                                    }
                                    foreach ($data as $key => $value) {
                                        
                                    }
                ?>
            </ul>
        </div>
       
       
    </div>
                                            </div>
                                            <div class="tab-pane" id="tab_5_2">
    <?php
   
        $where_tahun = date('Y');
        $query_anggaran = "SELECT a.*,(select sum(b.anggaran) from jaldis b where b.kategori=a.id and b.end_date like '%".$where_tahun."%') as terpakai,(select count(b.anggaran) from jaldis b where b.kategori=a.id and b.end_date like '%".$where_tahun."%') as jumlah_perjalanan from kode_rekening a where a.status='1'";
        $total_anggaran = $this->User_model->manualQuery($query_anggaran)->result();
   
        foreach ($total_anggaran as $ta) {            
                $sisa = ($ta->anggaran)-($ta->terpakai);
                
                if($sisa==$ta->anggaran){
                    echo '<h4>Kode rekening <b>'.$ta->kode_rekening.'</b> ('.$ta->pptk.')</h4>';
                    echo 'Dana belum terpakai, masih Rp '.number_format($ta->anggaran,2).'<br>';
                    echo 'Jumlah perjalanan = 0x.<br>';
                }
                else{
                    echo '<h4>Kode Rekening <b>'.$ta->kode_rekening.'</b> ('.$ta->pptk.')</h4>';
                    echo 'Sisa anggaran = Rp '.number_format($sisa,2).'<br>'; 
                    echo 'Jumlah perjalanan = '.$ta->jumlah_perjalanan.'x.<br>';
                }
        }
     
    ?>
                                            </div>
                                        </div>
    </div>
    
    
</div>
   



<script src="<?=base_url('assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('assets/pages/scripts/portfolio-1.min.js');?>" type="text/javascript"></script>
