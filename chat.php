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


      if(!isset($_GET['user'])){
        header("Location: HOME.php");
        exit;

      }

      $sql="SELECT * from usuarios";
      $resultado = $conect->getCon()->query($sql);
      while($usuario=$resultado->fetch_assoc()){
          if($usuario['nombre'] == $_GET["user"] ){
              $id=$usuario['id'];
          }
      }
      $sql= "SELECT * FROM usuarios
            WHERE id ={$id}";

      $result2 =$conect->getCon()->query($sql);


      $ChatCon= $result2->fetch_assoc();

      if(empty($ChatCon))
      {
        header("Location: HOME.php");
        exit;

      }
      $sql="SELECT * from chat ORDER BY id_mensaje ASC";
      $resultado = $conect->getCon()->query($sql);
      
      
      

        
    
  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CHAT </title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        
        <script src="https://kit.fontawesome.com/7c0880ea98.js" crossorigin="anonymous"></script>

        <!---->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        
        <link href="css/styles.css" rel="stylesheet" />

        <script>
          function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
              if(req.readyState == 4 && req.status==200){
                document.getElementById('chatBox').innerHTML = req.responseText;
              }
            }
            req.open('GET','app/men_chat.php',true);
            req.send();
          }

          
          
        </script> 

    </head>

    <body  >
   
        
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
               <li class="active"><a href="mensajes.php" class="text-decoration-none d-flex justify-content-between px-3 py-2 d-block">
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
        <div class="content shadow p-4 rounded ">

        <div class="container px-3 py-2 d-block" id="centrar">
            <div>
      
            <body>
                    <div class="wrapper">
                      <section class="chat-area container px-3 py-2 d-block"">
                        <header>
                            <div class="container px-3 py-2 d-flex align-items-center"">
                            <img class="Logotipo2 img-fluid rounded-circle" src="img/Floppa_ICON.png" alt="">
                      <h3 class="display-4 fs-sm m-2">
                     <?=$ChatCon["nombre"]?>
                      </h3>

                            </div>
                            
                      </header>
                        <div class="shadow p-4 rounded d-flex flex-column mt-2  chat-box" id="chatBox">

                       <?php if(!empty($resultado))
                            { 
                              
                              while($chat=$resultado->fetch_assoc())
                              {
                                
                                if($chat["mensajero"]==$user["nombre"])
                                {
                                  if($ChatCon["nombre"]!=$chat["receptor"]){?>
                                    <div class="alert alert-info">No hay mensajes aún</div>
                                    <?php break;

                                  }
                                ?>

                          <p class="rtext align-self-end border rounded p-2 mb-1">
                              
                                <?=htmlspecialchars($chat["texto"]) ?>

                                <small class="d-block">
                                  <?=htmlspecialchars($chat["Tiempo"])?>
                                </small>

                                </p>

                                <?php }else{?>
                                  <p class="ltext border rounded p-2 mb-1">
                              
                              <?=htmlspecialchars($chat["texto"]) ?>
                                    <small class="d-block">
                                    <?=htmlspecialchars($chat["Tiempo"])?>
                                    </small>
                                    </p>

                                <?php } 
                                }
                                
                                
                                
                                ?>
                              
                            



                          <?php }else{ ?>

                            <div class="alert alert-info">No hay mensajes aún</div>


                          <?php } ?>
                        
                        </div>
                        <form action="" class="typing-area" method="post">
                        <div class="input-group mb-3">
                          <textarea cols="3"
                                    name="message"
                                    class="form-control"></textarea>
                                    <button class="w-100 btn btn-lg btn-dark" type="submit" name="enviar"><i class="fa-regular fa-paper-plane"></i></button>
                        
                        </div>
                        </form>
                        <?php
                          if(isset($_POST['enviar']))
                          {
                            $mensaje=$_POST['message'];

                            $sql="INSERT INTO chat(mensajero, receptor, texto) VALUES (?,?,?)";
                            $stmt = $conect->getCon()->stmt_init();
                            if( ! $stmt->prepare($sql)){
                                die("SQL error: ". $conect->getCon()->errno);
                                }
                            
                                    $stmt->bind_param("sss",
                                    $user["nombre"],
                                    $ChatCon["nombre"],
                                    $mensaje
                                    );
                                    
    
                                    
                                    if($stmt->execute()){
                                        echo'<div class="alert alert-info">¡Tu mensaje se ha enviado!</div>';
                                        
                                        
                                        
                        
                                }
                       

                          }
                       
                        ?>
                   
                      </section>
                    </div>

          




        </div>

        </div>


        </div>
        
    </div>






                <script>
                  var scrollDown = function(){

                    let chatBox = document.getElementById('chatBox');
                    chatBox.scrollTop = chatBox.scrollHeight;
                  }           
                  scrollDown();
                  
                  $(document).ready(function(){

                    $("#sendBtn").on('click', function(){
                      message=$("#message").val();
                      if(message == "") {
                        return;
                      }

                      $.post("app/insert.php", {
                        message:message,
                        receptor:<?=$ChatCon['id']?>
                      },
                      function(data,status){
                          $("#message").val("");
                          $("#chatBox").append(data);
                          scrollDown();
                      }
                      
                      
                      );

                    });
                  });


            </script>








            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <!--Jquery -->

        <script>
            $("sidebar ul li").on('click' , function(){ 
                $("sidebar ul li.active").removeClass('active');
                $(this).addClass('active');
            })
              
            

        </script>
    </body>
</html>