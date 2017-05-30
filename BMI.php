<?php

$gewicht = $_GET['gewicht'];
$lengte = $_GET['lengte_cm'] / 100;
// BMIcalc($gewicht,$lengte);

$BMI = round($gewicht / ($lengte * $lengte),1);


if($BMI < 18.5){
echo '<br>Je hebt ondergewicht.';
}elseif($BMI < 25){
echo '<br>Je hebt een normaal gewicht.';
}elseif($BMI < 30){
echo '<br>Je hebt matig overgewicht.';
}elseif($BMI < 40){
echo '<br>Je hebt obesitas';
}else{
echo '<br>Je hebt morbide obesitas.';
}

echo "<br>Uw BMI: " . $BMI;


?>
