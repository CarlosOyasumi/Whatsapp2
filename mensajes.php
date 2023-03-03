<?php
        
        session_start();
        if(!isset($_SESSION['user_id'])){
            header("location: login.php");
        }

        if(isset($_SESSION['user_id']))
            include("app/conectar.inc.php");
            $conect=new conectar();
            $conect->ConectarBD();

            $sql= "SELECT * FROM usuarios
                    WHERE id ={$_SESSION["user_id"]}";

            $result =$conect->getCon()->query($sql);


            $user= $result->fetch_assoc();
        
        
        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mensajes</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        
        <script src="https://kit.fontawesome.com/7c0880ea98.js" crossorigin="anonymous"></script>

        <!---->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body id="Pagina">
   
        
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
        <div class="header-box px-2 pt-3 pb-4">
        <h1 class="h1 fs-4"> Chat   <span class=" h2 bg-white text-dark rounded shadow px-2 me-2"> Arroz </span>
       
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"></button>
        
        </h1>
        <img class="Logotipo img-fluid rounded-circle" src="img/Floppa_ICON.png" alt="">
        <span class="h2">Hola <?= htmlspecialchars($user["nombre"])         ?> </span>
        </div>
        <?php
        if(strcmp($user["activo"],"Online")==0){

       
        
        ?>
        <span class="h4 bg-white text-dark rounded shadow px-2 me-2">       <?= htmlspecialchars($user["activo"])     ?>  <i class="fa-solid fa-cloud"></i>  </span>

        <?php
         }else{

         
        
        ?>
<span class="h4 bg-white text-dark rounded shadow px-2 me-2">       <?= htmlspecialchars($user["activo"])     ?>  </span>
        <?php
        }
        
        ?>
       

        <div>
            <ul class="list-unstyled px-2">
               <li class=""><a href="HOME.php" class="h4 text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-house"></i>Home</a></li>
            </ul>
            <ul class="list-unstyled px-2">
               <li class="active"><a href="#" class="text-decoration-none d-flex justify-content-between px-3 py-2 d-block">
                <span><i class="h4 fa-solid fa-comment"></i>Mensajes </span>
                <span class="h4 bg-dark rounded-pill text-white py-0 px-2"">00</span>
            </a>
            </li>
            </ul>
            <ul class="list-unstyled px-2">
               <li class=""><a href="amigos.php" class="h4 text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-user-group"></i>Amigos</a></li>
            </ul>
           
            <hr class="h-color mx-2">
            <ul class="list-unstyled">

            <li>
            <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-house"></i>Otros</a></li>
            </li>

            </ul>
            <a href="app/cerrar_sesion.php" class="btn btn-outline-danger btn-darkgit btn-lg px-4 me-md-2 px-3 py-2 d-block" role="button" id="Back_button">Cerrar sesion</a>
        </div>

        </div>
        <div class="content">

        <div class="container px-3 py-2 d-block" id="centrar">
            <div>
        <?php
                 include("app/users.php")  
                        

                 ?>

        </div>

        </div>


        </div>
        
    </div>

       
        <script>

            $(document).ready(function(){

           

            });

        </script>





       


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!--Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <script>
            $("sidebar ul li").on('click' , function(){ 
                $("sidebar ul li.active").removeClass('active');
                $(this).addClass('active');
            })
              
            

        </script>
    </body>
</html>