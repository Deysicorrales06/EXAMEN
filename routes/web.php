<?php
$url = $_SERVER['REQUEST_URI'];
//echo $url;
if ($url == "/EXAMEN/public/"){
    require_once "../views/index.php";
}elseif($url == "/EXAMEN/public/ejercicio01"){
    require_once "../views/ejercicio01.php";
}elseif($url == "/EXAMEN/public/ejercicio02"){
    require_once "../views/ejercicio02.php";
}elseif($url == "/EXAMEN/public/ejercicio03"){
    require_once "../views/ejercicio03.php";
}

