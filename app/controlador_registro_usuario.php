<?php
        include("app/conectar.inc.php");

     

       $nombre=$_REQUEST['nombre'];
       $email=$_REQUEST['email'];
       $password=$_REQUEST['password'];

       echo "Su nombre es: ".$nombre." Su email es: ".$email." Y su contraseña es:".$password;
    



?>