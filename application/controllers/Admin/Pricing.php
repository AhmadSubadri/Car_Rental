<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index(){
        $data['title'] = "Data Pricing";
        $data['hasil'] = $this->Model_data->get_all_data('pricing');
        $tmp['content'] = $this->load->view('admin/backend/harga/v_pricing',$data, true);
		$this->load->view('admin/template/bootstrap',$tmp);
    }

    public function create(){
        $data['title'] = "Data Harga";
        $tmp['content'] = $this->load->view('admin/backend/harga/c_pricing',$data, true);
		$this->load->view('admin/template/bootstrap',$tmp);
    }

    public function simpan_post(){
        $data = array(
			'detail' => $this->input->post('isi'),
		);
        $data = $this->db->insert('pricing', $data);
        redirect('Admin/Pricing',$data);
    }

    function edit($id=0){
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
        $data_model=$this->Model_data->get_by_id('pricing','id_pric',$id);
            if (count($data_model)>0){
                $data = array(	
                    'detail' => $this->input->post('isi')
                            );
                           $aksi = $this->Model_data->update('pricing','id_pric',$id ,$data);
                            if ($aksi) {
                                $this->session->set_flashdata('message','Data Berhasil di simpan');
                                redirect("Admin/Pricing","refresh");
                            }
                            else{
                                $this->session->set_flashdata('message','Data Tidak Berhasil di simpan...');
                                redirect("Admin/Pricing/edit","refresh");
                            }
                        }
                        else{
                            $this->session->set_flashdata("message","Data Gagal Diedit Karena  Tidak Ada Data");
                            redirect('Admin/Pricing/edit/'.$id,'refresh');
                        }
                    }
                else{
                    $data['hasil'] = $this->Model_data->get_by_id('pricing','id_pric',$id)->row();
                    $tmp['content'] = $this->load->view('admin/backend/harga/u_pricing',$data, true);
                    $this->load->view('admin/template/bootstrap',$tmp);
                }
            }

    function delete($id){
        $this->db->where('id_pric',$id);
        $query = $this->db->get('pricing');
        $row = $query->row();
        $this->db->delete('pricing', array('id_pric' => $id));
        redirect('Admin/Pricing');
    }
}