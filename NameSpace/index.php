<?php 


require_once 'App/init.php';

// $produk1 = new Movie("Spider-Man", "MARVEL", "Ramayana", 50000, 3);
// $produk2 = new Komik("Bat-Man", "Justice Lague", "CGV", 45000, 60);

// echo "coba";
// $cetakProduk = new CetakInfo();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo "<br>";
// echo $cetakProduk->cetak();

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;


new ProdukUser();
echo "<br>";
new ServiceUser();


 ?>