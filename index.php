<?php
include("menu.php");
?>
<!--Formulario consulta horarios-->
<div class="cont">
<div class="inf_h">
    <form action="index.php" method="POST">
        <h3>On vols anar?</h3>
        <label for="orig">Estació d'origen</label>
        <input type="text" id="orig" name="st_ori"><br><br>
        <label for="dest">Estació destí</label>
        <input type="text" id="dest" name="st_dst"><br><br>
        <label for="mome">Quan?</label><input type="date" id="mome">
        <br><br><br>
        <input type="Submit" value="Consultar">
    </form>
    </div>
</div>



</body>

</html>