<?php

class Daftar extends Controller {

    
	public function index()
	{
		$data['title'] = 'Halaman daftar';

		$this->view('login/daftar', $data);
	}

	function prosesDaftar(){
        if($_POST['password']) {	
			$row = $this->model('DaftarModel')->cekUsername();
			if($row['username'] == $_POST['username']){
				Flasher::setMessage('Gagal','Username yang anda masukan sudah pernah digunakan!','danger');
				header('location: '. base_url . '/daftar');
				exit;	
			} else {
				if( $this->model('DaftarModel')->tambahUser($_POST) > 0 ) {
					Flasher::setMessage('Berhasil','ditambahkan','success');
					header('location: '. base_url . '/login');
					exit;			
				} else {
					Flasher::setMessage('Gagal','ditambahkan','danger');
					header('location: '. base_url . '/login');
					exit;	
				}
			}
		}
    }

}