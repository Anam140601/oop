<?php 

// toko yang menjual hp, laptop dan aksesoris

class produk{ 
	private $harga,
			$merk,
			$jenis,
			$spesifikasi,
			$berat,
			$diskon = 0;
			
			

	public function __construct($merk = "merk", $jenis = "jenis", $spesifikasi = "spek", $berat = "berat", $harga = "harga")
	{
		$this->merk = $merk;
		$this->jenis = $jenis;
		$this->harga = $harga;
		$this->spesifikasi = $spesifikasi;
		$this->berat = $berat;
		
	}

	public function setspek($spesifikasi)
	{
		return $this->spesifikasi = $spesifikasi;
	}

	public function setmerk($merk)
	{
		return $this->merk = $merk;
	}

	public function setjenis($jenis)
	{
		return $this->jenis = $jenis;
	}

	public function setberat($berat)
	{
		return $this->berat = $berat;
	}

	public function setharga($harga)
	{
		return $this->harga = $harga;
	}

	public function setDiskon($diskon)
	{
		$this->diskon = $diskon;	
	}


	public function getspek()
	{
		return $this->spesifikasi;
	}

	public function getmerk()
	{
		return $this->merk;
	}

	public function getjenis()
	{
		return $this->jenis;
	}

	public function getberat()
	{
		return $this->berat;
	}

	public function getharga()
	{
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	public function getdiskon()
	{
		return $this->diskon;
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

$hp1->setmerk("mlkk");
echo $hp1->getmerk();





 ?>