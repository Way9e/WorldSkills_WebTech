
<?php
include 'connection.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $duracao = $_POST['duracao'];
    $numDestino = $_POST['numDestino'];
    $numTelemovel = $_POST['numTelemovel'];

    $sql = "INSERT INTO chamada (data, hora, duracao, numDestino, numTelemovel) VALUES ('$data', '$hora','$duracao','$numDestino','$numTelemovel')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: listarChamada.php"); 
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website criado para a participaçao no worldskill regional">
    <meta name="keywords" content="worldskills, skills, Ana Reis, hmtl, css, php">
    <meta name="author" content="Ana Reis">
    <title>Insirir Chamada</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="img/WSPT_70anos_af3.png">
</head>
<body>
    <nav>
        <img src="img/WSPT_70anos_af3.png" alt="WorldSkills Portugal 70 Anos">
        <div class="links">
            <a href="listarUser.php">Utilizadores</a>
            <a href="listarLocalidades.php">Localidades</a>
            <a href="listarCliente.php">Clientes</a>
            <a href="listarChamada.php">Chamadas</a>
            <a href="listarMarca.php">Marcas</a>
            <a href="listarTelemovel.php">Telemoveis</a>
        </div>
    </nav>
    <h2>Adicionar Chamada</h2>
    <form method="post" action="">
        <label>Data:</label>
        <input type="text" name="data" required><br/>
        <label>Hora:</label>
        <input type="text" name="hora" required><br/>
        <label>Duração da chamada:</label>
        <input type="text" name="duracao" required><br/>
        <label>Destinatário:</label>
        <input type="text" name="numDestino" required><br/>
        <label>Número de telemóvel:</label>
        <input type="text" name="numTelemovel" required><br/>
        <input type="submit" value="Adicionar"><br>
    </form>
    <footer>
      <small>Copyright © 2024 – WorldSkills Portugal</small>
      <div id="redes">
        <a href="http://www.facebook.com/#"><i class="bi bi-facebook"></i>FaceBook</a>
        <a href="http://www.twitter.com/#"><i class="bi bi-twitter"></i>Twitter</a>
        <a href="http://www.youtube.com/#"><i class="bi bi-youtube"></i>Youtube</a>
      </div>
    </footer>
</body>
</html>