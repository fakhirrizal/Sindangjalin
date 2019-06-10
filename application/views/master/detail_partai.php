<div class="box box-info">



  <div class="box-header with-border">

     <h3 class="box-title">Detail Informasi Partai</h3>

  </div><!-- /.box-header -->

  <div class="box-body row">



        <?php

                if(isset($partai)){

                    foreach($partai as $row)

                    {

        ?>



        <div class="col-md-6">                

                <table class="table">

                  <tbody>

                  <tr>

                  <td> Nama Partai </td>

                  <td> : </td>

                  <td><?php echo $row->nm_partai.' ('.$row->singkatan.')'; ?></td> 

                  </tr>  

                  <tr>

                  <td> Tanggal Berdiri </td>

                  <td> : </td>
                  
                  <td><?php echo date('d-m-Y', strtotime($row->tanggal_berdiri)); ?></td> 

                  </tr> 

                  <tr>

                  <td> Ketua Umum </td>

                  <td> : </td>

                  <td><?php echo $row->ketua_umum; ?></td> 

                  </tr>  

                  <tr>

                  <td> Jumlah Anggota </td>

                  <td> : </td>

                  <td><?php echo number_format($row->jumlah_anggota); ?></td> 

                  </tr> 

                  <tr>

                  <td> Alamat Kantor Pusat </td>

                  <td> : </td>

                  <td><?php echo $row->kantor_pusat; ?></td> 

                  </tr>  


                  </tbody>

                </table>

               
        
                <a href="<?php echo base_url()."Master/lihat_partai"; ?>" class="btn btn-default" role="button">Kembali</a>  

        </div>

        <div class="col-md-6" >

         
                                <?php
                               
                                        if(!empty($row->logo)){
                                            echo '<img src="'.base_url('assets/images/logo/').$row->logo.'" height="246" width="190">';
                                        }
                                        else{
                                            echo '<img src="'.base_url('assets/pages/img/avatars/kosong.jpeg').'" height="246" width="190">';
                                        }
                                    
                                ?>
            <br /><br /><br />
            <div class=" row btn-toolbar" role="toolbar" aria-label="...">

              
                <a data-toggle="modal" data-target="#editt-poto" data-id_anggota="<?php echo $row->id_partai;?>" class="btn btn-default" style="width:190px" role="button">Ubah Logo Partai</a>
           
            </div>

        </div>
        <?php }} ?>

</div>

<div class="modal fade" id="editt-poto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Ubah Logo Partai</h4>

      </div>

      <div class="modal-body">

       

        <div class="box box-primary">

            <!-- form start -->

          <form class="form-horizontal" method="post" action="<?php echo base_url()."Master/ubah_logo"; ?>" enctype='multipart/form-data'>

                <div class="box-body">                 

                  <input class="form-control" name="id_partai" type="hidden" value="<?php echo $row->id_partai;?>" readonly>

                <h5>Logo</h5>

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

