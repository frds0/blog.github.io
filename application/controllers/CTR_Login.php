<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CTR_Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->model('MODEL_Login','data');  
    } 
          public function index()
          {          
          $data ['content'] = 'VIEW_Login';
          $this->load->view('templates/header',$data);
          }      

	public function validasi(){
		$this->load->model('MODEL_Login');	
        $username=$this->input->post('Username');
        $password=$this->input->post('Password');
        $status  =$this->data->ValidasiLogin($username,$password);
            if($status != true)
                {
                    redirect('CTR_Login/index');
                }
            else
                {
                    $my_session = array(
                        'Username' => $username,
                        'Password' => $password
                    );
                    $this->session->set_userdata($my_session);
                    redirect('CTR_Admin/index');
                }
            }    

    public function Logout(){
        $this->session->sess_destroy();
        redirect('');
    }
}
