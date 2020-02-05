<?php

Class Model_data extends CI_Model{

	public function read()
	{
		$sql = $this->db->query("SELECT * FROM tb_karyawan"); // digunakan untuk menampilkan isi dari tb_karyawan
		return $sql->result_array();
	}

	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		
		$nama = $this->db->escape($post['nama']);
		$email = $this->db->escape($post['email']);
		$alamat = $this->db->escape($post['alamat']);

		$sql = $this->db->query("INSERT INTO tb_karyawan VALUES (NULL, $nama, $email, $alamat)");
		if($sql)
		{
			return true;
		}	
		else
		{
			return false;
		}
	}

	public function get_default($id)
	{
		$sql = $this->db->query("SELECT * FROM tb_karyawan WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
		{
			return $sql->row_array();
		}
		else
		{
			return false;
		}		
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$nama = $this->db->escape($post['nama']);
		$email = $this->db->escape($post['email']);
		$alamat = $this->db->escape($post['alamat']);

		$sql = $this->db->query("UPDATE tb_karyawan SET nama = $nama, email = $email, alamat = $alamat WHERE id = ".intval($id));
		return true;
	}

	public function hapus($id)
	{
		$sql = $this->db->query("DELETE FROM tb_karyawan WHERE id = ".intval($id));
	}

}