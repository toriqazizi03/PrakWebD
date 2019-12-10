<?php 
$makanan = [
["tahu","tempe","gorengan"],
["sosis","beberok","permen"],
["ayam","bakwan","tahu isi"]
];

for ($i=0; $i < count($makanan) ; $i++) { 
	for ($a=0; $a < count($makanan) ; $a++) { 
	echo $makanan[$i][$a], " | ";
}
echo "<hr>";
}
 ?>