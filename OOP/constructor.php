<?php 

class Produk {
    public $judul,  
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penulis", $harga = 0 ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}


$produk1 = new Produk("Si Juki Anak Kosan #1", "Faza Meonko", "Falcon Publishing", 99000 );
$produk2 = new Produk("si bolang", "Trans tv", "Trans Media", 99000 );
$produk3 = new Produk("Naruto", "Masasi kisimoto", "Global TV", 99000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Novel : " . $produk2->getLabel();
echo "<br>";
echo "Novel : " . $produk3->getLabel();

//var_dump($produk3);

?>