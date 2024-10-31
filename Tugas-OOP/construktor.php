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

$produk3 = new Produk("Manusia Silver", "Arley", "Suep Khalifa",200000 );

$produk4 = new Produk("NEWLIFE ROLEPLAY", "Suep Khalifa", "Arley", 300000);

$produk5 = new Produk("FiveM.exe");

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
echo "<br>";
echo "Game : " . $produk5->getLabel();