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
				<td>Kapasitas</td>
				<td> : </td>
				<td>{$this->kapasitas} <br></td>
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

