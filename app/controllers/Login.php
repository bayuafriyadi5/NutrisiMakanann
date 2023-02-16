<?php

class Login extends Controller {
	public function index()
	{
		$data['title'] = 'Halaman Login';

		$this->view('login/login', $data);
	}

	public function prosesLogin() {
		if($row = $this->model('AkunModel')->checkLogin($_POST) > 0 ) {
				session_start();
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['nama'] = $_POST['nama'];
				$_SESSION['session_login'] = 'sudah_login';

				//$this->model('LoginModel')->isLoggedIn($_SESSION['session_login']);
				
				header('location: '. base_url . '/home');
		} else {
			Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. base_url . '/login');
			exit;	
		}
	}
}