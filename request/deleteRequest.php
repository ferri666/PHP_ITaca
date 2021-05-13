<?php

require_once '../controllers/compra.php';


if (!isset($_GET['id']) || $_GET['id'] == '') {
     header("Location: ../index.php");
}

$id = $_GET['id'];

$compra = new Compra();
$result = $compra->delete($id);

if ($result->connect_error) {
    die('Error de conexión ' . $connection->connect_error);
} else {
    header("Location: ../index.php");
}