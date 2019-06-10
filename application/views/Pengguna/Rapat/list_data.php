<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title">
	<small>Data Agenda</small>
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
						<th style="text-align: center">Acara</th>
						<th style="text-align: center">Tempat</th>
						<th style="text-align: center">Waktu</th>
						<th style="text-align: center" width="7%">Aksi</th>
					</tr>
					</thead>
					<tbody>
						<?php
						$no=1;
						foreach($data_tabel as $content)
						{
							foreach ($content as $key => $value ) {
							$$key=$value;
						}
						?>
							<tr class="gradeX">
								<td style="text-align: center"><?= $no++."."; ?></td>
								<td><?php echo $acara; ?></td>
								<td><?php echo $keterangan; ?></td>
								<td style="text-align: center"><?php
									$waktu = explode('-', $tanggal);
									if ($waktu[1]=="01") {
										echo $waktu[2]." Januari ".$waktu[0];
									}elseif ($waktu[1]=="02") {
										echo $waktu[2]." Februari ".$waktu[0];
									}elseif ($waktu[1]=="03") {
										echo $waktu[2]." Maret ".$waktu[0];
									}elseif ($waktu[1]=="04") {
										echo $waktu[2]." April ".$waktu[0];
									}elseif ($waktu[1]=="05") {
										echo $waktu[2]." Mei ".$waktu[0];
									}elseif ($waktu[1]=="06") {
										echo $waktu[2]." Juni ".$waktu[0];
									}elseif ($waktu[1]=="07") {
										echo $waktu[2]." Juli ".$waktu[0];
									}elseif ($waktu[1]=="08") {
										echo $waktu[2]." Agustus ".$waktu[0];
									}elseif ($waktu[1]=="09") {
										echo $waktu[2]." September ".$waktu[0];
									}elseif ($waktu[1]=="10") {
										echo $waktu[2]." Oktober ".$waktu[0];
									}elseif ($waktu[1]=="11") {
										echo $waktu[2]." November ".$waktu[0];
									}elseif ($waktu[1]=="12") {
										echo $waktu[2]." Desember ".$waktu[0];
									}echo ' (Pukul: '.substr($jam,0,5).' WIB)'; ?></td>
								<td>
									<button class="detail_data btn btn-xs green" type="button" id='<?= $id ?>'> Detail Data
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