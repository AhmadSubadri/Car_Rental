<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index(){
        $data['title'] = "Data Mobil";
        $data['hasil'] = $this->Model_data->get_all_data('mobil');
        $tmp['content'] = $this->load->view('admin/backend/mobil/v_mobil',$data, true);
		$this->load->view('admin/template/bootstrap',$tmp);
    }

    public function create(){
        $data['title'] = "Create Mobil";
        $tmp['content'] = $this->load->view('admin/backend/mobil/c_mobil',$data, true);
		$this->load->view('admin/template/bootstrap',$tmp);
    }

    public function add_image(){
        $config['upload_path'] = './upload/mobil/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['userfile']['name'])){
 
            if ($this->upload->do_upload('userfile')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./upload/mobil/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 600;
                $config['height']= 400;
                $config['new_image']= './upload/mobil/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $image=$gbr['file_name'];
                // $judul=$this->input->post('xjudul');
                $this->Model_data->insert_image($image);
                redirect('Admin/Mobil');
            }             
        }else{
            echo "Image yang diupload kosong";
        }         
    }

    function update($id=0){
    if($_SERVER['REQUEST_METHOD']=="POST"){
    $data_model=$this->Model_data->get_by_id('mobil','id_mobil',$id);
        if (count($data_model)>0){
            $gambar=$_FILES['userfile']['name'];
            if (empty($gambar))
            {
                    $data = array(
                        'Merk' => $this->input->post('Merk'),
                        'Tahun' => $this->input->post('Tahun'),
                        'Seat' => $this->input->post('Seat'),
                        'tarif1' => $this->input->post('Tarifone'),
                        'tarif2' => $this->input->post('Tariftwo'),
                        'tarif3' => $this->input->post('Tarifthree'),
                        'tarif4' => $this->input->post('Tariffour'),
                        'tarif5' => $this->input->post('Tariffive'),
                        'Deskripsi' => $this->input->post('Desc'),
                               );
                   $aksi = $this->Model_data->update('mobil','id_mobil',$id,$data);
                    if ($aksi) {
                        $this->session->set_flashdata('message','Data Berhasil di simpan tanpa foto...');
                        redirect("Admin/Mobil","refresh");
                    }
                    else{
                        $this->session->set_flashdata('message','Data Tidak Berhasil di simpan tanpa foto...');
                        redirect("admin/Mobil/add_image","refresh");
                    }
            }
            else
            {
                $alphanum="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $nama=str_shuffle($alphanum);//random nama dengan alphanum
                $config['file_name'] = $nama; 
                $config['upload_path'] = "./upload/mobil"; // lokasi penyimpanan file
                $config['allowed_types'] = 'gif|jpg|JPEG|png|BMP|bmp'; // format foto yang diizinkan 
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                $this->upload->do_upload('userfile');
                if( !$this->upload->do_upload('userfile'))
                {
                    $data['hasil']  = $this->Model_data->get_all_data('mobil');
                    $this->session->set_flashdata('message',$this->upload->display_errors());
                    $tmp['content'] = $this->load->view('admin/backend/mobil/u_mobil',$data, true);
                    $this->load->view('admin/template/bootstrap',$tmp);
                }
                else
                {
                        $data = array(
                            'Merk' => $this->input->post('Merk'),
                            'Tahun' => $this->input->post('Tahun'),
                            'Seat' => $this->input->post('Seat'),
                            'tarif1' => $this->input->post('Tarifone'),
                            'tarif2' => $this->input->post('Tariftwo'),
                            'tarif3' => $this->input->post('Tarifthree'),
                            'tarif4' => $this->input->post('Tariffour'),
                            'tarif5' => $this->input->post('Tariffive'),
                            'Deskripsi' => $this->input->post('Desc'),
                            'foto'=> $this->upload->file_name
                               );
                       $aksi = $this->Model_data->update('mobil','id_mobil',$id,$data);
                        if ($aksi) {
                            $this->session->set_flashdata('message','Data Berhasil di simpan tanpa foto...');
                            redirect("Admin/Mobil","refresh");
                        }
                        else{
                            $this->session->set_flashdata('message','Data Tidak Berhasil di simpan tanpa foto...');
                            redirect("Admin/Mobil/add_image","refresh");
                        }
                    }
            }
        }
        else
        {
            $this->session->set_flashdata("message","Data Gagal Diedit Karena  Tidak Ada Data");
            redirect('Admin/Mobil/edit/'.$id,'refresh');
        }
    }
    else
    {
            $data['hasil'] = $this->Model_data->get_by_id('mobil','id_mobil',$id)->row();
            $tmp['content'] = $this->load->view('admin/backend/mobil/u_mobil',$data, true);
            $this->load->view('admin/template/bootstrap',$tmp);
    }
}

    function delete($id){
        $this->db->where('id_mobil',$id);
        $query = $this->db->get('mobil');
        $row = $query->row();
        @unlink("./upload/mobil/$row->foto");
        $this->db->delete('mobil', array('id_mobil' => $id));
        redirect('Admin/Mobil');
    }
}