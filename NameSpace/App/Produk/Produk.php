<?php 

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

 ?>