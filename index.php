<?php
include("con_db.php");
include("menu.php");

//Extraer descripcion, población y calle
//curl https://data.renfe.com/api/3/action/datastore_search_sql?sql=SELECT DESCRIPCION from 'dd090aa2-7b8d-45ab-97c2-bf70653bc117'

?>

<div class="cont">
    <div class="login">
        <!--Formulario de login-->
        <form method="post" action="login.php">
            <table>
                <tr>
                    <td colspan="2"><strong><label> Inicia Sessió</label></strong></td>
                </tr>
                <tr>
                    <td><label> Usuari</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="textuser" style="width: 10em;"></td>
                </tr>
                <tr>
                    <td><label>Contrasenya</label></td>
                </tr>
                <tr>
                    <td><input type="password" name="textpassword" style="width: 10em;"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Envia" name="Submit"></td>
                </tr>
            </table>
        </form>
    </div>
    <br>
    <!--Formulario de registro-->
    <div class="register">
        <form action="register.php" method="post">
            <table>
                <tr>
                    <td colspan="2"><label><strong>Registre</strong></label></td>
                </tr>
                <tr>
                    <td><label> Nom </label></td>
                </tr>
                <tr>
                    <td><input type="text" name="full_name" style="width: 10em;"></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                </tr>
                <tr>
                    <td><input type="email" name="email" style="width: 10em;"></td>
                </tr>
                <tr>
                    <td><label>Usuari</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="user" style="width: 10em;"></td>
                </tr>
                <tr>
                    <td><label>Contrasenya</label></td>
                </tr>
                <tr>
                    <td><input type="password" name="textpassword" style="width: 10em;"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Registrar"></td>
                </tr>
            </table>
        </form>
    </div>
    <button class="shlog" onclick="ShowHideElementreg()">Ja estás registrat?</button>
    <button class="shreg" onclick="ShowHideElement()">No estás registrat?</button>
</div>
<!--JQuery mostrar/ocultar formulario-->

<script type="text/javascript">
    $(".register").hide();

    $(".shlog").hide();

    function ShowHideElement() {

        if ($(".register").hide()) {

            $(".shlog").show();

            $(".register").show();

            $(".login").hide();

            $(".shreg").hide();

        } else {

            $(".login").show();

            $(".shreg").show();

            $(".shlog").hide();

            $(".register").hide();


        }

    }

    function ShowHideElementreg() {
        $(".register").show();

        $(".shlog").show();

        if ($(".register").hide()) {

            $(".shlog").hide();

            $(".register").hide();

            $(".login").show();

            $(".shreg").show();

        } else {

            $(".login").hide();

            $(".shreg").hide();


            $(".shlog").show();

            $(".register").show();


        }

    }
</script>
</body>

</html>