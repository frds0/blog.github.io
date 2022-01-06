<?php
class MODEL_Home extends CI_Model{
	function GetAllData()
	{
		$this->db->select('*')->from('tbl_info');
		$rs=$this->db->get();
		return $rs->result();
	}
}