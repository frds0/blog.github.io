<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTR_About extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('url','form');
		$this->load->model('MODEL_About','data');
		
	} 
		  public function index()
		  {		  
		  $data ['content'] = 'VIEW_About';
		  $this->load->view('templates/header',$data);
		  }		 
}