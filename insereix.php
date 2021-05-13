<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include 'includes/header.php' ?>
    <body>
<h1>Nou Producte</h1>
<div class="Row">
<div class="col-5">
            <!-- formulario -->
            <form method="POST" action="request/createRequest.php">
            <div class="respuestas">
                <div class="form-group">
                  <label for="nom">Nom</label>
                  <input type="text" class="form-control" id="nom" name="nom" value="Insereix Nom"></input>
                </div>

                <div class="form-group">
                  <label for="preu">Preu</label>
                  <input type="number" class="form-control" id="preu" name="preu" value="0.5" step="0.1"></input>
                </div>

                <div class="form-group">
                  <label for="quantitat">Quantitat</label>
                  <input type="number" class="form-control" id="quantitat" name="quantitat" value="1"></input>
                </div>

                  <button type="submit" class="btn btn-primary">Insereix</button>
              </form>
            </div>
        </div>
       </div>
               
        <?php include 'includes/footer.php' ?>
    </body>
</html>