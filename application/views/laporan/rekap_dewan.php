

<?php 
date_default_timezone_set('Asia/Jakarta'); 
$list=$this->db->query("SELECT a.*,(SELECT count(b.id) from detail_jaldis b where b.id_anggota=a.id) as jumlah_jaldis from anggota a where a.status='1' and a.keterangan='anggota legislatif'")->result();
?>
<div class='entry'>
<table border='1' align='left' width='70%'>
<tr>
<td colspan='4'><b>Rekap Data Keikutsertaan Anggota Dewan </b> <br> Update : <font color='red'><?php echo date('d-m-Y')?> | <?php echo date('H:i')?> WIB</font></td>
</tr>
<tr>
<td bgcolor='gren' width='10px' style="text-align: center;"><b>No</b></td>
<td bgcolor='gren' style="text-align: center;"><b>Nama Anggota</b></td>
<td bgcolor='gren' style="text-align: center;" width='260px'><b>Jabatan</b></td>
<td bgcolor='gren' style="text-align: center;"><b>Jumlah Keikutsertaan</b></td>

</tr>
<?php

$n=1;
foreach ($list as $dolay)
{
echo"
<tr>
<td>".$n."</td>
<td>".$dolay->nama."</td>
<td width='200px'>".$dolay->jabatan."</td>
<td>".$dolay->jumlah_jaldis." kali.</td>
</tr>
";
$n++;}

?>
<?php

// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Rekap Data Dewan.xls");
 
// Tambahkan table
//include "../pilihan_menu/tamu.php";

?>
</table>

</div>
