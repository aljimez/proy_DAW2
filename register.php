<?php
require "con_db.php";
session_start();
if (strlen($_POST['full_name']) > 1 && strlen($_POST['email']) > 1) {
    $name = htmlentities(trim($_POST['full_name']));
    $email = $_SESSION['email'] = htmlentities(trim($_POST['email']));
    $user = htmlentities(trim($_POST['user']));
    $verificar_correo = mysqli_query($conn, "SELECT * FROM login WHERE email='$email'");
    $passw = htmlentities(trim($_POST['textpassword']));
    $encrypt_passw =  htmlentities(trim(hash('sha512', $passw)));
    $_SESSION['usr_id'] = $usr_id;
echo $name." ".$email." ".$user." ".$encrypt_passw;
$DataConn = new DataConn();
$query1 = $DataConn->insertquery($usr_id,$name,$email,$user,$encrypt_passw);

if ($query1) {
    header('Location: index.php');
} else {
    echo "<h3>Ha ocurrido un error</h3>";
}

}
?>

