<?php 
class ssd extends produk implements infoProduk
{
	public $kapasitas;

	public function __construct($merk = "merk", $jenis = "jenis", $spesifikasi = "spek", $berat = "berat", $kapasitas = null , $harga = "harga")
	{
		parent::__construct($merk, $jenis, $spesifikasi, $berat, $harga);
		$this->kapasitas = $kapasitas;
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
				Kapasitas : {$this->kapasitas}";
		return $str;
	}
}
 ?>