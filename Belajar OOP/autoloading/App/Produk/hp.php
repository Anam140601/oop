<?php 
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

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<table>
			<tr>
				<td>Spek</td>
				<td> : </td>
				<td>{$this->spesifikasi} <br></td>
			</tr>
			<tr>
				<td>Berat</td>
				<td> : </td>
				<td>{$this->berat} <br></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td> : </td>
				<td>{$this->harga} <br></td>
			</tr>

							";
		return $str;
	}

	public function getinfoproduk()
	{
		$str = "". $this->getInfo() ."
			<tr>
				<td>Kamera</td>
				<td> : </td>
				<td>{$this->kamera} <br></td>
			</tr>



		</table>
	</div>
</body>
</html>		

				";
		return $str;
	}
}
 ?>