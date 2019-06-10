<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title">
	<small>Laporan</small>
	<small>-</small>
	<small>Data Perjalanan Dinas</small>
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
			<!-- <form action='#' method='post'>
				<div class="form-group">
					<label class="control-label col-md-2">Pilih rentang waktu</label>
					<div class="col-md-3">
						<input type='date' class='form-control' name='start_date'>
					</div>
					<div class="col-md-3">
						<input type='date' class='form-control' name='end_date'>
					</div>
					<div class="col-md-2">
						<button type='submit' class="btn blue">Proses</button>
					</div>
				</div>
			</form>
			<br>
			<hr> -->
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
									<button class="btn btn-xs green" type="button" onclick="window.location.href='<?= base_url('laporan/detail_jaldis/'.$kode_jaldis); ?>'"> Detail Data
										<i class="icon-action-redo"></i>
									</button>
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
<div class="modal fade" id="detaildata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"></h4>
			</div>
			<div class="modal-body">
				<div class="box box-primary" id='detaildatarapat' >
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$.ajaxSetup({
			type:"POST",
			url: "<?php echo base_url(); ?>Pengguna/Rapat/ajax_rapat",
			cache: false,
		});
		$('.detail_data').click(function(){
		var id = $(this).attr("id");
		var modul = 'modul_detail_data_rapat';
		$.ajax({
			data: {id:id,modul:modul},
			success:function(data){
			$('#detaildatarapat').html(data);
			$('#detaildata').modal("show");
			}
		});
		});
	});
</script>