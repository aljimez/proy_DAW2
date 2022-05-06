<?php
include("con_db.php");
include("menuinic.php");

//Extraer descripcion, población y calle
//curl https://data.renfe.com/api/3/action/datastore_search_sql?sql=SELECT DESCRIPCION from 'dd090aa2-7b8d-45ab-97c2-bf70653bc117'
$usr_id = $_SESSION['usr_id'];
$DataConn = new DataConn();
$query2 = $DataConn->muestrarec($usr_id);

if($query2==null) {

        echo "dades no disponibles";
        exit;

    }else {
            echo "<h2>La teva reclamació</h2>";
            echo "<h4>Missatge:</h4>";
        echo $query2['missatge'];
        echo "<h4>Tipus de reclamació</h4>";
        echo $query2['rec_type']."<br>";
        
    }



?>
<a href="logout.php">Cerrar sesión</a>
 