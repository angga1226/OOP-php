<?php 

class Produk
{
	public $judul,
			$penerbit,
			$perilis,
			$harga,
			$movie,
			$chapter;
			
			

	public function __construct($judul = "judul", $penerbit = "penerbit",$perilis = "perilis", $harga = "Rp 0", $movie = 0,$chapter = 0 )
	{
		$this->judul = $judul;
		$this->penerbit = $penerbit;
		$this->perilis = $perilis; 
		$this->harga = $harga;
		$this->movie = $movie;
		$this->chapter = $chapter;
		 
	}
	
	public function getLabel()
	{
		return "$this->judul, $this->penerbit";
	}
}

class CetakInfo
{
	public function cetak(Produk $produk)
	{
		$str = "{$produk->judul} | {$produk->getLabel()} {$produk->perilis} : (Rp. {$produk->harga})  ";
		
		return $str;

	}
}

class Movie extends Produk
{
	
	public function getInpo()
	{
		$str = "Movie : {$this->judul} | {$this->penerbit} {$this->perilis} = (Rp. {$this->harga}) {$this->movie} Movie.";
		return $str;
	}
}

class Komik extends Produk
{
	
	public function getInpo()
	{
		$str = "Komik : {$this->judul} | {$this->penerbit} {$this->perilis} = (Rp. {$this->harga}) {$this->chapter} Chapter.";
		return $str;
	}
}

$produk1 = new Movie("Spider-Man", "MARVEL", "Ramayana", 50000, 3, 0 );
$produk2 = new Komik("Bat-Man", "Justice Lague", "CGV", 45000, 0, 50 );


echo $produk1->getInpo();
echo "<br>";
echo $produk2->getInpo();

?>
