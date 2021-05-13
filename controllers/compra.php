<?php

require_once 'db.php';

class Compra {
    function list() {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "SELECT * FROM compra";
        $result = $mysql->query($sql);
        $compra = $result->fetch_all(MYSQLI_ASSOC);
        
        // Cerrar conexión
        $connection->close($mysql);
        
        return $compra;        
    }
    
    function create($request) {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "INSERT INTO compra(nom,quantitat,preu) values('{$request['nom']}', '{$request['quantitat']}', '{$request['preu']}')";
        $result = $mysql->query($sql);
        
        $connection->close($mysql);
        
        return $result;
    }

    function numero_filas() {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "SELECT * FROM compra";
        $result = $mysql->query($sql);
        
        $total = $result -> num_rows;

        $connection->close($mysql);
        return $total;
        
    }
    
    function inicilizar() {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        if ($this->numero_filas()==0) {
        // echo "Está vacía";
        $sql = "INSERT INTO compra(nom,quantitat, preu) values('Patata',2,5),('Alcaxofa',1,3),('Aigua', 3, 1)";
        $result = $mysql->query($sql);
        $connection->close($mysql);
       // return $result;
        }
        
    }
    function show($id) {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "SELECT * FROM compra WHERE id = $id";
        $result = $mysql->query($sql);
     
        $compra = $result->fetch_assoc();
        
        $connection->close($mysql);
        
        return $compra;        
    }
    
    function update($request) {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "UPDATE compra SET nom = '{$request['nom']}', quantitat='{$request['quantitat']}', preu='{$request['preu']}' WHERE id = '{$request['id']}'";
        $result = $mysql->query($sql);
             
        $connection->close($mysql);
        
        return $result;          
    }
    
    function delete($id) {
        $connection = new Connection();
        
        //Crear la conexión
        $mysql = $connection->create();
        
        $sql = "DELETE FROM compra WHERE id = $id";
        $result = $mysql->query($sql);
             
        $connection->close($mysql);
        
        return $result;     
    }
}