<?php
include 'connection.php';

$idLoc = $_GET['idLocalidade'];

$sql = "DELETE FROM localidade WHERE idLocalidade=$idLoc";

if ($conn->query($sql) === TRUE) {
    header("Location: listarLocalidades.php"); 
} else {
    echo "Erro ao apagar o registo " . $conn->error;
}
$conn->close();
?>