<?php defined('BASEPATH') OR exit('No direct script access allowed');

class layanan extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index(){
        $data['title'] = "Data Service";
        $data['hasil'] = $this->Model_data->get_all_data('layanan');
        $tmp['content'] = $this->load->view('admin/backend/layanan/v_layanan',$data, true);
		$this->load->view('admin/template/bootstrap',$tmp);
    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->form_validation->set_rules('Title','Title','trim|required|xss_clean');
            $this->form_validation->set_rules('Desc','Desc','trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $data['err'] = validation_errors();
                $tmp['content'] = $this->load->view('admin/backend/layanan/c_layanan',$data, true);
                $this->load->view('admin/template/bootstrap',$tmp);
            }
            else{
                $aksi = $this->Model_data->insert_service();
                if ($aksi) {
                    $this->session->set_flashdata("message", ("Data Berhasil Dimasukan ke database"));
                    redirect('Admin/Layanan/','refresh');
                }
                else{
                    $this->session->set_flashdata("message", ("Data Gagal Dimasukan"));
                    redirect('Admin/Layanan/create/','refresh');
                }
            }
        }
        $data['title'] = "create data layanan";
        $tmp['content'] = $this->load->view('admin/backend/layanan/c_layanan',$data, true);
		$this->load->view('admin/template/bootstrap',$tmp);
    }

    function edit($id=0){
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
    $data_model=$this->Model_data->get_by_id('layanan','id_layanan',$id);
        if (count($data_model)>0){
            $data = array(	
                'Title' => $this->input->post('Title'),
				'Desc' => $this->input->post('Desc')
                        );
                       $aksi = $this->Model_data->update('layanan','id_layanan',$id ,$data);
                        if ($aksi) {
                            $this->session->set_flashdata('message','Data Berhasil di simpan');
                            redirect("Admin/Layanan","refresh");
                        }
                        else{
                            $this->session->set_flashdata('message','Data Tidak Berhasil di simpan...');
                            redirect("Admin/Layanan/edit","refresh");
                        }
                    }
                    else{
			            $this->session->set_flashdata("message","Data Gagal Diedit Karena  Tidak Ada Data");
			            redirect('Admin/Layanan/edit/'.$id,'refresh');
        			}
            	}
		    else{
		    	$data['hasil'] = $this->Model_data->get_by_id('layanan','id_layanan',$id)->row();
		    	$tmp['content'] = $this->load->view('admin/backend/layanan/u_layanan',$data, true);
		        $this->load->view('admin/template/bootstrap',$tmp);
		    }
		}

    function delete($id){
        $this->db->where('id_layanan',$id);
        $query = $this->db->get('layanan');
        $row = $query->row();
        $this->db->delete('layanan', array('id_layanan' => $id));
        redirect('Admin/Layanan');
    }
}