<?php
function get_conection(){
    $servername="localhost";
    $username="login";
    $password="P4s\$w0rD";
    $dbname="usuarios";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("connection failed: ".mysqli_connect_error());
    }
    return $conn;
}