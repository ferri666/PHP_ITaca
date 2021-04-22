<?php
echo "<p><h1>Nivell 1</h1></p>";

/////////Exercici 1//////////////////
echo "<p><h2>Exercici 1 ////</h2></p>";

function resta ($num1, $num2){
    $resultat=$num1-$num2;
    return $resultat;
}

$one=200;
$two=50;

echo "<p>".$one."-".$two."=".resta ($one,$two)."</p>";

/////////Exercici 2//////////////////
echo "<p><h2>Exercici 2 ////</h2></p>";

$qualsevol=29;
$parell;

if ($qualsevol%2==0) $parell=true;
else $parell=false;

if ($parell) echo "<p>".$qualsevol." es parell.</p>";
else echo "<p>".$qualsevol." es imparell.</p>";

/////////Exercici 3//////////////////
echo "<p><h2>Exercici 3 ////</h2></p>";

function parell_o_imparell($num) {
    if ($num%2==0) return true;
    else return false;
}

$rand=12;

if (parell_o_imparell($rand)) echo "<p>".$rand." es parell.</p>";
else echo "<p>".$rand." es imparell.</p>";

/////////Exercici 4//////////////////
echo "<p><h2>Exercici 4 ////</h2></p>";

for ($x=1; $x<11; $x++) echo "<p>".$x."</p>";

?>

