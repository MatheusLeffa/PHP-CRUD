<?php
include("DB_Connection/ConectaBanco.php");

// Conectar ao Banco de dados
$conn = mysqli_connect($servername, $usuario, $senha, $base) or die(mysqli_error($conn));

$id = $_GET["id"];

// Deletar registro da tabela "Alunos"
$sql = "DELETE FROM alunos WHERE id = $id";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

header ('Location: Index.php');