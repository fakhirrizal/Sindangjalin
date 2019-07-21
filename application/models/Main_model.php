<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main_model extends CI_Model{
    function manualQuery($q)
            {
                return $this->db->query($q);
            }	
  
    function tambahdata($tabel,$data){
          $res = $this->db->insert($tabel,$data);
          return $res;
        }
    public function getSelectedData($table,$data)
        {
            return $this->db->get_where($table, $data)->result();
        }
    public function getdatapimpinan(){
        $q = $this->db->query("SELECT a.*,b.nama from pimpinan a left join anggota b on a.id_anggota=b.id");
        return $q->result();
    }
	function getAlldata($table){ 
            return $this->db->get($table)->result();
        }//query buat nampilin semua data dari sebuah tabel
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }
    public function getKodeJaldis()
    {
        $q = $this->db->query("select MAX(RIGHT(kode_jaldis, 5)) as kd_max from jaldis where kode_jaldis like 'J-%'");
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
    public function perkategorikeperluan(){
         $q = $this->db->query("SELECT a.*,(SELECT count(b.id) from jaldis b where b.kategori=a.id) as jumlah FROM kategori_keperluan a where a.status='1'");
        return $q->result();
    }
    public function perkategorirapat(){
         $q = $this->db->query("SELECT a.*,(SELECT count(b.id) from rapat b where b.kategori=a.kategori) as jumlah FROM rapat a GROUP by a.kategori");
        return $q->result();
    }
    public function getDetailJaldis($kode_jaldis){
         $q = $this->db->query("SELECT b.id_anggota,b.kode_jaldis,b.keterangan_posisi,q.jabatan as jabatan_pimpinan,c.*,(select d.id from surat_cetak d where d.kode_jaldis='$kode_jaldis' and d.id_anggota=b.id_anggota and (d.nomor_surat='1' or d.nomor_surat='4') GROUP BY b.id_anggota) as surat_tugas,(select d.id from surat_cetak d where d.kode_jaldis='$kode_jaldis' and d.id_anggota=b.id_anggota and d.nomor_surat='2' GROUP BY b.id_anggota) as surat_jalan,(select d.id from surat_cetak d where d.kode_jaldis='$kode_jaldis' and d.id_anggota=b.id_anggota and d.nomor_surat='5' GROUP BY b.id_anggota) as spd from detail_jaldis b left join anggota c on b.id_anggota=c.id left join pimpinan q on b.id_anggota=q.id_anggota where b.kode_jaldis='$kode_jaldis'");
        return $q->result();
    }
    public function JaldisDewan($kode_jaldis){
         $q = $this->db->query("SELECT b.id as iddj,b.id_anggota,b.kode_jaldis,c.*,b.start_date,b.end_date,(select d.id from surat_cetak d where d.kode_jaldis='$kode_jaldis' and d.id_anggota=b.id_anggota and d.nomor_surat='1') as surat_tugas,(select d.id from surat_cetak d where d.kode_jaldis='$kode_jaldis' and d.id_anggota=b.id_anggota and d.nomor_surat='2') as surat_jalan,(select d.id from surat_cetak d where d.kode_jaldis='$kode_jaldis' and d.id_anggota=b.id_anggota and d.nomor_surat='3') as surat_perintah from detail_jaldis b left join anggota c on b.id_anggota=c.id where b.kode_jaldis='$kode_jaldis' and c.keterangan='anggota legislatif'");
        return $q->result();
    }
    public function JaldisSetwan($kode_jaldis){
         $q = $this->db->query("SELECT b.id as iddj,b.id_anggota,b.kode_jaldis,c.*,b.start_date,b.end_date,(select d.id from surat_cetak d where d.kode_jaldis='$kode_jaldis' and d.id_anggota=b.id_anggota and d.nomor_surat='1') as surat_tugas,(select d.id from surat_cetak d where d.kode_jaldis='$kode_jaldis' and d.id_anggota=b.id_anggota and d.nomor_surat='2') as surat_jalan,(select d.id from surat_cetak d where d.kode_jaldis='$kode_jaldis' and d.id_anggota=b.id_anggota and d.nomor_surat='3') as surat_perintah from detail_jaldis b left join anggota c on b.id_anggota=c.id where b.kode_jaldis='$kode_jaldis' and c.keterangan='bukan anggota legislatif'");
        return $q->result();
    }
    public function getDataJaldis(){
         $q = $this->db->query("SELECT a.*,(select count(b.id) from detail_jaldis b where b.kode_jaldis=a.kode_jaldis) as jumlah_anggota from jaldis a ORDER BY `a`.`start_date` DESC");
        return $q->result();
    }
    function tampil_semua($nama)
    {
        $q = $this->db->query("SELECT a.* from anggota a where a.nama like '%$nama%'");
        return $q;
    }
    function tampil_limit($nama)
    {
        $q = $this->db->query("SELECT a.* from anggota a where a.nama like '%$nama%' LIMIT 8");
        return $q;
    }
    function total_anggaran()
    {
        $q = $this->db->query("SELECT sum(a.anggaran) as total from jaldis a");
        return $q->result();
	}
	function getLastID($table){
		return $this->db->query('SELECT id FROM '.$table.' ORDER BY created_at DESC LIMIT 1')->result();
	}
    // function dapil($id){

    // $dapil="<option value=''>-- Pilih --</pilih>";

    // $kab= $this->db->query("SELECT * from dapildpr left join provinsi on dapildpr.id_wilayah=provinsi.id_provinsi where dapildpr.id_wilayah='$id'");

    // foreach ($kab->result_array() as $data ){
    // $dapil.= "<option value='".$data['id_dapil']."'>".$data['nm_dapil']."</option>";
    // }

    // return $dapil;

    // }
    // function kabupaten($dapilID){

    // $kabupaten="<option value=''>-- Pilih --</pilih>";

    // $this->db->order_by('nm_kabupaten','ASC');
    // $kab= $this->db->get_where('kabupaten',array('dapildpr'=>$dapilID));

    // foreach ($kab->result_array() as $data ){
    // $kabupaten.= "<option value='".$data['id_kabupaten']."'>".$data['nm_kabupaten']."</option>";
    // }

    // return $kabupaten;

    // }

    // function kabupaten2($provId){



    // $kabupaten="<option value=''>-- Pilih --</pilih>";



    // $this->db->order_by('nm_kabupaten','ASC');

    // $kab= $this->db->get_where('kabupaten',array('id_provinsi'=>$provId));



    // foreach ($kab->result_array() as $data ){

    // $kabupaten.= "<option value='".$data['id_kabupaten']."'>".$data['nm_kabupaten']."</option>";

    // }



    // return $kabupaten;



    // }

    // function kecamatan($kabId){
    // $kecamatan="<option value=''>-- Pilih --</pilih>";

    // $this->db->order_by('nm_kecamatan','ASC');
    // $kec= $this->db->get_where('kecamatan',array('id_kabupaten'=>$kabId));

    // foreach ($kec->result_array() as $data ){
    // $kecamatan.= "<option value='".$data['id_kecamatan']."'>".$data['nm_kecamatan']."</option>";
    // }

    // return $kecamatan;
    // }

    // function getDataTokoh(){
    // $q = $this->db->query("SELECT a.*,b.nm_kabupaten from jaringan_tokoh a left join kabupaten b on a.kode_wilayah=b.id_kabupaten");
    //     return $q->result();
    // }
    

    

    // function dapildprdprovinsi($id){

    // $dapildprdprovinsi="<option value=''>-- Pilih --</pilih>";

    // $p= $this->db->query("SELECT * from dapildprdprovinsi left join provinsi on dapildprdprovinsi.id_wilayah=provinsi.id_provinsi where dapildprdprovinsi.id_wilayah='$id'");

    // foreach ($p->result_array() as $data ){
    // $dapildprdprovinsi.= "<option value='".$data['id']."'>".$data['nm_dapil']."</option>";
    // }

    // return $dapildprdprovinsi;

    // }
    // function wilayahdapil($id){

    // $wilayahdapil="<option value=''>-- Pilih --</pilih>";

    // $k= $this->db->query("SELECT * from kabupaten where kabupaten.dapildprdprovinsi='$id'");

    // foreach ($k->result_array() as $data ){
    // $wilayahdapil.= "<option value='".$data['id_kabupaten']."'>".$data['nm_kabupaten']."</option>";
    // }

    // return $wilayahdapil;

    // }
    // function tampil_semua($nama)
    // {
    //     $q = $this->db->query("SELECT a.*,b.nm_provinsi from kabupaten a left join provinsi b on a.id_provinsi=b.id_provinsi where a.nm_kabupaten like '%$nama%'");
    //     return $q;
    // }
    // function tampil_limit($nama)
    // {
    //     $q = $this->db->query("SELECT a.*,b.nm_provinsi from kabupaten a left join provinsi b on a.id_provinsi=b.id_provinsi where a.nm_kabupaten like '%$nama%' LIMIT 8");
    //     return $q;
    // }
    // function getAllProvince()
    // {
    //     $this->db->where_not_in("id_provinsi", '0');
    //     return $this->db->get("provinsi")->result();
    // }
}
