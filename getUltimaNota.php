<?php
//Refresh da pagina em 5 segundos
header("Refresh:5");
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

//print_r ($rows);
//cho $rows['nota'];

switch ($rows['nota']) {
    case "A":
        echo "<img src=img/a.png>";
        break;
    case "B":
        echo "<img src=img/b.png>";
        break;
    case "C":
        echo "<img src=img/c.png>";
        break;
    case "D":
        echo "<img src=img/d.png>";
        break;
    case "E":
        echo "<img src=img/e.png>";
        break;
    case "F":
        echo "<img src=img/f.png>";
        break;
    case "G":
        echo "<img src=img/g.png>";
        break;
    case "A#":
        echo "<img src=img/asus.png>";
        break;
    case "C#":
        echo "<img src=img/csus.png>";
        break;
    case "D#":
        echo "<img src=img/dsus.png>";
        break;
    case "F#":
        echo "<img src=img/fsus.png>";
        break;
    case "G#":
        echo "<img src=img/gsus.png>";
        break;
case "Ab":
        echo "<img src=img/ab.png>";
        break;
    case "Cb":
        echo "<img src=img/cb.png>";
        break;
    case "Db":
        echo "<img src=img/db.png>";
        break;
    case "Fb":
        echo "<img src=img/fb.png>";
        break;
    case "Gb":
        echo "<img src=img/gb.png>";
        break;
    default:
 	echo "<img src=img/else.png>";
        break;


}

?>
