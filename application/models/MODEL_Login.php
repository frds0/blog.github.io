<?php 
class MODEL_Login extends CI_Model {
	
	public function ValidasiLogin($username,$password)
	{
		$this->db->where('Username',$username)
				   ->where('Password',$password);

		$row = $this->db->get('tbl_admin');
		$res = $row->result();

		if($row->num_rows() > 0){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}