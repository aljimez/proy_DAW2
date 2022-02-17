<?php
    $conn = mysqli_connect("localhost", "root", "","userdata");
    mysqli_set_charset($conn,"utf8");

//parametros de conexión en base de datos
class DataConn{
function selectquery($column,$table){
    $conn = mysqli_connect("localhost", "root", "","userdata");
    mysqli_set_charset($conn,"utf8");
        $sql = "select ".$column." from ".$table;
    $query1 = mysqli_query($conn,$sql);

return $query1;

}
function insertquery($name,$email,$user,$encrypt_passw){
    $conn = mysqli_connect("localhost", "root", "","userdata");
    mysqli_set_charset($conn,"utf8");
    $query = "INSERT INTO login(name,email,user,password) VALUES ('$name','$email','$user','$encrypt_passw')";

    $result = mysqli_query($conn, $query);

return $result;
}
    function userselectquery($user){
        $conn = mysqli_connect("localhost", "root", "","userdata");
        mysqli_set_charset($conn,"utf8");
            $sql = "select * from ".$user;
        $query1 = mysqli_query($conn,$sql);
        
        return $query1;
        
    }
    function selectestaciones($st_org, $dest,$mome){
        $conn = mysqli_connect("localhost", "root", "","userdata");
        mysqli_set_charset($conn,"utf8");
        //$sql = "SELECT * from stops here stop_name =".$st_org.""
        $sql = "select * from calendar inner join trips on calendar.service_id = trips.service_id where start_date = ".$mome;
        $query1 = mysqli_query($conn,$sql);
        
        return $query1;
        
    }
    
};
