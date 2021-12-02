<?php
//$command = escapeshellcmd('../py/webscrappinginc.py');
//print_r($command);
//$out = shell_exec ($command);

$out = shell_exec('../py webscrappinginc.py');


echo $out;
?>