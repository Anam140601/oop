<?php 

// toko yang menjual hp, laptop dan aksesoris

class produk{
	public 	$merk,
			$jenis,
			$harga,
			$spesifikasi,
			$berat,
			$kelas,
			$rgb,
			$kamera,
			$kapasitas,
			$tipe;
			

	public function __construct($merk = "merk", $jenis = "jenis", $spesifikasi = "spek", $berat = "berat", $kelas = null ,$rgb = null ,$kamera = null, $kapasitas = null , $harga = "harga",$tipe = null)
	{
		$this->merk = $merk;
		$this->jenis = $jenis;
		$this->harga = $harga;
		$this->spesifikasi = $spesifikasi;
		$this->berat = $berat;
		$this->kelas = $kelas;	
		$this->rgb = $rgb;
		$this->kamera = $kamera;
		$this->kapasitas = $kapasitas;
		$this->tipe = $tipe;
		
	}

	public function label()
	{
		// $this untuk memanggil properti du luar function
		return "$this->merk $this->jenis";
	}
	public function labelLengkap()
	{
		$str = "{$this->label()} <br>
				Spek : {$this->spesifikasi} <br>
				Berat : {$this->berat} <br>";
		if ($this->tipe == "laptop")
		{
			$str .= "Kelas : {$this->kelas} <br>
					RGB Suport : {$this->rgb} <br>
					Kamera : {$this->kamera} <br>";

		}else if ($this->tipe == "hp")
			{
				$str .= "Kamera : {$this->kamera} <br>";

			}else if ($this->tipe == "ssd")
				{
					$str .= "Kapasitas : {$this->kapasitas} <br>";
				}

		$str .= "Harga : {$this->harga}";
		return $str;
	}

}




// urutannya merk jenis harga spek berat kelas
$laptop1 = new produk("ASUS","GL503GE","Prosesor Intel Core i7 8850h 2.2GHz up to 4GHz","2765gr","Medium Level","YES","720p","null",17000000,"laptop");
$hp1 = new produk("XIAOMI","Redmi note 3 pro","Snapdragon 660 hexa core","156gr",null,null, "16Mp", null,1500000,"hp");
$ssd1 = new produk("SanDisk","SSD Plus","R/W speed up to 530 MB/s","98gr",null,null,null,"120 GB",375000,"ssd");

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

 echo $laptop1->labelLengkap();
 echo "<br><br><hr>";
 echo $hp1->labelLengkap();
 echo "<br><br><hr>";
 echo $ssd1->labelLengkap();




 ?>