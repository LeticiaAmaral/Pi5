<?php
//Incluir arquivo de conex�o com o Banco de Dados
include ("config.php");

//Inicializa sess�o
session_start();

//Recebe as vari�veis pelo GET
$nota = $_GET["nota"];
$id = $_GET["id"];
	
//Inserir a Nota no banco de dados
$sql = "INSERT INTO notas(id, nota, data) VALUES ('$id','$nota', now())";
$resultado = mysqli_query($db,$sql);

//Update da �ltima nota tocada
$sql = "update ultimanota set nota='$nota', data=now() where id='$id'";
$resultado2 = mysqli_query($db,$sql);

//Mostrar a nota e usu�rio que foram gravados no banco
echo $id;
echo $nota;
?>