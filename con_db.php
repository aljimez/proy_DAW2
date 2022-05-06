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
    }
    function userselectquery($user,$pass_encrypt){
        $conn = mysqli_connect("localhost", "root", "","userdata");
        if(mysqli_connect_errno()) {
            echo "No connecta";
            exit();
        }
        mysqli_set_charset($conn,"utf8");
        $sql = "SELECT * FROM login WHERE user ="."'".$user."'"." and password = '".$pass_encrypt."'";
        echo $sql;
        $query1 = mysqli_query($conn,$sql);
        $res = mysqli_fetch_assoc($query1);

        return $res;
        
    }
    
    function insertdatosqueja($usr_id,$recty, $miss){
        $conn = mysqli_connect("localhost", "root", "","userdata");
        mysqli_set_charset($conn,"utf8");
        $sql = "INSERT into reclamacio(usr_id, missatge, rec_type) values ('.$usr_id.','.$miss.','.$recty.');";
        mysqli_query($conn,$sql);
    }


    function muestrarec($usr_id){
        $conn = mysqli_connect("localhost", "root", "","userdata");
        mysqli_set_charset($conn,"utf8");
        if(mysqli_connect_errno()) {
            echo "No connecta";
            exit();
        }
        mysqli_set_charset($conn,"utf8");
        $sql = "select * from reclamacio where exists (select * from login );";//where usr_id = '.$usr_id.'
        $query2 = mysqli_query($conn,$sql);
        $query2 = mysqli_fetch_assoc($query2);

        return $query2;
    
    }
            
};
