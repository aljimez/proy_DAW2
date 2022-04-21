<?php
include("con_db.php");
include("menuinic.php");
session_start();
//Extraer descripcion, población y calle
//curl https://data.renfe.com/api/3/action/datastore_search_sql?sql=SELECT DESCRIPCION from 'dd090aa2-7b8d-45ab-97c2-bf70653bc117'
$DataConn = new DataConn();
$usr_id = 0;
          $query2 = $DataConn->muestrarec($usr_id);
          //if ($query1['$usr_id'] == $_SESSION['usr_id']){
          print_r($query2);
//};

?>