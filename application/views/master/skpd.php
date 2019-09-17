<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> Data
	<small>SKPD (Satuan Kerja Perangkat Daerah)</small>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
<?= $this->session->flashdata('gagal') ?>
<?= $this->session->flashdata('sukses') ?>
<div class="m-heading-1 border-green m-bordered">
	<h3>Catatan</h3>
</div>
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<a class="btn blue btn-outline" data-toggle="modal" data-target="#tambah">Tambah Data</a>
			</div>
			<div class="portlet-body">
				<table class="table table-bordered table-striped" id="tbl">
					<thead>
					<tr>
						<th style="text-align: center" width="5%">#</th>
						<th style="text-align: center">Nama</th>
						<th style="text-align: center">Keterangan</th>
						<th width="7%">Aksi</th>
					</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						foreach($skpd as $content)
						{
							foreach ($content as $key => $value ) {
							$$key=$value;
						}
						?>
							<tr class="gradeX">
								<td style="text-align: center"><?= $no++."."; ?></td>
								<td style="text-align: center"><?= $nama; ?></td>
								<td style="text-align: center"><?= $keterangan; ?></td>
								<td>
									<div class="btn-group">
										<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Aksi
											<i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a data-toggle="modal" data-target="#ubah<?= $id;?>">
													<i class="icon-wrench"></i> Ubah Data </a>
											</li>
											<li class="divider"> </li>
											<li>
												<a href="<?php echo site_url('Master/hapus_skpd/'.$id)?>" onclick="return confirm('Anda yakin?')">
													<i class="icon-trash"></i> Hapus Data </a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
				<script>
					$(function () {
						$("#tbl").DataTable({
						"paging": true,
						"lengthChange": true,
						"searching": true,
						"ordering": true,
						"info": true,
						"autoWidth": true
						});
					});
				</script>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<?php
foreach ($skpd as $row) {
?>
<div class="modal fade" id="ubah<?= $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Form Ubah Data SKPD</h4>
			</div>
		<div class="modal-body">
			<div class="box box-primary">
			<!-- form start -->
				<form class="form-horizontal" method="post" action="<?php echo base_url()."Master/ubah_skpd"; ?>">
					<div class="form-body">         
												
						<input type="hidden" name="id" value="<?= $row->id; ?>">
						
						<div class="form-group form-md-line-input has-success form-md-floating-label">
							<div class="input-icon">
								<input type="text" value="<?= $row->nama; ?>" class="form-control" name="nama" maxlength="200" required="">
								<label for="form_control_1">Nama</label>
								<span class="help-block">&nbsp; &nbsp;*masukkan nama dari SKPD</span>
								<i class="icon-pin"></i>
							</div>
						</div>   
						
						<br>
						<div class="form-group form-md-line-input has-warning form-md-floating-label">
							<div class="input-icon">
								<input type="text" value="<?= $row->keterangan; ?>" class="form-control" name="deskripsi" maxlength="200" required="">
								<label for="form_control_1">Deskripsi</label>
								<span class="help-block">&nbsp; &nbsp;*keterangan tambahan dari skpd terkait</span>
								<i class="icon-pencil"></i>
							</div>
						</div>
						
						<br>
						<div class="form-actions noborder">
							<button type="submit" class="btn blue">Perbarui</button>
							<button type="button" data-dismiss="modal" class="btn default">Batal</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		</div>
	</div>
</div>
<?php }
?>
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Form Tambah Data SKPD</h4>
			</div>
			<div class="modal-body">
				<div class="box box-primary">
				<!-- form start -->
					<form class="form-horizontal" method="post" action="<?php echo base_url()."Master/simpan_skpd"; ?>">
						<div class="form-body">
							<input type="hidden" name="id" value="<?= $row->id; ?>">
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon">
									<input type="text" class="form-control" name="nama" maxlength="200" required="">
									<label for="form_control_1">Nama</label>
									<span class="help-block">&nbsp; &nbsp;*masukkan nama dari SKPD</span>
									<i class="icon-pin"></i>
								</div>
							</div>
							<br>
							<div class="form-group form-md-line-input has-warning form-md-floating-label">
								<div class="input-icon">
									<input type="text" class="form-control" name="deskripsi" maxlength="200" required="">
									<label for="form_control_1">Deskripsi</label>
									<span class="help-block">&nbsp; &nbsp;*keterangan tambahan dari skpd terkait</span>
									<i class="icon-pencil"></i>
								</div>
							</div>
							<br>
							<div class="form-actions noborder">
								<button type="submit" class="btn blue">Simpan</button>
								<button type="button" data-dismiss="modal" class="btn default">Batal</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>