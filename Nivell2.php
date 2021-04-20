<?php
echo"<h1>Nivell 2</h1>";
/////////Exercici 1////////////////////

//Creem els dos arrays
$array1=array(6,7,8,9,3);
$array2=array(5,4,2);


/////////Exercici 2//////////////////////

///Afegim numero amb funcióo
array_push($array2, 1);

///També es pot afegir manualment així: $array2[3]=1;

/////////Exercici 3///////////////////////////

///Combinem els dos arrays
$combinado=array_merge($array1,$array2);



echo"<p><b>Resultat de sumar les dos arrays</b></p>";
///Loop per Imprimir
for ($x=0; $x<count($combinado)-1; $x++) {
    echo $combinado[$x]." - ";
}
//L'últim número el posem diferent, ja que no necesita guió de seperació
echo $combinado[count($combinado)-1];

//Imprimir la longitud del array
echo "<p><b>Longitud de la combinació:</b> ".count($combinado)."</p>";

?>