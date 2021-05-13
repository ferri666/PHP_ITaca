<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include 'includes/header.php' ?>
    <body>
        <?php
            require_once 'controllers/compra.php';
            require_once 'controllers/taula.php';
            $compra = new Compra;

            $taula = new Taula;

        ?>
        <h1>La Compra a Casa  <i class="fas fa-shopping-basket"></i></h1>
        <div class="navbar col-6"><a class="btn btn-primary" href="insereix.php"><i class="fas fa-plus-square"></i> Afegir nou producte</a>
        <button type="button" class="btn btn-success" title="No Hace Nada, es para que la web quede más chula"><i class="fas fa-dollar-sign"></i> Finalitzar compra</button>
        <button type="button" class="btn btn-info" title="No Hace Nada, es para que la web quede más chula"><i class="fas fa-phone-square"></i> Contactar ajuda</button>
       </div>
       <div class="col-8">
        <?php
            $compra -> inicilizar();
            $taula -> dibuixa();
        ?>
        </div>
    
        <?php include 'includes/footer.php' ?>
    </body>
</html>
