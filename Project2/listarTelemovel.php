<?php
include 'connection.php'; 
$sql = "SELECT numTelemovel, modelo, descMarca, serial, nome FROM telemovel INNER JOIN marca ON telemovel.idMarca=marca.idMarca INNER JOIN cliente ON telemovel.nif=cliente.nif";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website criado para a participaçao no worldskill regional">
    <meta name="keywords" content="worldskills, skills, Ana Reis, hmtl, css, php">
    <meta name="author" content="Ana Reis">
    <title>Gestão de Telemoveis</title>
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

    <h2>Telemóveis</h2>
    <a class="insert" href="inserirTelemovel.php">Adicionar Telemovel</a><br/><br/>
    <table cellspacing="0" cellpadding="10">
        <tr>
            <th>Número de Telemóvel</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Serial Number</th>
            <th>NIF</th>
            <th>Ação</th>

        </tr>
        <?php 
        while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['numTelemovel']; ?></td>
            <td><?= $row['modelo']; ?></td>
            <td><?= $row['descMarca']; ?></td>
            <td><?= $row['serial']; ?></td>
            <td><?= $row['nome']; ?></td>
            <td>
                <a href="editarTelemovel.php?numtelemovel=<?= $row['numtelemovel']; ?>">Editar</a>
                <a href="apagarTelemovel.php?numTelemovel=<?= $row['numtelemovel']; ?>" onclick="return confirm('Tem a certeza que deseja apagar?')">Apagar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <footer>
      <small>Copyright © 2024 – WorldSkills Portugal</small>
      <div id="redes">
        <a href="http://www.facebook.com/#"><i class="bi bi-facebook"></i>FaceBook</a>
        <a href="http://www.twitter.com/#"><i class="bi bi-twitter"></i>Twitter</a>
        <a href="http://www.youtube.com/#"><i class="bi bi-youtube"></i>Youtube</a>
      </div>
    </footer>

    <?php $conn->close(); ?>
</body>
</html>