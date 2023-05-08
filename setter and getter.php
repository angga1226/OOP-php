<?php 

//ada tiga keyword pda visi bility
//1. public, dapat digunakan dimana saja,bahkan diluar kelas
//2. protected, hanya digunakan di dalam di dalam sebuah kelas beserta turunannya
//3. private, hanya dapat digunakan didalam sebuah kelas tertentu saja

class Produk
{
	 private $judul,
			$penerbit,
			$perilis;
  protected $diskon = 0;         

  private $harga;
			
			
			

	public function __construct($judul = "judul", $penerbit = "penerbit",$perilis = "perilis", $harga = "Rp 0" )
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

    public function setharga($harga)
    {
        $this->harga = $harga;
    }

      public function getharga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
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

	// public function getharga() {
	// 	return $this->harga;
	// } tambahkan protected jika ingin menampilkan dari pewarisan

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

    public function setdiskon( $diskon ) {
        $this->diskon = $diskon;
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
echo "<hr>";
$produk2->setdiskon(50);
echo $produk2->getharga();
echo "<hr>";

$produk1->setPerilis("Matahari");
echo $produk1->getPerilis("CGV");

?>
