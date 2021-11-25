<?php
include("menu.php");
?>
<!--Página sesión iniciada-->
<form method="post" action="mpag.php">
    <button name="unsess">Logout</button>
    <button type="submit" name="delcont">Esborrar les meves dades</button>
</form>
<hr>
<script>
    if ($_POST["unsess"] == true) {
        <?php
        session_abort();
        session_destroy();
        header('index.php')
        ?>
    }
    if ($_POST["delcont"]) {
        var checkdel = prompt("Aquesta opció esborrará totes les dades que dispossem de tu, introdueix el teu nom d'usuari per portar-ho a terme")
        if (checkdel == $_POST["textuser"]) {
            checkdel = $_POST["textuser"];
            <?php
            require("con_db.php");
            if (!$conn) {

                die("No hay conexión: " . mysqli_connect_error());
            }
            //Revisión
            $query1 = mysqli_query($conn, "DROP * FROM login WHERE user = '" . $_POST["textuser"] . "'");

            ?>
        }
    }
</script>
</body>

</html>