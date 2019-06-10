<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Master_model extends CI_Model{
    
    function getalldataanggota($id)
    {
        $q = $this->db->query("SELECT a.*,(select b.nm_partai from tblpartai b where b.id_partai=a.fraksi) fraksi,(select b.nm_partai from tblpartai b where b.id_partai=a.partai) partai from anggota a where a.id='$id'");
        return $q->result();
    }
    function getdataanggotadewan(){
        $q = $this->db->query("SELECT a.*,b.nm_partai from anggota a left join tblpartai b on a.fraksi=b.id_partai where a.status='1' and a.keterangan='anggota legislatif'");
        return $q->result();
    }
    function getdatabukandewan(){
        $q = $this->db->query("SELECT a.* from anggota a where a.status='1' and a.keterangan='bukan anggota legislatif'");
        return $q->result();
    }
    public function cekCetakSurat($kode_jaldis,$nama,$nomor_surat,$kode_cetak){
        $q = $this->db->query("SELECT a.* from surat_cetak a where a.kode_jaldis='$kode_jaldis' and a.id_anggota='$nama' and a.nomor_surat='$nomor_surat' and a.kode_cetak='$kode_cetak'");
        return $q->result();
    }
    function getDataKeikutsertaan(){
        $q = $this->db->query("SELECT a.*,(SELECT count(b.id) from detail_jaldis b where b.id_anggota=a.id) as jumlah_jaldis from anggota a where a.status='1'");
        return $q->result();
    }
    function keikutsertaan_detail($id){
        $q = $this->db->query("SELECT b.*,z.nama_keperluan,a.start_date as tgl_berangkat,a.end_date as tgl_kembali,(select count(c.id) from detail_jaldis c where c.kode_jaldis=b.kode_jaldis) as jumlah_anggota from detail_jaldis a left join jaldis b on a.kode_jaldis=b.kode_jaldis left join kategori_keperluan z on b.kategori=z.id WHERE a.id_anggota='$id'");
        return $q->result();
    }
    function jaldis_oke(){
        $q = $this->db->query("SELECT * FROM `jaldis` WHERE end_date<=NOW()");
        return $q->result();
    }
    function PimpinanJalDis($kode_jaldis){
        $q = $this->db->query("SELECT a.*,c.nama,(SELECT b.id from detail_jaldis b where b.kode_jaldis='$kode_jaldis' and b.id_anggota=a.id_anggota and b.keterangan_posisi='pimpinan') as cek from pimpinan a left join anggota c on a.id_anggota=c.id");
        return $q->result();
    }
    function SetwanJalDis($kode_jaldis){
        $q = $this->db->query("SELECT a.*,(SELECT b.id from detail_jaldis b where b.kode_jaldis='$kode_jaldis' and b.id_anggota=a.id) as cek from anggota a where a.status='1' and a.keterangan='bukan anggota legislatif'");
        return $q->result();
    }
    function JalDisDewan($kode_jaldis){
        $q = $this->db->query("SELECT c.*,(select b.id from detail_jaldis b where b.kode_jaldis='$kode_jaldis' and b.id_anggota=c.id and b.keterangan_posisi='') as cek from anggota c where c.keterangan='anggota legislatif' and c.status='1'");
        return $q->result();
    }
    function JalDisBadan($alat_kelengkapan,$kode_jaldis){
        $q = $this->db->query("SELECT a.*,c.*,(select b.id from detail_jaldis b where b.kode_jaldis='$kode_jaldis' and b.id_anggota=a.id_anggota and b.keterangan_posisi='') as cek from anggota_badan a left join anggota c on a.id_anggota=c.id where a.id_badan='$alat_kelengkapan'");
        return $q->result();
    }
    function JalDisKomisi($alat_kelengkapan,$kode_jaldis){
        $q = $this->db->query("SELECT a.*,(select b.id from detail_jaldis b where b.kode_jaldis='$kode_jaldis' and b.id_anggota=a.id and b.keterangan_posisi='') as cek from anggota a where a.id_komisi='$alat_kelengkapan'");
        return $q->result();
    }
    function JalDisPansus($alat_kelengkapan,$kode_jaldis){
        $q = $this->db->query("SELECT a.*,c.*,(select b.id from detail_jaldis b where b.kode_jaldis='$kode_jaldis' and b.id_anggota=a.id_anggota and b.keterangan_posisi='') as cek from anggota_pansus a left join anggota c on a.id_anggota=c.id where a.kode_pansus='$alat_kelengkapan'");
        return $q->result();
    }
    public function getKodeKomisi()
    {
        $q = $this->db->query("select MAX(RIGHT(id_komisi, 5)) as kd_max from komisi where id_komisi like 'K-%'");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            }
        }
        else
        {
            $kd = "00001";
        }
        return "K-".$kd;
    }
    public function getKodeBadan()
    {
        $q = $this->db->query("select MAX(RIGHT(id_badan, 5)) as kd_max from badan where id_badan like 'B-%'");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            }
        }
        else
        {
            $kd = "00001";
        }
        return "B-".$kd;
    }
    public function getKodePansus()
    {
        $q = $this->db->query("select MAX(RIGHT(kode_pansus, 5)) as kd_max from pansus where kode_pansus like 'P-%'");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            }
        }
        else
        {
            $kd = "00001";
        }
        return "P-".$kd;
    }
    public function getKodePanja()
    {
        $q = $this->db->query("select MAX(RIGHT(kode_panja, 5)) as kd_max from panja where kode_panja like 'J-%'");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            }
        }
        else
        {
            $kd = "00001";
        }
        return "J-".$kd;
    }
    function getDataKomisi(){
        $q = $this->db->query("SELECT a.*,(SELECT count(b.id) from anggota b where b.id_komisi=a.id_komisi) as jumlah_anggota FROM komisi a");
        return $q->result();
    }
    function getDataBadan(){
        $q = $this->db->query("SELECT a.*,(SELECT count(b.id) from anggota_badan b where b.id_badan=a.id_badan) as jumlah_anggota FROM badan a where a.status='1'");
        return $q->result();
    }
    function getDetailDataBadan($id){
        $q = $this->db->query("SELECT a.id as idab,a.id_anggota,a.jabatan as jabatan_badan,b.*,(select c.nm_partai from tblpartai c where c.id_partai=b.fraksi) asalfraksi,(select c.nm_partai from tblpartai c where c.id_partai=b.partai) asalpartai from anggota_badan a left join anggota b on a.id_anggota=b.id where a.id_badan='$id'");
        return $q->result();
    }
    function getAnggotaBadan($id){
        $q = $this->db->query("SELECT a.*,(SELECT b.id from anggota_badan b where b.id_badan='$id' and b.id_anggota=a.id) as status_badan,(SELECT b.jabatan from anggota_badan b where b.id_badan='$id' and b.id_anggota=a.id) as jabatan_badan from anggota a where a.status='1'");
        return $q->result();
    }
    function ajax_pansus($id){
        $q = $this->db->query("SELECT a.*,(SELECT b.id from anggota_pansus b where b.kode_pansus='$id' and b.id_anggota=a.id) as status_pansus,(SELECT b.jabatan from anggota_pansus b where b.kode_pansus='$id' and b.id_anggota=a.id) as jabatan_pansus from anggota a where a.status='1'");
        return $q->result();
    }
    function ajax_panja($id){
        $q = $this->db->query("SELECT a.*,(SELECT b.id from anggota_panja b where b.kode_panja='$id' and b.id_anggota=a.id) as status_panja,(SELECT b.jabatan from anggota_panja b where b.kode_panja='$id' and b.id_anggota=a.id) as jabatan_panja from anggota a where a.status='1'");
        return $q->result();
    }
    function getAnggotaPansus($id){
        $q = $this->db->query("SELECT a.jabatan,a.id as id_ap,b.nama,b.id,(select c.nm_partai from tblpartai c where c.id_partai=b.fraksi) asalfraksi,(select c.nm_partai from tblpartai c where c.id_partai=b.partai) asalpartai,b.jabatan as jabatan_anggota,b.email,b.no_hp from anggota_pansus a left join anggota b on a.id_anggota=b.id where a.kode_pansus='$id'");
        return $q->result();
    }
    function getAnggotaPanja($id){
        $q = $this->db->query("SELECT a.jabatan,a.id as id_ap,b.nama,b.id,(select c.nm_partai from tblpartai c where c.id_partai=b.fraksi) asalfraksi,(select c.nm_partai from tblpartai c where c.id_partai=b.partai) asalpartai,b.jabatan as jabatan_anggota,b.email,b.no_hp from anggota_panja a left join anggota b on a.id_anggota=b.id where a.kode_panja='$id'");
        return $q->result();
    }
    function getDataPansus(){
        $q = $this->db->query("SELECT a.*,(SELECT count(b.id) from anggota_pansus b where b.kode_pansus=a.kode_pansus) jumlah_anggota from pansus a where a.status='1'");
        return $q->result();
    }
    function getDataPanja(){
        $q = $this->db->query("SELECT a.*,(SELECT count(b.id) from anggota_panja b where b.kode_panja=a.kode_panja) jumlah_anggota from panja a where a.status='1'");
        return $q->result();
    }
    function riwayat_pansus($id){
        $q = $this->db->query("SELECT a.*,b.* from anggota_pansus a left join pansus b on a.kode_pansus=b.kode_pansus where a.id_anggota='$id'");
        return $q->result();
    }
    function selesai_pansus(){
        $q = $this->db->query("SELECT * FROM `pansus` WHERE akhir_periode<=NOW()");
        return $q->result();
    }
    function selesai_panja(){
        $q = $this->db->query("SELECT * FROM `panja` WHERE akhir_periode<=NOW()");
        return $q->result();
    }
    function riwayat_badan($id){
        $q = $this->db->query("SELECT a.*,b.* from anggota_badan a left join badan b on a.id_badan=b.id_badan where a.id_anggota='$id'");
        return $q->result();
    }
    function getDataAkun($id){
        $q = $this->db->query("SELECT a.*,b.kode_rekening as kr from akun a left join kode_rekening b on a.kode_rekening=b.id where a.kode_jaldis='$id'");
        return $q->result();
    }
    function notif_jaldis(){
        $q = $this->db->query("SELECT * FROM `jaldis` WHERE end_date<=NOW() and catatan=''");
        return $q->result();
    }
    function getLogActivity(){
        $q = $this->db->query("SELECT * from log_activity a left join user b on a.aktor=b.id");
        return $q->result();
    }
    function kosongkan_log(){
        $q = $this->db->query("TRUNCATE TABLE log_activity");
        return $q;
    }
    public function getKodeAgenda()
    {
        $q = $this->db->query("select MAX(RIGHT(kode_agenda, 5)) as kd_max from agenda where kode_agenda like 'A-%'");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            }
        }
        else
        {
            $kd = "00001";
        }
        return "A-".$kd;
    }
    public function getdataagenda(){
        $q = $this->db->query("SELECT * FROM `agenda` ORDER BY `agenda`.`tanggal` DESC");
        return $q->result();
    }
}