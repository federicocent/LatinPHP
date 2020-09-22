<?php
session_start();
/* this library is created by dubbox if you want contact with me  my twitter is : @dubbox.mp4, 
if  you hear that library is paid, that person its a lier!!! get it free in www.latinphp.com
thanks for use!!  */

/* print in screen */
function imprimir($text){
    echo"$text";
}
 /* for create a session name for save dates */
 function CrearSesion($nombre, $dato){
     
     $_SESSION[$nombre] = $dato;
     
 }
 

 /* for recive dates from post */
 function enviar($nombre){
     $_POST[$nombre];
 }

/* for recive date from get*/
function obtener($nombre){
    $_GET[$nombre];
}

/* for connect to database */

function ConectarBase($host, $usuario, $contraseña, $basededatos){
 $base=mysqli_connect($host,$usuario,$contraseña,$basededatos);
}
/* for query to the database */
function AccionBase($basededatos, $csql){
   $accion= mysqli_query($basededatos, $csql);
}