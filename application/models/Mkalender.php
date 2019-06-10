<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mkalender extends CI_Model {
	public function GetAgenda($where=""){
		//$data = $this->db->query('select id_agendas as id_agenda, deskripsi_agenda, DATE_FORMAT(waktu, "%H:%i") as jam from agendas '.$where. 'ORDER BY jam ASC');
		$data = $this->db->query('select id as id_agenda,acara as deskripsi_agenda,tempat,materi,peserta, DATE_FORMAT(waktu, "%H:%i") as jam from agenda '.$where. 'ORDER BY jam ASC');
		return $data;
	}
	
	public function InsertData($table, $data){
		$data = $this->db->insert($table, $data);
		return $data;
	}

	public function DeleteData($table, $array_where){
		$data = $this->db->delete($table, $array_where);
		return $data;
	}

	public function UpdateData($table, $data, $where, $wheredata){
		$this->db->where($where, $wheredata);
		$this->db->update($table, $data); 
	}

	


}