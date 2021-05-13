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
            $compra = new Compra;
            
            $id = $_GET['id'];
            
            // Show task
            $data = $compra->show($id);  
    ?>
<h1>Modificar Producte</h1>
<div class="row">
<div class="col-5">
            <!-- formulario -->
            <form method="POST" action="request/editRequest.php?id=<?php echo $data['id']; ?>">
                <div class="form-group">
                  <label for="nom">Nom</label>
                  <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $data['nom']; ?>"></input>
                </div>

                <div class="form-group">
                  <label for="preu">Preu</label>
                  <input type="number" class="form-control" id="preu" name="preu" value="<?php echo $data['preu']; ?>" step="0.1"></input>
                </div>

                <div class="form-group">
                  <label for="quantitat">Quantitat</label>
                  <input type="number" class="form-control" id="quantitat" name="quantitat" value="<?php echo $data['quantitat']; ?>"></input>
                </div>

                  <button type="submit" class="btn btn-primary">Modifica</button>
              </form>
        </div>
        </div>  
        <?php include 'includes/footer.php' ?>
    </body>
</html>