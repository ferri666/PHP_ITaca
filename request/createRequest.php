<?php

require_once '../controllers/compra.php';

if (!isset($_POST['nom']) || $_POST['nom'] == ''
   || !isset($_POST['preu']) || $_POST['preu'] == '' 
   ||  !isset($_POST['quantitat']) || $_POST['quantitat'] == '') {
    exit('ERROR BD: Transaction error');
}

$request = [
    "nom" => $_POST['nom'],
    "preu" =>  $_POST['preu'],
    "quantitat" =>  $_POST['quantitat']
];

$compra = new Compra();
$result = $compra->create($request);

if ($result->connect_error) {
    die('Error de conexión ' . $connection->connect_error);
} else {
    header("Location: ../index.php");
}