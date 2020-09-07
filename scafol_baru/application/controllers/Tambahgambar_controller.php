<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tambahgambar_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Foto', 'foto');
	}

	public function form_tambah(){
		$this->load->view('tambahgambar');
	}


	public function get() {
		$hasil = $this->foto->get();
	}


	public function create() {
		$config['upload_path'] = './upload';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 2000;

		$this->load->library('upload', $config);


		$data = $this->input->post(); // untuk mengambil nilai dari form
		// var_dump($data);
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
		}
		$file = array('upload_data' => $this->upload->data());

		$data['gambar'] = $file['upload_data']['file_name']; // Ambil nama file dismpan ke data
		$save = $this->foto->save($data); // Pindah ke model
		$this->load->helper('url'); 
        redirect('gambar');
	}

	public function getFile() {
		$hasil = $this->foto->get();
		$this->load->view('welcome_message', compact('hasil'));
	}
	// public function ubahGambar()
	// Create
	// Update
	// Delete

	// Tambah
	// Ubah
	// Hapus
}
