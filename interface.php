<?php


interface getCetak {
	 public function cetak();

}

abstract class Produk 
{
	protected $judul,
			$penerbit,
			$perilis,         
			$harga,
			$diskon = 0;
			
	public function __construct($judul = "judul", $penerbit = "penerbit", $perilis = "perilis", $harga = "Rp 0" )
	{
		$this->judul = $judul;
		$this->penerbit = $penerbit;
		$this->perilis = $perilis; 
		$this->harga = $harga;
	}
	
	public function getLabel()
	{
		return "$this->judul, $this->penerbit";
	}

	public function setJudul($judul)
	{
		$this->judul = $judul;
	}

	public function getJudul()
	{
		return $this->judul;
	}

	public function setPenerbit($penerbit)
	{
		$this->penerbit = $penerbit;
	}

	public function getPenerbit ()
	{
		return $this->penerbit;
	}

	public function setPerilis($perilis)
	{
		$this->perilis = $perilis;
	}

	public function getPerilis ()
	{
		return $this->perilis;
	}

	public function setDiskon($diskon)
	{
		$this->diskon = $diskon;
	}

	public function getDiskon ()
	{
		return $this->diskon ;
	}

	public function setHarga($harga)
	{
		$this->harga = $harga;
	}

	public function getHarga() 
	{
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	abstract public function getCetak();
}


class Movie extends Produk implements getCetak
{  
	public $movie;
	
	public function __construct($judul = "judul", $penerbit = "penerbit", $perilis = "perilis", $harga = "Rp 0", $movie = 0)
	{
		parent::__construct($judul, $penerbit, $perilis, $harga);
		$this->movie = $movie;
	}

	public function getCetak()
	{
		$str = "{$this->judul} | {$this->getLabel()} {$this->perilis} : (Rp. {$this->harga})  ";
		return $str;
	}

	public function cetak()
	{
		$str = "Movie : " . $this->getCetak() . " {$this->movie} Movie.";
		return $str;
	}


}

class Komik extends Produk implements getCetak
{
	public $chapter;

	public function __construct($judul = "judul", $penerbit = "penerbit", $perilis = "perilis", $harga = "Rp 0", $chapter = 0)
	{
		parent::__construct($judul, $penerbit, $perilis, $harga);
		$this->chapter = $chapter;
	}

	public function setDiskon($diskon) 

	{
		$this->diskon = $diskon;
	}
	
	public function getCetak()
	{
		$str = "{$this->judul} | {$this->getLabel()} {$this->perilis} : (Rp. {$this->harga})  ";
		return $str;
	}

	public function cetak()
	{
	

		$str = "Komik : " . $this->getCetak() . "  {$this->chapter} Chapter.";
		return $str;

	}
	


}

/**
 * 
 */
class CetakInfo
{
	public $daftarProduk = [];

	public function tambahProduk( Produk $produk ) {
		$this->daftarProduk[] = $produk;
	}
	
	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $pro ) {
			$str .= "- {$pro->cetak()} <br>";
		}
		
		return $str;
	}
	
}



$produk1 = new Movie("Spider-Man", "MARVEL", "Ramayana", 50000, 3);
$produk2 = new Komik("Bat-Man", "Justice Lague", "CGV", 45000, 60);

$cetakProduk = new CetakInfo();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo "<br>";
echo $cetakProduk->cetak();
	// 	return $this->harga;
	// } tambahkan protected jika ingin menampilkan dari pewarisan





?>
