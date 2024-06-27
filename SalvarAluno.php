<?php
include("DB_Connection/ConectaBanco.php");

// Conectar ao Banco de dados
$conn = mysqli_connect($servername, $usuario, $senha, $base) or die(mysqli_error($conn));

$nome = $_POST["nome"];
$idade = $_POST["idade"];

// Inserir dados na tabela "Alunos"
$sql = "INSERT INTO alunos (nome, idade) VALUES ('$nome', $idade)";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

header ('Location: Index.php');