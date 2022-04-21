<?php
include("menuinic.php");
include("con_db.php");
?>

<?php
session_start();
$DataConn = new DataConn();
$DataConn->insertdatosqueja($usr_id, $email, $name, $recty, $miss);
    
?>
</body>

</html>