<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PI5 - Afinador </title>
<link type="text/css" rel="stylesheet" media="screen" href="estilo.css" />
</head>

<body>
<div id="site">

<div id="header">
  <b><center>Projeto Integrador 5 - Afinador<center></b>
</div>

<div id="conteudo"><!-- abrimos a div conteudo -->

<div id="conteudo-left">
<b>
<center> 

<?php
//Refresh da pagina em 5 segundos
header("Refresh:2");
//Incluir arquivo de conexão com o Banco de Dados
include ("config.php");

//Inicializa sessão
session_start();

	
//Get Last Nota do Banco
$sql = "SELECT nota FROM `ultimanota` WHERE id=1";
$resultado = mysqli_query($db,$sql);
while(($row = mysqli_fetch_assoc($resultado))) {
    $rows = $row;
}


switch ($rows['nota']) {
    case "A":
        echo "<img src=img/a.png height=500 width=400>";
        break;
    case "B":
        echo "<img src=img/b.png height=500 width=400>";
        break;
    case "C":
        echo "<img src=img/c.png height=500 width=400>";
        break;
    case "D":
        echo "<img src=img/d.png height=500 width=400>";
        break;
    case "E":
        echo "<img src=img/e.png height=500 width=400>";
        break;
    case "F":
        echo "<img src=img/f.png height=500 width=400>";
        break;
    case "G":
	echo "<img src=img/g.png height=500 width=400>";
        break;
    case "A#":
        echo "<img src=img/asus.png height=500 width=400>";
        break;
    case "C#":
        echo "<img src=img/csus.png height=500 width=400>";
        break;
    case "D#":
        echo "<img src=img/dsus.png height=500 width=400>";
        break;
    case "F#":
        echo "<img src=img/fsus.png height=500 width=400>";
        break;
    case "G#":
        echo "<img src=img/gsus.png height=500 width=400>";
        break;
    case "Ab":
        echo "<img src=img/ab.png height=500 width=400>";
        break;
    case "Cb":
        echo "<img src=img/cb.png height=500 width=400>";
        break;
    case "Db":
        echo "<img src=img/db.png height=500 width=400>";
        break;
    case "Fb":
        echo "<img src=img/fb.png height=500 width=400>";
        break;
    case "Gb":
        echo "<img src=img/gb.png height=500 width=400>";
        break;

    default:
 	echo "<img src=img/else.png height=500 width=400>";
        break;
}

?>
</center>
 </b>

</div>

<!--Fechando Afinador Esquerda-->

<div id="conteudo-right">

<b> 
<img src="graph.php" height=500 width=1000/>

</b>
</div>

</div><!-- aqui fechamos a div conteudo -->

<div id="footer"></div>

</div>
</body>
<footer>
<center>Projeto Integrador 5 - Alunos: Diego Capassi, Gustavo Fontes, Leticia Amaral, Monica Uloa, Neusieli </center>
</footer>
</html