<?php
$expresion='/[() \\\!"#‰\'\*\+,\-\/:;<=>\[\]\^`\{\|\}¡¢£¤¥¦§¨©ª«¬­®¯°±²³´µ¶·¸¹º»¼½¾⅛⅜⅝⅞¿ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ€≠≤≥√Ω↑↓←→↔№▲►▼◄■□▪▫●○◊]+/';
$data=array();
if(isset($_POST["user"]) && isset($_POST["passw"])){
    if(!empty($_POST["user"]) && !empty($_POST["passw"]) ){
        $user_sanitizada=preg_replace($expresion,"",$_POST["user"]);
        $password_sanitizada=preg_replace($expresion,"",$_POST["passw"]);
        require_once 'models/usuarios_model.php';
        $data["usuario"]=getUserByUserAndPassword($user_sanitizada,$password_sanitizada);
        if($data["usuario"] != null){
            session_start();
            session_id($data["usuario"]["id"]);
            require_once 'views/menu_view.php';
        }else{
            $data["error"]=true;
            require 'views/login_view.php';
        }
    }else{
        $data["error"]=true;
        require 'views/login_view.php';   
    }
}else{
    require 'views/login_view.php';
}