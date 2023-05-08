<?php 

// require_once 'Produk/getCetak.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Movie.php';
// require_once 'Produk/CetakInfo.php';

spl_autoload_register(function( $class ){
	require_once __DIR__ . "/Produk/" . $class . ".php";
});


 ?>