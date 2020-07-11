<?php

class Model_data extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('Model_data');
	}

	function verify($u,$pw)
	{
		$this->db->where('email',$u);
		$this->db->where('password',$pw);
		$this->db->limit(1);
		$Q = $this->db->get('admin');
		if ($Q->num_rows() > 0){
			$row = $Q->row_array();
			return $row;
		}else{
		    $this->session->set_flashdata('message', 'Sorry, try again!');	
			return array();
		}		
	}
	
	function get_all_data($tabel){
		return $this->db->get($tabel)->result_array();
	}

	function get_by_id($tabel,$col,$id){
		$this->db->where($col,$id);
		$data = $this->db->get($tabel);
		return $data;
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($tabel,$col,$id,$data)
	{
		$this->db->where($col,$id);
		$action = $this->db->update($tabel,$data);
		return $action;
	}

	public function insert_service(){
		$data = array(
			'Title' => $this->input->post('Title'),
			'Desc' => $this->input->post('Desc'),
		);
		$action = $this->db->insert('layanan', $data);  
		return $action;
	}  

	//CRUD admin mobil
	public function insert_image($image){
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
			'foto' => $image
		);
		//insert image to the database
		$this->db->insert('mobil', $data);
	}

	function simpan_berita($jdl,$berita,$gambar,$tgl){
        $hsl=$this->db->query("INSERT INTO artikel (Title,Deskripsi,foto,tgl) VALUES ('$jdl','$berita','$gambar','$tgl')");
        return $hsl;
	}
	
	function get_all_berita(){
        $hsl=$this->db->query("SELECT * FROM artikel ORDER BY id_artikel DESC");
        return $hsl;
    }
}