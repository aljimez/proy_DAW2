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
            $sql = "SELECT * FROM login WHERE user ="."'".$user."'";
        $query1 = mysqli_query($conn,$sql);
        
        return $query1;
        
    }
    function selectestaciones($st_org, $dest,$mome){
        $conn = mysqli_connect("localhost", "root", "","userdata");
        mysqli_set_charset($conn,"utf8");
        //$sql = "SELECT * from stops here stop_name =".$st_org.""
        $sql = "select".$st_org.",arrival_time, departure_time, stop_sequence,route_short_name from stops INNER JOIN stop_times ON stops.stop_id = stop_times.stop_id INNER JOIN trips on stop_times.trip_id = trips.trip_id INNER JOIN routes on trips.route_id = routes.route_id"
        ;
        $query1 = mysqli_query($conn,$sql);
        
        return $query1;
        
    }
    
};
