<div class="box box-info">



  <div class="box-header with-border">

     <h3 class="box-title">Detail Informasi Anggota</h3>

  </div><!-- /.box-header -->

  <div class="box-body row">



        <?php

                if(isset($data_anggota)){

                    foreach($data_anggota as $row)

                    {

        ?>



        <div class="col-md-6">                

                <table class="table">

                  <tbody>

                  <tr>

                  <td> Nama Anggota </td>

                  <td> : </td>

                  <td><?php echo $row->nama; ?></td> 

                  </tr>  

                   

                   

                  <?php
                  if($row->keterangan=='bukan anggota legislatif'){
                    echo '
                    <tr>
                    <td> Nomor Induk Pegawai </td>
                    <td> : </td>
                    <td>'.$row->nip.'</td> 
                    </tr>
                    <tr>
                    <td> Jabatan </td>
                    <td> : </td>
                    <td>'.$row->jabatan.'</td> 
                    </tr>
                    <tr>
                    <td> Golongan </td>
                    <td> : </td>
                    <td>'.$row->golongan.'</td> 
                    </tr>
                    <tr>
                    <td> Pangkat </td>
                    <td> : </td>
                    <td>'.$row->pangkat.'</td> 
                    </tr>
                    ';
                  }
                  else{
                    echo '
                      <tr>
                      <td> Asal Fraksi </td>
                      <td> : </td>
                      <td>'.$row->fraksi.'</td> 
                      </tr>
                      <tr>
                      <td> Jabatan </td>
                      <td> : </td>
                      <td>'.$row->jabatan.'</td> 
                      </tr>
                      <tr>
                      <td> Email </td>
                      <td> : </td>
                      <td>'.$row->email.'</td> 
                      </tr>
                      <tr>
                      <td> Nomor HP </td>
                      <td> : </td>
                      <td>'.$row->no_hp.'</td> 
                      </tr>
                    ';
                  }
                  ?>

                
                  </tbody>

                </table>
                
                                                                    
        
                <a href="<?php echo base_url()."Anggota/lihat_data"; ?>" class="btn btn-default" role="button">Kembali</a>  

        </div>

        <div class="col-md-6" >
                                <?php             
                                        if(!empty($row->foto)){
                                            echo '<img src="'.base_url('assets/images/anggota/').$row->foto.'" height="246" width="190">';
                                        }
                                        else{
                                            echo '<img src="'.base_url('assets/pages/img/avatars/kosong.jpeg').'" height="246" width="190">';
                                        }
                                    
                                ?>
            <br /><br /><br />
            <div class=" row btn-toolbar" role="toolbar" aria-label="...">              
                <a data-toggle="modal" data-target="#editt-poto" data-id_anggota="<?php echo $row->id;?>" class="btn btn-default" style="width:190px" role="button">Ubah Foto Anggota</a>
            </div>
        </div>
        <?php }} ?>
                                                                  <div class="col-md-12" >
                                                                    <?php
                                                                    if(empty($riwayat_pansus)){
                                                                      echo '';
                                                                    }
                                                                    else{
                                                                    ?>
                                                                    <div class="portlet">
                                                                      <div class="portlet-title">
                                                                          <div class="tools">
                                                                              <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                              <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                                                              <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                                                              <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                                          </div>
                                                                      </div>
                                                                      <div class="caption">
                                                                              <i class="icon-directions font-green hide"></i>
                                                                              <span class="caption-subject bold font-dark uppercase "> RIWAYAT PANSUS</span>
                                                                      </div>    
                                                                      <div class="portlet-body">
                                                                          <div class="table-scrollable">
                                                                              <table class="table">
                                                                                <thead>
                                                                                  <tr>
                                                                                    <th style="text-align: center" >Nama PANSUS</th>
                                                                                    <th style="text-align: center" >Jabatan</th>
                                                                                    <th style="text-align: center" >Periode</th>
                                                                                  </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                  <?php
                                                                                  foreach ($riwayat_pansus as $key => $value) {
                                                                                  echo '<tr>';
                                                                                  echo '<td style="text-align: center">'.$value->nama_pansus.'</td>';
                                                                                  echo '<td style="text-align: center">'.$value->jabatan.'</td>';
                                                                                                          $tanggal_berakhir  = strtotime($value->akhir_periode);
                                                                                                          $sekarang    = time(); // Waktu sekarang
                                                                                                          $diff   = $sekarang - $tanggal_berakhir;
                                                                                                          $hasil = floor($diff / (60 * 60 * 24)); // dalam hitungan hari
                                                                                                          if($hasil>0){
                                                                                                              echo '<td style="text-align: center">'.$value->awal_periode.' sampai '.$value->akhir_periode.'</td>';
                                                                                                          }
                                                                                                          else{
                                                                                                              echo '<td style="text-align: center">'.$value->awal_periode.' sampai Sekarang </td>';
                                                                                                          }
                                                                                  echo '</tr>';
                                                                                  } ?>
                                                                                </tbody>
                                                                              </table>
                                                                          </div>
                                                                      </div>
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    if(empty($riwayat_badan)){
                                                                      echo '';
                                                                    }
                                                                    else{
                                                                    ?>
                                                                    <div class="portlet">
                                                                      <div class="portlet-title">
                                                                          <div class="tools">
                                                                              <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                              <a href="#portlet-config" data-toggle="modal" class="config" data-original-title="" title=""> </a>
                                                                              <a href="javascript:;" class="reload" data-original-title="" title=""> </a>
                                                                              <a href="javascript:;" class="remove" data-original-title="" title=""> </a>
                                                                          </div>
                                                                      </div>
                                                                      <div class="caption">
                                                                              <i class="icon-directions font-green hide"></i>
                                                                              <span class="caption-subject bold font-dark uppercase "> RIWAYAT BADAN</span>
                                                                      </div>    
                                                                      <div class="portlet-body">
                                                                          <div class="table-scrollable">
                                                                              <table class="table">
                                                                                <tbody>
                                                                                  <?php
                                                                                  foreach ($riwayat_badan as $key => $value) {
                                                                                  echo '<tr>';
                                                                                  echo '<td style="text-align: center">'.$value->nama_badan.'</td>';
                                                                                  echo '<td style="text-align: center">'.$value->jabatan.'</td>';
                                                                                                        
                                                                                                          if($value->status==0){
                                                                                                              echo '<td style="text-align: center"> Periode : '.$value->tanggal_buat.' sampai '.$value->tanggal_selesai.'</td>';
                                                                                                          }
                                                                                                          else{
                                                                                                              echo '<td style="text-align: center"> Sejak'.$value->tanggal_buat.' sampai Sekarang </td>';
                                                                                                          }
                                                                                  echo '</tr>';
                                                                                  } ?>
                                                                                </tbody>
                                                                              </table>
                                                                          </div>
                                                                      </div>
                                                                    </div>
                                                                    <?php } ?>
                                                                  </div>
</div>

<div class="modal fade" id="editt-poto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Ubah Foto</h4>

      </div>

      <div class="modal-body">

       

        <div class="box box-primary">

            <!-- form start -->

          <form class="form-horizontal" method="post" action="<?php echo base_url()."Anggota/ubah_foto"; ?>" enctype='multipart/form-data'>

                <div class="box-body">                 

                  <input class="form-control" name="id_anggota" type="hidden" value="<?php echo $row->id;?>" readonly>
                  <div class="m-heading-1 border-green m-bordered">
                                                            <h3>Catatan</h3>
                                                            <p> Ekstensi yang diijinkan : jpg, png, jpeg, dan bmp </p>
                                                            <p> Ukuran maksimal file : 5MB </p>
                  </div>
             

                  <div class="input-group">

                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>

                    <input name="MAX_FILE_SIZE" type="hidden" value="10485760" class="form-control">

                    <input name="logo" type="file" accept="image/*" class="form-control">

                  </div>        

                              

                </div>

           
            <br>
            <div class="box-footer">

                    <button type="submit" class="btn btn-primary">Ubah</button>
 

            </div>

          </form>

        </div>







      </div>

      

    </div>

  </div>

</div>

