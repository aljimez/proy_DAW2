<?php
require "con_db.php";
//session_start();
if (!$conn){

die ("No hay conexión: ".mysqli_connect_error());

}

$user = $_POST ["textuser"];
$pass = $_POST ["textpassword"];
$pass_encrypt = hash('sha512',$pass);

//$query1 = mysqli_query($conn,"SELECT * FROM login WHERE user = '".$user."'");
$DataConn = new DataConn();
        $user="Agni";
          $query1 = $DataConn->userselectquery($user,$pass_encrypt);
          $fila = mysqli_fetch_row($query1);
         
print_r($fila);
          foreach ($query1 as $num_row => $value) {
            print_r($value);
    $passout = ($value['password']);   
    
}
if($pass_encrypt == $passout){
$_SESSION['textuser'] = $user;

//header('Location: mpag.php');
}else {} //header('Location: loginv.php');

/*
$query = mysqli_query ($conn,"insert into login values ($pass_encrypt,$nombre)")
$nr = mysqli_num_rows($query);
if ($nr == 1){
    //header ("Location: pagina.html")
echo "Bienvenido:".$nombre
} else if ($nr == 0)
{

    echo "No ingreso";
}

?>
*/