<?php
$cadena = $_POST["comentario"];
$expresion='/[\.\\\!"#\$%‰&\'()\*\+,\-\/:;<=>\?@\[\]\^\_`\{\|\}~¡¢£¤¥¦§¨©ª«¬­®¯°±²³´µ¶·¸¹º»¼½¾⅛⅜⅝⅞¿ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ€≠≤≥√Ω↑↓←→↔№▲►▼◄■□▪▫●○◊]+/';
$cadena_sanitizada=preg_replace($expresion,"",$cadena);
echo $cadena_sanitizada;
