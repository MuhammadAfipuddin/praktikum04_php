<?php
require_once "class_persegi_panjang.php";

$pp1 = new PersegiPanjang(20, 15);
$pp2 = new PersegiPanjang(10, 5);

echo "Luas Persegi Panjang I = ".$pp1->getLuas();
echo "<br/> Luas Persegi Panjang II = ".$pp2->getLuas();

echo "<br/><br/> Keliling Persegi Panjang I = ".$pp1->getkeliling();
echo "<br/> Keliling Persegi Panjang II = ".$pp2->getkeliling();

?>