<?php
    $conn = mysqli_connect("localhost", "root", "","userdata");
    mysqli_set_charset($conn,"utf8");

//parametros de conexión en base de datos
class DataConn{
function selectquery($column,$table){
$conn = mysqli_connect("localhost", "root", "","userdata");
mysqli_set_charset($conn,"utf8");
    $sql = "select".$column."from".$table;
$query1 = mysqli_query($conn,$sql);

return $query1;
}
};
?>