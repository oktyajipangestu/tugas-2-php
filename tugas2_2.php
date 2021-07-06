<?php

$jual = 80000;
$beli = 50000;

echo "Jual = $jual <br>";
echo "Beli = $beli <br>";
echo "Keuntungan =? <br>";
echo "Jawaban : <br>";
echo "Keuntungan  = jual - beli = " . ($jual-$beli) . "<br>";
echo  "Persen Keuntungan = " . (($jual - $beli)/$beli) * 100 . " Persen";

?>