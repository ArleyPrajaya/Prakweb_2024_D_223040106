<?php
//Jualan Produk
// Komik
// Game
class Produk
{
  public $judul = "Judul", 
        $penulis = "Penulis", 
        $penerbit = "Penerbit", 
        $harga = 0; 

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";

$produk3 = new Produk();
$produk3->judul = "Manusia Silver";
$produk3->penulis = "Arley";
$produk3->penerbit = "Suep Khalifa";
$produk3->harga = 200000;

$produk4 = new Produk();
$produk4->judul = "NEWLIFE ROLEPLAY";
$produk4->penulis = "Suep Khalifa";
$produk4->penerbit = "Arley";
$produk4->harga = 300000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();