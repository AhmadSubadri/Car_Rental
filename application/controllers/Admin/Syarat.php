<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Syarat extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index(){
        $data['title'] = "Data syarat";
        $data['hasil'] = $this->Model_data->get_all_data('syarat');
        $tmp['content'] = $this->load->view('admin/backend/syarat/v_syarat',$data, true);
		$this->load->view('admin/template/bootstrap',$tmp);
    }

    public function create(){
        $data['title'] = "Data Artikel";
        $tmp['content'] = $this->load->view('admin/backend/syarat/c_syarat',$data, true);
		$this->load->view('admin/template/bootstrap',$tmp);
    }

    public function simpan_post(){
        $data = array(
			'Deskripsi' => $this->input->post('isi'),
		);
        $data = $this->db->insert('syarat', $data);
        redirect('Admin/Syarat',$data);
    }

    function edit($id=0){
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
        $data_model=$this->Model_data->get_by_id('syarat','id_sdk',$id);
            if (count($data_model)>0){
                $data = array(	
                    'Deskripsi' => $this->input->post('isi')
                            );
                           $aksi = $this->Model_data->update('syarat','id_sdk',$id ,$data);
                            if ($aksi) {
                                $this->session->set_flashdata('message','Data Berhasil di simpan');
                                redirect("Admin/Syarat","refresh");
                            }
                            else{
                                $this->session->set_flashdata('message','Data Tidak Berhasil di simpan...');
                                redirect("Admin/Syarat/edit","refresh");
                            }
                        }
                        else{
                            $this->session->set_flashdata("message","Data Gagal Diedit Karena  Tidak Ada Data");
                            redirect('Admin/Syarat/edit/'.$id,'refresh');
                        }
                    }
                else{
                    $data['hasil'] = $this->Model_data->get_by_id('syarat','id_sdk',$id)->row();
                    $tmp['content'] = $this->load->view('admin/backend/syarat/u_syarat',$data, true);
                    $this->load->view('admin/template/bootstrap',$tmp);
                }
            }

    function delete($id){
        $this->db->where('id_sdk',$id);
        $query = $this->db->get('syarat');
        $row = $query->row();
        $this->db->delete('syarat', array('id_sdk' => $id));
        redirect('Admin/Syarat');
    }
}