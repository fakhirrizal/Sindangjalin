					<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
                    <link href="<?=base_url('assets/global/plugins/cubeportfolio/css/cubeportfolio.css');?>" rel="stylesheet" type="text/css" />
                    <link href="<?=base_url('assets/pages/css/portfolio.min.css');?>" rel="stylesheet" type="text/css" />
					<!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Data
                        <small>Agenda</small>
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
	                        <button type="button" title="Tambah Data Baru" class="btn blue btn-sm btn-circle dropdown-toggle" onclick="location.href='<?= base_url() ?>Agenda/tambah_data'">
	                            <span class="hidden-sm hidden-xs">Tambah Data Agenda&nbsp;</span>
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
                                                <!-- <li>Jika tanggal selesai rapat belum jatuh tempo maka tombol hasil rapat (icon doc) akan <i>disable</i>. </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                    <table class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%" id="da">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 5%"> # </th>
                                <th class="text-center"> Acara </th>
                                <th class="text-center"> Tempat </th>
                                <th class="text-center"> Waktu  </th>
                                
                                <th class="text-center" style="width: 15%"> Aksi </th>
                            </tr>
                        </thead>
                        
                            <tbody>
                                <?php
                          $no=1;
			                    foreach($data_agenda as $content)
			                    {
			                        foreach ($content as $key => $value ) {
			                        $$key=$value;
			                    }
			                    
			                    ?>
			                    <tr>
			                        <td style="text-align: center;"><?= $no++.'.'; ?></td>
			                        <td><?php echo $acara; ?></td>
			                        <td><?php echo $tempat; ?></td>
			                        <td><?php echo date('d-m-Y', strtotime($tanggal)).' (Pukul: '.substr($jam,0,5).' WIB)'; ?></td>
			                        <td style="text-align: center" width="14%">
                                                        <a class="btn btn-circle btn-icon-only yellow" data-toggle="modal" data-target="#detail_agnd<?= $id; ?>" title="Detail data">
                                                                  <i class="icon-action-redo"></i>
                                                                </a>
                                                        <a class="btn btn-circle btn-icon-only green" href="<?php echo site_url('Agenda/update_data/'.$id)?>" title="Ubah data">
                                                                  <i class="icon-wrench"></i>
                                                                </a>
                                                        <a class="btn btn-circle btn-icon-only red" onclick="return confirm('Anda yakin?')" href="<?php echo site_url('Agenda/hapus_data/'.$id)?>" title="Hapus data">
                                                                  <i class="icon-trash"></i>
                                                                </a>
                                              </td>
			                    </tr>
			                    <?php
			                    }
			                    ?>
                            </tbody>
                        
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

	  <script>
      $(function () {
        $("#da").DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
      </script>					
<?php
                                            foreach ($data_agenda as $value) {
                                                $id = $value->id;
?>
<div class="modal fade" id="detail_agnd<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <!-- form start -->
          <div class="row">
            <div class="col-md-12">
                <div class="cbp-l-project-details-title">
                    <span>Detail Data Agenda</span>
                </div>
                <ul class="cbp-l-project-details-list">
                    <li>
                        <strong>Tanggal</strong><?php
                         $day = date('D', strtotime($value->tanggal));
                                     $dayList = array(
                                        'Sun' => 'Minggu',
                                        'Mon' => 'Senin',
                                        'Tue' => 'Selasa',
                                        'Wed' => 'Rabu',
                                        'Thu' => 'Kamis',
                                        'Fri' => 'Jumat',
                                        'Sat' => 'Sabtu'
                                     );
                                     echo $dayList[$day].', '.date('d-m-Y', strtotime($value->tanggal)).' (Pukul: '.substr($value->jam,0,5).' WIB)';
                         //$value->tanggal; 
                         ?></li>
                    
                    <li>
                        <strong>Tempat</strong><?= $value->tempat; ?></li>
                    <li>
                        <strong>Acara</strong><?= $value->acara; ?></li>
                    <li>
                        <strong>Materi</strong><?= $value->materi; ?></li>
                    <li>
                        <strong>Yang diundang</strong><?= $value->peserta; ?></li>
                </ul>
            </div>
          </div>
        </div>
      </div>     
    </div>
  </div>
</div> 
<?php } ?>