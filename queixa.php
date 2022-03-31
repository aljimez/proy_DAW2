<?php
include("con_db.php");
include("menuinic.php");

//Extraer descripcion, población y calle
//curl https://data.renfe.com/api/3/action/datastore_search_sql?sql=SELECT DESCRIPCION from 'dd090aa2-7b8d-45ab-97c2-bf70653bc117'

?>
<?php
session_start();
$i = 0;
session_id($i++);
if(isset($_POST['email'])){
$email = $_POST['email'];
$name = $_POST['name'];
$usr_id = $_SESSION['usr_id'];
$recty = $_POST['recty'];
$miss = $_POST['comm'];
$DataConn = new DataConn();
$DataConn->insertdatosqueja($usr_id, $email, $name, $recty, $miss);
}

?>
<!--Formulario consulta horarios-->
<!--API de estaciones de rodalies cataluña https://data.renfe.com/dataset/estaciones-rodalies-barcelona/resource/dd090aa2-7b8d-45ab-97c2-bf70653bc117-->
  <div class="cont">
    <div class="inf_h">
      <form action="index.php" method="POST">
        <label for="email">Correu electronic</label>
        <input type="email" name="email" required>
        <label for="name">Nom</label>
        <input type="text" name="name" required>
        <label for="recty">Tipus de reclamació</label>
        <select name="recty">
        <option value="Justificante de retraso">Justificante de retraso</option>
        <option value="Consultas y reclamaciones">Consutas y reclamaciones</option>
        <option value="Atención telefonica">Atención telefonica</option>
        <option value="Solicitud de objetos perdidos">Solicitud de objetos perdidos</option>
        </select><br>
        <textarea type="text"rows="10" cols="150" name="comm" maxlength="2000" required>
        Introdueix aqui el text de la teva queixa
        </textarea><br>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </div>
  
</body>

</html>
