<?php
require ("con_db.php");
require ("menu.php");
$st_org = $_POST['st_org'];
$dest = $_POST['dest'];
$mome = $_POST['mome'];
$mome = str_replace("-","",$mome);
$DataConn = new DataConn();
$query1 = $DataConn->selectestaciones($st_org, $dest, $mome);
while ($valores = mysqli_fetch_array($query1)) 
    echo $valores[1]

?>