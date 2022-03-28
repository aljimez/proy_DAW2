<?php
include("menuinic.php");
include("con_db.php");
?>
<!--Página sesión iniciada-->

<?php
$DataConn = new DataConn();
$DataConn->insertdatosqueja($email, $name, $recty, $miss);
?>
<hr>
<script>
    if ($_POST["unsess"]) {
        <?php
        session_abort();
        session_destroy();
        header('index.php');
        ?>
    }
    if ($_POST["delcont"]) {
        var checkdel = prompt("Aquesta opció esborrará totes les dades que dispossem de tu, introdueix el teu nom d'usuari per portar-ho a terme")
        if (checkdel == $_POST["textuser"]) { //Tiene que ser una variable de sesion
            checkdel = $_POST["textuser"];
            <?php
            if (!$conn) {

                die("No hay conexión: " . mysqli_connect_error());
            }else 
            //Revisión
            $query1 = mysqli_query($conn, "DROP * FROM login WHERE user = '" . $_POST["textuser"] . "'");//Tiene que ser una variable de sesion

            ?>
        }
    }
    </script>
    <?php
    if (isset ($_POST['st_orifa']) && isset ($_POST['st_dstfa'])) {

        $query = mysqli_query($conn, 'insert into userlogs (id,favorigin,favdesti) values '('.$_POST["st_orifa"].','.$_POST["st_dstfa"].'));

    }
    
?>
</body>

</html>