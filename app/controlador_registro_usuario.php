<?php
        

        include("conectar.inc.php");

                    $conect=new conectar();
                    $conect->ConectarBD();

                    if(empty($_POST["nombre"])){
                        die("El nombre es requerido");
                    }
                
                    if(strlen($_POST["nombre"])>25)
                    {
                        die("El nombre tiene más de 25 caracteres, escoja otro más pequeño");
                    }
                    if( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                        die("El email es requerido");
                    }
                    if(empty($_POST["password"])){
                        die("La contraseña es requerida");
                    }
                    if(strlen($_POST["password"])<8){
                        die("La contraseña tiene que ser de al menos 8 caracteres");
                    }

       $nombre=$_REQUEST['nombre'];
       $email=$_REQUEST['email'];
       $password=$_REQUEST['password'];
       $sexo=$_REQUEST['sexo'];
       $nacimiento=$_REQUEST['nacimiento'];
       $status='Online';
       

       print_r($_POST);
       $sql="INSERT INTO usuarios (nombre, email,password,sexo,nacimiento,activo) VALUES (?,?,?,?,?,?)";

       $stmt = $conect->getCon()->stmt_init();

       if( ! $stmt->prepare($sql)){
                die("SQL error: ". $conect->getCon()->errno);
       }

       $stmt->bind_param("ssssss",
                        $nombre,
                        $email,
                        $password,
                        $sexo,
                        $nacimiento,
                        $status
                        );
        if($stmt->execute()){
                header('Location: ../completado.html');
                exit();
                
                

        }else{
                if($conect->getCon()->errno===1062)
                {
                        die("El correo ya está tomado");
                }
                die($conect->getCon()->error . "________ " . $conect->getCon()->errno);
        }


       
       


?>