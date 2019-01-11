<?php 

require_once 'App/init.php';

$laptop1 = new laptop("ASUS","GL503GE","Prosesor Intel Core i7 8850h 2.2GHz up to 4GHz","2765gr","Medium Level","YES","720p",17000000);
$hp1 = new hp("XIAOMI","Redmi note 3 pro","Snapdragon 660 hexa core","156gr","16Mp",1500000);
$ssd1 = new ssd("SanDisk","SSD Plus","R/W speed up to 530 MB/s","98gr","120 GB",375000);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($laptop1);
$cetakProduk->tambahProduk($hp1);
$cetakProduk->tambahProduk($ssd1);
 ?>

 <html>
 	<head>
 		<title></title>
 	</head>
 	<body>
 		<div>
 			<table border="1" width="100%">
 				<td><?php echo $cetakProduk->cetak(); ; ?></td>
 			</table>
 		</div>
 		
 		</div>
 	</body>
 </html>