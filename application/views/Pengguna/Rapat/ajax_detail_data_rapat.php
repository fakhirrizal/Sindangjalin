<?php
foreach ($data_ajax as $key => $value) {
?>
<div class='row'>
	<div class="col-md-12">
		<div class="cbp-l-project-details-title">
			<span>Detail Data Rapat</span>
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
					echo $dayList[$day].', ';
					$waktu = explode('-', $value->tanggal);
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
						}echo ' (Pukul: '.substr($value->jam,0,5).' WIB)';
					//$value->tanggal;
					?></li>
			<li>
				<strong>Tempat</strong><?= $value->keterangan; ?></li>
			<li>
				<strong>Acara</strong><?= $value->acara.' (Nomor Surat <b>'.$value->nomor_surat.'</b>)'; ?></li>
			<li>
				<strong>Materi</strong><?= $value->materi; ?></li>
			<li>
				<strong>Hasil Rapat</strong><?= $value->hasil_rapat; ?></li>
		</ul>
	</div>
</div><?php } ?>