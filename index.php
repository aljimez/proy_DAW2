<?php
include("menu.php");
?>
<!--Formulario consulta horarios-->
<!--API de estaciones de rodalies cataluña https://data.renfe.com/dataset/estaciones-rodalies-barcelona/resource/dd090aa2-7b8d-45ab-97c2-bf70653bc117-->
<div class="cont">
<div class="inf_h">
    <form action="horar.php" method="POST">
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