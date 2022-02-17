<?php
require "con_db.php";

if (strlen($_POST['full_name']) > 1 && strlen($_POST['email']) > 1) {
    $name = htmlentities(trim($_POST['full_name']));
    $email = $_SESSION['email'] = htmlentities(trim($_POST['email']));
    $user = htmlentities(trim($_POST['user']));
    $verificar_correo = mysqli_query($conn, "SELECT * FROM login WHERE email='$email'");
    $passw = htmlentities(trim($_POST['textpassword']));
    $encrypt_passw =  htmlentities(trim(hash('sha512', $passw)));

    foreach ($verificar_correo as $num_row => $value) {

        $eemail = ($value['email']);
    }
    if ($email ==  $eemail) {

        echo '<script>
alert("Este correo ya está registrado, intenta con otro diferente");
window.location  = "../proy_DAW2/loginv.php";</script>';
    } else
    
       // $query = "INSERT INTO login(name,email,user,password) VALUES ('$name','$email','$user','$encrypt_passw')";
    //$result = mysqli_query($conn, $query);
    $DataConn = new DataConn();
    $query1 = $DataConn->insertquery($name,$email,$user,$encrypt_passw);

    if ($query1) {

        header('Location: loginv.php');
    } else {
?>
        <h3>Ha ocurrido un error</h3>

    <?php
    }
} else {

    ?>
    <h3>Porfavor completa los campos</h3>
<?php
}


//Verificación de correo registrado (no se repita)
