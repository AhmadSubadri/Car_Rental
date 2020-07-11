<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {
        $data['hasil'] = $this->Model_data->get_all_data('layanan');
        $data['mobil'] = $this->Model_data->get_all_data('mobil');
        $tmp['content'] = $this->load->view('user/frontend/home',$data, true);
        $this->load->view('user/templates/bootstrap',$tmp);
    }

    public function services(){
        $data['title'] = "Services";
        $data['testi'] = $this->Model_data->get_all_data('message');
        $data['hasil'] = $this->Model_data->get_all_data('layanan');
        $tmp['content'] = $this->load->view('user/frontend/services',$data, true);
        $this->load->view('user/templates/bootstrap',$tmp);
    }

    public function pricing(){
        $data['title'] = "Pricing";
        $data['hasil'] = $this->Model_data->get_all_data('pricing');
        $tmp['content'] = $this->load->view('user/frontend/pricing',$data, true);
        $this->load->view('user/templates/bootstrap',$tmp);
    }

    public function article(){
        $data['title'] = "Article";
        $data['hasil'] = $this->Model_data->get_all_data('artikel');
        $tmp['content'] = $this->load->view('user/frontend/terms',$data, true);
        $this->load->view('user/templates/bootstrap',$tmp);
    }

    public function syarat(){
        $data['title'] = "Article";
        $data['hasil'] = $this->Model_data->get_all_data('syarat');
        $tmp['content'] = $this->load->view('user/frontend/syarat',$data, true);
        $this->load->view('user/templates/bootstrap',$tmp);
    }

    public function contact(){
        $data['title'] = "Article";
        $tmp['content'] = $this->load->view('user/frontend/contact',$data, true);
        $this->load->view('user/templates/bootstrap',$tmp);
    }
}