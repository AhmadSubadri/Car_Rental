<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index(){
        $data['title'] = "Welcome Admin";
        $tmp['content'] = $this->load->view('admin/backend/home',$data, true);
		$this->load->view('admin/template/bootstrap',$tmp);
    }
}