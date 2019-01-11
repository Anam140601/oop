<?php 

// toko yang menjual hp, laptop dan aksesoris

class produk{
	public  $merk,
			$jenis,
			$spesifikasi,
			$berat;
	protected $diskon = 0;
	private $harga;
			
			

	public function __construct($merk = "merk", $jenis = "jenis", $spesifikasi = "spek", $berat = "berat", $harga = "harga")
	{
		$this->merk = $merk;
		$this->jenis = $jenis;
		$this->harga = $harga;
		$this->spesifikasi = $spesifikasi;
		$this->berat = $berat;
		
	}



	public function getharga()
	{
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	public function getproduk()
	{
		// $this untuk memanggil properti du luar function
		return "$this->merk $this->jenis";
	}
	public function getinfoproduk()
	{
		$str = "{$this->getproduk()} <br>
				Spek : {$this->spesifikasi} <br>
				Berat : {$this->berat} <br>
				Harga : {$this->harga}";
		return $str;
	}

}


class laptop extends produk
{
	public  $kelas,
			$rgb,
			$kamera;

	public function __construct($merk = "merk", $jenis = "jenis", $spesifikasi = "spek", $berat = "berat", $kelas = null ,$rgb = null ,$kamera = null, $harga = "harga")
	{
		parent::__construct($merk, $jenis, $spesifikasi, $berat, $harga);
		$this->kelas = $kelas;
		$this->rgb = $rgb;
		$this->kamera = $kamera;
	}

	public function setDiskon($diskon)
	{
		$this->diskon = $diskon;	
	}

	public function getinfoproduk()
	{
		$str = "". parent::getinfoproduk() ."<br>
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

	public function setDiskon($diskon)
	{
		$this->diskon = $diskon;	
	}

	public function getinfoproduk()
	{
		$str = "". parent::getinfoproduk() ."<br>
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

	public function setDiskon($diskon)
	{
		$this->diskon = $diskon;	
	}

	public function getinfoproduk()
	{
		$str = "". parent::getinfoproduk() ."<br>
				Kapasitas : {$this->kapasitas}";
		return $str;
	}
}


// urutannya merk jenis harga spek berat kelas
$laptop1 = new laptop("ASUS","GL503GE","Prosesor Intel Core i7 8850h 2.2GHz up to 4GHz","2765gr","Medium Level","YES","720p",17000000);
$hp1 = new hp("XIAOMI","Redmi note 3 pro","Snapdragon 660 hexa core","156gr","16Mp",1500000);
$ssd1 = new ssd("SanDisk","SSD Plus","R/W speed up to 530 MB/s","98gr","120 GB",375000);


 echo $laptop1->getinfoproduk();
 echo "<br><br><hr>";
 echo $hp1->getinfoproduk();
 echo "<br><br><hr>";
 echo $ssd1->getinfoproduk();

 echo "<hr><hr>";

$laptop1->setDiskon(50);
 echo $laptop1->getharga();





 ?>