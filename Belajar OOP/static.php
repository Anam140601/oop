
<!-- 
<?php 
class Contoh
{
	public $angka = 1;

	public  function kuy()
	{
		return "hay kuyyy!!! " . $this->angka++ . " kali! <br>";
	}
}
$a = new Contoh;
echo $a->kuy();
echo $a->kuy();
echo $a->kuy();

echo "<hr>";

$b = new Contoh;
echo $b->kuy();
echo $b->kuy();
echo $b->kuy();
 ?> -->


  <?php 

class ContohStatic
{
	public static $angka = 1;

	public static function kuy()
	{
		return "hay kuyyy!!! " . self::$angka++ . " kali!";
	}
}



echo ContohStatic::kuy();
echo "<br>";
echo ContohStatic::kuy();
echo "<br>";
echo ContohStatic::kuy();
echo "<hr>";
echo ContohStatic::kuy();
echo "<br>";
echo ContohStatic::kuy();
echo "<br>";
echo ContohStatic::kuy();

?>
