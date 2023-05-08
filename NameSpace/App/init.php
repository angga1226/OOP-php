<?php 

// require_once 'Produk/getCetak.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Movie.php';
// require_once 'Produk/CetakInfo.php';
// require_once 'Produk/User.php';
// //Name_Space

// require_once 'Service/User.php';

spl_autoload_register(function( $class ){
    // App\Produk\User = ["App", "Produk", "User"]
    $class = explode('\\', $class);
    $class = end($class);
	require_once __DIR__ . "/Produk/" . $class . ".php";
});

spl_autoload_register(function( $class ){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . "/Service/" . $class . ".php";
});



 ?>