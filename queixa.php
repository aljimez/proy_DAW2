<?php
include("con_db.php");
include("menuinic.php");

//Extraer descripcion, población y calle

//curl https://data.renfe.com/api/3/action/datastore_search_sql?sql=SELECT DESCRIPCION from 'dd090aa2-7b8d-45ab-97c2-bf70653bc117'


?>

<!--Formulario consulta horarios-->
<!--API de estaciones de rodalies cataluña https://data.renfe.com/dataset/estaciones-rodalies-barcelona/resource/dd090aa2-7b8d-45ab-97c2-bf70653bc117-->
  <div class="cont">
    <div class="inf_h">
      <form action="#" method="POST">
        <label for="recty">Tipus de reclamació</label>
        <select name="recty">
        <option value="Justificante de retraso">Justificante de retraso</option>
        <option value="Consultas y reclamaciones">Consutas y reclamaciones</option>
        <option value="Atención telefonica">Atención telefonica</option>
        <option value="Solicitud de objetos perdidos">Solicitud de objetos perdidos</option>
        </select><br>
        <textarea type="text"rows="10" cols="150" name="miss" maxlength="2000" required>
        Introdueix aqui el text de la teva queixa
        </textarea><br>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </div>
  
</body>
<?php
if(isset($_POST['miss'])){
$usr_id = $_SESSION['usr_id'];
$recty = $_POST['recty'];
$miss = $_POST['miss'];
echo $miss;
echo $usr_id;
$DataConn = new DataConn();
$DataConn->insertdatosqueja($usr_id, $recty, $miss);
}
?>
</html>
