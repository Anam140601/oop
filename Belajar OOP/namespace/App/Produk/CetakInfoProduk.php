<?php namespace App\Produk;
class CetakInfoProduk
{
	public $daftarProduk = array();

	public function tambahProduk(produk $produk)
	{
			$this->daftarProduk[] = $produk;
	}

	public function cetak()
	{
		$str = "Daftar Produk : <br><hr><hr>";

		foreach ($this->daftarProduk as $p)
		{
			$str .= "{$p->getinfoproduk()}<hr>";
		}

		return $str;
	}
}
 ?>