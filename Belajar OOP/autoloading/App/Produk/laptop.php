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

 

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Produk</title>
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
				<td>Kelas</td>
				<td> : </td>
				<td>{$this->kelas} <br></td>
			</tr>
			<tr>
				<td>RGB Suport</td>
				<td> : </td>
				<td>{$this->rgb} <br></td>
			</tr>
			<tr>
				<td>Kamera </td>
				<td> : </td>
				<td>{$this->kamera}</td>
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
