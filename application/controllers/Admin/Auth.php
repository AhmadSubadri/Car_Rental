<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index(){
		$this->load->view('admin/login');
    }
    
    public function cek_login(){	
		if ($this->input->post('email') and $this->input->post('pass')) {
			# code...
			$u = $this->input->post('email');
			$pw = $this->input->post('pass');
			// $ass=md5($pw.$this->config->item('descryption_key'));

			//cek ke table
			$cek_admin = $this->Model_data->verify($u,$pw);

			if (count($cek_admin) > 0) {
				# code...
				$login_admin  = array(
					'email' => $u,
					'login_admin' => TRUE,
					'login_status' => TRUE,
					'login_as' => "admin"
				);
				$this->session->set_userdata($login_admin);
				redirect('adminstrator/dashboard','refresh');
			}
			else{
				$this->session->set_flashdata('message','Username atau Password anda salah');
				redirect('Admin/Auth','refresh');
			}
		}
		else{
			$this->session->set_flashdata('message','Masukan Username dan Pasword');
			redirect('Admin/Auth','refresh');
		}
    }
    
    public function logout(){
		$new_data= array(
			'email'=>'',
			'logged_in'=>false
			);
		$this->session->set_userdata($new_data);
		$this->session->set_flashdata('message','Terima kasih anda telah logout');
		 redirect('/','refresh');	
	}

	public function admin(){
        $data['hasil'] = $this->Model_data->get_all_data('admin');
        $tmp['content'] = $this->load->view('admin/backend/admin/v_admin',$data, true);
		$this->load->view('admin/template/bootstrap',$tmp);
	}

	public function create(){
		$data['title'] = "Data admin";
        $tmp['content'] = $this->load->view('admin/backend/admin/c_admin',$data, true);
        $this->load->view('admin/template/bootstrap',$tmp);
	}

	public function simpan_post(){
        $data = array(
			'name' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('pass'),
		);
        $data = $this->db->insert('admin', $data);
        redirect('Admin/Auth/admin',$data);
	}
	
	function delete($id){
        $this->db->where('id_admin',$id);
        $query = $this->db->get('admin');
        $row = $query->row();
        $this->db->delete('admin', array('id_admin' => $id));
        redirect('Admin/Auth/admin');
	}
	
	function edit($id=0){
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
		$data_model=$this->Model_data->get_by_id('admin','id_admin',$id);
			if (count($data_model)>0){
				$data = array(	
					'name' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('pass')
							);
						   $aksi = $this->Model_data->update('admin','id_admin',$id ,$data);
							if ($aksi) {
								$this->session->set_flashdata('message','Data Berhasil di simpan');
								redirect("Admin/Auth/admin","refresh");
							}
							else{
								$this->session->set_flashdata('message','Data Tidak Berhasil di simpan...');
								redirect("Admin/Auth/edit","refresh");
							}
						}
						else{
							$this->session->set_flashdata("message","Data Gagal Diedit Karena  Tidak Ada Data");
							redirect('Admin/Auth/edit/'.$id,'refresh');
						}
					}
				else{
					$data['hasil'] = $this->Model_data->get_by_id('admin','id_admin',$id)->row();
					$tmp['content'] = $this->load->view('admin/backend/admin/u_admin',$data, true);
					$this->load->view('admin/template/bootstrap',$tmp);
				}
			}
}