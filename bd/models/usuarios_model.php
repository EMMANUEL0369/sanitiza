<?php

require_once 'db/fns_model.php';

function getUserByUserAndPassword($user,$passwd){
    $sql = "SELECT id, user FROM users WHERE user='".$user."' AND password=sha2('".$passwd."',0) LIMIT 1";
    return getItem($sql);
}