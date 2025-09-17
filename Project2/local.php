<?php
include 'connection.php'; 
$sql = "SELECT idLoc, descLoc FROM localidade";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de localidade</title>
</head>
<body>
    <h2>Localidades</h2>
    <a href="inserir.php">Adicionar Localidade</a><br/><br/>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>IdLoc</th>
            <th>DescLoc</th>
            <th>Ação</th>

        </tr>
        <?php 
        while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['idLoc']; ?></td>
            <td><?= $row['descLoc']; ?></td>
            <td>
                <a href="editar.php?idLoc=<?= $row['idLoc']; ?>">Editar</a>
                <a href="apagar.php?idLoc=<?= $row['idLoc']; ?>" onclick="return confirm('Tem a certeza?')">Apagar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>
?>
</body>
</html>