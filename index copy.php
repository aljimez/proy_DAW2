<?php
include("con_db.php");
include("menu.php");

//Extraer descripcion, población y calle
//curl https://data.renfe.com/api/3/action/datastore_search_sql?sql=SELECT DESCRIPCION from 'dd090aa2-7b8d-45ab-97c2-bf70653bc117'

?>
<!--Formulario consulta horarios-->
<!--API de estaciones de rodalies cataluña https://data.renfe.com/dataset/estaciones-rodalies-barcelona/resource/dd090aa2-7b8d-45ab-97c2-bf70653bc117-->
  <div class="cont">
    <div class="inf_h">
      <form action="horar.php" method="POST">
        <h3>On vols anar?</h3>
        <label for="st_org">Estació d'origen</label>
        <select name="st_org" id="st_org">
          <?php
          $DataConn = new DataConn();
          $query1 = $DataConn->selectquery('stop_name', 'stops');
          print_r($query1);
          while ($valores = mysqli_fetch_array($query1)) {
                 echo "<option value='".$valores['stop_name']."'>".$valores['stop_name']."</option>";  
          }
          ?>
        </select><br>
        <!--  <input type="text" id="orig" name="st_ori"><br><br>-->
        <label for="dest">Estació destí</label>
        <select name="dest" id="dest">
        <?php
          $DataConn = new DataConn();
          $query1 = $DataConn->selectquery('stop_name', 'stops');
          while ($valores = mysqli_fetch_array($query1)) {
                 echo "<option value='".$valores['stop_name']."'>".$valores['stop_name']."</option>";  
          }
          ?>
        </select><br>
        <label for="mome">Quan?</label>
        <input type="date" name="mome">
       <!-- <label for="mome" name="mome">Quan?</label><input type="text" id="mome">-->
        <br><br><br>
        <input type="Submit" value="Consultar">
      </form>
    </div>
  </div>
  
</body>




</html>