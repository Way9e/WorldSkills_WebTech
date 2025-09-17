
<?php
include 'connection.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numTele = $_POST['numTelemovel'];
    $modelo = $_POST['modelo'];
    $idMarca = $_POST['idMarca'];
    $serial = $_POST['serial'];
    $nome = $_POST['nif'];

    $sql = "INSERT INTO telemovel VALUES ('$numTele' , '$modelo', '$idMarca', '$serial', '$nome')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: listarTelemovel.php"); 
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
    <title>Insirir Telemovel</title>
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
    <h2>Adicionar Telemovel</h2>
    <form method="post" action="">
        <label>Número de Telemóvel:</label>
        <input type="num" name="idTelemovel" required><br/><br/>
        <label>Modelo:</label>
        <input type="text" name="modelo" required><br/><br/>
        <label>Marca:</label>
        <select name="idCategoria">
        <?php
            $sql = "SELECT idMarca, descMarca FROM marca";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <option value="<?= $row['idMarca']; ?>"><?= $row['descMarca']; ?></option>
        <?php } ?>
        </select><br>
        <label>Serial:</label>
        <input type="text" name="Serial" required><br/><br/>
        <label>Nome:</label>
        <select name="nif">
        <?php
            $sql = "SELECT nif, nome FROM cliente";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <option value="<?= $row['nif']; ?>"><?= $row['nome']; ?></option>
        <?php } ?>
        </select><br><br>
        <input type="submit" value="Adicionar">
    </form>
    <br>
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