<?php
require ("con_db.php");

if (!$conn){

die ("No hay conexión: ".mysqli_connect_error());

}

$nombre = $_POST ["txtusuario"];
$pass = $_POST ["txtpassword"];
$pass_encrypt = hash('sha512',$pass);


$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass_encrypt."'");

if($query){

    
}

//$query = mysqli_query ($conn,"insert into login values ($pass_encrypt,$nombre)")
//$nr = mysqli_num_rows($query);
/*
if ($nr == 1){
    //header ("Location: pagina.html")
echo "Bienvenido:".$nombre
} else if ($nr == 0)
{

    echo "No ingreso";
}

?>
*/