<?php 

class Produk
{
	public $judul,
			$penerbit,
			$perilis,
			$harga;
			

	public function __construct($judul = "judul", $penerbit = "penerbit",$perilis = "perilis", $harga = "Rp 0")
	{
		$this->judul = $judul;
		$this->penerbit = $penerbit;
		$this->perilis = $perilis; 
		$this->harga = $harga;
	}
	public function getlabel()
	{
		return "$this->judul, $this->penerbit";
	}
}


class CetakInpo
{
	
	public function cetak(produk $produk)
	{
		$str = "{$produk->judul} | {$produk->penerbit} {$produk->perilis} : (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Spider-Man", "MARVEL", "Ramayana", 50000);
$produk2 = new Produk("Bat-Man", "Justice Lague", "CGV", 45000);
echo "Film	: " . $produk1->getlabel();
echo "<br>";
echo "DVD	: " . $produk2->getlabel();
echo "<br>";
$inpoProduk1 = new CetakInpo();
echo $inpoProduk1->cetak($produk1);

?>