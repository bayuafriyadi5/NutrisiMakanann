<?php

class Home extends Controller{

    public function __construct()
	{
		 
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
		 	$username = $_SESSION['username'];
			$nama = $_SESSION['nama'];
	} 

    public function index()
    {
        $sumber = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyBHRV-rLqOnHnD8iO2TvlSDdRUeFJQyc90&part=snippet&maxResults=3&type=video&q=theseriousfitness ";
        $konten = file_get_contents($sumber);
        $data = json_decode($konten,true);
        $data = $data['items'];
		$nama = $_SESSION['username'];
        $this->view('home/home',$data);
    }

	public function panduan()
    {
       
        $this->view('home/panduan');
    }

	public function akun()
    {
       	$username = $_SESSION['username'];
    	$data = $this->model('AkunModel')->getUserById($username);

		
        foreach ($data as $row) {
            
        }
		
       	$this->view('home/akun',$row);
    }

	public function ubahProfil()
    {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$kpw = $_POST['konfirmasi_password'];
        
		if($password == $kpw){
			if( $this->model('AkunModel')->updateDataUser($_POST) > 0 ) {
				Flasher::setMessage('Berhasil','diupdate','success');
				header('location: '. base_url . '/home/akun');
				exit;			
				}else{
					Flasher::setMessage('Gagal','diupdate','danger');
					header('location: '. base_url . '/home/akun');
					exit;	
				}
		}else{
			Flasher::setMessage('Akun','Password Tidak sama.','danger');
			$this->akun();
		}
		$this->view('home/akun');
        
    }
}