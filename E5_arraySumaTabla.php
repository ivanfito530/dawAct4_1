<?php

$num=array(100,200,300,400,500);
$total=0;
$contador=0;
echo "Visualiza array como tabla <br>";
echo"<table border='1'>";
foreach($num as $n){
    echo "<tr>";
    echo "<td>".$contador."</td>";
    echo "<td>".$n."</td>";
    echo"</tr>";
$total+=$n;
$contador++;
}

echo"</table>";
echo"<tr>";
echo "<td> SUMA </td>";
echo "<td>" .$total. "</td>";
echo "</tr>";
?>