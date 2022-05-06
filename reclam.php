<?php
include("con_db.php");
include("menuinic.php");

//Extraer descripcion, población y calle
//curl https://data.renfe.com/api/3/action/datastore_search_sql?sql=SELECT DESCRIPCION from 'dd090aa2-7b8d-45ab-97c2-bf70653bc117'
$usr_id = $_SESSION['usr_id'];
echo $usr_id;
$DataConn = new DataConn();
$query2 = $DataConn->muestrarec($usr_id);
print_r($query2);

while($res = $query2->fetch_array()){

         $res->missatge."<br>";

}

?>
<a href="logout.php">Cerrar sesión</a>
