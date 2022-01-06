<?php
class MODEL_Info extends CI_Model{
	function GetAllData($perpage, $start){
		$this->db->select('*')->from('tbl_info');
		$rs=$this->db->get();
		return $rs=$this->db->get('tbl_info', $perpage, $start)->result();
   }

   function GetAllSkills(){
    $this->db->select('*')->from('products');
    $rs=$this->db->get();
    return $rs->result();
   }

   function baris(){
      return $this->db->get('tbl_info')->num_rows();
   }


   function GetSlider(){
    $this->db->select('*')->from('tbl_gallery')->order_by('Photo_ID',"desc")->limit(5);
    $rs=$this->db->get();
    return $rs->result();
   }

   function GetDataByID($id){
		$this->db->select('*')->from('tbl_info')->where('Information_ID',$id);
		$rs=$this->db->get();
		return $rs->result();
   }

   function DeleteData($id){
	   $this->db->where('Information_ID',$id);
	   $this->db->delete('tbl_info');
	   redirect('CTR_InfoAdmin/index');
   }

   function InsertData(){
	   $config['upload_path']          = './gambar/info/';
       $config['allowed_types']        = 'gif|jpg|png|jpeg';
       $config['max_size']             = 10000;
       $config['max_width']            = 10000;
       $config['max_height']           = 10000;

       $this->load->library('upload', $config);

       if (! $this->upload->do_upload('userfile')) {
           echo "Gagal Tambah";
       } else {
           $Photo = $this->upload->data();
           $Photo = $Photo['file_name'];
           $Information_ID = $this->input->post('Information_ID', true);
           $Title = $this->input->post('Title', true);
           $Content = $this->input->post('Content', true);

           $data = array(
           'Information_ID' 	  => $Information_ID,
           'Title' 		 	    => $Title,
           'Content'  	=> $Content,
           'Photo'          => $Photo
            );
           $this->db->insert('tbl_info', $data);
           redirect('CTR_InfoAdmin/index');
 	  	}
	}

   function UpdateData(){

	   $id = $this->input->post('Information_ID');
            $config['upload_path']          = './gambar/info/';
       $config['allowed_types']        = 'gif|jpg|png|jpeg';
       $config['max_size']             = 10000;
       $config['max_width']            = 10000;
       $config['max_height']           = 10000;

       $this->load->library('upload', $config);

       if (! $this->upload->do_upload('userfile')) {
           echo "Gagal Update";
       } else {
           $Photo = $this->upload->data();
           $Photo = $Photo['file_name'];
           $Information_ID = $this->input->post('Information_ID', true);
           $Title = $this->input->post('Title', true);
           $Content = $this->input->post('Content', true);           

           $data = array(
           'Information_ID'     => $Information_ID,
           'Title'           => $Title,
           'Content'    => $Content,
           'Photo'          => $Photo
            );
               $this->db->where('Information_ID', $id);
               $this->db->update('tbl_info', $data);
               redirect('CTR_InfoAdmin/index');
   		}
	}
}