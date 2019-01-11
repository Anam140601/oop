<?php 

// toko yang menjual hp, laptop dan aksesoris

class produk{
	public 	$merk = "ASUS",
			$jenis = "ROG Phone",
			$harga = "IDR 25.000.000",
			$spesifikasi = "RAM 8GB",
			$berat = "156 gr",
			$kelas = "Gaming Hight End";

	public function label()
	{
		// $this untuk memanggil properti du luar function
		return "$this->merk $this->jenis";
	}
}
// // nilai properti default
// $hp = new produk();
// var_dump($hp);




// // properti ditimpa
// $laptop = new produk();
// $laptop->merk = "Republic Of Gamers";
// $laptop->harga = "IDR 50.000.000";
// var_dump($laptop);




// // menambahkan properti yang belum ada di produk
// $aksesoris = new produk();
// $aksesoris->merk ="Lenovo";
// $aksesoris->kegunaan = "Untuk Memperkeren SetUp";
// var_dump($aksesoris);




// // menimpa semua properti dan menambahkan
// $laptop = new produk();
// $laptop->merk ="ASUS";
// $laptop->harga = "17000000";
// $laptop->spesifikasi = "Prosesor Intel Core i7 8850h 2.2GHz up to 4GHz";
// $laptop->berat = "2765gr";
// $laptop->kelas = "Medium Level";
// $laptop->RGB_Suport = "Yes";
// var_dump($laptop);




// // menimpa semua properti dan menambahkan
// $laptop = new produk();
// $laptop->merk ="ASUS";
// $laptop->jenis = "GL503GE";
// $laptop->harga = "17000000";
// $laptop->spesifikasi = "Prosesor Intel Core i7 8850h 2.2GHz up to 4GHz";
// $laptop->berat = "2765gr";
// $laptop->kelas = "Medium Level";
// $laptop->RGB_Suport = "Yes";

// // // ditulis manual
// // echo "Laptop : $laptop->merk $laptop->jenis";

// // otomatis dari method
// echo "Laptop : ";
// echo $laptop->label();




// menampilkan dua produk berbeda
$laptop = new produk();
$laptop->merk ="ASUS";
$laptop->jenis = "GL503GE";
$laptop->harga = "17000000";
$laptop->spesifikasi = "Prosesor Intel Core i7 8850h 2.2GHz up to 4GHz";
$laptop->berat = "2765gr";
$laptop->kelas = "Medium Level";
$laptop->RGB_Suport = "Yes";

$hp = new produk();

echo "Laptop : ".$laptop->label();
echo "<br>";
echo "Smartphone : ".$hp->label();


 ?>