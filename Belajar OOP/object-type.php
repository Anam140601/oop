<?php 

// toko yang menjual hp, laptop dan aksesoris

class produk{
	public 	$merk,
			$jenis,
			$harga,
			$spesifikasi,
			$berat,
			$kelas;

	public function __construct($merk = "ASUS", $jenis = "ROG Phone", $harga = "IDR 25.000.000", $spesifikasi = "RAM 8GB", $berat = "156 gr", $kelas = "Gaming High End")
	{
		$this->merk = $merk;
		$this->jenis = $jenis;
		$this->harga = $harga;
		$this->spesifikasi = $spesifikasi;
		$this->berat = $berat;
		$this->kelas = $kelas;	}

	public function label()
	{
		// $this untuk memanggil properti du luar function
		return "$this->merk $this->jenis";
	}
}

class infoproduk 
{
	public function cetak(produk $produk)
	{
		$str="{$produk->label()} || <br>
				{$produk->spesifikasi}, {$produk->berat}, {$produk->kelas} <br>
			harga = {$produk->harga}";

		return $str;
	}
}


// urutannya merk jenis harga spek berat kelas
$laptop1 = new produk("ASUS","GL503GE",17000000,"Prosesor Intel Core i7 8850h 2.2GHz up to 4GHz","2765gr","Medium Level");
$laptop1->RGB_Suport = "Yes";
$hp1 = new produk("XIAOMI","Redmi note 3 pro",1500000,"Snapdragon 660 hexa core","156gr","Entry Level");
$ssd1 = new produk("SanDisk","SSD Plus",375000,"R/W speed up to 530 MB/s","98gr","Low Level");


echo "Laptop : ".$laptop1->label();
echo "<br>";
echo "Smartphone : ".$hp1->label();
echo "<br>";
echo "SSD : ".$ssd1->label();
echo "<br><br>";

$infolaptop1 = new infoproduk();
echo $infolaptop1->cetak($laptop1);


 ?>