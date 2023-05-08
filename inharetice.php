<?php 

class Produk
{
	public $judul,
			$penerbit,
			$perilis,
			$harga,
			$movie,
			$chapter,
			$type;
			

	public function __construct($judul = "judul", $penerbit = "penerbit",$perilis = "perilis", $harga = "Rp 0", $movie = 0,$chapter = 0, $type = "type")
	{
		$this->judul = $judul;
		$this->penerbit = $penerbit;
		$this->perilis = $perilis; 
		$this->harga = $harga;
		$this->movie = $movie;
		$this->chapter = $chapter;
		$this->type = $type;
	}
	
	public function getlabel()
	{
		return "$this->judul, $this->penerbit";
	}
	
	public function getinpo(produk $produk)
	{
		$str = "{$produk->judul} | {$produk->getlabel()} {$produk->perilis} : (Rp. {$produk->harga})";
		if ($produk->type == "movie") {
			$str .= " - {$this->movie} movie.";
		} elseif ($produk->type == "chapter") {
			$str .= " - {$this->chapter} chapter.";
		}
		
		return $str;
	}
}


class CetakInpo
{
	public function cetak(produk $produk)
	{
		$str = "{$produk->judul} | {$produk->getlabel()} {$produk->perilis} : (Rp. {$produk->harga})";
		
		return $str;

	}
}

$produk1 = new Produk("Spider-Man", "MARVEL", "Ramayana", 50000, 3, 0, "movie");
$produk2 = new Produk("Bat-Man", "Justice Lague", "CGV", 45000, 0, 50, "chapter");

echo $produk1->getinpo($produk1);

?>
