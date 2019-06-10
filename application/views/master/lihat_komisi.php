                    <script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
                    <script language="JavaScript">
                        function selectAll(source) {
                          checkboxes = document.getElementsByName('nama[]');
                          for(var i in checkboxes)
                            checkboxes[i].checked = source.checked;
                        }
                    </script>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title">Data
                        <small>Komisi</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div>
                                <!-- BEGIN BLOCKQUOTES PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-drawer font-green"></i>
                                            <span class="caption-subject font-blue"><a href="<?php echo site_url('Master/tambah_komisi')?>">Tambah Data Komisi</a></span>
                                        </div>
                                        <div class="tools">
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                    </div>
                                    </div>
                                    <div class="portlet-body">
                                        <h3></h3>
                                        <?php
                                        foreach ($data_komisi as $key => $value) {
                                        ?>
                                        <blockquote>
                                            <p> <?= $value->nama_komisi; ?>. (Terdapat <?= $value->jumlah_anggota; ?> Anggota) </p>
                                            <small style="text-align: justify;">
                                                <?= $value->keterangan; ?>
                                            </small>
                                            <br>
                                            <td style="text-align: center">
                                                <a class="btn btn-circle btn-icon-only yellow" href="<?php echo site_url('Master/detail_komisi/'.$value->id_komisi)?>" title="detail data">
                                                    <i class="icon-eye"></i>
                                                </a>
                                                <a class="view_data btn btn-circle btn-icon-only green" href="#" data-toggle="modal" data-target="#ubah" title="ubah data" id='<?= $value->id; ?>'>
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a class="btn btn-circle btn-icon-only red" href="<?php echo site_url('Master/hapus_komisi/'.$value->id_komisi)?>" title="hapus data" onclick="return confirm('Anda yakin?')">
                                                    <i class="icon-trash"></i>
                                                </a>
                                            </td>
                                        </blockquote>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- END BLOCKQUOTES PORTLET-->
                            </div>                          
                        </div>                       
                    </div>

<div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header" style="text-align: center;">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Ubah Data Komisi</h4>

      </div>

      <div class="modal-body">

       

        <div class="box box-primary">
                  <div class="m-heading-1 border-green m-bordered">
                                                            <h3>Catatan</h3>
                                                            <p style="text-align: justify;"> Jika akan menambah anggota, dan anggota baru tersebut ternyata sudah masuk dalam sebuah komisi, maka posisi anggota tersebut akan berubah ke komisi yang sekarang. </p>
                  </div>
       
          <form class="form-horizontal" method="post" action="<?php echo base_url()."Master/ubah_komisi"; ?>">
                <div class="box-body" id="data_detail"> 
                
                                            
            

          </form>

        </div>

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
                url: '<?php echo base_url(); ?>Master/ajax_komisi', // set url -> ini file yang menyimpan query tampil detail data gambar
                method: 'post',     // method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
                data: {id:id},      // nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
                success:function(data){     // kode dibawah ini jalan kalau sukses
                    $('#data_detail').html(data);   // mengisi konten dari -> <div class="modal-body" id="data_gambar">
                    $('#ubah').modal("show");    // menampilkan dialog modal nya
                }
            });
        });
    });
    </script>