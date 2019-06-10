<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Surat_model extends CI_Model{
    // function spdsetwan($kode_jaldis)
    // {
    //     $q = $this->db->query("SELECT a.*,b.nama,b.jabatan as jabatan_ak,b.keterangan from detail_jaldis a left join anggota b on a.id_anggota=b.id where a.kode_jaldis='$kode_jaldis'");
    //     return $q->result();
    // }
    function spdkomisi($kode_jaldis,$kode_cetak)
    {
        $q = $this->db->query("SELECT a.*,(SELECT b.start_date from detail_jaldis b where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota) as tgl_berangkat,(SELECT b.end_date from detail_jaldis b where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota) as tgl_kembali,c.*,c.jabatan_komisi as jabatan_ak,(SELECT z.jabatan from detail_jaldis b left join pimpinan z on b.id_anggota=z.id_anggota where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota and b.keterangan_posisi='pimpinan') as pimpinan from surat_cetak a left join anggota c on a.id_anggota=c.id where a.kode_cetak='$kode_cetak' and a.kode_jaldis='$kode_jaldis'");
        return $q->result();
    }
    function spdbadan($kode_jaldis,$alat_kelengkapan,$kode_cetak)
    {
        $q = $this->db->query("SELECT a.*,(SELECT b.start_date from detail_jaldis b where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota) as tgl_berangkat,(SELECT b.end_date from detail_jaldis b where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota) as tgl_kembali,c.*,(SELECT d.jabatan from anggota_badan d where d.id_badan='$alat_kelengkapan' and d.id_anggota=a.id_anggota) as jabatan_ak,(SELECT z.jabatan from detail_jaldis b left join pimpinan z on b.id_anggota=z.id_anggota where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota and b.keterangan_posisi='pimpinan') as pimpinan from surat_cetak a left join anggota c on a.id_anggota=c.id where a.kode_cetak='$kode_cetak' and a.kode_jaldis='$kode_jaldis'");
        return $q->result();
    }
    function spdpansus($kode_jaldis,$alat_kelengkapan,$kode_cetak)
    {
         $q = $this->db->query("SELECT a.*,(SELECT b.start_date from detail_jaldis b where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota) as tgl_berangkat,(SELECT b.end_date from detail_jaldis b where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota) as tgl_kembali,c.*,(SELECT d.jabatan from anggota_pansus d where d.kode_pansus='$alat_kelengkapan' and d.id_anggota=a.id_anggota) as jabatan_ak,(SELECT z.jabatan from detail_jaldis b left join pimpinan z on b.id_anggota=z.id_anggota where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota and b.keterangan_posisi='pimpinan') as pimpinan from surat_cetak a left join anggota c on a.id_anggota=c.id where a.kode_cetak='$kode_cetak' and a.kode_jaldis='$kode_jaldis'");
        return $q->result();
    }
    function spdpanja($kode_jaldis,$alat_kelengkapan,$kode_cetak)
    {
         $q = $this->db->query("SELECT a.*,(SELECT b.start_date from detail_jaldis b where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota) as tgl_berangkat,(SELECT b.end_date from detail_jaldis b where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota) as tgl_kembali,c.*,(SELECT d.jabatan from anggota_panja d where d.kode_panja='$alat_kelengkapan' and d.id_anggota=a.id_anggota) as jabatan_ak,(SELECT z.jabatan from detail_jaldis b left join pimpinan z on b.id_anggota=z.id_anggota where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota and b.keterangan_posisi='pimpinan') as pimpinan from surat_cetak a left join anggota c on a.id_anggota=c.id where a.kode_cetak='$kode_cetak' and a.kode_jaldis='$kode_jaldis'");
        return $q->result();
    }
    function spdanggota($kode_jaldis,$kode_cetak)
    {
         $q = $this->db->query("SELECT a.*,(SELECT b.start_date from detail_jaldis b where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota) as tgl_berangkat,(SELECT b.end_date from detail_jaldis b where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota) as tgl_kembali,c.*,c.jabatan as jabatan_ak,(SELECT z.jabatan from detail_jaldis b left join pimpinan z on b.id_anggota=z.id_anggota where b.kode_jaldis=a.kode_jaldis and b.id_anggota=a.id_anggota and b.keterangan_posisi='pimpinan') as pimpinan from surat_cetak a left join anggota c on a.id_anggota=c.id where a.kode_cetak='$kode_cetak' and a.kode_jaldis='$kode_jaldis'");
        return $q->result();
    }
    public function getKodeCetak()
    {
        $q = $this->db->query("select MAX(RIGHT(kode_cetak, 5)) as kd_max from surat_cetak where kode_cetak like 'C-%'");
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
        return "C-".$kd;
    }
    public function getCetakSurat($kode_cetak){
         $q = $this->db->query("SELECT a.*,b.*,z.alat_kelengkapan,(SELECT q.jabatan from detail_jaldis r left join pimpinan q on r.id_anggota=q.id_anggota where r.kode_jaldis=a.kode_jaldis and r.id_anggota=a.id_anggota and r.keterangan_posisi='pimpinan') as pimpinan from surat_cetak a left join anggota b on a.id_anggota=b.id left join jaldis z on a.kode_jaldis=z.kode_jaldis where a.kode_cetak='$kode_cetak'");
        return $q->result();
    }
}