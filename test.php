<?php

$host = "81.247.226.20";
$user = "root";
$passM = "qX47etHy";
$bdd = "strategiegrains";
$conn = mysqli_connect( $host, $user, $passM, "$bdd")or die("Impossible de se connecter a la base de donnees");

$qryDef = 'SELECT defaut FROM paramCampAffich where codeModule = "EXPC" and codeCult="BT"' ;
$rsDef = $conn->query($qryDef);

$nbDef  = $rsDef->num_rows ;


$rsDef->data_seek(0);
$row = $rsDef->fetch_row();
$Campdef = $row[0];
echo 'Campdef'.$Campdef;

$rsDef->close();

?>
