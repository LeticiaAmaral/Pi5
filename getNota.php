<?php
//Incluir arquivo de conexão com o Banco de Dados
include ("config.php");

//Inicializa sessão
session_start();

//Recebe as variáveis pelo GET
$nota = $_GET["nota"];
$id = $_GET["id"];
	
//Inserir a Nota no banco de dados
$sql = "INSERT INTO notas(id, nota, data) VALUES ('$id','$nota', now())";
$resultado = mysqli_query($db,$sql);

//Update da última nota tocada
$sql = "update ultimanota set nota='$nota', data=now() where id='$id'";
$resultado2 = mysqli_query($db,$sql);

//Mostrar a nota e usuário que foram gravados no banco
echo $id;
echo $nota;
?>