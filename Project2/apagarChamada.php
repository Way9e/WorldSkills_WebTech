<?php
include 'connection.php';

$idChamada = $_GET['idChamada'];

$sql = "DELETE FROM chamada WHERE idChamada=$idChamada";

if ($conn->query($sql) === TRUE) {
    header("Location: listarChamada.php"); 
} else {
    echo "Erro ao apagar o registo " . $conn->error;
}
$conn->close();
?>