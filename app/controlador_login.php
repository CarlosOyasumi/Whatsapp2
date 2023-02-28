<?php
    if($_SERVER["REQUEST_METHOD"]==="POST")
    {
        include("app/conectar.inc.php");
        $conect=new conectar();
        $conect->ConectarBD();

       

        
        if(empty($_REQUEST['enviar'])){
            if( ! filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)){
                echo '<div class="alert alert-danger">EL correo es requerido</div>';
            }
            if(empty($_REQUEST["password"])){
                echo '<div class="alert alert-danger">La contraseña es requerida</div>';
            }
        }
            $email=$_REQUEST['email'];
            $password=$_REQUEST['password'];

            $sql=sprintf("SELECT * FROM usuarios WHERE 
                          email='%s'",
                          $conect->getCon()->real_escape_string($_POST['email'])); 
        $result = $conect->getCon()->query($sql);

        $user = $result->fetch_assoc();

        if($user){
            if($password==$user['password']){
                header('Location: HOME.html');
                exit();
            }

        }
        $Invalido=true;

        if($Invalido){
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
                
    }
//Primeros pasos para el login
?>