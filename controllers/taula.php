<?php

require_once 'compra.php';

class Taula {
    
    
    
    function dibuixa() {
        $compra = new Compra;
        $total =0;
    // Llista compres
    $compres = $compra->list();
       echo "<table class=\"table\">
       <thead class=\"thead-light\">
         <tr>
           <th scope=\"col\">Nom</th>
           <th scope=\"col\">Preu Unitat</th>
           <th scope=\"col\">Quantitat</th>
           <th scope=\"col\">Total</th>
           <th scope=\"col\">Accions</th>
         </tr>
       </thead>
       <tbody>";
       
       foreach($compres as $fila) {
        echo"<tr>
        <td><b>". $fila['nom'] ."</b></td>
        <td>". $fila['preu'] ."</td>
        <td>". $fila['quantitat'] ."</td>
        <td>". $fila['quantitat']*$fila['preu']. "</td>
        <td><a class=\"btn btn-secondary\" title=\"Modificar Producte\"href=\"modificar.php?id=".$fila['id']."\">
        <i class=\"fas fa-pen-alt\"></i></a>
        <a class=\"btn btn-danger\" title=\"Eliminar Producte\" href=\"request/deleteRequest.php?id=".$fila['id']."\"> 
        <i class=\"fas fa-trash\"></i></a></td>"
        ;

        $total += $fila['quantitat']*$fila['preu'];

       }
       echo"</tr>
       <tr>
       <th coldpspan=\"2\">
       Total
       </td>
       <td>".$total."
       </td>
       </tr>
       </tbody>
       </table>";

    }
    
    
}