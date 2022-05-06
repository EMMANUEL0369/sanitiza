<?php

require_once 'db/connection.php';

function getItem($sql){
    $conn = get_conection();
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            mysqli_close($conn);
            return $row;
        }
    }
    mysqli_close($conn);
    return NULL;
}