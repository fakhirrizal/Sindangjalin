<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> Laporan JalDis
	<small>Berdasarkan Waktu</small>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
<?= $this->session->flashdata('gagal') ?>
<?= $this->session->flashdata('sukses') ?>
<div class="m-heading-1 border-green m-bordered">
	<h3>Catatan</h3>
	<!-- <p> ColReorder adds the ability for the end user to be able to reorder columns in a DataTable through a click and drag operation. This can be useful when presenting data in a table, letting the user move columns that they wish to compare
		next to each other for easier comparison. </p>
	<p> For more info please check out
		<a class="btn red btn-outline" href="http://datatables.net/extensions/colreorder/" target="_blank">the official documentation</a>
	</p> -->
</div>
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet light bordered">
			<form action='<?= base_url('laporan_by_tanggal'); ?>' method='post'>
				<div class="form-group">
					<label class="control-label col-md-2">Pilih rentang waktu</label>
					<div class="col-md-3">
						<!-- <div id="reportrange" class="btn default">
							<i class="fa fa-calendar"></i> &nbsp;
							<span></span>
							<b class="fa fa-angle-down"></b>
						</div> -->
						<input type='date' class='form-control' name='start_date'>
					</div>
					<div class="col-md-3">
						<input type='date' class='form-control' name='end_date'>
					</div>
					<div class="col-md-2">
						<button type='submit' class="btn blue">Proses</button>
					</div>
				</div>
				<!-- <input type="text" name="datefilter" value="" />

				<script type="text/javascript">
					$(function() {

					$('input[name="datefilter"]').daterangepicker({
						autoUpdateInput: false,
						locale: {
							cancelLabel: 'Clear'
						}
					});

					$('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
						$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
					});

					$('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
						$(this).val('');
					});

					});
				</script> -->
			</form>
			<!-- <script type="text/javascript">
			$(document).ready(function(){
				$(".tombol-simpan").click(function(){
					var data = $('.form-user').serialize();
					$.ajax({
						type: 'POST',
						url: "<?= base_url('Laporan/simpann'); ?>",
						data: data,
						success: function() {
							$('#ubahdata').modal("show");
						}
					});
				});
			});
			</script> -->
			<br>
			<hr>
			<div class="portlet-title">
				<a class="btn blue btn-outline" href='<?= base_url('Master/buat_jaldis'); ?>'>Tambah Data</a>
			</div>
			<div class="portlet-body">
				<table class="table table-bordered table-striped" id="tbl">
					<thead>
					<tr>
						<th style="text-align: center" width="5%">#</th>
						<th style="text-align: center">Tujuan Perjalanan</th>
						<th style="text-align: center">Waktu</th>
						<th style="text-align: center">Jumlah Rombongan</th>
						<th width="7%">Aksi</th>
					</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						foreach($jaldis as $content)
						{
							foreach ($content as $key => $value ) {
							$$key=$value;
						}
						$tanggal1 = new DateTime($start_date);
						$tanggal2 = new DateTime($end_date);
						$tgl_sekarang = new DateTime();
						$perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
						?>
							<tr class="gradeX">
								<td style="text-align: center"><?= $no++."."; ?></td>
								<td><?= $tujuan; ?></td>
								<td style="text-align: center"><?php
									if($perbedaan=='1'){
										echo date('d-m-Y', strtotime($start_date));
									}
									else{
									echo date('d-m-Y', strtotime($start_date)).' Sampai '.date('d-m-Y', strtotime($end_date)).' ('.$perbedaan.' Hari)';
									}?>
								</td>
								<td style="text-align: center"><?= $jumlah_rombongan.' Anggota'; ?></td>
								<td>
									<div class="btn-group">
										<button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Aksi
											<i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="<?php echo site_url('Master/detail_jaldis/'.$kode_jaldis)?>">
													<i class="icon-eye"></i> Detail Data </a>
											</li>
											<li>
												<a href="<?php echo site_url('Master/ubah_jaldis/'.$kode_jaldis)?>">
													<i class="icon-wrench"></i> Ubah Data </a>
											</li>
											<li class="divider"> </li>
											<li>
												<a href="<?php echo site_url('Master/hapus_jaldis/'.$kode_jaldis)?>" onclick="return confirm('Anda yakin?')">
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