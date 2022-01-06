<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTR_Contact extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('url','form');
		$this->load->model('MODEL_Contact','data');
		} 
		  public function index(){
		  $data ['daftar_product'] = $this->data->GetAllData();
		  $data ['content'] = 'VIEW_Contact';
		  $this->load->view('templates/header',$data);
		  }		 
}