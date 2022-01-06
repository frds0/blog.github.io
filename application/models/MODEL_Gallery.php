<?php
class MODEL_Gallery extends CI_Model{

	function GetAllData($perpage, $start){
    $this->db->select('*')->from('tbl_gallery');
     $rs=$this->db->get();     
     return $rs = $this->db->get('tbl_gallery', $perpage, $start)->result(); 
   }

   function GetDataByID($id){
		$this->db->select('*')->from('tbl_gallery')->where('Photo_ID',$id);
		$rs=$this->db->get();
		return $rs->result();
   }

   function baris(){
   		return $this->db->get('tbl_gallery')->num_rows();
   }

   function tampil_data(){
    $this->db->select('*');
    $this->db->from('tbl_gallery');
    $this->db->order_by('Photo_ID',"DESC");
    $this->db->limit(5);
    $query = $this->db->get();
    return $query;
    }

   function jumlah_data()
  {
    return $this->db->get('tbl_gallery')->num_rows();
  }

   function DeleteData($id){
	   $this->db->where('Photo_ID',$id);
	   $this->db->delete('tbl_gallery');
	   redirect('CTR_GalleryAdmin/index');
   }

   function InsertData(){
	   $config['upload_path']          = './gambar/gallery/';
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
           $Photo_ID = $this->input->post('Photo_ID', true);

           $data = array(
           'Photo_ID' 	  => $Photo_ID,
           'Photo'          => $Photo
            );
           $this->db->insert('tbl_gallery', $data);
           redirect('CTR_GalleryAdmin/index');
 	  	}
   }

   function UpdateData(){
        $id = $this->input->post('Photo_ID');
        $config['upload_path']          = './gambar/gallery/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;
  
        $this->load->library('upload', $config);
  
        if (! $this->upload->do_upload('userfile')) {
             echo "Gagal Update";
        } else {
            $Photo = $this->upload->data();
            $Photo = $Photo['file_name'];
            $Photo_ID = $this->input->post('Photo_ID', true);
            
  
            $data = array(
                  'Photo_ID'    => $Photo_ID,
                  'Photo' => $Photo,
                  );
  
            $this->db->where('Photo_ID', $id);
            $this->db->update('tbl_gallery', $data);
            redirect('CTR_GalleryAdmin/index');
        }
    }
}