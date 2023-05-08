<?php 

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

 ?>