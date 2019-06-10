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
                        <small>Panja</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                        <p> 
                            <a class="btn red btn-outline" href="<?php echo site_url('Master/tambah_panja')?>" target="_blank"><i class="icon-user-follow"></i>&nbsp;&nbsp;Tambah Data Panja</a>
                        </p>
                <table class="table table-bordered table-striped" id="pansus">
                    <thead>
                      <tr>
                        <th style="text-align: center" >#</th>
                        <th style="text-align: center" >Nama Panja</th>
                        <th style="text-align: center" >Dibentuk pada,</th>
                        <th style="text-align: center" >Jumlah Anggota</th>      
                        <th style="text-align: center" >Status</th>                      
                        <th style="text-align: center" >Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                                  
                    <?php
                    $no=1;
                    foreach($data_panja as $content)
                    {
                        foreach ($content as $key => $value ) {
                        $$key=$value;
                    }
                    $hasil = '';
                    ?>
                    <tr class="gradeX">
                        <td style="text-align: center"><?= $no++."."; ?></td>
                        <td><?php echo $nama_panja; ?></td>
                        <td><?php echo date('d-m-Y', strtotime($awal_periode)); ?></td>
                        <td><?php echo $jumlah_anggota.' Orang.'; ?></td>
                        <td style="text-align: center;"><?php
                                            $tanggal_berakhir  = strtotime($akhir_periode);
                                            $tanggal_awal  = strtotime($awal_periode);
                                            $sekarang    = time(); // Waktu sekarang
                                            $diff   = $sekarang - $tanggal_berakhir;
                                            $diff2   = $sekarang - $tanggal_awal;
                                            $hasil = floor($diff / (60 * 60 * 24)); // dalam hitungan hari
                                            $hasil2 = floor($diff2 / (60 * 60 * 24)); // dalam hitungan hari
                                            if($hasil2>0){
                                                if($hasil>0){
                                                    echo '<span class="label label-sm label-info"> Sudah selesai </span>';
                                                }
                                                else{
                                                    echo '<span class="label label-sm label-warning"> Masih Berjalan </span>';
                                                }
                                                
                                            }
                                            else{
                                                echo '<span class="label label-sm label-success"> Coming Soon </span>';
                                            }
                        ?></td>
                      
                        <td style="text-align: center">
                            <a class="btn btn-circle btn-icon-only yellow" href="<?php echo site_url('Master/jabatan_panja/'.$kode_panja)?>" title="detail data">
                                <i class="icon-eye"></i>
                            </a>
                            <a class="view_data btn btn-circle btn-icon-only green" data-toggle="modal" data-target="#ubah" title="ubah data" id='<?= $id."_".$kode_panja; ?>'>
                                <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only red" href="<?php echo site_url('Master/hapus_panja/'.$kode_panja)?>" title="hapus data" onclick="return confirm('Anda yakin?')">
                                <i class="icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
               
                </table>
<div class="alert alert-info no-margin margin-top-10"> Catatan! Silahkan hapus data sekiranya sudah banyak (usahakan yang ada di tabel adalah data Panja yang masih aktif), rekapan tetap ada di Laporan data Panja. </div>
      <script>
      $(function () {
        $("#pansus").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
      </script>
<div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header" style="text-align: center;">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Ubah Data Panja</h4>

      </div>

      <div class="modal-body">

       

        <div class="box box-primary">

       
          <form class="form-horizontal" method="post" action="<?php echo base_url()."Master/ubah_panja"; ?>">
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
            var kata = id.split("_");
            // memulai ajax
            $.ajax({
                url: '<?php echo base_url(); ?>Master/ajax_panja', // set url -> ini file yang menyimpan query tampil detail data gambar
                method: 'post',     // method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
                data: {id:kata[0],kode_panja:kata[1]},      
                success:function(data){     // kode dibawah ini jalan kalau sukses
                    $('#data_detail').html(data);   // mengisi konten dari -> <div class="modal-body" id="data_gambar">
                    $('#ubah').modal("show");    // menampilkan dialog modal nya
                }
            });
        });
    });
    </script>