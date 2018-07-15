<?php
//  Conexão
require_once 'db_connect.php';

//  Sessão
session_start();

//  Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pagina restrita </title>
    </head>
    <body>
        <h1>Olá <?php echo $dados['nome']; ?></h1>
        <a href="logout.php">Sair</a>

    </body>
</html>
