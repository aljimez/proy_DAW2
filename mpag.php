<?php
include("menuinic.php");
include("con_db.php");
?>
<!--Página sesión iniciada-->
<form method="post" action="mpag.php">
    <div class="prefform">
        <div class="mnbottom">
            <button type="submit" name="unsess">Logout</button>
            <button type="submit" name="delcont">Esborrar les meves dades</button><br>
        </div>
        <div class="estpref">
            <label for="orig">Estació d'origen favorita</label>
            <input type="text" id="orig" name="st_orifa"><br><br>
            <label for="dest">Estació destí favorita</label>
            <input type="text" id="dest" name="st_dstfa"><br><br>
        </div>
    </div>
</form>

<hr>
<script>
    if ($_POST["unsess"] == true) {
        <?php
        session_abort();
        session_destroy();
        header('index.php');
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
    <?php
    if ($_POST['st_orifa'] && $_POST['st_dstfa']) {

        $query = mysqli_query($conn, 'insert into userlogs (id,favorigin,favdesti) values '('.$_POST["st_orifa"].','.$_POST["st_dstfa"].'));

    }



echo $result;

?>
</body>

</html>