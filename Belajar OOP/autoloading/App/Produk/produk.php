<?php 
abstract class produk{ 
	protected $harga,
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

	public function getlabel()
	{
		// $this untuk memanggil properti du luar function
		return "$this->merk $this->jenis";
	}


	abstract public function getInfo();

    



}
 ?>