<?php
echo "<p><h1>Nivell 1</h1></p>";

/////////Exercici 1//////////////////
echo "<p><h2>Exercici 1 ////</h2></p>";

//definim integrer
$var1=15;
//definim double
$var2=10.66;
//definim string
$var3="Patata";
//definim boolean
$var4=true;

//Imprimim les variables
echo "<p><b>Variable integrer:</b> ".$var1."</p>";
echo "<p><b>Variable double:</b> ".$var2."</p>";
echo "<p><b>Variable string:</b> ".$var3."</p>";
echo "<p><b>Variable boolean:</b> ".$var4."</p>";

/////////Exercici 2//////////////////
echo "<p><h2>Exercici 2 ////</h2></p>";

//definim segon string
$var5="Calenta";


//Conquetenar els dos strings
echo "<p><b>Paraules:</b> ".$var3.", ".$var5."</p>";
//Calcular les longituds dels strings
echo "<p><b>Longitud:</b> ".strlen($var3).", ".strlen($var5)."</p>";
//Inversió dels strings
echo "<p><b>Inversió:</b> ".strrev($var3).", ".strrev($var5)."</p>";


/////////Exercici 3//////////////////
echo "<p><h2>Exercici 3 ////</h2></p>";

//definim una constant
define ("meu_nom", "Ferran Fons");


///Imprimim constant
echo "<p><b>El meu nom es</b> ".meu_nom."</p>";
?>

