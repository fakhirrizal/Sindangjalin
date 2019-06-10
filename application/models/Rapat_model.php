<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rapat_model extends CI_Model{
    public function getAlldataRapat(){
        $q = $this->db->query("SELECT * FROM `rapat` ORDER BY `rapat`.`tanggal` DESC");
        return $q->result();
    }
    public function getKodeRapat()
    {
        $q = $this->db->query("select MAX(RIGHT(kode_rapat, 5)) as kd_max from rapat where kode_rapat like 'R-%'");
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
        return "R-".$kd;
    }
    public function getDataRapat($id){
        $q = $this->db->query("SELECT a.*,b.keterangan as alat_kelengkapan,c.nama FROM rapat a left join peserta_rapat b on a.kode_rapat=b.kode_rapat left join anggota c on a.pemimpin=c.id WHERE a.id='$id' and b.keterangan not in ('skpd','umum') limit 1");
        return $q->result();
    }
    public function peserta_dewan($id){
        $q = $this->db->query("SELECT a.*,b.id as id_peserta,b.setelah,b.anggota,b.keterangan as alat_kelengkapan,c.nama FROM rapat a left join peserta_rapat b on a.kode_rapat=b.kode_rapat left join anggota c on b.anggota=c.id WHERE a.id='$id' and b.keterangan not in ('skpd','umum')");
        return $q->result();
    }
    public function peserta_skpd($id){
        $q = $this->db->query("SELECT a.*,b.id as id_peserta,b.anggota,b.setelah,b.keterangan as alat_kelengkapan,c.nama FROM rapat a left join peserta_rapat b on a.kode_rapat=b.kode_rapat left join skpd c on b.anggota=c.id WHERE a.id='$id' and b.keterangan='skpd'");
        return $q->result();
    }
    public function peserta_umum($id){
        $q = $this->db->query("SELECT a.*,b.id as id_peserta,b.anggota,b.setelah,b.keterangan as alat_kelengkapan FROM rapat a left join peserta_rapat b on a.kode_rapat=b.kode_rapat WHERE a.id='$id' and b.keterangan='umum'");
        return $q->result();
    }
    function RapatDewan($kode_rapat){
        $q = $this->db->query("SELECT c.*,(select b.id from peserta_rapat b where b.kode_rapat='$kode_rapat' and b.anggota=c.id and b.keterangan not in ('skpd','umum')) as cek from anggota c where c.keterangan='anggota legislatif' and c.status='1'");
        return $q->result();
    }//rung dicek
    function RapatBadan($alat_kelengkapan,$kode_rapat){
        $q = $this->db->query("SELECT a.*,c.*,(select b.id from detail_jaldis b where b.kode_jaldis='$kode_jaldis' and b.id_anggota=a.id_anggota) as cek from anggota_badan a left join anggota c on a.id_anggota=c.id where a.id_badan='$alat_kelengkapan'");
        return $q->result();
    }//rung dicek
    function RapatKomisi($alat_kelengkapan,$kode_rapat){
        $q = $this->db->query("SELECT a.*,(select b.id from peserta_rapat b where b.kode_rapat='$kode_rapat' and b.anggota=a.id and b.keterangan='$alat_kelengkapan') as cek from anggota a where a.id_komisi='$alat_kelengkapan'");
        return $q->result();
    }
    function RapatPansus($alat_kelengkapan,$kode_rapat){
        $q = $this->db->query("SELECT a.*,c.*,(select b.id from detail_jaldis b where b.kode_jaldis='$kode_jaldis' and b.id_anggota=a.id_anggota) as cek from anggota_pansus a left join anggota c on a.id_anggota=c.id where a.kode_pansus='$alat_kelengkapan'");
        return $q->result();
    }//rung dicek
    function getPesertaSkpd($kode_rapat){
        $q = $this->db->query("SELECT a.*,(select b.id from peserta_rapat b where b.kode_rapat='$kode_rapat' and b.keterangan='skpd' and b.anggota=a.id) as cek from skpd a where a.status='1'");
        return $q->result();
    }
    function notif_rapat(){
        $q = $this->db->query("SELECT * FROM `rapat` WHERE tanggal_selesai<=NOW() and hasil_rapat=''");
        return $q->result();
    }
}