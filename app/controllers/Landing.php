<?php

class Landing extends Controller{

    // public function __construct()
	// {	
	// 	if($_SESSION['session_login'] != 'sudah_login') {
	// 		Flasher::setMessage('Login','Tidak ditemukan.','danger');
	// 		header('location: '. base_url . '/login');
	// 		exit;
	// 	}
	// } 

    public function index()
    {
        $this->view('landing/landingpage');
    }
}