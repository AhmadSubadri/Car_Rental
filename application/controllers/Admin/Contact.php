<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index()
    {
        $data['hasil'] = $this->Model_data->get_all_data('message');
        $tmp['content'] = $this->load->view('admin/backend/contact/v_contact',$data, true);
        $this->load->view('admin/template/bootstrap',$tmp);
    }

    public function simpan_post(){
        $data = array(
            'Nama' => $this->input->post('txtName'),
            'Email' => $this->input->post('txtEmail'),
            'Telp' => $this->input->post('txtPhone'),
            'Pesan' => $this->input->post('txtMsg'),
		);
        $data = $this->db->insert('message', $data);
        redirect('Users/Home/contact',$data);
    }

    function delete($id){
        $this->db->where('id_mess',$id);
        $query = $this->db->get('message');
        $row = $query->row();
        $this->db->delete('message', array('id_mess' => $id));
        redirect('Admin/Contact');
    }
}