<?php
function medel($a, $b) {
    return ($a + $b) / 2;
}
echo medel(4, 8);
echo "<br>";

$medelAnonym = function($a, $b) {
    return ($a + $b) / 2;
};
echo $medelAnonym(4, 8);
echo "<br>";

$medelArrow = fn($a, $b) => ($a + $b) / 2;
echo $medelArrow(4, 8);
echo "<br>";

$resultat = medel(10, 20);
echo "Medelvärdet är " . $resultat;