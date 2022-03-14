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
      <label for="email">Correu electronic</label>
      <input type="text" name="email">
      <label for="">Nom</label>
      <input type="text">
      <label for="">Tipus de reclamació</label>
      <select name="" id="">
<option value="">Justificante de retraso</option>
<option value="">Consutas y reclamaciones</option>
<option value="">Atención telefonica</option>
<option value="">Solicitud de objetos perdidos</option>
<option value="">Devolución Xpress</option>
      </select><br>
      <textarea type="text"rows="10" cols="150">
        Escriu aqui la teva reclamació
      </textarea>
      </form>
    </div>
  </div>
  
</body>




</html>