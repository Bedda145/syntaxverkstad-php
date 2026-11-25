<?php
$elev = ["name" => "Stina", "age" => 18];

echo $elev;
echo "<br>";

echo "<pre>";
print_r($elev);
var_dump($elev);
echo "</pre>";

$spel = [
    ["titel" => "Minecraft", "pris" => 299],
    ["titel" => "Fortnite", "pris" => 0],
    ["titel" => "Arc Raiders", "pris" => 399]
];

echo "<table border='1'>";
echo "<tr><th>Spel</th><th>Pris</th></tr>";
foreach ($spel as $s) {
    echo "<tr>";
    echo "<td>" . $s["titel"] . "</td>";
    echo "<td>" . $s["pris"] . " kr</td>";
    echo "</tr>";
}
echo "</table>";