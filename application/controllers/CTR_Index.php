<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTR_Index extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url','form');
		$this->load->model('MODEL_Info','data');
		
	} 
		  public function index(){
		  $this->load->library('pagination');

			$row = $this->data->baris();

			$config['base_url'] = 'http://localhost/BlogWeb/index.php/CTR_Index/index';
			$config['total_rows'] = $row ;
			$config['per_page'] = 5;
			
		    $config['next_link'] = 'Next';
			$config['prev_link'] = 'Prev';
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</a></li>';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_open'] = '<li>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_open'] = '<li>';

			$start = $this->uri->segment(3);
			$this->pagination->initialize($config);

		  	$data ['daftar_skills'] = $this->data->GetAllSkills();
		  	$data ['daftar_slider'] = $this->data->GetSlider();
			$data ['daftar_info'] = $this->data->GetAllData($config['per_page'], $start);
			$data ['content'] = 'VIEW_Home';
			$this->load->view('templates/header',$data);
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
		  $data ['content'] = 'VIEW_HomeEdit';
		  $this->load->view('templates/header',$data);
		  }
}