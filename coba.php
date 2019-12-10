<?php
$data = [
    [0,1.5,2],
    [1000000,2.5,3],
    [2000000,3.5,4],
    [3000000,3.5,4]
];
echo "<table border=1>
<thead>
<tr>
<th>nilai penjualan</th>
<th>masa kerja hingga 3 tahun</th>
<th>masa kerja diatas 3 tahun</th>
</tr>
</thead>
<tbody>";
for($i=0; $i<=3; $i++){
    echo "<tr>";
    for($a=0; $a<=2; $a++){
        echo "<td>".$data [$i][$a]."</td>";
    }
    echo "</tr>";
}
echo
"</tbody>
</table>";

echo"<br>";