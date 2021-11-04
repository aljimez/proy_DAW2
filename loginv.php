<?php

session_start();

?>

<!DOCTYPE html>
<html>
<!--vscode://vscode.github-authentication/did-authenticate?windowid=1&code=fec1d0c709c188e3539a&state=2890e6ea-c45d-4d07-a45a-21c11decf49f-->

<head>
    <link rel="stylesheet" href="css/style.css">

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <script src="js/jquery.js"></script>

    <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body class="back">
    <div class="imglo">
        <a href="index.html"> <img src="img/rodlogo.png" alt="rodalieslogo" style="width: 15em;"></a>
    </div>
 
    <div class="cont">

        <div class="opci">
           <a class="bot" href="login.html"><button>Inicia sessió</button></a>
            <a class="bot" href="#"><button> Que oferim?</button></a>
           <a class="bot" href="#"> <button>Horaris</button></a>
            <a class="bot" href="#"><button>Estat dels serveis</button></a>
        </div>

       <hr>
        <div class="login">
            <form method="post" action="login.php">
                <table>
                    <tr>
                        <td colspan="2"><label> Login</label></td>
                    </tr>
                    <tr>
                        <td><label> Nom/email</label></td>
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
        <button class="shreg" onclick="ShowHideElement()">No estás registrat?</button>

        <br>
        <div class="register">
            <form action="register.php" method="post">
                <table>
                    <tr>
                        <td colspan="2"><label>Registre</label></td>
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

    </div>

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