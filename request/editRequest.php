<?php

require_once '../controllers/compra.php';


if (!isset($_GET['id']) || $_GET['id'] == '') {
     header("Location: ../index.php");
}

$id = $_GET['id'];


if (!isset($_POST['nom']) || $_POST['nom'] == ''
   || !isset($_POST['preu']) || $_POST['preu'] == ''
   || !isset($_POST['quantitat']) || $_POST['quantitat'] == '') {
    exit('ERROR BD: Transaction error');
}

$request = [
    "id" => $id,
    "nom" => $_POST['nom'],
    "quantitat" =>  $_POST['quantitat'],
    "preu" =>  $_POST['preu']
];

$compra = new Compra();
$result = $compra->update($request);

if ($result->connect_error) {
    die('Error de conexión ' . $connection->connect_error);
} else {
    header("Location: ../index.php");
}