<?php
class DaftarModel
{
    
	private $table = 'user';
	private $db;

    public function __construct()
	{
		$this->db = new Database;
	}
public function tambahUser($data)
	{
		$query = "INSERT INTO user (nama,username,password) VALUES(:nama,:username,:password)";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password', $data['password']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cekUsername(){
		$username = $_POST['username'];
		$this->db->query("SELECT * FROM user WHERE username = :username");
		$this->db->bind('username', $username);
		return $this->db->single();
	}

}