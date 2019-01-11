<?php 
// require_once 'produk/infoProduk.php';
// require_once 'produk/produk.php';
// require_once 'produk/laptop.php';
// require_once 'produk/hp.php';
// require_once 'produk/ssd.php';
// require_once 'produk/CetakInfoProduk.php';

spl_autoload_register(function($class)
{
	require_once __DIR__.'/produk/'.$class.'.php';
});
