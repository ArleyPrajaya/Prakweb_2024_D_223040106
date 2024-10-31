<?php 

require_once 'App/init.php';

$produk3 = new Komik("Manusia Silver", "Arley", "Suep Khalifa", 200000, 100);
$produk4 = new Game("NEWLIFE ROLEPLAY", "Suep Khalifa", "Arley", 300000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk -> tambahProduk( $produk3);
$cetakProduk -> tambahProduk( $produk4);
echo $cetakProduk-> cetak();