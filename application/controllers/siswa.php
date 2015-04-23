<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->model('siswa_model');
	}
	public function index(){
		$data['siswa'] = $this->siswa_model->Alldata();
		$this->load->view('page_siswa',$data);
	}
	public function new_data(){ //function untuk menampilkan form tambah data
		$this->load->view('new_data'); // menampilkan view form tambah data
	}
	public function save(){ //fungsi untuk menyimpan data
		$this->load->library('form_validation'); // memanggil library validasi input
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim|xss_clean'); //set rule validasi
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|xss_clean');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|xss_clean');
		if ($this->form_validation->run() == FALSE) { //jika input salah
			$pesan = "error input : ".validation_errors(); // menampilkan pesan error
			echo $pesan;
		}else{ // jika input benar
			$data['nama'] = $this->input->post('nama');  // mengambil nilai dari form input
			$data['kelas'] = $this->input->post('kelas');
			$data['alamat'] = $this->input->post('alamat');
			$result = $this->siswa_model->save($data); 
			if($result){
				redirect(base_url('siswa'));
			}else{
				echo "Input Gagal";
			}
		}
	}
	public function hapus($id=''){
		$data['id'] = $id;
		$result = $this->siswa_model->delete($data);
		if($result){
			redirect(base_url('siswa'));
		}else{
			echo "Hapus Gagal";
		}
	}
	public function edit($id=''){
		$data['id'] = $id;
		$data['siswa'] = $this->siswa_model->get_siswa($data);
		$this->load->view('edit_data',$data);
	}
	public function update($id){
		$this->load->library('form_validation'); // memanggil library validasi input
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim|xss_clean'); //set rule validasi
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|xss_clean');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|xss_clean');
		if ($this->form_validation->run() == FALSE) { //jika input salah
			$pesan = "error input : ".validation_errors(); // menampilkan pesan error
			echo $pesan;
		}else{ // jika input benar
			$data['id'] = $id;
			$data['nama'] = $this->input->post('nama');  // mengambil nilai dari form input
			$data['kelas'] = $this->input->post('kelas');
			$data['alamat'] = $this->input->post('alamat');
			$result = $this->siswa_model->update($data);
			if($result){
				redirect(base_url('siswa'));
			}else{
				echo "update Gagal";
			}
		}
	}
}
?>