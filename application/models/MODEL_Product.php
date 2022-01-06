<?php
class MODEL_Product extends CI_Model{
  
	function GetAllData(){
		$this->db->select('*')->from('products');
		$rs=$this->db->get();
		return $rs->result();
   }

   function GetDataByID($id){
		$this->db->select('*')->from('products')->where('Product_ID',$id);
		$rs=$this->db->get();
		return $rs->result();
   }

   function DeleteData($id){
	   $this->db->where('Product_ID',$id);
	   $this->db->delete('products');
	   redirect('CTR_ProductAdmin/index');
   }

   function InsertData(){
       $config['upload_path']          = './gambar/skill/';
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
           $Product_ID = $this->input->post('Product_ID', true);
           $Name = $this->input->post('Name', true);
           $Description = $this->input->post('Description', true);
           $Price = $this->input->post('Price', true);

           $data = array(
           'Product_ID' 	=> $Product_ID,
           'Name' 		 	=> $Name,
           'Description' 	=> $Description,
           'Price' 			=> $Price,
           'Photo'          => $Photo
            );
           $this->db->insert('products', $data);
           redirect('CTR_ProductAdmin/index');
       }
   }

       function UpdateData()
       {
      $id = $this->input->post('Product_ID');
       $config['upload_path']          = './gambar/skill/';
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
           $Product_ID = $this->input->post('Product_ID', true);
           $Name = $this->input->post('Name', true);
           $Description = $this->input->post('Description', true);
           $Price = $this->input->post('Price', true);

           $data = array(
           'Product_ID'   => $Product_ID,
           'Name'       => $Name,
           'Description'  => $Description,
           'Price'      => $Price,
           'Photo'          => $Photo
            );
           $this->db->where('Product_ID', $id);
           $this->db->update('products', $data);
           redirect('CTR_ProductAdmin/index');
           }
       }
   }