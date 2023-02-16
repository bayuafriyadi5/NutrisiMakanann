<?php

class AkunModel {
	
	private $table = 'user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function checkLogin($data)
	{
		$query = "SELECT * FROM user WHERE username = :username AND password = :password";
		$this->db->query($query);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', $data['password']);
		//$this->db->execute();
		//return $this->db->rowCount();
		$data =  $this->db->single();
		return $data;
	}

	public function getUserById($username)
	{
		$this->db->query('SELECT * FROM user WHERE username=:username');
		$this->db->bind('username',$username);
		return $this->db->resultSet();
	}

	public function updateDataUser($data)
	{
		
			$query = "UPDATE user SET username=:username, password=:password WHERE username=:username";
			$this->db->query($query);
			// $this->db->bind('id',$data['id']);
			$this->db->bind('username',$data['username']);
			$this->db->bind('password',$data['password']);
	
		
		$this->db->execute();

		return $this->db->rowCount();
	}
}