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
function insertquery($usr_id,$name,$email,$user,$encrypt_passw){
    $conn = mysqli_connect("localhost", "root", "","userdata");
    mysqli_set_charset($conn,"utf8");
    $query = "INSERT INTO login(usr_id,name,email,user,password) VALUES ('$usr_id','$name','$email','$user','$encrypt_passw')";

    $result = mysqli_query($conn, $query);

return $result;
}//hacer consulta con user y pass y devolver true si fila existex  y false si no existeix
    function userselectquery($user,$pass_encrypt){
        $conn = mysqli_connect("localhost", "root", "","userdata");
        mysqli_set_charset($conn,"utf8");
            $sql = "SELECT * FROM login WHERE user ="."'".$user."'"." and password = ".$pass_encrypt;
                echo $sql;
        $query1 = mysqli_query($conn,$sql);
        
               return $query1;
        
    }


    function insertdatosqueja($usr_id, $email, $name, $recty, $miss){
        $conn = mysqli_connect("localhost", "root", "","userdata");
        mysqli_set_charset($conn,"utf8");
        $sql = "INSERT into reclamacio(usr_id, missatge, correo, name, rec_type) values ('.$usr_id.'.$miss.','.$email.','.$name.','.$recty.');";
        $query2 = mysqli_query($conn,$sql);
        return $query2;
    }


    function muestrarec($usr_id){
        $conn = mysqli_connect("localhost", "root", "","userdata");
        mysqli_set_charset($conn,"utf8");
        $sql = "select * from reclamacio where (select * from login where usr_id = ".$usr_id.");";
        $query2 = mysqli_query($conn,$sql);
        return $query2;
    }
    
};
