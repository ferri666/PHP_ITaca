<?php
echo"<h1>Nivell 3</h1>";

//////***Exercici 1***///////////////
echo"<p><h2>Exercici 1</h2></p>";

echo "<p><b><u>Llistat de Jocs Olímpics</u></b></p><p>";

//Els Jocs Olímpics son cada cuatre anys, per lo que hem de mirar que sigui divisible per 4
for ($any=1960;$any<=2016;$any++) if($any%4==0) echo$any." ";
echo "</p>";

//////***Exercici 2***//////////////
echo"<p><h2>Exercici 2</h2></p>";
$total_xoc=0;
$total_xic=0;
$total_car=0;

//Aquesta funció, donada una quantitat, ens afegirá al carrito virtual el total
function afegir_xocolata($quantitat){
    
    //Cal declarar la variable com a global perque poguem operar amb ella fora de la funció
    global $total_xoc;
    
    echo "<p>Afegim ".$quantitat." xocolates.</p>";
     //En cas de que es volgui fer amb preus cambiants, es podría afegir una variable amb el preu de cada producte
     //i multiplicarla per la quantitat.
     $total_xoc+=$quantitat;
  }

function afegir_xiclet($quantitat){

    global $total_xic;
    echo "<p>Afegim ".$quantitat." xiclets.</p>";
    $total_xic+=$quantitat*0.5;
    }

function afegir_carmel($quantitat){

        global $total_car;
        echo "<p>Afegim ".$quantitat." carmels.</p>";
        $total_car+=$quantitat*1.5;
            
    }


function total_compra() {
    global $total_xoc;
    global $total_xic;
    global $total_car;
    $total_compra=$total_xic+$total_xoc+$total_car;
    return $total_compra;
}

//Missatge d'entrada (opcional)
echo "<p>Benvingut a SweetWorld!</p>";

//Aquí posem el que comprem
afegir_xocolata(4);
afegir_xiclet(2);
afegir_carmel(5);

//Missatge amb el total
echo "<p>El total de la seva compra es ".total_compra()."€</p>";

///////***Exercici 3***///////////////
echo"<p><h2>Exercici 3</h2></p>";

//Funció que, donat un número (N), ens retorna una array amb tots els prims fins a N
function Erastotenes($num_max){ 

    //Aquesta array la farem servir per descartar els números si son prims o no
    $posibles_prims=array();

    //Aquesta será la array que ens tornará amb tots els números prims que trobem
    $prims_segur=array();

    //Primer creem una array amb tots els números del 2 fins a N que hem posat com a índex i un int com a valor
    for($x=2;$x<=$num_max;$x++) {
    
        //El valor ens dirá si el número está sense identificar (0), es un número prim (1) o está descartat com a prim (2)
        //Per tant, tots comencen amb valor 0 (sense identificar)
        $posibles_prims[$x]=0;
    }

    foreach ($posibles_prims as $key => $value) {
        global $idx;

        if ($posibles_prims[$key]==0) {
            //
            if ($key*$key<$num_max){
                //
                $posibles_prims[$key]=1;
                array_push($prims_segur, $key);
                for ($x=$key+1;$x<=$num_max;$x++) {if ($x%$key==0) $posibles_prims[$x]=2;}
            
            } else {
                $idx=$key;
                
                break;
            }
        
        }
    }   
        for ($n=$idx;$n<=$num_max;$n++) if ($posibles_prims[$n]==0) {
            $posibles_prims[$n]=1;
            array_push($prims_segur, $n);
        }
    


    return $prims_segur;
}


//Aquí cridem la funció amb el número N que volem
$resultat = Erastotenes(105);

//Loop per mostrar el resultat
foreach ($resultat as $value) {
        echo $value." ";
}



?>