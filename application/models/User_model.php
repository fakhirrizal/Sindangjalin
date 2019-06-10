<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model{
    function manualQuery($q)
            {
                return $this->db->query($q);
            }	
	function cek($email, $password) {
        $this->db->where("email", $email);
        $this->db->where("password", $password);
        return $this->db->get("user");
    }
    function cek_pass($id, $password) {
        $this->db->where("id", $id);
        $this->db->where("password", $password);
        return $this->db->get("user");
    }
    public function generate_pass($panjang)
    {
           $karakter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
           $string = '';
           for($i = 0; $i < $panjang; $i++) {
           $pos = rand(0, strlen($karakter)-1);
           $string .= $karakter{$pos};
           }
        return $string;
    }
    function count($tabel){
        return $this->db->count_all_results($tabel);
    }
    public function getKode()
    {
        $q = $this->db->query("select MAX(RIGHT(kd_user, 4)) as kd_max from user where kd_user like 'U-%'");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }
        else
        {
            $kd = "0001";
        }
        return "U-".$kd;
    }
    public function getKodePeminjaman()
    {
        $q = $this->db->query("select MAX(RIGHT(id_peminjaman, 6)) as kd_max from peminjaman");
        $kd = "";
        if($q->num_rows()>0)
        {
            foreach($q->result() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }
        else
        {
            $kd = "000001";
        }
        return "Pjm-".$kd;
    }
    function tambahdata($tabel,$data){
          $res = $this->db->insert($tabel,$data);
          return $res;
        }
    function getDataPeminjam(){
        $q = $this->db->query("SELECT *,(select count(c.id) from peminjaman_detail c where c.id_peminjaman=a.id_peminjaman) as jumlah_buku, (select sum(c.jumlah) from peminjaman_detail c where c.id_peminjaman=a.id_peminjaman) as jumlah_total from peminjaman a left join anggota b on a.no_anggota=b.no_anggota where a.status_peminjaman not in ('3') ORDER BY `a`.`id_peminjaman` ASC");
        return $q->result();
    }
    function sudah_mengembalikan(){
        $q = $this->db->query("SELECT *,(select count(c.id) from peminjaman_detail c where c.id_peminjaman=a.id_peminjaman) as jumlah_buku, (select sum(c.jumlah) from peminjaman_detail c where c.id_peminjaman=a.id_peminjaman) as jumlah_total from peminjaman a left join anggota b on a.no_anggota=b.no_anggota where a.status_peminjaman in ('3') ORDER BY `a`.`id_peminjaman` ASC");
        return $q->result();
    }
    function cek_peminjaman($id){
        $q = $this->db->query("SELECT a.no_anggota,a.nama,(SELECT sum(b.jumlah) from peminjaman_detail b right join peminjaman c on b.id_peminjaman=c.id_peminjaman where c.no_anggota=a.no_anggota) as total from anggota a where a.no_anggota='$id'");
        return $q->result();
    }
    function cek_buku($id){
        $q = $this->db->query("SELECT sum(jumlah) as sisa from peminjaman_detail where id_buku='$id'");
        return $q->result();
    }
    public function getSelectedData($table,$data)
        {
            return $this->db->get_where($table, $data)->result();
        }
    function kabupaten($provId){

	$kabupaten="<option value=''>--Select--</pilih>";

	$this->db->order_by('nm_kabupaten','ASC');
	$kab= $this->db->get_where('kabupaten',array('id_provinsi'=>$provId));

	foreach ($kab->result_array() as $data ){
	$kabupaten.= "<option value='".$data['id_kabupaten']."'>".$data['nm_kabupaten']."</option>";
	}

	return $kabupaten;

	}
	function getAlldata($table){ 
            return $this->db->get($table)->result();
        }//query buat nampilin semua data dari sebuah tabel
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
    function cek_password($password,$username){
    	$q = $this->db->query("SELECT * from users where password='$password' and username='$username'");
    	return $q->result();
    }
    function belum_cetak(){
        $q = $this->db->query("SELECT * from anggota where status=1");
        return $q->result();
    }
    function proses_cetak(){
        $q = $this->db->query("SELECT * from anggota where status=2");
        return $q->result();
    }
    function sudah_cetak()
    {
        $data=array(
        'status'=>'3',
        );
        $this->db->where("status","2");
        $this->db->update("anggota",$data);
    }
    function deleteData($table,$data)
    {
        $this->db->delete($table,$data);
    }
}
