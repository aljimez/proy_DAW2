<?php
include("menu.php");
?>
<!--Formulario consulta horarios-->
<div class="inf_h">
    <form action="index.php" method="POST">
        <h3>Horaris de trens</h3>
        <label for="orig">Estació d'origen</label>
        <input type="text" id="orig" name="st_ori"><br><br>
        <label for="dest">Estació destí</label>
        <input type="text" id="dest" name="st_dst">
    </form>
</div>
</body>

</html>