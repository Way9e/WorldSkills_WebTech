<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website criado para a participaçao no worldskill regional">
    <meta name="keywords" content="worldskills, skills, Ana Reis, hmtl, css, php">
    <meta name="author" content="Ana Reis">
    <title>Gestão de Telecomunicações Móveis</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="img/WSPT_70anos_af3.png">
</head>
<body>
<?php
    $servername = "localhost";
    $username = "ws2024";
    $password = "ws2024";
    $database = "WorldSkills_m2";
    // Create a connection
    $conn = new mysqli($servername, $username, $password, $database);
    // Check the connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    };
    ?>
</body>
</html>