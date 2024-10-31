<?php
// Jualan Produk
// Komik
// Game

abstract class Produk
{
  private $judul, $penulis, $penerbit, $harga;
  
  protected $diskon = 0;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function setJudul ($judul) {
    $this -> judul = $judul;
  }

  public function getJudul(){
    return $this->judul;
  }

  public function setPenulis ($penulis){
    $this->penulis = $penulis;
  }

  public function getPenulis (){
    return $this->penulis;
  }

  public function setPenerbit ($penerbit){
    $this->penerbit = $penerbit;
  }

  public function getPenerbit (){
    return $this->penerbit;
  }

  public function setHarga ($harga){
    $this->harga = $harga;
  }


  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  abstract public function getInfoProduk();

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->getHarga()})";
    return $str;
  }
}

class Komik extends Produk
{
  public $jmlHalaman;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public $waktuMain;

  public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }

  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }

  public function getDiskon(){
    return $this->diskon;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
    return $str;
  }
}

class CetakInfoProduk
{
    public $daftarProduk = array();

    public function tambahProduk (Produk $produk){
        $this -> daftarProduk[] = $produk;
    }
  public function cetak()
  {
    $str = "DAFTAR PRODUK : <br>";

    foreach ($this -> daftarProduk as $p){
        $str .= "- {$p->getInfoProduk()} <br>";
    }
    return $str;
  }
}


$produk3 = new Komik("Manusia Silver", "Arley", "Suep Khalifa", 200000, 100);
$produk4 = new Game("NEWLIFE ROLEPLAY", "Suep Khalifa", "Arley", 300000, 50);


$cetakProduk = new CetakInfoProduk();
$cetakProduk -> tambahProduk( $produk3);
$cetakProduk -> tambahProduk( $produk4);
echo $cetakProduk-> cetak();