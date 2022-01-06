<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTR_InfoAdmin extends CI_Controller 
	{
	function __construct(){
        parent::__construct();
        $this->load->helper('url','form');
		$this->load->model('MODEL_InfoAdmin','data');
	} 
		  public function index(){
		  $data ['daftar_info'] = $this->data->GetAllData();
		  $data ['content'] = 'VIEW_InfoAdmin';
		  $this->load->view('templates/mainpage_admin',$data);
		  }
		  public function HapusData(){
		  $id = $this->uri->segment(3);
		  $this->data->DeleteData($id);
		  }
  
		  public function SimpanData(){
		  $this->data->InsertData();
		  }
  
		  public function EditData(){
		  $this->data->UpdateData();
		  }
  
		  public function GetData(){
		  $id = $this->uri->segment(3);
		  $data ['isi'] = $this->data->GetDataByID($id);
		  $data ['content'] = 'VIEW_InfoEdit';
		  $this->load->view('templates/mainpage_admin',$data);
		  }
}