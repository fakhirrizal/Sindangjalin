<script src="<?=base_url('assets/global/plugins/jquery.min.js');?>" type="text/javascript"></script>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title">
	<small>Detail Data Perjalanan Dinas</small>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
<div class="m-heading-1 border-green m-bordered">
	<h3>Catatan</h3>
</div>
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<a class="btn blue btn-outline" href='<?= base_url('jaldis'); ?>'><i class='icon-control-rewind'></i> Kembali</a>
			</div>
			<div class="portlet-body">
				<div class='row'>
				<?php
        		$ket_tanggal = '';
                if(isset($data_jaldis)){
                    foreach($data_jaldis as $row)
                    {
						$ket_tanggal = $row->end_date;
						$tanggal1 = new DateTime($row->start_date);
						$tanggal2 = new DateTime($row->end_date);
						$perbedaan = ($tanggal2->diff($tanggal1)->format("%a"))+1;
				?>
					<div class="form-group form-md-line-input has-danger">
						<label class="col-md-2 control-label" for="form_control_1">Alat Kelengkapan</label>
						<div class="col-md-10">
						<?php
						$alat_kelengkapan = $row->alat_kelengkapan;
						$ak = substr($alat_kelengkapan, 0,1);
                            if($ak=='B'){
                                $where1['id_badan'] = $alat_kelengkapan;
                                $data_ak1 = $this->Main_model->getSelectedData('badan',$where1);
                                foreach ($data_ak1 as $key => $value1) {
                                  echo $value1->nama_badan;
                                }
                            }
                            elseif($ak=='P'){
                                $where2['kode_pansus'] = $alat_kelengkapan;
                                $data_ak2 = $this->Main_model->getSelectedData('pansus',$where2);
                                foreach ($data_ak2 as $key => $value2) {
                                  echo $value2->nama_pansus;
                                }
                            }
                            elseif($ak=='K'){
                                $where3['id_komisi'] = $alat_kelengkapan;
                                $data_ak3 = $this->Main_model->getSelectedData('komisi',$where3);
                                foreach ($data_ak3 as $key => $value3) {
                                  echo $value3->nama_komisi;
                                }
                            }
                            elseif($ak=='s'){
                                echo 'Semua Anggota Dewan';
                            }
                            elseif($ak=='a'){
                                echo 'Anggota Setwan';
                            }
                            elseif($ak=='i'){
                                echo 'Bintek';
                            }
                            else{
                                echo 'Masukan tidak valid';
                            }
						?>
						</div>
					</div>
					<div class="form-group form-md-line-input has-danger">
						<label class="col-md-2 control-label" for="form_control_1">Tempat Tujuan</label>
						<div class="col-md-10">
						<?= $row->tujuan ?>
						</div>
					</div>
					<div class="form-group form-md-line-input has-danger">
						<label class="col-md-2 control-label" for="form_control_1">Materi</label>
						<div class="col-md-10">
						<?= $row->keperluan; ?>
						</div>
					</div>
					<div class="form-group form-md-line-input has-danger">
						<label class="col-md-2 control-label" for="form_control_1">Waktu</label>
						<div class="col-md-10">
						<?php
						if($perbedaan==1){
							echo date('d-m-Y', strtotime($row->start_date));
						}
						else{
						echo date('d-m-Y', strtotime($row->start_date)).' sampai '.date('d-m-Y', strtotime($row->end_date)).' ('.$perbedaan.' Hari)';}?>
						</div>
					</div>
					<div class="form-group form-md-line-input has-danger">
						<label class="col-md-2 control-label" for="form_control_1">Hasil</label>
						<div class="col-md-10">
						<?= $row->catatan; ?>
						</div>
					</div>
					<!-- <div class="form-group form-md-line-input has-danger">
						<label class="col-md-2 control-label" for="form_control_1">Dukungan Anggaran</label>
						<div class="col-md-10"> -->
						<?php
						// if($row->anggaran==NULL){
						// echo 'Rp 0.00';
						// }
						// else{
						// echo 'Rp '.number_format($row->anggaran,2);
						// }
						?>
						<!-- </div>
					</div> -->
					<hr>
					<?php
						if($row->alat_kelengkapan=='anggota setwan'){
					?>
					<div class="form-group form-md-line-input has-danger">
						<label class="col-md-12 control-label" for="form_control_1">Daftar Peserta</label>
					</div>
					<div class="form-group form-md-line-input has-danger">
						<div class="col-md-12" style="text-align: left">
						<ol>
						<?php
						foreach($detail_jaldis as $content)
						{
							foreach ($content as $key => $value ) {
							$$key=$value;
						}
						echo '
								<div class="col-md-4">
								<li>'.$nama.'</li>
								</div>
						';}
						?>
						</ol>
						</div>
					</div>
					<?php
						}else{
					?>
					<div class="form-group form-md-line-input has-danger">
						<label class="col-md-12 control-label" for="form_control_1">Daftar Peserta</label>
					</div>
					<div class="form-group form-md-line-input has-danger">
						<div class="col-md-12" style="text-align: left">
						<ol>
						<?php
						foreach($detail_jaldis as $content)
						{
							foreach ($content as $key => $value ) {
							$$key=$value;
						}
						if($keterangan=='bukan anggota legislatif'){
							echo '';
						}else{
						echo '
								<div class="col-md-4">
								<li>'.$nama.'</li>
								</div>
						';}}
						?>
						</ol>
						</div>
					</div>
					<div class="form-group form-md-line-input has-danger">
						<label class="col-md-12 control-label" for="form_control_1">Pendamping</label>
					</div>
					<div class="form-group form-md-line-input has-danger">
						<div class="col-md-12" style="text-align: left">
						<ol>
						<?php
						foreach($detail_jaldis as $content)
						{
							foreach ($content as $key => $value ) {
							$$key=$value;
						}
						if($keterangan=='bukan anggota legislatif'){
						echo '
								<div class="col-md-4">
								<li>'.$nama.'</li>
								</div>
						';}else{echo'';}}
						?>
						</ol>
						</div>
					</div>
				<?php } } } ?>
				</div>
				<!-- <br>
				<div class="btn-group">
					<button onclick="window.location.href='#'" class="btn sbold red"> Ditolak
						<i class="fa fa-close"></i>
					</button>
				</div>
				<span class="separator">|</span>
				<a href="#" class="btn sbold green">Diterima <i class="fa fa-check"></i></a> -->
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>