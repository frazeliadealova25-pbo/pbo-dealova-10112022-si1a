<?php

$data = [
    ["nama"=>"ani","nilai"=>80],
    ["nama"=>"sinta","nilai"=>75],
    ["nama"=>"rina","nilai"=>90]
];

echo "<table border='1'>";
echo "<tr><th>nama</th><th>nilai</th></tr>";

foreach($data as $d){
    echo "<tr>";
    echo "<td>".$d["nama"]."</td>";
    echo "<td>".$d["nilai"]."</td>";
    echo "</tr>";
}

echo "</table>";

?>