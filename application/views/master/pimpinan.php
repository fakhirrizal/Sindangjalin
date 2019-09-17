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
<h3 class="page-title"> Data
	<small>Pimpinan DPRD</small>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
<?= $this->session->flashdata('gagal') ?>
<?= $this->session->flashdata('sukses') ?>
<div class="m-heading-1 border-green m-bordered">
	<h3>Catatan</h3>
		<p>Untuk jabatan pimpinan bisa ditambahkan setelah menambah data terlebih dahulu, kemudian gunakan fungsi ubah data.</p>
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
						<th style="text-align: center">Jabatan</th>
						<th width="7%">Aksi</th>
					</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						foreach($data_pimpinan as $content)
						{
							foreach ($content as $key => $value ) {
							$$key=$value;
						}
						?>
							<tr class="gradeX">
								<td style="text-align: center"><?= $no++."."; ?></td>
								<td style="text-align: center"><?= $nama; ?></td>
								<td style="text-align: center"><?= $jabatan; ?></td>
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
												<a href="<?php echo site_url('Master/hapus_pimpinan/'.$id)?>" onclick="return confirm('Anda yakin?')">
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
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header" style="text-align: center;">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

				<h4 class="modal-title" id="myModalLabel">List Daftar Anggota Dewan</h4>

			</div>
			<div class="modal-body">

			

				<div class="box box-primary">

			
				<form class="form-horizontal" method="post" action="<?php echo base_url()."Master/simpan_pimpinan"; ?>">
						<div class="alert alert-info no-margin margin-top-10"> Silahkan tandai anggota yang akan dimasukkan dalam data pimpinan. </div>
													
						<br>
														<div class="form-group form-md-checkboxes">
												
															<div class="col-md-12">
																<div class="md-checkbox-inline">
																	<div class="md-checkbox">
																		<input type="checkbox" id="selectall" onClick="selectAll(this)" class="md-check">
																		<label for="selectall">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span> Select All </label>
																	</div>
																	
																</div>
															</div>
														</div>
														<hr>
													<div class="form-group form-md-checkboxes">
														<label for="form_control_1">&nbsp;&nbsp;&nbsp;&nbsp;List Anggota Dewan</label>
														
													</div>
													<div class="form-group form-md-checkboxes">
														<div class="md-checkbox-inline">
															<?php
															foreach ($list_data as $key => $value) {
															?>
															<div class="col-md-3">
																<div class="md-checkbox">
																	<input type="checkbox" id="<?= $value->id; ?>" name="nama[]" value="<?= $value->id; ?>" class="md-check">
																	<label for="<?= $value->id; ?>">
																		<span class="inc"></span>
																		<span class="check"></span>
																		<span class="box"></span> <?= $value->nama; ?> </label>
																</div>
															</div>
															<?php } ?>
														</div>
														
													</div>
												<div class="form-actions noborder">
													<button type="submit" class="btn blue">Simpan</button>
													<button type="reset" class="btn default">Batal</button>
												</div>

				</form>

				</div>

			</div>
		</div>
	</div>
</div>
<?php
                    foreach($data_pimpinan as $content)
                    {
                        foreach ($content as $key => $value ) {
                        $$key=$value;
                    }
                    ?>
<div class="modal fade" id="ubah<?= $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header" style="text-align: center;">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

				<h4 class="modal-title" id="myModalLabel">Ubah Jabatan Pimpinan Dewan</h4>

			</div>
			<div class="modal-body">

			

				<div class="box box-primary">

			
				<form class="form-horizontal" method="post" action="<?php echo base_url()."Master/jabatan_pimpinan"; ?>">
					<input type="hidden" name="id" value="<?= $id; ?>">
													<div class="row">
														<div class="col-md-12">
															<div class="form-group form-md-line-input has-error form-md-floating-label">
																<div class="input-icon">
																	<input type="text" class="form-control" value="<?= $nama; ?>" readonly>
																	<label for="form_control_1">Anggota</label>
																	<i class="icon-user"></i>
																</div>
															</div>
														</div>
														
													</div>
													<br>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group form-md-line-input has-warning form-md-floating-label">
																<div class="input-icon">
																	<input type="text" name="jabatan" class="form-control" value="<?= $jabatan; ?>" maxlength="100" required>
																	<label for="form_control_1">Jabatan</label>
																	<i class="icon-briefcase"></i>
																</div>
															</div>
														</div>
														
													</div>
												<div class="form-actions noborder">
													<button type="submit" class="btn blue">Perbarui</button>
													<button type="reset" class="btn default">Batal</button>
												</div>
				</form>

				</div>

			</div>
		</div>
	</div>
</div>
<?php } ?>