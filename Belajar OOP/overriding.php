<?php 

// toko yang menjual hp, laptop dan aksesoris

class produk{
	public 	$merk,
			$jenis,
			$harga,
			$spesifikasi,
			$berat;
			
			

	public function __construct($merk = "merk", $jenis = "jenis", $spesifikasi = "spek", $berat = "berat", $harga = "harga")
	{
		$this->merk = $merk;
		$this->jenis = $jenis;
		$this->harga = $harga;
		$this->spesifikasi = $spesifikasi;
		$this->berat = $berat;
		
	}

	public function label()
	{
		// $this untuk memanggil properti du luar function
		return "$this->merk $this->jenis";
	}
	public function infoproduk()
	{
		$str = "{$this->label()} <br>
				Spek : {$this->spesifikasi} <br>
				Berat : {$this->berat} <br>
				Harga : {$this->harga}";
		return $str;
	}

}


class laptop extends produk
{
	public $kelas;
	public $rgb;
	public $kamera;

	public function __construct($merk = "merk", $jenis = "jenis", $spesifikasi = "spek", $berat = "berat", $kelas = null ,$rgb = null ,$kamera = null, $harga = "harga")
	{
		parent::__construct($merk, $jenis, $spesifikasi, $berat, $harga);
		$this->kelas = $kelas;
		$this->rgb = $rgb;
		$this->kamera = $kamera;
	}

	public function infoproduk()
	{
		$str = "". parent::infoproduk() ."<br>
				Kelas : {$this->kelas} <br>
				RGB Suport : {$this->rgb} <br>
				Kamera : {$this->kamera}";
		return $str;
	}
}

class hp extends produk
{
	public $kamera;

	public function __construct($merk = "merk", $jenis = "jenis", $spesifikasi = "spek", $berat = "berat",$kamera = null, $harga = "harga")
	{
		parent::__construct($merk, $jenis, $spesifikasi, $berat, $harga);
		$this->kamera = $kamera;
	}

	public function infoproduk()
	{
		$str = "". parent::infoproduk() ."<br>
				Kamera : {$this->kamera}";
		return $str;
	}
}

class ssd extends produk
{
	public $kapasitas;

	public function __construct($merk = "merk", $jenis = "jenis", $spesifikasi = "spek", $berat = "berat", $kapasitas = null , $harga = "harga")
	{
		parent::__construct($merk, $jenis, $spesifikasi, $berat, $harga);
		$this->kapasitas = $kapasitas;
	}

	public function infoproduk()
	{
		$str = "". parent::infoproduk() ."<br>
				Kapasitas : {$this->kapasitas}";
		return $str;
	}
}


// urutannya merk jenis harga spek berat kelas
$laptop1 = new laptop("ASUS","GL503GE","Prosesor Intel Core i7 8850h 2.2GHz up to 4GHz","2765gr","Medium Level","YES","720p",17000000);
$hp1 = new hp("XIAOMI","Redmi note 3 pro","Snapdragon 660 hexa core","156gr","16Mp",1500000);
$ssd1 = new ssd("SanDisk","SSD Plus","R/W speed up to 530 MB/s","98gr","120 GB",375000);

/*
 ASUS ROG GL503GE
 spek : prosesor i7
 berat :34534gr
 kelas : medium level
 rgb suport : yes
 kamera : 720
 harga : 17000000

 xiaomi redmi note 3 pro
 spek : snapdragon
 berat : 123gr
 kamera : 16mp
 harga : 1500000

 sandisk ssd plus
 spwk : rw speed up
 berat : 67gr
 kapasitas : 120gb
 harga : 300000

*/

 echo $laptop1->infoproduk();
 echo "<br><br><hr>";
 echo $hp1->infoproduk();
 echo "<br><br><hr>";
 echo $ssd1->infoproduk();




 ?>