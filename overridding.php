<?php 

class Produk
{
	public $judul,
			$penerbit,
			$perilis,
			$harga,
			$chapter;
			
			

	public function __construct($judul = "judul", $penerbit = "penerbit",$perilis = "perilis", $harga = "Rp 0", $chapter = 0 )
	{
		$this->judul = $judul;
		$this->penerbit = $penerbit;
		$this->perilis = $perilis; 
		$this->harga = $harga;
		$this->chapter = $chapter;
		 
	}
	
	public function getLabel()
	{
		return "$this->judul, $this->penerbit";
	}

	public function cetak()
	{
		$str = "{$this->judul} | {$this->getLabel()} {$this->perilis} : (Rp. {$this->harga})  ";
		
		return $str;
	}
}



class Movie extends Produk
{  
	public $movie;
	

	public function __construct($judul = "judul", $penerbit = "penerbit",$perilis = "perilis", $harga = "Rp 0", $movie = 0)
	{
		parent::__construct($judul,$penerbit,$perilis,$harga);

		$this->movie = $movie;
	}

	public function getInfo()
	{
		$str = "Movie : " . parent::cetak() . " {$this->movie} Movie.";
		return $str;
	}
}

class Komik extends Produk
{
	public $chapter;

	public function __construct($judul = "judul", $penerbit = "penerbit",$perilis = "perilis", $harga = "Rp 0", $chapter = 0)
	{
		parent::__construct($judul,$penerbit,$perilis,$harga);

		$this->chapter = $chapter;
	}
	
	public function getInfo()
	{
		$str = "Komik : " . parent::cetak() . "  {$this->chapter} Chapter.";
		return $str;

	}
}

$produk1 = new Movie("Spider-Man", "MARVEL", "Ramayana", 50000, 3);
$produk2 = new Komik("Bat-Man", "Justice Lague", "CGV", 45000, 60);


echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();

?>
