<?php
require "con_db.php";
session_start();
if (!$conn){

die ("No hay conexión: ".mysqli_connect_error());

}

$user = $_POST ["textuser"];
$pass = $_POST ["textpassword"];
$pass_encrypt = hash('sha512',$pass);

//$query1 = mysqli_query($conn,"SELECT * FROM login WHERE user = '".$user."'");

//Consulta BBDD para devolver pass y comparar
$DataConn = new DataConn();
          $query1 = $DataConn->userselectquery($user,$pass_encrypt);

          header('Location: mpag.php');
          
          
?>
