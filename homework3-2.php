<?php
echo("number <b>". $_GET["number"]. "</b><br>");
$n = $_GET["number"];
for($i = 0; $i < $n; $i++) {
    $data[$i] = rand(0,10);
    echo("random number");
    echo("$i - $data[$i] <br>");
}
sort($data);
for($i=0; $i<$n; $i++) {
    echo("$i - $data[$i] <br>");
}
?>