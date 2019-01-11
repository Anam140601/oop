<?php 
class laptop extends produk implements infoProduk
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

    public function getInfo()
	{
		$str = "{$this->getlabel()} <br>
				Spek : {$this->spesifikasi} <br>
				Berat : {$this->berat} <br>
				Harga : {$this->harga}";
		return $str;
	}	

	public function getinfoproduk()
	{
		$str = "". $this->getInfo() ."<br>
				Kelas : {$this->kelas} <br>
				RGB Suport : {$this->rgb} <br>
				Kamera : {$this->kamera}";
		return $str;
	}
}
 ?>
