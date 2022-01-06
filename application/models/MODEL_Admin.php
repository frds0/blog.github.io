<?php
class MODEL_Admin extends CI_Model{
	function GetAllData(){
		$this->db->select('*')->from('tbl_admin');
		$rs=$this->db->get();
		return $rs->result();
   }

   function GetDataByID($id){
		$this->db->select('*')->from('tbl_admin')->where('User_ID',$id);
		$rs=$this->db->get();
		return $rs->result();
   }

   function DeleteData($id){
	   $this->db->where('User_ID',$id);
	   $this->db->delete('tbl_admin');
	   redirect('CTR_Admin/index');
   }

   function InsertData(){
	   $data = array(
		   'User_ID' 			=> $this->input->post('User_ID') ,
		   'Username' 		 	=> $this->input->post('Username') ,
		   'Password' 			=> $this->input->post('Password') ,
		   'Full_Name' 			=> $this->input->post('Full_Name'),
		   
			);
	   $this->db->insert('tbl_admin', $data);
	   redirect('CTR_Admin/index');
   }

   function UpdateData(){

	   $id = $this->input->post('User_ID');
	   $data = array(

		   'Username' 		 	=> $this->input->post('Username') ,
		   'Password' 			=> $this->input->post('Password') ,
		   'Full_Name' 			=> $this->input->post('Full_Name'),
		   
			);
	   $this->db->where('User_ID', $id);
	   $this->db->update('tbl_admin',$data);
	   redirect('CTR_Admin/index');
   }
}