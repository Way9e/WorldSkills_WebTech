<?php
include 'connection.php';

$idUser = $_GET['idUtilizador'];

$sql = "DELETE FROM utilizador WHERE idUtilizador=$idUser";

if ($conn->query($sql) === TRUE) {
    header("Location: listarUser.php"); 
} else {
    echo "Erro ao apagar o registo " . $conn->error;
}
$conn->close();
?>