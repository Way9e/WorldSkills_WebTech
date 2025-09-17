<?php
include 'connection.php';

$idMarca = $_GET['idMarca'];

$sql = "DELETE FROM marca WHERE idMarca=$idMarca";

if ($conn->query($sql) === TRUE) {
    header("Location: listarMarca.php"); 
} else {
    echo "Erro ao apagar o registo " . $conn->error;
}
$conn->close();
?>