<?php
include("con_db.php");
include("menuinic.php");

//Extraer descripcion, población y calle
//curl https://data.renfe.com/api/3/action/datastore_search_sql?sql=SELECT DESCRIPCION from 'dd090aa2-7b8d-45ab-97c2-bf70653bc117'

$DataConn = new DataConn();
          $query2 = $DataConn->muestrarec($usr_id,$email, $name, $recty, $miss);
          print_r($query2);

?>