<?php

class MakananModel {
	
	private $table = 'datamakanan';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMakanan()
	{
		$this->db->query("SELECT * FROM datamakanan");
		return $this->db->resultSet();
	}

	public function getMakananByUser($nama)
	{
		$this->db->query('SELECT * FROM datamakanan WHERE user=:user');
		$this->db->bind('user',$nama);
		return $this->db->resultSet();
	}

	public function simpanData($nama,$tt)
	{
		$query = "INSERT INTO datamakanan (user,id_makanan) VALUES(:user,:id_makanan)";
		$this->db->query($query);
		$this->db->bind('user',$nama);
		$this->db->bind('id_makanan', $tt);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataBuku($data)
	{
		$query = "UPDATE buku SET judul=:judul, penerbit=:penerbit, pengarang=:pengarang, pengarang=:pengarang, tahun=:tahun, kategori_id=:kategori_id, harga=:harga WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$data['id']);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('penerbit', $data['penerbit']);
		$this->db->bind('pengarang', $data['pengarang']);
		$this->db->bind('tahun', $data['tahun']);
		$this->db->bind('kategori_id', $data['kategori_id']);
		$this->db->bind('harga', $data['harga']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusMakanan($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_makanan=:id');
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	// public function cariBuku()
	// {
	// 	$key = $_POST['key'];
	// 	$this->db->query("SELECT * FROM " . $this->table . " WHERE judul LIKE :key");
	// 	$this->db->bind('key',"%$key%");
	// 	return $this->db->resultSet();
	// }
}