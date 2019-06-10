					<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Data
                        <small>Rapat</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <?= $this->session->flashdata('sukses') ?>
                    <div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="portlet light portlet-fit bordered">

            <div class="portlet-title">
                <!-- <div class="caption">
                    <i class="icon-shield font-blue"></i>
                    <span class="caption-subject font-dark bold uppercase"> Data Rapat</span>
                </div> -->
                <div class="actions">
					<form action="/Seal/Index" enctype="multipart/form-data" method="post">
						                 
						<div class="btn-group btn-group-devided" data-toggle="buttons">
	                        <button type="button" title="Tambah Data Baru" class="btn blue btn-sm btn-circle dropdown-toggle" onclick="location.href='<?= base_url() ?>Rapat/tambah_data'">
	                            <span class="hidden-sm hidden-xs">Tambah Data Rapat&nbsp;</span>
	                            <i class="icon-docs"></i>
	                        </button>
	                    </div>
					</form>
				</div>
            </div>       
            <div class="portlet-body">
                <div class="table-responsive" style="overflow-y: hidden!important">

                    <!-- <form asp-controller="Seal" asp-action="Index" method="get">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><b>File Name </b><br></td>
                                    <td>:</td>
                                    <td><input id="search" name="search" type="text" value=""></td>
                                    <td><b>Status </b><br></td>
                                    <td>:</td>
                                    <td>
                                        <select id="movieGenre" name="movieGenre"><option selected="selected" value="0">Draft</option>
											<option value="1">OnProgress</option>
											<option value="2">Sealed</option>
										</select>
                                    </td>
                                    <td><b>Description </b><br></td>
                                    <td>:</td>
                                    <td><input id="searchdesc" name="searchdesc" type="text" value=""></td>
                                    <td><input type="submit" value="Search"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form> -->
                                <div class="portlet-title">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Catatan</h3>
                                        </div>
                                        <div class="panel-body">
                                            <ul>
                                                <li>Jika tanggal selesai rapat belum jatuh tempo maka tombol hasil rapat (icon doc) akan <i>disable</i>. </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                    <table class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%" id="tabel_rapat">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 28%"> Materi </th>
                                <th class="text-center" style="width: 15%"> Nama Kegiatan </th>
                                <th class="text-center" style="width: 15%"> Tempat </th>
                                <th class="text-center" style="width: 10%"> Tanggal  </th>
                                
                                <th class="text-center" style="width: 15%"> Action </th>
                            </tr>
                        </thead>
                        
                            <tbody>
                                <?php
              
			                    foreach($data_rapat as $content)
			                    {
			                        foreach ($content as $key => $value ) {
			                        $$key=$value;
			                    }
			              
			                    ?>
			                    <tr>
			                     
			                        <td><?php echo $materi; ?></td>
			                        <td><?php echo $acara; ?></td>
			                        <td><?php echo $keterangan; ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($tanggal)); ?></td>
                                    <!-- <?php
                                    if($tanggal==$tanggal_selesai){
                                        echo '<td style="text-align: center;">'.date('d-m-Y', strtotime($tanggal)).'</td>';
                                    }
                                    else{
                                    ?>
			                        <td><?php echo date('d-m-Y', strtotime($tanggal)).' sampai '.date('d-m-Y', strtotime($tanggal_selesai)); ?></td>
			                        <?php } ?> -->
			                        <td class="text-left" width="14%">
			                                        <div class="mt-action-buttons ">
			                                            <div class="btn-group">
                                                            <?php
                                                            if($tanggal_selesai>date('Y-m-d')){
                                                                echo '<button type="button" title="Hasil Rapat" class="btn btn-outline dark btn-sm" value="Detail"><i class="icon-doc"></i></button>';
                                                            }
                                                            else{
                                                            ?>
			                                                	<button type="button" title="Hasil Rapat" class="btn btn-outline dark btn-sm" value="Detail" onclick="location.href='<?= base_url() ?>Rapat/hasil_rapat/<?= $id ?>'"><i class="icon-doc"></i></button>
			                                                <?php } ?> 
			                                                    <button type="button" title="Ubah Data Rapat" class="btn btn-outline blue-sharp btn-sm" value="Download" onclick="location.href='<?= base_url() ?>Rapat/ubah_data/<?= $id ?>'"><i class="glyphicon glyphicon-pencil"></i></button>
			                                                    <button type="button" title="Hapus Data Rapat" class="btn btn-outline red btn-sm" value="Delete" onclick="location.href='<?= base_url() ?>Rapat/hapus_data/<?= $id ?>'"><i class="glyphicon glyphicon-trash"></i></button>
			                                            </div>
			                                        </div>
			                        </td>
			                    </tr>
			                    <?php
			                    }
			                    ?>
                            </tbody>
                        
                    </table>

                 <!--    Page 1 of 1
                    <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li></ul></div> -->

                </div>
            </div>
        </div>

    </div>
</div>

	  <script>
      $(function () {
        $("#tabel_rapat").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
      </script>					