<?php

/**
* 
*/
class Foto extends CI_Model
{
	public $nama;
	public $deskripsi;
	public $tanggal;


	public function get() {
		return $this->db->get('foto')->result(); // Ambil data dari tabel get
	}

	public function save($data) {
		$this->nama = $data["nama"];
		$this->deskripsi = $data["deskripsi"];
		$this->tanggal = date('dd-mm-yy');
		$this->gambar = $data["gambar"];
		return $this->db->insert('foto', $this); // Menyimpan ke DB
	}
}

?>