<?php namespace App\Produk;
class hp extends produk implements infoProduk
{
	public $kamera;

	public function __construct($merk = "merk", $jenis = "jenis", $spesifikasi = "spek", $berat = "berat",$kamera = null, $harga = "harga")
	{
		parent::__construct($merk, $jenis, $spesifikasi, $berat, $harga);
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
				Kamera : {$this->kamera}";
		return $str;
	}
}
 ?>