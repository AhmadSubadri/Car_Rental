<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_detail extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
    }

    public function get($id=0)
    {
        $data['hasil'] = $this->Model_data->get_by_id('mobil','id_mobil',$id)->row();
        $tmp['content'] = $this->load->view('user/frontend/detail',$data, true);
        $this->load->view('user/templates/bootstrap',$tmp);
    }

    public function get_arikel($id=0){
        $data['var'] = $this->Model_data->get_all_data('artikel');
        $data['hasil'] = $this->Model_data->get_by_id('artikel','id_artikel',$id)->row();
        $tmp['content'] = $this->load->view('user/frontend/show_artikel',$data, true);
        $this->load->view('user/templates/bootstrap',$tmp);
    }
}