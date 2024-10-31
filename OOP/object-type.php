<?php
//Jualan Produk
// Komik
// Game
class Produk
{
  public $judul, 
        $penulis, 
        $penerbit , 
        $harga; 

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
        {
          {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
          }
        }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk3 = new Produk("Penjelajahan Bandung", "Arley", "Sprint69",200000 );

$produk4 = new Produk("Penjelajah Lubang Dunia", "Leeys", "Suep", 300000);

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk3);
