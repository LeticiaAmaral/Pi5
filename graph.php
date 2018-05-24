<?php
include("config.php");
header("Refresh:2");
$sql = "select nota from notas where id=1 order by data desc limit 50";

$campoDoMaior = [];
$campoDoMaior = ['C','Dm','Em', 'F','G','Am'];
$totalCampoDoMaior = [0,0,0,0,0,0];


$rows = [];

$resultado = mysqli_query($db,$sql);
while(($row = mysqli_fetch_assoc($resultado))) {
    $rows[]= $row;
  switch ($row['nota']) {
    case "C":
        $totalCampoDoMaior[0]=$totalCampoDoMaior[0]+1;
        break;
  case "Dm":
        $totalCampoDoMaior[1]=$totalCampoDoMaior[1]+1;
        break;
  case "Em":
        $totalCampoDoMaior[2]=$totalCampoDoMaior[2]+1;
        break;
  case "F":
        $totalCampoDoMaior[3]=$totalCampoDoMaior[3]+1;
        break;
  case "G":
        $totalCampoDoMaior[4]=$totalCampoDoMaior[4]+1;
        break;
  case "Am":
        $totalCampoDoMaior[5]=$totalCampoDoMaior[5]+1;
        break;
}


}
 
   
$data = array("C"=>$totalCampoDoMaior[0],"Dm"=>$totalCampoDoMaior[1], "Em"=>$totalCampoDoMaior[2], "F"=>$totalCampoDoMaior[3], "G"=>$totalCampoDoMaior[4], "Am"=>$totalCampoDoMaior[5]);


include("phpgraphlib.php");
$graph = new PHPGraphLib(800,600);
$data = array("C"=>$totalCampoDoMaior[0],"Dm"=>$totalCampoDoMaior[1], "Em"=>$totalCampoDoMaior[2], "F"=>$totalCampoDoMaior[3], "G"=>$totalCampoDoMaior[4], "Am"=>$totalCampoDoMaior[5]);
$graph->addData($data);
$graph->setTitle("Notas Campo Harmônico de Dó Maior");
$graph->setTextColor("blue");
$graph->setXValuesHorizontal(true);
$graph->setGradient('blue', 'white');
$graph->setDataValues(true);
$graph->createGraph();






?>
