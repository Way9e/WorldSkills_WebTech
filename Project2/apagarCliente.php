<?php
include 'connection.php';

$idCliente = $_GET['nif'];

$sql = "DELETE FROM cliente WHERE nif=$idClinte";

if ($conn->query($sql) === TRUE) {
    header("Location: listarCliente.php"); 
} else {
    echo "Erro ao apagar o registo " . $conn->error;
}
$conn->close();
?>