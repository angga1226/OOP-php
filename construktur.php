<?php 

class Produk
{
	public $judul,
			$penerbit,
			$harga;

	public function __construct($judul = "judul", $penerbit = "penerbit", $harga = "Rp 0")
	{
		$this->judul = $judul;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	public function getlabel()
	{
		return "$this->judul, $this->penerbit";
	}
}

$produk1 = new Produk("Spider-Man", "MARVEL", "Rp 50000");
echo "Film : " . $produk1->getlabel();

?>