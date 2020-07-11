<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
    }

    public function index(){
        $data['title'] = "Data Artikel";
        $data['hasil'] = $this->Model_data->get_all_data('artikel');
        $tmp['content'] = $this->load->view('admin/backend/artikel/v_artikel',$data, true);
		$this->load->view('admin/template/bootstrap',$tmp);
    }

    public function create(){
        $data['title'] = "Data Artikel";
        $tmp['content'] = $this->load->view('admin/backend/artikel/c_artikel',$data, true);
		$this->load->view('admin/template/bootstrap',$tmp);
    }

    function simpan_post(){
        $config['upload_path'] = './upload/artikel/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['userfile']['name'])){
            if ($this->upload->do_upload('userfile')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./upload/artikel/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= './upload/artikel/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
                $jdl=$this->input->post('Title');
                $berita=$this->input->post('isi');
                $tgl=$this->input->post('date');
 
                $this->Model_data->simpan_berita($jdl,$berita,$gambar,$tgl);
                redirect('Admin/Article/lists');
        }else{
            redirect('Admin/Article');
        }
                      
        }else{
            redirect('Admin/Article');
        }
                 
    }
 
    function lists(){
        $x['hasil']=$this->Model_data->get_all_data('artikel');
        $tmp['content'] = $this->load->view('admin/backend/artikel/v_artikel',$x, true);
		$this->load->view('admin/template/bootstrap',$tmp);
    }

    function edit($id=0){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $data_model=$this->Model_data->get_by_id('artikel','id_artikel',$id);
                if (count($data_model)>0){
                    $gambar=$_FILES['userfile']['name'];
                    if (empty($gambar))
                    {
                            $data = array(
                                'Title' => $this->input->post('Title'),
                                'Deskripsi' => $this->input->post('isi'),
                                'tgl' => $this->input->post('date'),
                                       );
                           $aksi = $this->Model_data->update('artikel','id_artikel',$id,$data);
                            if ($aksi) {
                                $this->session->set_flashdata('message','Data Berhasil di simpan tanpa foto...');
                                redirect("Admin/Article","refresh");
                            }
                            else{
                                $this->session->set_flashdata('message','Data Tidak Berhasil di simpan tanpa foto...');
                                redirect("Admin/Article/edit","refresh");
                            }
                    }
                    else
                    {
                        $alphanum="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                        $nama=str_shuffle($alphanum);//random nama dengan alphanum
                        $config['file_name'] = $nama; 
                        $config['upload_path'] = "./upload/artikel"; // lokasi penyimpanan file
                        $config['allowed_types'] = 'gif|jpg|JPEG|png|BMP|bmp'; // format foto yang diizinkan 
                        $this->load->library('upload',$config);
                        $this->upload->initialize($config);
                        $this->upload->do_upload('userfile');
                        if( !$this->upload->do_upload('userfile'))
                        {
                            $data['hasil']  = $this->Model_data->get_all_data('artikel');
                            $this->session->set_flashdata('message',$this->upload->display_errors());
                            $tmp['content'] = $this->load->view('admin/backend/artikel/u_artikel',$data, true);
                            $this->load->view('admin/template/bootstrap',$tmp);
                        }
                        else
                        {
                                $data = array(
                                    'Title' => $this->input->post('Title'),
                                    'Deskripsi' => $this->input->post('isi'),
                                    'tgl' => $this->input->post('date'),
                                    'foto'=> $this->upload->file_name
                                       );
                               $aksi = $this->Model_data->update('artikel','id_artikel',$id,$data);
                                if ($aksi) {
                                    $this->session->set_flashdata('message','Data Berhasil di simpan tanpa foto...');
                                    redirect("Admin/Article","refresh");
                                }
                                else{
                                    $this->session->set_flashdata('message','Data Tidak Berhasil di simpan tanpa foto...');
                                    redirect("Admin/Article/edit","refresh");
                                }
                            }
                    }
                }
                else
                {
                    $this->session->set_flashdata("message","Data Gagal Diedit Karena  Tidak Ada Data");
                    redirect('Admin/Article/edit/'.$id,'refresh');
                }
            }
            else
            {
                    $data['hasil'] = $this->Model_data->get_by_id('artikel','id_artikel',$id)->row();
                    $tmp['content'] = $this->load->view('admin/backend/artikel/u_artikel',$data, true);
                    $this->load->view('admin/template/bootstrap',$tmp);
            }
    }

    function delete($id){
        $this->db->where('id_artikel',$id);
        $query = $this->db->get('artikel');
        $row = $query->row();
        @unlink("./upload/artikel/$row->foto");
        $this->db->delete('artikel', array('id_artikel' => $id));
        redirect('Admin/Article');
    }
}