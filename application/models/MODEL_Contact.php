<?php
class MODEL_Contact extends CI_Model{
	function GetAllData(){
		$this->db->select('*')->from('tbl_contacts');
		$rs=$this->db->get();
		return $rs->result();
   }

   function GetDataByID($id){
		$this->db->select('*')->from('tbl_contacts')->where('Name_ID',$id);
		$rs=$this->db->get();
		return $rs->result();
   }

   function DeleteData($id){
	   $this->db->where('Name_ID',$id);
	   $this->db->delete('tbl_contacts');
	   redirect('CTR_Contact/index');
   }

   function InsertData(){
	   $data = array(
		   'Name_ID' 	        => $this->input->post('Name_ID') ,
		   'Name' 		 	    => $this->input->post('Name') ,
		   'Email' 	            => $this->input->post('Email') ,
		   'Message' 			=> $this->input->post('Message'),
		   'Date_and_Time'      => $this->input->post('now()'),
		   'Subject'            => $this->input->post('Subject')
			);
	   $this->db->insert('tbl_contacts', $data);
	   redirect('CTR_Contact/index');
   }

   function UpdateData(){

	   $id = $this->input->post('Name_ID');
	   $data = array(

		   'Name' 		 	    => $this->input->post('Name') ,
		   'Email'          	=> $this->input->post('Email') ,
		   'Message' 			=> $this->input->post('Message'),
		   'Date_and_Time'      => $this->input->post('now()'),
		   'Subject'            => $this->input->post('Subject')
			);
	   $this->db->where('Name_ID', $id);
	   $this->db->update('tbl_contacts',$data);
	   redirect('CTR_Contact/index');
   }
}