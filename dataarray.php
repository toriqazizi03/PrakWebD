<?php
$data2 = [
    ["Arwen",3,6323000,0,0],
    ["Vilya",1,3250000,0,0],
    ["Vinsi",2,2750000,0,0],
    ["Aris",5,4500000,0,0]
];
echo "<table border=1>
<thead>
<tr>
<th>nama sales</th>
<th>masa kerja</th>
<th>nilai penjualan</th>
<th>persentase komisi</th>
<th>jumlah komisi</th>

</tr>
</thead>
<tbody>";
for($i=0; $i<=3; $i++){
    echo "<tr>";
    for ($s=0; $s<=2; $s++) {
        echo "<td>".$data2 [$i][$s]."</td>";
    }
        if ($data2[$i][1]<=3) {
            if ($data2[$i][2]<1000000) {
                $persentase = 1.5;
               echo "<td>".$data2[$i][3]=$persentase."</td>";
                $komisi= $persentase*$data2[$i][2]/100;
                echo "<td>".$data2[$i][4]=$komisi."</td>";
            }elseif ($data2[$i][2]<2000000) {
                $persentase = 2;
                echo "<td>".$data2[$i][3]=$persentase."</td>";
                $komisi= $persentase*$data2[$i][2]/100;
                echo "<td>".$data2[$i][4]=$komisi."</td>";
            }elseif ($data2[$i][2]<3000000) {
                $persentase = 2.5;
                echo "<td>".$data2[$i][3]=$persentase."</td>";
                $komisi= $persentase*$data2[$i][2]/100;
                echo "<td>".$data2[$i][4]=$komisi."</td>";
            }elseif ($data2[$i][2]<4000000) {
                $persentase = 3;
                echo "<td>". $data2[$i][3]=$persentase."</td>";
                $komisi= $persentase*$data2[$i][2]/100;
                echo "<td>".$data2[$i][4]=$komisi."</td>";
            }elseif ($data2[$i][2]>=4000000) {
                $persentase = 3.5;
                echo "<td>". $data2[$i][3]=$persentase."</td>";
                $komisi= $persentase*$data2[$i][2]/100;
                echo "<td>". $data2[$i][4]=$komisi."</td>";
            }
        }elseif ($data2[$i][1]>3) {
            if ($data2[$i][2]<1000000) {
                $persentase = 2;
                echo "<td>".$data2[$i][3]=$persentase."</td>";
                $komisi= $persentase*$data2[$i][2]/100;
                echo "<td>".$data2[$i][4]=$komisi."</td>";
            }elseif ($data2[$i][2]<2000000) {
                $persentase = 2.5;
                echo "<td>".$data2[$i][3]=$persentase."</td>";
                $komisi= $persentase*$data2[$i][2]/100;
                echo "<td>".$data2[$i][4]=$komisi."</td>";
            }elseif ($data2[$i][2]<3000000) {
                $persentase = 3;
                echo "<td>". $data2[$i][3]=$persentase."</td>";
                $komisi= $persentase*$data2[$i][2]/100;
                echo "<td>".$data2[$i][4]=$komisi."</td>";
            }elseif ($data2[$i][2]<4000000) {
                $persentase = 3.5;
                echo "<td>". $data2[$i][3]=$persentase."</td>";
                $komisi= $persentase*$data2[$i][2]/100;
                echo "<td>". $data2[$i][4]=$komisi."</td>";
            }elseif ($data2[$i][2]>=4000000) {
                $persentase = 4;
                echo "<td>".$data2[$i][3]=$persentase."</td>";
                $komisi= $persentase*$data2[$i][2]/100;
                echo "<td>".$data2[$i][4]=$komisi."</td>";
            }
        }
    echo "</tr>";
}
echo
"</tbody>
</table>";
