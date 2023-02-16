<?php

class Nutrisi extends Controller{

    public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	} 

    public function index()
    {
        $this->view('home/nutrisi');
    }

    function prosesMakanan(){

        $kalori = htmlspecialchars($_POST['kalori']);
        $lemak = htmlspecialchars($_POST['lemak']);
        $karbohidrat = htmlspecialchars($_POST['karbohidrat']);
        $protein = htmlspecialchars($_POST['protein']);
        $data = 10;

    
        $sumber = "https://api.spoonacular.com/recipes/findByNutrients?apiKey=3dbcfd17053e44f8ba398df1c3c39565&maxCarbs=$karbohidrat&number=$data&maxCalories=$kalori&maxProtein=$protein&maxFat=$lemak";
        $konten = file_get_contents($sumber);
        $data = json_decode($konten);
            
        $this->view('home/makanan', $data); 
    }

    public function yutub($title){

        $film = str_replace(' ', '+', strtolower($title));

        $sumber = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyBHRV-rLqOnHnD8iO2TvlSDdRUeFJQyc90&part=snippet&maxResults=25&type=video&q=$title";
        $konten = file_get_contents($sumber);
        $data = json_decode($konten,true);
        $data = $data['items'];

        $this->view('home/youtube', $data); 
    }

    function simpan($tt){
        
        $nama = $_SESSION['username'];
        // var_dump($_SESSION);
		// 	exit;
        
        $this->model('MakananModel')->simpanData($nama,$tt);		

        Flasher::setMessage('Berhasil','ditambahkan','success');
        header('location: '. base_url . '/Nutrisi/tersimpan');
    }

    function tersimpan(){
        $nama = $_SESSION['username'];
        $data = $this->model('MakananModel')->getMakananByUser($nama);

        // $idMakanan = $data["id_makanan"];
       
        // $sumber = "https://api.spoonacular.com/recipes/complexSearch?apiKey=3dbcfd17053e44f8ba398df1c3c39565&id=$idMakanan";
        // $konten = file_get_contents($sumber);
        // $data = json_decode($konten,true);
        
        $results = array();
        foreach ($data as $row) {
            $idMakanan = $row["id_makanan"];

            $sumber = "https://api.spoonacular.com/recipes/$idMakanan/information?includeNutrition=true&apiKey=3dbcfd17053e44f8ba398df1c3c39565";
            $konten = file_get_contents($sumber);
            $result = json_decode($konten, true);
  
            // Store each API result in an array
            $results[] = $result;

            // var_dump($results);
            
        }

       $this->view('home/simpan',$results);
        
        
    }

   public function hapus($id){
   
		if( $this->model('MakananModel')->hapusMakanan($id) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. base_url . '/Nutrisi/tersimpan');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. base_url . '/Nutrisi/tersimpan');
			exit;	
		}
	}
}