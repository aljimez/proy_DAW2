<?php
include ("con_db.php");
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
          while($valores = mysqli_fetch_array($query1)){
              $data[]=$valores;
            foreach ($data as $key){
            echo '<option value=".$key[stop_names].">$key[stop_names]</option>';
            }
            }
            ?>
        </select><br>
        <!--  <input type="text" id="orig" name="st_ori"><br><br>-->
            <label for="dest">Estació destí</label>
            <input type="text" id="dest" name="st_dst"><br><br>
            <label for="mome">Quan?</label><input type="date" id="mome">
            <br><br><br>
            <input type="Submit" value="Consultar">
        </form>
    </div>
</div>
</body>

          
Fatal error:  Uncaught TypeError: mysqli_fetch_array(): Argument #1 ($result) must be of type mysqli_result, bool given in C:\xampp\htdocs\proyg\proy_DAW2\index.php:20
Stack trace:
#0 C:\xampp\htdocs\proyg\proy_DAW2\index.php(20): mysqli_fetch_array(false)
#1 {main}
  thrown in C:\xampp\htdocs\proyg\proy_DAW2\index.php on line 20
</html>