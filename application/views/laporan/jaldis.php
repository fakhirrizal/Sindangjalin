<style>
@import url(https://fonts.googleapis.com/css?family=Varela+Round);

html, body { background: #333 url("https://codepen.io/images/classy_fabric.png"); }

.slides {
    padding: 0;
    width: 609px;
    height: 420px;
    display: block;
    margin: 0 auto;
    position: relative;
}

.slides * {
    user-select: none;
    -ms-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -webkit-touch-callout: none;
}

.slides input { display: none; }

.slide-container { display: block; }

.slide {
    top: 0;
    opacity: 0;
    width: 609px;
    height: 420px;
    display: block;
    position: absolute;

    transform: scale(0);

    transition: all .7s ease-in-out;
}

.slide img {
    width: 100%;
    height: 100%;
}

.nav label {
    width: 200px;
    height: 100%;
    display: none;
    position: absolute;

      opacity: 0;
    z-index: 9;
    cursor: pointer;

    transition: opacity .2s;

    color: #FFF;
    font-size: 156pt;
    text-align: center;
    line-height: 380px;
    font-family: "Varela Round", sans-serif;
    background-color: rgba(255, 255, 255, .3);
    text-shadow: 0px 0px 15px rgb(119, 119, 119);
}

.slide:hover + .nav label { opacity: 0.5; }

.nav label:hover { opacity: 1; }

.nav .next { right: 0; }

input:checked + .slide-container  .slide {
    opacity: 1;

    transform: scale(1);

    transition: opacity 1s ease-in-out;
}

input:checked + .slide-container .nav label { display: block; }

.nav-dots {
    width: 100%;
    bottom: 9px;
    height: 11px;
    display: block;
    position: absolute;
    text-align: center;
}

.nav-dots .nav-dot {
    top: -5px;
    width: 11px;
    height: 11px;
    margin: 0 4px;
    position: relative;
    border-radius: 100%;
    display: inline-block;
    background-color: rgba(0, 0, 0, 0.6);
}

.nav-dots .nav-dot:hover {
    cursor: pointer;
    background-color: rgba(0, 0, 0, 0.8);
}

input#img-1:checked ~ .nav-dots label#img-dot-1,
input#img-2:checked ~ .nav-dots label#img-dot-2,
input#img-3:checked ~ .nav-dots label#img-dot-3,
input#img-4:checked ~ .nav-dots label#img-dot-4,
input#img-5:checked ~ .nav-dots label#img-dot-5,
input#img-6:checked ~ .nav-dots label#img-dot-6 {
    background: rgba(0, 0, 0, 0.8);
}
</style>        
<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>        
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Laporan
                        <small>Perlanan Dinas DPRD</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>    
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <ul class="nav nav-tabs tabs-left">
                                                <li class="active">
                                                    <a href="#tab_6_1" data-toggle="tab"> KOMISI </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_6_2" data-toggle="tab"> BADAN </a>
                                                </li>
                                              
                                                <li>
                                                    <a href="#tab_6_3" data-toggle="tab"> PANSUS </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_6_6" data-toggle="tab"> PANJA </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_6_5" data-toggle="tab"> PIMPINAN </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_6_4" data-toggle="tab"> DPRD </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_6_1">
                                                    <div class="alert alert-info no-margin margin-top-10"> Note! Disini merupakan rekapan dari alat kelengkapan Komisi. </div>
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-title tabbable-line">
                                                          
                                                            <ul class="nav nav-tabs">
                                                                <?php
                                                                $no = 1;
                                                                foreach ($komisi as $key => $value) {
                                                                    if($no==1){
                                                                        echo '
                                                                        <li class="active">
                                                                            <a href="#'.$value->id_komisi.'" data-toggle="tab" aria-expanded="true"> '.$value->nama_komisi.' </a>
                                                                        </li>';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                        <li class="">
                                                                            <a href="#'.$value->id_komisi.'" data-toggle="tab" aria-expanded="true"> '.$value->nama_komisi.' </a>
                                                                        </li>';
                                                                    }
                                                                    $no++;
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="tab-content">
                                                                <?php
                                                                $no = 1;
                                                                foreach ($komisi as $key => $value) {
                                                                    $q = "SELECT a.*,b.nama,c.nama_keperluan from jaldis a left join anggota b on a.pimpinan=b.id left join kategori_keperluan c on a.kategori=c.id where a.alat_kelengkapan='".$value->id_komisi."'";
                                                                    
                                                                    $data = $this->User_model->manualQuery($q)->result();
                                                                    
                                                                    if($no==1){
                                                                        echo '
                                                                        <div class="tab-pane active" id="'.$value->id_komisi.'">';
                                                                            foreach($data as $row)
                                                                            {
                                                                                $q2 = "SELECT a.*,b.kode_rekening as kr from akun a left join kode_rekening b on a.kode_rekening=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q3 = "SELECT * from dasar_hukum where kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q4 = "SELECT * from detail_jaldis a left join anggota b on a.id_anggota=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $akun = $this->User_model->manualQuery($q2)->result();
                                                                                $dasar_hukum = $this->User_model->manualQuery($q3)->result();
                                                                                $anggota = $this->User_model->manualQuery($q4)->result();
                                                                                                          $tanggal1 = new DateTime($row->start_date);
                                                                                                          $tanggal2 = new DateTime($row->end_date);
                                                                                                           
                                                                                                          $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12">                
                                                                                    <table class="table">
                                                                                      <tbody>
                                                                                      <tr>
                                                                                      <td> Nama Kegiatan </td>
                                                                                   
                                                                                      <td><?php echo $row->nama_keperluan; ?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Waktu </td>
                                                                                     
                                                                                      <td><?php
                                                                                      if($perbedaan=='1'){
                                                                                        echo date('d-m-Y', strtotime($row->start_date));
                                                                                      }
                                                                                      else{
                                                                                      echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)';
                                                                                      }?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Tempat Tujuan </td>
                                                                                   
                                                                                      <td><?php echo $row->tujuan; ?></td> 
                                                                                      </tr> 

                                                                                      <tr>
                                                                                      <td> Jumlah Peserta </td>
                                                                                     
                                                                                      <td><?php echo count($anggota).' Anggota'; ?></td> 
                                                                                      </tr> 

                                                                                      <!-- <tr>
                                                                                      <td> Transportasi yang digunakan </td>
                                                                                  
                                                                                      <td><?php echo $row->transportasi; ?></td> 
                                                                                      </tr>  -->

                                                                                      <!-- <?php
                                                                                      if(isset($akun)){
                                                                                        $i = 0;
                                                                                        foreach($akun as $akn)

                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Akun </td>
                                                                                           
                                                                                              <td>'.$akn->kr.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                          
                                                                                          <td>'.$akn->kr.'</td>
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?>    -->

                                                                                      <tr>
                                                                                      <td> Materi </td>
                                                                                      
                                                                                      <td><?php echo $row->keperluan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Pimpinan Rombongan </td>
                                                                                      
                                                                                      <td><?php echo $row->nama; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Diterima oleh </td>
                                                                                      
                                                                                      <td><?php echo $row->diterima; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Hasil </td>
                                                                                      
                                                                                      <td><?php echo $row->catatan; ?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Dukungan Anggaran </td>
                                                                                      
                                                                                      <td><?php
                                                                                      if($row->anggaran==NULL){
                                                                                        echo 'Rp 0.00';
                                                                                      }
                                                                                      else{
                                                                                        echo 'Rp '.number_format($row->anggaran,2);
                                                                                      }
                                                                                      ?></td> 
                                                                                      </tr> 
                                                                                      <!-- <?php
                                                                                      if(isset($dasar_hukum)){
                                                                                        $i = 0;
                                                                                        foreach($dasar_hukum as $dh)
                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Dasar Hukum </td>
                                                                                             
                                                                                              <td>'.$dh->dasar_hukum.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                     
                                                                                          <td>'.$dh->dasar_hukum.'</td> 
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->

                                                                                       
                                                                                      <tr>
                                                                                    
                                                                                        <td colspan="2" style="text-align: center;">
                                                                                        <p>
                                                                                            <a class="view_data btn purple" data-toggle="modal" data-target="#myModal" id="<?=$row->kode_jaldis?>"> Daftar Anggota dan Foto </a>
                                                                                        </p>
                                                                                        </td>
                                                                                       
                                                                                      </tr>
                                                                                      </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-bottom:3px dashed #00f;"></div>
                                                                            <?php }
                                                                        echo'</div>';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                        <div class="tab-pane" id="'.$value->id_komisi.'">';
                                                                            foreach($data as $row)
                                                                            {
                                                                                $q2 = "SELECT a.*,b.kode_rekening as kr from akun a left join kode_rekening b on a.kode_rekening=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q3 = "SELECT * from dasar_hukum where kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q4 = "SELECT * from detail_jaldis a left join anggota b on a.id_anggota=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $akun = $this->User_model->manualQuery($q2)->result();
                                                                                $dasar_hukum = $this->User_model->manualQuery($q3)->result();
                                                                                $anggota = $this->User_model->manualQuery($q4)->result();
                                                                                                          $tanggal1 = new DateTime($row->start_date);
                                                                                                          $tanggal2 = new DateTime($row->end_date);
                                                                                                           
                                                                                                          $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12">                
                                                                                    <table class="table">
                                                                                      <tbody>
                                                                                      <tr>
                                                                                      <td> Nama Kegiatan </td>
                                                                                     
                                                                                      <td><?php echo $row->nama_keperluan; ?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Waktu </td>
                                                                                     
                                                                                      <td><?php
                                                                                      if($perbedaan=='1'){
                                                                                        echo date('d-m-Y', strtotime($row->start_date));
                                                                                      }
                                                                                      else{
                                                                                      echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)'; }?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Tempat Tujuan </td>
                                                                                     
                                                                                      <td><?php echo $row->tujuan; ?></td> 
                                                                                      </tr> 

                                                                                      <tr>
                                                                                      <td> Jumlah Peserta </td>
                                                                                      
                                                                                      <td><?php echo count($anggota).' Anggota'; ?></td> 
                                                                                      </tr> 

                                                                                      <!-- <tr>
                                                                                      <td> Transportasi yang digunakan </td>
                                                                                     
                                                                                      <td><?php echo $row->transportasi; ?></td> 
                                                                                      </tr> 

                                                                                      <?php
                                                                                      if(isset($akun)){
                                                                                        $i = 0;
                                                                                        foreach($akun as $akn)

                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Akun </td>
                                                                                             
                                                                                              <td>'.$akn->kr.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                        
                                                                                          <td>'.$akn->kr.'</td>
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->   
                                                                                      <tr>
                                                                                      <td> Materi </td>
                                                                                      
                                                                                      <td><?php echo $row->keperluan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Pimpinan Rombongan </td>
                                                                                      
                                                                                      <td><?php echo $row->nama; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Diterima oleh </td>
                                                                                      
                                                                                      <td><?php echo $row->diterima; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Hasil </td>
                                                                                      
                                                                                      <td><?php echo $row->catatan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Dukungan Anggaran </td>
                                                                                      
                                                                                      <td><?php
                                                                                      if($row->anggaran==NULL){
                                                                                        echo 'Rp 0.00';
                                                                                      }
                                                                                      else{
                                                                                        echo 'Rp '.number_format($row->anggaran,2);
                                                                                      }
                                                                                      ?></td> 
                                                                                      </tr> 
                                                                                      <!-- <?php
                                                                                      if(isset($dasar_hukum)){
                                                                                        $i = 0;
                                                                                        foreach($dasar_hukum as $dh)
                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Dasar Hukum </td>
                                                                                              
                                                                                              <td>'.$dh->dasar_hukum.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                          
                                                                                          <td>'.$dh->dasar_hukum.'</td> 
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->

                                                                                      
                                                                                      <tr>
                                                                                        
                                                                                        <td colspan="2" style="text-align: center;">
                                                                                        <p>
                                                                                            <a class="view_data btn purple" data-toggle="modal" data-target="#myModal" id="<?=$row->kode_jaldis?>"> Daftar Anggota dan Foto </a>
                                                                                        </p>
                                                                                        </td>
                                                                                       
                                                                                      </tr>
                                                                                      </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-bottom:3px dashed #00f;"></div>
                                                                            <?php }
                                                                        echo'</div>';
                                                                    }
                                                                    $no++;
                                                                    
                                                                }

                                                                ?>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab_6_2">
                                                    <div class="alert alert-info no-margin margin-top-10"> Note! Disini merupakan rekapan dari alat kelengkapan Badan. </div>
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-title tabbable-line">
                                                           <ul class="nav nav-tabs">
                                                                <?php
                                                                $no = 1;
                                                                foreach ($badan as $key => $value) {
                                                                    if($no==1){
                                                                        echo '
                                                                        <li class="active">
                                                                            <a href="#'.$value->id_badan.'" data-toggle="tab" aria-expanded="true"> '.$value->nama_badan.' </a>
                                                                        </li>';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                        <li class="">
                                                                            <a href="#'.$value->id_badan.'" data-toggle="tab" aria-expanded="true"> '.$value->nama_badan.' </a>
                                                                        </li>';
                                                                    }
                                                                    $no++;
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="tab-content">
                                                                <?php
                                                                $no = 1;
                                                                foreach ($badan as $key => $value) {
                                                                    $q = "SELECT a.*,b.nama,c.nama_keperluan from jaldis a left join anggota b on a.pimpinan=b.id left join kategori_keperluan c on a.kategori=c.id where a.alat_kelengkapan='".$value->id_badan."'";
                                                                    $data = $this->User_model->manualQuery($q)->result();
                                                                    if($no==1){
                                                                        echo '
                                                                        <div class="tab-pane active" id="'.$value->id_badan.'">';
                                                                            foreach($data as $row)
                                                                            {
                                                                                $q2 = "SELECT a.*,b.kode_rekening as kr from akun a left join kode_rekening b on a.kode_rekening=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q3 = "SELECT * from dasar_hukum where kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q4 = "SELECT * from detail_jaldis a left join anggota b on a.id_anggota=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $akun = $this->User_model->manualQuery($q2)->result();
                                                                                $dasar_hukum = $this->User_model->manualQuery($q3)->result();
                                                                                $anggota = $this->User_model->manualQuery($q4)->result();
                                                                                                          $tanggal1 = new DateTime($row->start_date);
                                                                                                          $tanggal2 = new DateTime($row->end_date);
                                                                                                           
                                                                                                          $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12">                
                                                                                    <table class="table">
                                                                                      <tbody>
                                                                                      <tr>
                                                                                      <td> Nama Kegiatan </td>
                                                                                   
                                                                                      <td><?php echo $row->nama_keperluan; ?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Waktu </td>
                                                                                     
                                                                                      <td><?php
                                                                                      if($perbedaan=='1'){
                                                                                        echo date('d-m-Y', strtotime($row->start_date));
                                                                                      }
                                                                                      else{
                                                                                        echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)'; }?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Tempat Tujuan </td>
                                                                                   
                                                                                      <td><?php echo $row->tujuan; ?></td> 
                                                                                      </tr> 

                                                                                      <tr>
                                                                                      <td> Jumlah Peserta </td>
                                                                                     
                                                                                      <td><?php echo count($anggota).' Anggota'; ?></td> 
                                                                                      </tr>
                                                                                      <!-- <?php
                                                                                      if(isset($akun)){
                                                                                        $i = 0;
                                                                                        foreach($akun as $akn)

                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Akun </td>
                                                                                            
                                                                                              <td>'.$akn->kr.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                        
                                                                                          <td>'.$akn->kr.'</td>
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->   
                                                                                      <tr>
                                                                                      <td> Materi </td>
                                                                                      
                                                                                      <td><?php echo $row->keperluan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Pimpinan Rombongan </td>
                                                                                      
                                                                                      <td><?php echo $row->nama; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Diterima oleh </td>
                                                                                      
                                                                                      <td><?php echo $row->diterima; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Hasil </td>
                                                                                      
                                                                                      <td><?php echo $row->catatan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Dukungan Anggaran </td>
                                                                                      
                                                                                      <td><?php
                                                                                      if($row->anggaran==NULL){
                                                                                        echo 'Rp 0.00';
                                                                                      }
                                                                                      else{
                                                                                        echo 'Rp '.number_format($row->anggaran,2);
                                                                                      }
                                                                                      ?></td> 
                                                                                      </tr> 
                                                                                      <!-- <?php
                                                                                      if(isset($dasar_hukum)){
                                                                                        $i = 0;
                                                                                        foreach($dasar_hukum as $dh)
                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Dasar Hukum </td>
                                                                                             
                                                                                              <td>'.$dh->dasar_hukum.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                          
                                                                                          <td>'.$dh->dasar_hukum.'</td> 
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> --> 
                                                                                      <tr>
                                                                                        
                                                                                        <td colspan="2" style="text-align: center;">
                                                                                        <p>
                                                                                            <a class="view_data btn purple" data-toggle="modal" data-target="#myModal" id="<?=$row->kode_jaldis?>"> Daftar Anggota dan Foto </a>
                                                                                        </p>
                                                                                        </td>
                                                                                       
                                                                                      </tr>
                                                                                      </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-bottom:3px dashed #00f;"></div>
                                                                            <?php }
                                                                        echo'</div>';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                        <div class="tab-pane" id="'.$value->id_badan.'">';
                                                                            foreach($data as $row)
                                                                            {
                                                                                $q2 = "SELECT a.*,b.kode_rekening as kr from akun a left join kode_rekening b on a.kode_rekening=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q3 = "SELECT * from dasar_hukum where kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q4 = "SELECT * from detail_jaldis a left join anggota b on a.id_anggota=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $akun = $this->User_model->manualQuery($q2)->result();
                                                                                $dasar_hukum = $this->User_model->manualQuery($q3)->result();
                                                                                $anggota = $this->User_model->manualQuery($q4)->result();
                                                                                                          $tanggal1 = new DateTime($row->start_date);
                                                                                                          $tanggal2 = new DateTime($row->end_date);
                                                                                                           
                                                                                                          $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12">                
                                                                                    <table class="table">
                                                                                      <tbody>
                                                                                      <tr>
                                                                                      <td> Nama Kegiatan </td>
                                                                                   
                                                                                      <td><?php echo $row->nama_keperluan; ?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Waktu </td>
                                                                                     
                                                                                      <td><?php
                                                                                      if($perbedaan=='1'){
                                                                                        echo date('d-m-Y', strtotime($row->start_date));
                                                                                      }
                                                                                      else{
                                                                                        echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)'; }?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Tempat Tujuan </td>
                                                                                   
                                                                                      <td><?php echo $row->tujuan; ?></td> 
                                                                                      </tr> 

                                                                                      <tr>
                                                                                      <td> Jumlah Peserta </td>
                                                                                     
                                                                                      <td><?php echo count($anggota).' Anggota'; ?></td> 
                                                                                      </tr>
                                                                                      <!-- <?php
                                                                                      if(isset($akun)){
                                                                                        $i = 0;
                                                                                        foreach($akun as $akn)

                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Akun </td>
                                                                                             
                                                                                              <td>'.$akn->kr.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                         
                                                                                          <td>  </td>
                                                                                          <td>'.$akn->kr.'</td>
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                      <td> Materi </td>
                                                                                      
                                                                                      <td><?php echo $row->keperluan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Pimpinan Rombongan </td>
                                                                                      
                                                                                      <td><?php echo $row->nama; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Diterima oleh </td>
                                                                                      
                                                                                      <td><?php echo $row->diterima; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Hasil </td>
                                                                                      
                                                                                      <td><?php echo $row->catatan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Dukungan Anggaran </td>
                                                                                      
                                                                                      <td><?php
                                                                                      if($row->anggaran==NULL){
                                                                                        echo 'Rp 0.00';
                                                                                      }
                                                                                      else{
                                                                                        echo 'Rp '.number_format($row->anggaran,2);
                                                                                      }
                                                                                      ?></td> 
                                                                                      </tr> 
                                                                                      <!-- <?php
                                                                                      if(isset($dasar_hukum)){
                                                                                        $i = 0;
                                                                                        foreach($dasar_hukum as $dh)
                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Dasar Hukum </td>
                                                                                             
                                                                                              <td>'.$dh->dasar_hukum.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                       
                                                                                          <td>'.$dh->dasar_hukum.'</td> 
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                       
                                                                                        <td colspan="2" style="text-align: center;">
                                                                                        <p>
                                                                                            <a class="view_data btn purple" data-toggle="modal" data-target="#myModal" id="<?=$row->kode_jaldis?>"> Daftar Anggota dan Foto </a>
                                                                                        </p>
                                                                                        </td>
                                                                                        
                                                                                      </tr>
                                                                                      </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-bottom:3px dashed #00f;"></div>
                                                                            <?php }
                                                                        echo'</div>';
                                                                    }
                                                                    $no++;
                                                                    
                                                                }

                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab_6_3">
                                                    <div class="alert alert-info no-margin margin-top-10"> Note! Disini merupakan rekapan dari alat kelengkapan Pansus (Panitia Khusus). </div>
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-title tabbable-line">
                                                            <ul class="nav nav-tabs">
                                                                <?php
                                                                $no = 1;
                                                                foreach ($pansus as $key => $value) {
                                                                    if($no==1){
                                                                        echo '
                                                                        <li class="active">
                                                                            <a href="#'.$value->kode_pansus.'" data-toggle="tab" aria-expanded="true"> '.$value->nama_pansus.' </a>
                                                                        </li>';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                        <li class="">
                                                                            <a href="#'.$value->kode_pansus.'" data-toggle="tab" aria-expanded="true"> '.$value->nama_pansus.' </a>
                                                                        </li>';
                                                                    }
                                                                    $no++;
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="tab-content">
                                                                <?php
                                                                $no = 1;
                                                                foreach ($pansus as $key => $value) {
                                                                    $q = "SELECT a.*,b.nama,c.nama_keperluan from jaldis a left join anggota b on a.pimpinan=b.id left join kategori_keperluan c on a.kategori=c.id where a.alat_kelengkapan='".$value->kode_pansus."'";
                                                                    $data = $this->User_model->manualQuery($q)->result();
                                                                    if($no==1){
                                                                        echo '
                                                                        <div class="tab-pane active" id="'.$value->kode_pansus.'">';
                                                                            foreach($data as $row)
                                                                            {
                                                                                $q2 = "SELECT a.*,b.kode_rekening as kr from akun a left join kode_rekening b on a.kode_rekening=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q3 = "SELECT * from dasar_hukum where kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q4 = "SELECT * from detail_jaldis a left join anggota b on a.id_anggota=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $akun = $this->User_model->manualQuery($q2)->result();
                                                                                $dasar_hukum = $this->User_model->manualQuery($q3)->result();
                                                                                $anggota = $this->User_model->manualQuery($q4)->result();
                                                                                                          $tanggal1 = new DateTime($row->start_date);
                                                                                                          $tanggal2 = new DateTime($row->end_date);
                                                                                                           
                                                                                                          $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12">                
                                                                                    <table class="table">
                                                                                      <tbody>
                                                                                      <tr>
                                                                                      <td> Nama Kegiatan </td>
                                                                                   
                                                                                      <td><?php echo $row->nama_keperluan; ?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Waktu </td>
                                                                                     
                                                                                      <td><?php
                                                                                      if($perbedaan=='1'){
                                                                                        echo date('d-m-Y', strtotime($row->start_date));
                                                                                      }
                                                                                      else{
                                                                                        echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)'; }?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Tempat Tujuan </td>
                                                                                   
                                                                                      <td><?php echo $row->tujuan; ?></td> 
                                                                                      </tr> 

                                                                                      <tr>
                                                                                      <td> Jumlah Peserta </td>
                                                                                     
                                                                                      <td><?php echo count($anggota).' Anggota'; ?></td> 
                                                                                      </tr>
                                                                                      <!-- <?php
                                                                                      if(isset($akun)){
                                                                                        $i = 0;
                                                                                        foreach($akun as $akn)

                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Akun </td>
                                                                                             
                                                                                              <td>'.$akn->kr.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                        
                                                                                          <td>'.$akn->kr.'</td>
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                      <td> Materi </td>
                                                                                      
                                                                                      <td><?php echo $row->keperluan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Pimpinan Rombongan </td>
                                                                                      
                                                                                      <td><?php echo $row->nama; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Diterima oleh </td>
                                                                                      
                                                                                      <td><?php echo $row->diterima; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Hasil </td>
                                                                                      
                                                                                      <td><?php echo $row->catatan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Dukungan Anggaran </td>
                                                                                      
                                                                                      <td><?php
                                                                                      if($row->anggaran==NULL){
                                                                                        echo 'Rp 0.00';
                                                                                      }
                                                                                      else{
                                                                                        echo 'Rp '.number_format($row->anggaran,2);
                                                                                      }
                                                                                      ?></td> 
                                                                                      </tr> 
                                                                                      <!-- <?php
                                                                                      if(isset($dasar_hukum)){
                                                                                        $i = 0;
                                                                                        foreach($dasar_hukum as $dh)
                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Dasar Hukum </td>
                                                                                           
                                                                                              <td>'.$dh->dasar_hukum.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                        
                                                                                          <td>'.$dh->dasar_hukum.'</td> 
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> --> 
                                                                                      <tr>
                                                                                       
                                                                                        <td colspan="2" style="text-align: center;">
                                                                                        <p>
                                                                                            <a class="view_data btn purple" data-toggle="modal" data-target="#myModal" id="<?=$row->kode_jaldis?>"> Daftar Anggota dan Foto </a>
                                                                                        </p>
                                                                                        </td>
                                                                                        
                                                                                      </tr>
                                                                                      </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-bottom:3px dashed #00f;"></div>
                                                                            <?php }
                                                                        echo'</div>';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                        <div class="tab-pane" id="'.$value->kode_pansus.'">';
                                                                            foreach($data as $row)
                                                                            {
                                                                                $q2 = "SELECT a.*,b.kode_rekening as kr from akun a left join kode_rekening b on a.kode_rekening=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q3 = "SELECT * from dasar_hukum where kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q4 = "SELECT * from detail_jaldis a left join anggota b on a.id_anggota=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $akun = $this->User_model->manualQuery($q2)->result();
                                                                                $dasar_hukum = $this->User_model->manualQuery($q3)->result();
                                                                                $anggota = $this->User_model->manualQuery($q4)->result();
                                                                                                          $tanggal1 = new DateTime($row->start_date);
                                                                                                          $tanggal2 = new DateTime($row->end_date);
                                                                                                           
                                                                                                          $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12">                
                                                                                    <table class="table">
                                                                                      <tbody>
                                                                                      <tr>
                                                                                      <td> Nama Kegiatan </td>
                                                                                   
                                                                                      <td><?php echo $row->nama_keperluan; ?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Waktu </td>
                                                                                     
                                                                                      <td><?php
                                                                                      if($perbedaan=='1'){
                                                                                        echo date('d-m-Y', strtotime($row->start_date));
                                                                                      }
                                                                                      else{
                                                                                        echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)'; }?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Tempat Tujuan </td>
                                                                                   
                                                                                      <td><?php echo $row->tujuan; ?></td> 
                                                                                      </tr> 

                                                                                      <tr>
                                                                                      <td> Jumlah Peserta </td>
                                                                                     
                                                                                      <td><?php echo count($anggota).' Anggota'; ?></td> 
                                                                                      </tr>
                                                                                      <!-- <?php
                                                                                      if(isset($akun)){
                                                                                        $i = 0;
                                                                                        foreach($akun as $akn)

                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Akun </td>
                                                                                             
                                                                                              <td>'.$akn->kr.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                         
                                                                                          <td>'.$akn->kr.'</td>
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                      <td> Materi </td>
                                                                                      
                                                                                      <td><?php echo $row->keperluan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Pimpinan Rombongan </td>
                                                                                      
                                                                                      <td><?php echo $row->nama; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Diterima oleh </td>
                                                                                      
                                                                                      <td><?php echo $row->diterima; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Hasil </td>
                                                                                      
                                                                                      <td><?php echo $row->catatan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Dukungan Anggaran </td>
                                                                                      
                                                                                      <td><?php
                                                                                      if($row->anggaran==NULL){
                                                                                        echo 'Rp 0.00';
                                                                                      }
                                                                                      else{
                                                                                        echo 'Rp '.number_format($row->anggaran,2);
                                                                                      }
                                                                                      ?></td> 
                                                                                      </tr>  
                                                                                      <!-- <?php
                                                                                      if(isset($dasar_hukum)){
                                                                                        $i = 0;
                                                                                        foreach($dasar_hukum as $dh)
                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Dasar Hukum </td>
                                                                                             
                                                                                              <td>'.$dh->dasar_hukum.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                         
                                                                                          <td>'.$dh->dasar_hukum.'</td> 
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                      
                                                                                        <td colspan="2" style="text-align: center;">
                                                                                        <p>
                                                                                            <a class="view_data btn purple" data-toggle="modal" data-target="#myModal" id="<?=$row->kode_jaldis?>"> Daftar Anggota dan Foto </a>
                                                                                        </p>
                                                                                        </td>
                                                                                       
                                                                                      </tr>
                                                                                      </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-bottom:3px dashed #00f;"></div>
                                                                            <?php }
                                                                        echo'</div>';
                                                                    }
                                                                    $no++;
                                                                    
                                                                }

                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab_6_6">
                                                    <div class="alert alert-info no-margin margin-top-10"> Note! Disini merupakan rekapan dari alat kelengkapan Panja (Panitia Kerja). </div>
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-title tabbable-line">
                                                            <ul class="nav nav-tabs">
                                                                <?php
                                                                $no = 1;
                                                                foreach ($panja as $key => $value) {
                                                                    if($no==1){
                                                                        echo '
                                                                        <li class="active">
                                                                            <a href="#'.$value->kode_panja.'" data-toggle="tab" aria-expanded="true"> '.$value->nama_panja.' </a>
                                                                        </li>';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                        <li class="">
                                                                            <a href="#'.$value->kode_panja.'" data-toggle="tab" aria-expanded="true"> '.$value->nama_panja.' </a>
                                                                        </li>';
                                                                    }
                                                                    $no++;
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="tab-content">
                                                                <?php
                                                                $no = 1;
                                                                foreach ($panja as $key => $value) {
                                                                    $q = "SELECT a.*,b.nama,c.nama_keperluan from jaldis a left join anggota b on a.pimpinan=b.id left join kategori_keperluan c on a.kategori=c.id where a.alat_kelengkapan='".$value->kode_panja."'";
                                                                    $data = $this->User_model->manualQuery($q)->result();
                                                                    if($no==1){
                                                                        echo '
                                                                        <div class="tab-pane active" id="'.$value->kode_panja.'">';
                                                                            foreach($data as $row)
                                                                            {
                                                                                $q2 = "SELECT a.*,b.kode_rekening as kr from akun a left join kode_rekening b on a.kode_rekening=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q3 = "SELECT * from dasar_hukum where kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q4 = "SELECT * from detail_jaldis a left join anggota b on a.id_anggota=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $akun = $this->User_model->manualQuery($q2)->result();
                                                                                $dasar_hukum = $this->User_model->manualQuery($q3)->result();
                                                                                $anggota = $this->User_model->manualQuery($q4)->result();
                                                                                                          $tanggal1 = new DateTime($row->start_date);
                                                                                                          $tanggal2 = new DateTime($row->end_date);
                                                                                                           
                                                                                                          $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12">                
                                                                                    <table class="table">
                                                                                      <tbody>
                                                                                      <tr>
                                                                                      <td> Nama Kegiatan </td>
                                                                                   
                                                                                      <td><?php echo $row->nama_keperluan; ?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Waktu </td>
                                                                                     
                                                                                      <td><?php
                                                                                      if($perbedaan=='1'){
                                                                                        echo date('d-m-Y', strtotime($row->start_date));
                                                                                      }
                                                                                      else{
                                                                                        echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)'; }?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Tempat Tujuan </td>
                                                                                   
                                                                                      <td><?php echo $row->tujuan; ?></td> 
                                                                                      </tr> 

                                                                                      <tr>
                                                                                      <td> Jumlah Peserta </td>
                                                                                     
                                                                                      <td><?php echo count($anggota).' Anggota'; ?></td> 
                                                                                      </tr>
                                                                                      <!-- <?php
                                                                                      if(isset($akun)){
                                                                                        $i = 0;
                                                                                        foreach($akun as $akn)

                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Akun </td>
                                                                                             
                                                                                              <td>'.$akn->kr.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                        
                                                                                          <td>'.$akn->kr.'</td>
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                      <td> Materi </td>
                                                                                      
                                                                                      <td><?php echo $row->keperluan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Pimpinan Rombongan </td>
                                                                                      
                                                                                      <td><?php echo $row->nama; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Diterima oleh </td>
                                                                                      
                                                                                      <td><?php echo $row->diterima; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Hasil </td>
                                                                                      
                                                                                      <td><?php echo $row->catatan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Dukungan Anggaran </td>
                                                                                      
                                                                                      <td><?php
                                                                                      if($row->anggaran==NULL){
                                                                                        echo 'Rp 0.00';
                                                                                      }
                                                                                      else{
                                                                                        echo 'Rp '.number_format($row->anggaran,2);
                                                                                      }
                                                                                      ?></td> 
                                                                                      </tr> 
                                                                                      <!-- <?php
                                                                                      if(isset($dasar_hukum)){
                                                                                        $i = 0;
                                                                                        foreach($dasar_hukum as $dh)
                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Dasar Hukum </td>
                                                                                           
                                                                                              <td>'.$dh->dasar_hukum.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                        
                                                                                          <td>'.$dh->dasar_hukum.'</td> 
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> --> 
                                                                                      <tr>
                                                                                       
                                                                                        <td colspan="2" style="text-align: center;">
                                                                                        <p>
                                                                                            <a class="view_data btn purple" data-toggle="modal" data-target="#myModal" id="<?=$row->kode_jaldis?>"> Daftar Anggota dan Foto </a>
                                                                                        </p>
                                                                                        </td>
                                                                                        
                                                                                      </tr>
                                                                                      </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-bottom:3px dashed #00f;"></div>
                                                                            <?php }
                                                                        echo'</div>';
                                                                    }
                                                                    else{
                                                                        echo '
                                                                        <div class="tab-pane" id="'.$value->kode_panja.'">';
                                                                            foreach($data as $row)
                                                                            {
                                                                                $q2 = "SELECT a.*,b.kode_rekening as kr from akun a left join kode_rekening b on a.kode_rekening=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q3 = "SELECT * from dasar_hukum where kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q4 = "SELECT * from detail_jaldis a left join anggota b on a.id_anggota=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $akun = $this->User_model->manualQuery($q2)->result();
                                                                                $dasar_hukum = $this->User_model->manualQuery($q3)->result();
                                                                                $anggota = $this->User_model->manualQuery($q4)->result();
                                                                                                          $tanggal1 = new DateTime($row->start_date);
                                                                                                          $tanggal2 = new DateTime($row->end_date);
                                                                                                           
                                                                                                          $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12">                
                                                                                    <table class="table">
                                                                                      <tbody>
                                                                                      <tr>
                                                                                      <td> Nama Kegiatan </td>
                                                                                   
                                                                                      <td><?php echo $row->nama_keperluan; ?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Waktu </td>
                                                                                     
                                                                                      <td><?php
                                                                                      if($perbedaan=='1'){
                                                                                        echo date('d-m-Y', strtotime($row->start_date));
                                                                                      }
                                                                                      else{
                                                                                        echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)'; }?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Tempat Tujuan </td>
                                                                                   
                                                                                      <td><?php echo $row->tujuan; ?></td> 
                                                                                      </tr> 

                                                                                      <tr>
                                                                                      <td> Jumlah Peserta </td>
                                                                                     
                                                                                      <td><?php echo count($anggota).' Anggota'; ?></td> 
                                                                                      </tr>
                                                                                      <!-- <?php
                                                                                      if(isset($akun)){
                                                                                        $i = 0;
                                                                                        foreach($akun as $akn)

                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Akun </td>
                                                                                             
                                                                                              <td>'.$akn->kr.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                         
                                                                                          <td>'.$akn->kr.'</td>
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                      <td> Materi </td>
                                                                                      
                                                                                      <td><?php echo $row->keperluan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Pimpinan Rombongan </td>
                                                                                      
                                                                                      <td><?php echo $row->nama; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Diterima oleh </td>
                                                                                      
                                                                                      <td><?php echo $row->diterima; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Hasil </td>
                                                                                      
                                                                                      <td><?php echo $row->catatan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Dukungan Anggaran </td>
                                                                                      
                                                                                      <td><?php
                                                                                      if($row->anggaran==NULL){
                                                                                        echo 'Rp 0.00';
                                                                                      }
                                                                                      else{
                                                                                        echo 'Rp '.number_format($row->anggaran,2);
                                                                                      }
                                                                                      ?></td> 
                                                                                      </tr>  
                                                                                      <!-- <?php
                                                                                      if(isset($dasar_hukum)){
                                                                                        $i = 0;
                                                                                        foreach($dasar_hukum as $dh)
                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Dasar Hukum </td>
                                                                                             
                                                                                              <td>'.$dh->dasar_hukum.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                         
                                                                                          <td>'.$dh->dasar_hukum.'</td> 
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                      
                                                                                        <td colspan="2" style="text-align: center;">
                                                                                        <p>
                                                                                            <a class="view_data btn purple" data-toggle="modal" data-target="#myModal" id="<?=$row->kode_jaldis?>"> Daftar Anggota dan Foto </a>
                                                                                        </p>
                                                                                        </td>
                                                                                       
                                                                                      </tr>
                                                                                      </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-bottom:3px dashed #00f;"></div>
                                                                            <?php }
                                                                        echo'</div>';
                                                                    }
                                                                    $no++;
                                                                    
                                                                }

                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab_6_5">
                                                    <!-- <div class="alert alert-info no-margin margin-top-10"> Note! Disini merupakan rekapan dari alat kelengkapan PANSUS. </div> -->
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-title tabbable-line">
                                                            <ul class="nav nav-tabs">
                                                                <?php
                                                                        echo '
                                                                        <li class="active">
                                                                            <a href="#bintek" data-toggle="tab" aria-expanded="true"> Pimpinan DPRD </a>
                                                                        </li>';                                                               
                                                                ?>
                                                            </ul>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="tab-content">
                                                                <?php
                                                                    $q = "SELECT a.*,b.nama,c.nama_keperluan from jaldis a left join anggota b on a.pimpinan=b.id left join kategori_keperluan c on a.kategori=c.id where a.alat_kelengkapan='intek'";
                                                                    $data = $this->User_model->manualQuery($q)->result();
                                                               
                                                                        echo '
                                                                        <div class="tab-pane active" id="bintek">';
                                                                            foreach($data as $row)
                                                                            {
                                                                                $q2 = "SELECT a.*,b.kode_rekening as kr from akun a left join kode_rekening b on a.kode_rekening=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q3 = "SELECT * from dasar_hukum where kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q4 = "SELECT * from detail_jaldis a left join anggota b on a.id_anggota=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $akun = $this->User_model->manualQuery($q2)->result();
                                                                                $dasar_hukum = $this->User_model->manualQuery($q3)->result();
                                                                                $anggota = $this->User_model->manualQuery($q4)->result();
                                                                                                          $tanggal1 = new DateTime($row->start_date);
                                                                                                          $tanggal2 = new DateTime($row->end_date);
                                                                                                           
                                                                                                          $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12">                
                                                                                    <table class="table">
                                                                                      <tbody>
                                                                                      <tr>
                                                                                      <td> Nama Kegiatan </td>
                                                                                   
                                                                                      <td><?php echo $row->nama_keperluan; ?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Waktu </td>
                                                                                     
                                                                                      <td><?php
                                                                                      if($perbedaan=='1'){
                                                                                        echo date('d-m-Y', strtotime($row->start_date));
                                                                                      }
                                                                                      else{
                                                                                        echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)'; }?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Tempat Tujuan </td>
                                                                                   
                                                                                      <td><?php echo $row->tujuan; ?></td> 
                                                                                      </tr> 

                                                                                      <tr>
                                                                                      <td> Jumlah Peserta </td>
                                                                                     
                                                                                      <td><?php echo count($anggota).' Anggota'; ?></td> 
                                                                                      </tr>
                                                                                      <!-- <?php
                                                                                      if(isset($akun)){
                                                                                        $i = 0;
                                                                                        foreach($akun as $akn)

                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Akun </td>
                                                                                             
                                                                                              <td>'.$akn->kr.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                        
                                                                                          <td>'.$akn->kr.'</td>
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                      <td> Materi </td>
                                                                                      
                                                                                      <td><?php echo $row->keperluan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Pimpinan Rombongan </td>
                                                                                      
                                                                                      <td><?php echo $row->nama; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Diterima oleh </td>
                                                                                      
                                                                                      <td><?php echo $row->diterima; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Hasil </td>
                                                                                      
                                                                                      <td><?php echo $row->catatan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Dukungan Anggaran </td>
                                                                                      
                                                                                      <td><?php
                                                                                      if($row->anggaran==NULL){
                                                                                        echo 'Rp 0.00';
                                                                                      }
                                                                                      else{
                                                                                        echo 'Rp '.number_format($row->anggaran,2);
                                                                                      }
                                                                                      ?></td> 
                                                                                      </tr>  
                                                                                      <!-- <?php
                                                                                      if(isset($dasar_hukum)){
                                                                                        $i = 0;
                                                                                        foreach($dasar_hukum as $dh)
                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Dasar Hukum </td>
                                                                                           
                                                                                              <td>'.$dh->dasar_hukum.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                        
                                                                                          <td>'.$dh->dasar_hukum.'</td> 
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                       
                                                                                        <td colspan="2" style="text-align: center;">
                                                                                        <p>
                                                                                            <a class="view_data btn purple" data-toggle="modal" data-target="#myModal" id="<?=$row->kode_jaldis?>"> Daftar Anggota dan Foto </a>
                                                                                        </p>
                                                                                        </td>
                                                                                        
                                                                                      </tr>
                                                                                      </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-bottom:3px dashed #00f;"></div>
                                                                        <?php 
                                                                          }
                                                                        echo'</div>';
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab_6_4">
                                                    <!-- <div class="alert alert-info no-margin margin-top-10"> Note! Disini merupakan rekapan dari alat kelengkapan PANSUS. </div> -->
                                                    <div class="portlet light bordered">
                                                        <div class="portlet-title tabbable-line">
                                                            <ul class="nav nav-tabs">
                                                                <?php
                                                                        echo '
                                                                        <li class="active">
                                                                            <a href="#dprd" data-toggle="tab" aria-expanded="true"> Anggota Dewan </a>
                                                                        </li>
                                                                        <li class="">
                                                                            <a href="#setwan" data-toggle="tab" aria-expanded="true"> Setwan </a>
                                                                        </li>';                                                               
                                                                ?>
                                                            </ul>
                                                        </div>
                                                        <div class="portlet-body">
                                                            <div class="tab-content">
                                                                <?php
                                                                    $q = "SELECT a.*,b.nama,c.nama_keperluan from jaldis a left join anggota b on a.pimpinan=b.id left join kategori_keperluan c on a.kategori=c.id where a.alat_kelengkapan='semua'";
                                                                    $data = $this->User_model->manualQuery($q)->result();
                                                               
                                                                        echo '
                                                                        <div class="tab-pane active" id="dprd">';
                                                                            foreach($data as $row)
                                                                            {
                                                                                $q2 = "SELECT a.*,b.kode_rekening as kr from akun a left join kode_rekening b on a.kode_rekening=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q3 = "SELECT * from dasar_hukum where kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q4 = "SELECT * from detail_jaldis a left join anggota b on a.id_anggota=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $akun = $this->User_model->manualQuery($q2)->result();
                                                                                $dasar_hukum = $this->User_model->manualQuery($q3)->result();
                                                                                $anggota = $this->User_model->manualQuery($q4)->result();
                                                                                                          $tanggal1 = new DateTime($row->start_date);
                                                                                                          $tanggal2 = new DateTime($row->end_date);
                                                                                                           
                                                                                                          $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12">                
                                                                                    <table class="table">
                                                                                      <tbody>
                                                                                      <tr>
                                                                                      <td> Nama Kegiatan </td>
                                                                                   
                                                                                      <td><?php echo $row->nama_keperluan; ?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Waktu </td>
                                                                                     
                                                                                      <td><?php
                                                                                      if($perbedaan=='1'){
                                                                                        echo date('d-m-Y', strtotime($row->start_date));
                                                                                      }
                                                                                      else{
                                                                                        echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)'; }?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Tempat Tujuan </td>
                                                                                   
                                                                                      <td><?php echo $row->tujuan; ?></td> 
                                                                                      </tr> 

                                                                                      <tr>
                                                                                      <td> Jumlah Peserta </td>
                                                                                     
                                                                                      <td><?php echo count($anggota).' Anggota'; ?></td> 
                                                                                      </tr>
                                                                                      <!-- <?php
                                                                                      if(isset($akun)){
                                                                                        $i = 0;
                                                                                        foreach($akun as $akn)

                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Akun </td>
                                                                                             
                                                                                              <td>'.$akn->kr.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                        
                                                                                          <td>'.$akn->kr.'</td>
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?>    -->
                                                                                      <tr>
                                                                                      <td> Materi </td>
                                                                                      
                                                                                      <td><?php echo $row->keperluan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Pimpinan Rombongan </td>
                                                                                      
                                                                                      <td><?php echo $row->nama; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Diterima oleh </td>
                                                                                      
                                                                                      <td><?php echo $row->diterima; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Hasil </td>
                                                                                      
                                                                                      <td><?php echo $row->catatan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Dukungan Anggaran </td>
                                                                                      
                                                                                      <td><?php
                                                                                      if($row->anggaran==NULL){
                                                                                        echo 'Rp 0.00';
                                                                                      }
                                                                                      else{
                                                                                        echo 'Rp '.number_format($row->anggaran,2);
                                                                                      }
                                                                                      ?></td> 
                                                                                      </tr> 
                                                                                      <!-- <?php
                                                                                      if(isset($dasar_hukum)){
                                                                                        $i = 0;
                                                                                        foreach($dasar_hukum as $dh)
                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Dasar Hukum </td>
                                                                                           
                                                                                              <td>'.$dh->dasar_hukum.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                        
                                                                                          <td>'.$dh->dasar_hukum.'</td> 
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                       
                                                                                        <td colspan="2" style="text-align: center;">
                                                                                        <p>
                                                                                            <a class="view_data btn purple" data-toggle="modal" data-target="#myModal" id="<?=$row->kode_jaldis?>"> Daftar Anggota dan Foto </a>
                                                                                        </p>
                                                                                        </td>
                                                                                        
                                                                                      </tr>
                                                                                      </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-bottom:3px dashed #00f;"></div>
                                                                        <?php 
                                                                          }
                                                                        echo'</div>';
                                                                ?>
                                                                <?php
                                                                    $q = "SELECT a.*,b.nama,c.nama_keperluan from jaldis a left join anggota b on a.pimpinan=b.id left join kategori_keperluan c on a.kategori=c.id where a.alat_kelengkapan='anggota'";
                                                                    $data = $this->User_model->manualQuery($q)->result();
                                                               
                                                                        echo '
                                                                        <div class="tab-pane" id="setwan">';
                                                                            foreach($data as $row)
                                                                            {
                                                                                $q2 = "SELECT a.*,b.kode_rekening as kr from akun a left join kode_rekening b on a.kode_rekening=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q3 = "SELECT * from dasar_hukum where kode_jaldis='".$row->kode_jaldis."'";
                                                                                $q4 = "SELECT * from detail_jaldis a left join anggota b on a.id_anggota=b.id where a.kode_jaldis='".$row->kode_jaldis."'";
                                                                                $akun = $this->User_model->manualQuery($q2)->result();
                                                                                $dasar_hukum = $this->User_model->manualQuery($q3)->result();
                                                                                $anggota = $this->User_model->manualQuery($q4)->result();
                                                                                                          $tanggal1 = new DateTime($row->start_date);
                                                                                                          $tanggal2 = new DateTime($row->end_date);
                                                                                                           
                                                                                                          $perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
                                                                            ?>
                                                                            <div class="row">
                                                                                <div class="col-md-12">                
                                                                                    <table class="table">
                                                                                      <tbody>
                                                                                      <tr>
                                                                                      <td> Nama Kegiatan </td>
                                                                                   
                                                                                      <td><?php echo $row->nama_keperluan; ?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Waktu </td>
                                                                                     
                                                                                      <td><?php
                                                                                      if($perbedaan=='1'){
                                                                                        echo date('d-m-Y', strtotime($row->start_date));
                                                                                      }
                                                                                      else{
                                                                                        echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)'; }?></td> 
                                                                                      </tr>
                                                                                      <tr>
                                                                                      <td> Tempat Tujuan </td>
                                                                                   
                                                                                      <td><?php echo $row->tujuan; ?></td> 
                                                                                      </tr> 

                                                                                      <tr>
                                                                                      <td> Jumlah Peserta </td>
                                                                                     
                                                                                      <td><?php echo count($anggota).' Anggota'; ?></td> 
                                                                                      </tr>
                                                                                      <!-- <?php
                                                                                      if(isset($akun)){
                                                                                        $i = 0;
                                                                                        foreach($akun as $akn)

                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Akun </td>
                                                                                             
                                                                                              <td>'.$akn->kr.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                        
                                                                                          <td>'.$akn->kr.'</td>
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                      <td> Materi </td>
                                                                                      
                                                                                      <td><?php echo $row->keperluan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Pimpinan Rombongan </td>
                                                                                      
                                                                                      <td><?php echo $row->nama; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Diterima oleh </td>
                                                                                      
                                                                                      <td><?php echo $row->diterima; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Hasil </td>
                                                                                      
                                                                                      <td><?php echo $row->catatan; ?></td> 
                                                                                      </tr> 
                                                                                      <tr>
                                                                                      <td> Dukungan Anggaran </td>
                                                                                      
                                                                                      <td><?php
                                                                                      if($row->anggaran==NULL){
                                                                                        echo 'Rp 0.00';
                                                                                      }
                                                                                      else{
                                                                                        echo 'Rp '.number_format($row->anggaran,2);
                                                                                      }
                                                                                      ?></td> 
                                                                                      </tr> 
                                                                                      <!-- <?php
                                                                                      if(isset($dasar_hukum)){
                                                                                        $i = 0;
                                                                                        foreach($dasar_hukum as $dh)
                                                                                        {
                                                                                          if($i==0){
                                                                                            echo '
                                                                                              <tr>
                                                                                              <td> Dasar Hukum </td>
                                                                                           
                                                                                              <td>'.$dh->dasar_hukum.'</td>
                                                                                              </tr>
                                                                                            ';
                                                                                          }
                                                                                          else{
                                                                                          echo '
                                                                                          <tr>
                                                                                          <td>  </td>
                                                                                        
                                                                                          <td>'.$dh->dasar_hukum.'</td> 
                                                                                          </tr>  
                                                                                          ';
                                                                                          }
                                                                                          $i++;
                                                                                        }
                                                                                      }
                                                                                      ?> -->
                                                                                      <tr>
                                                                                       
                                                                                        <td colspan="2" style="text-align: center;">
                                                                                        <p>
                                                                                            <a class="view_data btn purple" data-toggle="modal" data-target="#myModal" id="<?=$row->kode_jaldis?>"> Daftar Anggota dan Foto </a>
                                                                                        </p>
                                                                                        </td>
                                                                                        
                                                                                      </tr>
                                                                                      </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <div style="border-bottom:3px dashed #00f;"></div>
                                                                        <?php 
                                                                          }
                                                                        echo'</div>';
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-full" >
    <div class="modal-content">

      <div class="modal-header" style="text-align: center;">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    

      </div>
      <div class="modal-body">
        <div class="bootbox-body" id="data_edit"></div>
      </div>
      
    </div>
  </div>
</div>
  <script>
  // ini menyiapkan dokumen agar siap grak :)
  $(document).ready(function(){
    // yang bawah ini bekerja jika tombol lihat data (class="view_data") di klik
    $('.view_data').click(function(){
      // membuat variabel id, nilainya dari attribut id pada button
      // id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
      var id = $(this).attr("id");
      
      // memulai ajax
      $.ajax({
        url: '<?php echo base_url(); ?>Master/tampil_ajax', // set url -> ini file yang menyimpan query tampil detail data gambar
        method: 'post',   // method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
        data: {id:id},    // nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
        success:function(data){   // kode dibawah ini jalan kalau sukses
          $('#data_edit').html(data); // mengisi konten dari -> <div class="modal-body" id="data_gambar">
          $('#myModal').modal("show");  // menampilkan dialog modal nya
        }
      });
    });
  });
  </script>
<!-- <?php
foreach ($jaldis as $key => $jd) {
?>
<div class="modal fade" id="<?= $jd->kode_jaldis; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-full" role="document">

    <div class="modal-content">

      <div class="modal-header" style="text-align: center;">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

    

      </div>

      <div class="modal-body">

       

        <div class="box box-primary">

       
          <form class="form-horizontal" method="post" action="#" enctype='multipart/form-data'>
                <div class="box-body"> 
                  <br>
                  <div style="border: 2px #006400 inset; padding: 10px; text-align: left;">
                           
                                            <div class="form-group form-md-checkboxes">
                                         
                                                <div class="col-md-12">
                                                    <div class="md-checkbox-inline">
                                                    
                                                           
                                                            <label for="selectall">
                                                             
                                                                <b><span class="box"></span> Berikut Daftar Anggota yang Ikut </label></b>
                                                   
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                    <div class="form-group form-md-checkboxes">
                     
                        <div class="md-checkbox-inline">
                          <?php
                          $no=1;
                          $detail_jaldis = $this->Main_model->getDetailJaldis($jd->kode_jaldis);
                          echo "<div class='col-md-12'><b>Pimpinan Dewan</b></div><br>";
                          foreach($detail_jaldis as $content)
                          {
                              foreach ($content as $key => $value ) {
                              $$key=$value;
                          }
                            if($keterangan_posisi=='pimpinan'){
                              echo '
                          
                                                <div class="col-md-3">
                                                
                                                     
                                                        <label for="'.$id_anggota.'">
                                                           
                                                            <span class="box"></span> '.$nama.' </label>
                                               
                                                </div>
                                                   
                                                
                              ';
                            }
                          }
                          echo "<div class='col-md-12'><b>Anggota Dewan</b></div><br>";
                          foreach($detail_jaldis as $content)
                          {
                              foreach ($content as $key => $value ) {
                              $$key=$value;
                          }
                            if($keterangan=='anggota legislatif' and $keterangan_posisi!='pimpinan'){
                              echo '
                          
                                                <div class="col-md-3">
                                                
                                                     
                                                        <label for="'.$id_anggota.'">
                                                           
                                                            <span class="box"></span> '.$nama.' </label>
                                               
                                                </div>
                                                   
                                                
                              ';
                            }
                          }
                          echo "<div class='col-md-12'><b>Anggota Setwan</b></div><br>";
                          foreach($detail_jaldis as $content)
                          {
                              foreach ($content as $key => $value ) {
                              $$key=$value;
                          }
                            if($keterangan=='bukan anggota legislatif'){
                              echo '
                          
                                                <div class="col-md-3">
                                                
                                                     
                                                        <label for="'.$id_anggota.'">
                                                           
                                                            <span class="box"></span> '.$nama.' </label>
                                               
                                                </div>
                                                   
                                                
                              ';
                            }
                          }
                          ?>
                        </div>
                                                                 
                    </div>
                  </div> 
                  <br>
                 
                  <?php
                        $q9 = "SELECT a.* from hasil_jaldis a where a.kode_jaldis='".$jd->kode_jaldis."'";
                        $foto = $this->User_model->manualQuery($q9)->result();
                        if($foto==NULL){
                          echo 'Tidak ada file foto';
                        }
                        else{
                  ?>
                  
                  <ul class="slides">
                      <?php
                          $next = 2;
                          $prev = count($foto);
                          $no = 1;
                          foreach ($foto as $key => $value) {
                        
                      ?>
                      <input type="radio" name="radio-btn" id="img-<?= $no; ?>" checked />
                      <li class="slide-container">
                          <div class="slide">
                              <?php echo '<img src="'.base_url('assets/hasil_jaldis/').$value->nama_file.'"/>'; ?>
                          </div>
                          <div class="nav">
                              <label for="img-<?= $prev; ?>" class="prev">&#x2039;</label>
                              <label for="img-<?= $next; ?>" class="next">&#x203a;</label>
                          </div>
                      </li>
                      <?php
                      $no++;
                      $next++;
                      $prev--;
                      }
                      echo '<li class="nav-dots">';
                          $nomor = 1;
                          foreach ($foto as $key => $value) {
                          echo '<label for="img-'.$nomor.'" class="nav-dot" id="img-dot-'.$nomor.'"></label>';
                      
                      $nomor++;
                      }?>
                      </li>
                      
                  </ul>
                <?php } ?>
                </div>

           
            <br>

          </form>

        </div>

      </div>

      

    </div>

  </div>

</div>
<?php
}
?> -->