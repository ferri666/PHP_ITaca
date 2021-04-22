<?php
echo"<h1>Nivell 2</h1>";
/////////Exercici 1////////////////////
echo"<p><h2>Exercici 1</h2></p>";

//Funció per comptar fins a 10 de dos en dos
function comptar_amb_trampa1() {
    for ($x=10; $x>=0; $x-=2) echo "<p>".$x."!</p>";
}

//Missatge d'entrada
echo"<p>Amague-vos tots, que començo a comptar!</p>";
//La compta
comptar_amb_trampa1();
//Missatge de fi de compte
echo"<p>Comencem el joc de l'amagatall!</p>";


/////////Exercici 2 i 3////////////////////
echo"<p><h2>Exercici 2 i 3</h2></p>";

//Funcio per comptar des de qualsevol número (per defecte 10) de dos en dos
function comptar_amb_trampa2($num=10) {
    while ($num>0) {
        echo "<p>".$num."...</p>";
        $num-=2;
    }
    echo "<p>0!</p>";
}

echo"<p>Amague-vos tots, que començo a comptar!</p>";
comptar_amb_trampa2(13);
echo"<p>Comencem el joc de l'amagatall!</p>";

///////////EXTRA
echo"<p><h2>Extra</h2></p>";

//Funcio per comptar des de qualsevol número, restant qualsevol quantitat
function comptar_amb_trampa3($num=10, $desv=2) {
    //Per evitar un bucle infinit en cas que la resta sigui 0 o menor
    if ($desv<=0) echo "Error: No has possat un numero per restar";

    else {
        while ($num>0) {
            echo "<p>".$num."...</p>";
          $num-=$desv;
         }
    echo "<p>0!</p>";
    }
}

comptar_amb_trampa3(31,4);
?>