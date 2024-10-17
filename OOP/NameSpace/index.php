<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakinfoProduk.php';

require_once 'App/init.php';

//$produk1 = new Komik("Si Bolang", "Trans TV", "Trans Media", 99000, 100);
//$produk2 = new Game("Valorant", "Anna Donlon John Goscicki", "Riot", 99000, 50 );

//$cetakProduk = new CetakInfoProduk();
//$cetakProduk->tambahProduk( $produk1 );
//$cetakProduk->tambahProduk( $produk2 );
//echo $cetakProduk->cetak();

//echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

//new App\Produk\User();
//new App\Service\User();

new ServiceUser();
echo "<br>";
new ProdukUser;

?>