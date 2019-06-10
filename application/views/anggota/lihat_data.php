<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> Data
	<small>Anggota Legislatif</small>
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
			<div class="tabbable-line">
				<ul class="nav nav-tabs ">
					<li class="active">
						<a href="#tab_15_11" data-toggle="tab"> Anggota Dewan </a>
					</li>
					<li>
						<a href="#tab_15_22" data-toggle="tab"> Anggota Setwan </a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_15_11">
						<div class="portlet-title">
							<a class="btn blue btn-outline" href='<?= base_url('Anggota/tambah_data'); ?>'>Tambah Data</a>
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
									foreach($data_anggota as $content)
									{
										foreach ($content as $key => $value ) {
										$$key=$value;
									}
									if($keterangan=='anggota legislatif'){
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
															<a href="<?php echo site_url('Anggota/detail_data/'.$id)?>">
																<i class="icon-eye"></i> Detail Data </a>
														</li>
														<li>
															<a href="<?php echo site_url('Anggota/ubah_data/'.$id)?>">
																<i class="icon-wrench"></i> Ubah Data </a>
														</li>
														<li class="divider"> </li>
														<li>
															<a href="<?php echo site_url('Anggota/hapus_data/'.$id)?>" onclick="return confirm('Anda yakin?')">
																<i class="icon-trash"></i> Hapus Data </a>
														</li>
													</ul>
												</div>
											</td>
										</tr>
									<?php
									}}
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
					<div class="tab-pane" id="tab_15_22">
						<div class="portlet-title">
							<a class="btn blue btn-outline" href='<?= base_url('Anggota/tambah_setwan'); ?>'>Tambah Data</a>
						</div>
						<div class="portlet-body">
							<table class="table table-bordered table-striped" id="tbl2">
								<thead>
								<tr>
									<th style="text-align: center" width="5%">#</th>
									<th style="text-align: center">Nama</th>
									<th style="text-align: center">NIP</th>
									<th style="text-align: center">Jabatan</th>
									<th width="7%">Aksi</th>
								</tr>
								</thead>
								<tbody>
									<?php
									$no=1;
									foreach($data_anggota as $content)
									{
										foreach ($content as $key => $value ) {
										$$key=$value;
									}
									if($keterangan=='bukan anggota legislatif'){
									?>
										<tr class="gradeX">
											<td style="text-align: center"><?= $no++."."; ?></td>
											<td style="text-align: center"><?= $nama; ?></td>
											<td style="text-align: center"><?= $nip; ?></td>
											<td style="text-align: center"><?= $jabatan; ?></td>
											<td>
												<div class="btn-group">
													<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Aksi
														<i class="fa fa-angle-down"></i>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li>
															<a href="<?php echo site_url('Anggota/detail_data/'.$id)?>">
																<i class="icon-eye"></i> Detail Data </a>
														</li>
														<li>
															<a href="<?php echo site_url('Anggota/ubah_data/'.$id)?>">
																<i class="icon-wrench"></i> Ubah Data </a>
														</li>
														<li class="divider"> </li>
														<li>
															<a href="<?php echo site_url('Anggota/hapus_data/'.$id)?>" onclick="return confirm('Anda yakin?')">
																<i class="icon-trash"></i> Hapus Data </a>
														</li>
													</ul>
												</div>
											</td>
										</tr>
									<?php
									}}
									?>
								</tbody>
							</table>
							<script>
								$(function () {
									$("#tbl2").DataTable({
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
				</div>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>