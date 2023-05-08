<?php 

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

 ?>