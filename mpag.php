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
            <button type="submit">Enviar</button>
        </div>
    </div>
</form>

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