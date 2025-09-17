<?php
include 'connection.php';

$idUser = $_GET['idUtilizador'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $hash_password = hash($_POST['password'], PASSWORD_DEFAULT);
    $foto = $_POST['foto'];
    $categoria = $_POST['idCategoria'];

    $sql = "UPDATE utilizador SET login='$login', password='$hashpassword', foto='$foto', idCategoria=$categoria";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: listarUser.php"); 
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}

$sql = "SELECT * FROM utilizador WHERE idUtilizador=$idUser";
$result = $conn->query($sql);
$linha = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website criado para a participaçao no worldskill regional">
    <meta name="keywords" content="worldskills, skills, Ana Reis, hmtl, css, php">
    <meta name="author" content="Ana Reis">
    <title>Editar User</title>
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
    <h2>Editar Utilizador</h2>
    <form method="post" action="">
        <label>Login:</label>
        <input type="text" name="login" required><br/><br/>
        <label>Password:</label>
        <input type="password" name="hash_password" required><br/><br/>
        <label>Foto:</label>
        <input type="file" name="foto" required accept="image/png, image/jpg, image/gif"><br><br>
        <label>Categoria:</label>
        <select name="idCategoria">
        <?php
            $sql = "SELECT idCategoria, categoria FROM categoria";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) { ?>
                <option value="<?= $row['idCategoria']; ?>"><?= $row['categoria']; ?></option>
        <?php } ?>
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

<?php $conn->close(); ?>