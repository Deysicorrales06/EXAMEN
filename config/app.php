<?php
$app_url = "http://localhost/EXAMEN/public/";

function asset($cadena){
    global $app_url;
    return $app_url . $cadena;
}