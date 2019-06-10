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
                    
                                                                           
<?php
foreach ($data_jaldis as $key => $jd) {
?>


       
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
                  <!-- <div class="alert alert-info no-margin margin-top-10"> Catatan JalDis. </div>                    
                  <div class="form-body">
                  <p><?= $jd->catatan; ?></p> 
                  </div> -->
                  <?php
                        $q9 = "SELECT a.* from hasil_jaldis a where a.kode_jaldis='".$jd->kode_jaldis."'";
                        $foto = $this->User_model->manualQuery($q9)->result();
                        if($foto==NULL){
                          echo 'Tidak ada file foto';
                        }
                        else{
                  ?>
                  <!-- <div id="slider">
                    <div id="slide-holder">
                        <?php
                          foreach ($foto as $key => $value) {
                            echo '<div class="slide"><img src="'.base_url('assets/hasil_jaldis/').$value->nama_file.'" alt="" width="100%" height="100%" /></div>';
                          }
                        
                        ?>
                    </div>
                  </div> -->
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
                              <!-- <label for="img-<?= $prev; ?>" class="prev">&#x2039;</label>
                              <label for="img-<?= $next; ?>" class="next">&#x203a;</label>
 -->                          </div>
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
<?php
}
?>