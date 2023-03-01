<?php
        
        session_start();

        if(isset($_SESSION['user_id'])){
            include("app/conectar.inc.php");
            $conect=new conectar();
            $conect->ConectarBD();

            $sql= "SELECT * FROM usuarios
                    WHERE id ={$_SESSION["user_id"]}";

            $result =$conect->getCon()->query($sql);


            $user= $result->fetch_assoc();
        }
        
        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
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
        <h1 class="h2 fs-4"> Chat   <span class=" h4 bg-white text-dark rounded shadow px-2 me-2"> Arroz </span>
       
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"></button>
        
        </h1>
        <span class="h2">Hola <?= htmlspecialchars($user["nombre"])     ?> </span>
        </div>

        <div>
            <ul class="list-unstyled px-2">
               <li class=""><a href="HOME.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-house"></i>Home</a></li>
            </ul>
            <ul class="list-unstyled px-2">
               <li class=""><a href="mensajes.php" class="text-decoration-none d-flex justify-content-between px-3 py-2 d-block">
                <span><i class="fa-solid fa-comment"></i>Mensajes </span>
                <span class="bg-dark rounded-pill text-white py-0 px-2"">00</span>
            </a>
            </li>
            </ul>
            <ul class="list-unstyled px-2">
               <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-user-group"></i>Amigos</a></li>
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
            <div class="row">
                
                <div class="col-12">
                <form name="form1" action="" method="post">
                    
                    <div class="form-signin bg-light px-3 py-2 d-block">
                    <legend class="h1 px-3 py-2 d-block">¡Encuentra a tus amigos!</legend>
                    <label for="exampleInputEmail1" class="form-label">Ingrese el correo de la persona que quieras buscar</label>
                    <input class="form-control md-3" type="text" name="texto" placeholder="persona a buscar" >
			        <input class="btn btn-outline-dark"type="submit" name="Boton" value="Buscar">
        
                    </div>
                </form>
                </div>
            </div>
            <table>
		<tbody>
			<tr>
				<td>id</td><td>Nombre</td><td>Dirección</td><td>Edad</td>
			</tr>
			<?php 
 				 
                

                $cad="";
                if(isset($_POST["Boton"])){
                    $cad="where email like '%".$_POST["texto"]."%'";
 
                    $sql="select * from usuarios ".$cad."  order by email";
                    $resultado=$conect->getCon()->query($sql);
                    while ($persona=$resultado->fetch_assoc()) {
                            echo "<tr><td>",$persona['id'],"</td><td>",$persona['nombre'],"</td><td>",$persona['email'],"</td><td>",$persona['nacimiento'],"</td></tr>";
                            
                        # code...
                    }

                }
                    
                    
               ?>
		</tbody>
	</table>
        </div>
        
        </div>
    
  
        
    </div>

       
       



       


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>
            $("sidebar ul li").on('click' , function(){ 
                $("sidebar ul li.active").removeClass('active');
                $(this).addClass('active');
            })
              
            

        </script>
    </body>
</html>